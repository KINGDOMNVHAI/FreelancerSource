<?php
namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Services\CartService;
use App\Services\CategoryService;
use App\Services\PostService;
use App\Services\ProductService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Session;

class HomeController extends Controller
{
    public function __construct()
    {

    }

    public function locale($locale)
    {
        // Session::set('locale', $locale);
        // $request->session->set('locale', $locale);

        if (! in_array($locale, ['en','vi'])) {
            abort(400);
        }
        App::setLocale($locale);
        session()->put('locale', $locale);

        // return redirect()->back();
        return redirect()->route('main-home');
    }

    public function index(Request $request)
    {
        $cartService = new CartService;
        $categoryService = new CategoryService;
        $productService = new ProductService;
        $postService = new PostService;

        $title = "Hiệu sách";

        $listCategories = $categoryService->listCategory(true);
        $listCategoriesCount = $categoryService->listCategoryHaveCountProduct();

        $listProduct = $productService->getProductPopular();

        $listPost = $postService->getListPost(config('limit.12'), true);

        $arrayCart = $request->session()->get('arrayCart');
        $total = $cartService->getTotal($request, $arrayCart);

        return view('main.pages.home', [
            'title' => $title,
            'listCategories' => $listCategories,
            'listCategoriesCount' => $listCategoriesCount,
            'listPost' => $listPost,
            'listProduct' => $listProduct,
            'arrayCart' => $arrayCart,
            'total' => $total,
        ]);
    }

    public function contact(Request $request)
    {
        $cartService = new CartService;
        $categoryService = new CategoryService;

        $title = "Liên hệ " . config('type.main');

        $listCategories = $categoryService->listCategory(true);

        $arrayCart = $request->session()->get('arrayCart');
        $total = $cartService->getTotal($request, $arrayCart);

        return view('main.pages.contact', [
            'title' => $title,
            'listCategories' => $listCategories,
            'arrayCart' => $arrayCart,
            'total' => $total,
        ]);
    }
}
