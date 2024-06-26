<?php
namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\CategoryProduct;
use App\Services\CartService;
use App\Services\CategoryService;
use App\Services\ProductService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Session;

class CategoryController extends Controller
{
    public function __construct()
    {

    }

    public function index(Request $request, $urlCat)
    {
        $cartService = new CartService;
        $categoryService = new CategoryService;
        $productService = new ProductService;

        $listCategories = $categoryService->listCategory(false, true);
        $listCategoriesCount = $categoryService->listCategoryHaveCountProduct();
        if ($urlCat != 'all') {
            $detailCategory = $categoryService->getCategory($urlCat);
            $productCategory = $productService->getProductByCategory($detailCategory->id_cat_product);
        } else {
            $detailCategory = new CategoryProduct();
            $productCategory = $productService->getAllProduct(true);
        }

        $notFound = true;
        if ($productCategory == null) {
            $notFound = false;
        }

        $title = $detailCategory->name_cat . config('type.main');

        $arrayCart = $request->session()->get('arrayCart');
        $total = $cartService->getTotal($request, $arrayCart);
        $totalQuantity = $request->session()->get('totalQuantity');

        return view('main.pages.category', [
            'title' => $title,
            'keyword' => null,
            'listCategories' => $listCategories,
            'listCategoriesCount' => $listCategoriesCount,
            'detailCategory' => $detailCategory,
            'productCategory' => $productCategory,
            'notFound' => $notFound,
            'arrayCart' => $arrayCart,
            'total' => $total,
            'totalQuantity' => $totalQuantity,
        ]);
    }

    public function search(Request $request)
    {
        $cartService = new CartService;
        $categoryService = new CategoryService;
        $productService = new ProductService;

        $title = 'Tìm kiếm' . config('type.main');

        $listCategories = $categoryService->listCategory(false, true);
        $listCategoriesCount = $categoryService->listCategoryHaveCountProduct();

        $price = $request->price;
        $minPrice = 0;
        $maxPrice = 0;
        if ($price == "price-2") {
            $maxPrice = 100000;
        } else if ($price == "price-3") {
            $minPrice = 100001;
            $maxPrice = 200000;
        } else if ($price == "price-4") {
            $minPrice = 200001;
            $maxPrice = 300000;
        } else if ($price == "price-5") {
            $minPrice = 200001;
            $maxPrice = 300000;
        } else {
            $maxPrice = 999999999;
        }

        $arrIdCat[] = $request->idCat;
        $filter = [
            'keyword' => $request->keyword,
            'minPrice' => $minPrice,
            'maxPrice' => $maxPrice,
            'idCat' => $arrIdCat,
        ];
        if ($request->minPrice == null) {
            $filter['minPrice'] = 0;
        };

        $searchProduct = $productService->searchProduct($filter);
        $notFound = true;
        if ($searchProduct == null) {
            $notFound = false;
        }

        $arrayCart = $request->session()->get('arrayCart');
        $total = $cartService->getTotal($request, $arrayCart);
        $totalQuantity = $request->session()->get('totalQuantity');

        return view('main.pages.category-search', [
            'title' => $title,
            'keyword' => $filter['keyword'],
            'minPrice' => $filter['minPrice'],
            'maxPrice' => $filter['maxPrice'],
            'listCategories' => $listCategories,
            'listCategoriesCount' => $listCategoriesCount,
            'searchProduct' => $searchProduct,
            'notFound' => $notFound,
            'arrayCart' => $arrayCart,
            'total' => $total,
            'totalQuantity' => $totalQuantity,
        ]);
    }
}
