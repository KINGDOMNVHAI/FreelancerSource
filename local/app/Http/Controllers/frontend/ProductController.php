<?php
namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
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

    public function listProductCategory($urlCat)
    {
        $categoryService = new CategoryService;
        $listCategories = $categoryService->listCategory(true);

        $productService = new ProductService;
        // $productNewest = $productService->getListNewestPost(NEWEST_HOME_POSTS, null, true, $this->language);
        // $productUpdate = $productService->getListUpdatedPost(UPDATED_HOME_POSTS, null, $this->language);
        // $productRandom = $productService->getListRandomPost(RECENT_HOME_POSTS, $this->language);


        return view('main.pages.category', [
            'title'          => $title ,

            // Public Services
            'categories'     => $this->viewCategories,
            'listCategories' => $listCategories,
            // 'updates'        => $productUpdate,
            // 'randoms'        => $productRandom,
            // 'viewTags'       => $this->viewTags,

            // Private Services
            // 'listpost'       => $viewListPost,
        ]);
    }

    public function detailProduct($urlProduct)
    {
        $categoryService = new CategoryService;
        $productService = new ProductService;

        $productInfo = $productService->getProductByURL($urlProduct);

        if ($productInfo == null) {
            return view('main.pages.404', [
            ]);
        }
        $listProductRandom = $productService->getProductRandom(config('limit.6'));

        // Get title from parent class
        $title = $productInfo['name_product'] . $this->title;

        $listCategories = $categoryService->listCategory(true);

        return view('main.pages.product', [
            'title' => $title,
            'product' => $productInfo,
            'listProductRandom' => $listProductRandom,
            'listCategories' => $listCategories,
            'ogImageProduct' => $productInfo->thumbnail_product,
            'ogDescriptionProduct' => $productInfo->info_product,
        ]);
    }
}
