<?php
namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
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

    public function index()
    {
        $title = "Hiệu sách";
        $categoryService = new CategoryService;
        $productService = new ProductService;
        $postService = new PostService;

        $listCategories = $categoryService->listCategory(true);
        $listCategoriesCount = $categoryService->listCategoryHaveCountProduct();

        $listProduct = $productService->getProductPopular();

        $listPost = $postService->getListPost(config('limit.12'), true);

        return view('main.pages.home', [
            'title' => $title,
            'listCategories' => $listCategories,
            'listCategoriesCount' => $listCategoriesCount,
            'listPost' => $listPost,
            'listProduct' => $listProduct,
        ]);
    }

    public function contact()
    {
        $title = "Liên hệ " . config('type.main');
        $categoryService = new CategoryService;

        $listCategories = $categoryService->listCategory(true);

        return view('main.pages.contact', [
            'title' => $title,
            'listCategories' => $listCategories,
        ]);
    }
}
