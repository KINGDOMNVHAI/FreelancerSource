<?php
namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Services\BookingService;
use App\Services\CartService;
use App\Services\CategoryService;
use App\Services\EmailService;
use App\Services\PostService;
use App\Services\ProductService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Session;

class CartController extends Controller
{
    public function __construct()
    {

    }

    public function add(Request $request, $idProduct, $quantity)
    {
        $cartService = new CartService;
        $productService = new ProductService;

        if ($quantity == null) {
            $quantity = 1;
        }

        // $request->session()->forget('arrayCart');
        // sau khi đăng nhập, dùng để tìm ra product
        $request->session()->put('id', $idProduct);
        // $request->session()->put('quantity', $quantity);

        $product = $productService->getProductByID($idProduct);

        if ($product != null) {
            $cart = $cartService->setProductToCart($request, $product, $quantity);
        }

        return redirect()->route('cart-checkout');
    }

    public function removeItem(Request $request, $idProduct)
    {
        $cartService = new CartService;
        $productService = new ProductService;

        $newArrayCart = [];
        $arrayCart = $request->session()->get('arrayCart');
        for ($i=0;$i < count($arrayCart);$i++) {
            if ($arrayCart[$i]["id_product"] != $idProduct) {
                array_push($newArrayCart, $arrayCart[$i]);
            }
        }

        if ($arrayCart == []) {
            $request->session()->put('arrayCart', []);
            $request->session()->put('total', 0);
            $request->session()->put('totalQuantity', 0);
        } else {
            $cartService->calCart($request, $idProduct, $newArrayCart);
        }

        return redirect()->route('cart-checkout');
    }

    public function changeQtyCart(Request $request, $idProduct, $quantity)
    {
        $cartService = new CartService;
        $productService = new ProductService;

        $arrayCart = $request->session()->get('arrayCart');
        for ($i=0;$i < count($arrayCart);$i++) {
            if ($arrayCart[$i]["id_product"] == $idProduct && $arrayCart[$i]["quantity"] != $quantity) {
                $arrayCart[$i]["quantity"] = $quantity;
            }
        }

        $total = $cartService->getTotal($request, $arrayCart);
        $totalQuantity = $request->session()->get('totalQuantity');
        $request->session()->put('arrayCart', $arrayCart);

        return redirect()->route('cart-checkout');
    }

    public function checkout(Request $request)
    {
        $title = "Giỏ hàng" . config('type.main');
        $cartService = new CartService;
        $categoryService = new CategoryService;
        $productService = new ProductService;

        $listProductRandom = $productService->getProductRandom(LIMIT_6);
        $listCategories = $categoryService->listCategory(false, true);

        $arrayCart = $request->session()->get('arrayCart');
        $total = $cartService->getTotal($request, $arrayCart);
        $totalQuantity = $request->session()->get('totalQuantity');

        return view('main.pages.cart-checkout', [
            'title' => $title,
            'listCategories' => $listCategories,
            'listProductRandom' => $listProductRandom,
            'arrayCart' => $arrayCart,
            'total' => $total,
            'totalQuantity' => $totalQuantity,
        ]);
    }

    public function payment(Request $request)
    {
        $bookingService = new BookingService;
        $emailService = new EmailService;

        // Validate
        $datas = $request->all();
        $rules = [
            'fullname'  => 'required',
            // 'phone'     => 'required',
            'email'     => 'required',
            // 'note'      => 'required',
        ];

        $messages = [
            'fullname.required' => 'fullname is required',
            'email.required' => 'Email is required',
        ];

        $validator = \Validator::make($datas, $rules, $messages);

        if ($validator->fails()) {
            return \Redirect::back()->withInput()->withErrors($validator->errors());
        }

        $listProduct = $request->session()->get('arrayCart');

        $idBooking = $bookingService->setBooking($listProduct, $datas);
        if ($idBooking == null) {
            return \Redirect::back()->withInput()->withErrors("Không thể tạo đơn đặt hàng");
        }
        $request->session()->put('idBooking', $idBooking);

        $isSent = $emailService->sendEmailPayment($idBooking);
        if ($isSent) {
            $request->session()->forget(['arrayCart', 'total']);
            return redirect()->route('cart-completed', ['success' => config('email.sent')]);
        }

        $request->session()->forget(['arrayCart', 'total']);
        return redirect()->route('cart-completed');
    }

    public function completed(Request $request)
    {
        $title = "Completed" . config('type.main');
        $bookingService = new BookingService;
        $categoryService = new CategoryService;

        $listCategories = $categoryService->listCategory(false, true);

        $infoBooking = $bookingService->getBooking($request->session()->get('idBooking'));
        $listProduct = $bookingService->getBookingDetail($request->session()->get('idBooking'));

        return view('main.pages.cart-completed', [
            'title' => $title,
            'success' => config('email.sent'),
            'listCategories' => $listCategories,
            'infoBooking' => $infoBooking,
            'listProduct' => $listProduct,
            'arrayCart' => [],
            'total' => 0,
            'totalQuantity' => 0,
        ]);
    }
}
