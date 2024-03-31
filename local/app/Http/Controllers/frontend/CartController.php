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

    public function checkout(Request $request)
    {
        $title = "Giỏ hàng" . config('type.main');
        $categoryService = new CategoryService;

        $listCategories = $categoryService->listCategory(true);

        $arrayCart = $request->session()->get('arrayCart');
        $total = $request->session()->get('total');
        if ($total == null) {
            $total = 0;
            if ($arrayCart != null && count($arrayCart) > 0) {
                foreach($arrayCart as $cart) {
                    $total = $total + $cart['price_product'] * $cart['quantity'];
                }
            }
        }

        return view('main.pages.cart-checkout', [
            'title' => $title,
            'listCategories' => $listCategories,
            'arrayCart' => $arrayCart,
            'total' => $total,
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

        $listCategories = $categoryService->listCategory(true);

        $infoBooking = $bookingService->getBooking($request->session()->get('idBooking'));
        $listProduct = $bookingService->getBookingDetail($request->session()->get('idBooking'));

        return view('main.pages.cart-completed', [
            'title' => $title,
            'success' => config('email.sent'),
            'listCategories' => $listCategories,
            'infoBooking' => $infoBooking,
            'listProduct' => $listProduct,
        ]);
    }
}
