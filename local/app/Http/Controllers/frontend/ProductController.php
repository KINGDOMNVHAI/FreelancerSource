<?php
namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Services\CartService;
use App\Services\CategoryService;
use App\Services\ProductService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Session;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->title = " | Nhà thuốc ";
    }

    public function listProductCategory(Request $request, $urlCat)
    {
        $cartService = new CartService;
        $categoryService = new CategoryService;
        $productService = new ProductService;

        $listCategories = $categoryService->listCategory(false, true);
        // $productNewest = $productService->getListNewestPost(NEWEST_HOME_POSTS, null, true, $this->language);
        // $productUpdate = $productService->getListUpdatedPost(UPDATED_HOME_POSTS, null, $this->language);
        // $productRandom = $productService->getListRandomPost(RECENT_HOME_POSTS, $this->language);

        $arrayCart = $request->session()->get('arrayCart');
        $total = $cartService->getTotal($request, $arrayCart);

        return view('main.pages.category', [
            'title'          => $title ,
            'categories'     => $this->viewCategories,
            'listCategories' => $listCategories,
            'arrayCart'      => $arrayCart,
            'total'          => $total,
        ]);
    }

    public function detailProduct(Request $request, $urlProduct)
    {
        $cartService = new CartService;
        $categoryService = new CategoryService;
        $productService = new ProductService;

        $productInfo = $productService->getProductByURL($urlProduct);

        if ($productInfo == null) {
            return view('main.pages.404', [
            ]);
        }
        $listProductRandom = $productService->getProductRandom(LIMIT_6);

        // Get title from parent class
        $title = $productInfo['name_product'] . $this->title;

        $listCategories = $categoryService->listCategory(false, true);

        $arrayCart = $request->session()->get('arrayCart');
        $total = $cartService->getTotal($request, $arrayCart);

        return view('main.pages.product', [
            'title' => $title,
            'product' => $productInfo,
            'listProductRandom' => $listProductRandom,
            'listCategories' => $listCategories,
            'ogImageProduct' => $productInfo->thumbnail_product,
            'ogDescriptionProduct' => $productInfo->info_product,
            'arrayCart' => $arrayCart,
            'total' => $total,
        ]);
    }
}
