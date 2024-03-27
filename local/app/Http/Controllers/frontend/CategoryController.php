<?php
namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
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

    public function index($urlCat)
    {
        $categoryService = new CategoryService();
        $listCategories = $categoryService->listCategory(true);
        $listCategoriesCount = $categoryService->listCategoryHaveCountProduct();
        $detailCategory = $categoryService->getCategory($urlCat);

        $productService = new ProductService();
        $productCategory = $productService->getProductByCategory($detailCategory->id_cat);

        $title = $detailCategory->name_cat . config('type.main');

        return view('main.pages.category', [
            'title' => $title,
            'listCategories' => $listCategories,
            'listCategoriesCount' => $listCategoriesCount,
            'detailCategory' => $detailCategory,
            'productCategory' => $productCategory,
        ]);
    }

    public function search(Request $request)
    {
        $categoryService = new CategoryService();
        $listCategories = $categoryService->listCategory(true);
        $listCategoriesCount = $categoryService->listCategoryHaveCountProduct();

        $arrIdCat[] = $request->idCat;
        $filter = [
            'keyword' => $request->keyword,
            'minPrice' => $request->minPrice,
            'maxPrice' => $request->maxPrice,
            'idCat' => $arrIdCat,
        ];
        if ($request->minPrice == null) {
            $filter['minPrice'] = 0;
        };

        $productService = new ProductService();
        $searchProduct = $productService->searchProduct($filter);

        $title = 'Tìm kiếm' . config('type.main');

        return view('main.pages.category-search', [
            'title' => $title,
            'keyword' => $filter['keyword'],
            'minPrice' => $filter['minPrice'],
            'maxPrice' => $filter['maxPrice'],
            'listCategories' => $listCategories,
            'listCategoriesCount' => $listCategoriesCount,
            'searchProduct' => $searchProduct,
        ]);
    }
}
