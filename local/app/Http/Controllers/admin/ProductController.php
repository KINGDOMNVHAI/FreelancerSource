<?php
namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Products;
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
        $this->title = " | Bookstore ";
    }

    public function index()
    {
        if (Auth::check())
        {
            $request = Request::capture();
            $categoryService = new CategoryService;
            $productService = new ProductService;

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

            $listProduct = $productService->searchProduct($filter);

            return view('admin.pages.product-list', [
                'title'         => config('title.post-management'),
                'currentyear'   => date("Y"),
                'listProduct'   => $listProduct,
            ]);
        }
        else {
            return redirect()->route('login');
        }
    }

    public function productInsertUpdate($id = null, Request $request)
    {
        $categoryService = new CategoryService;
        $productService = new ProductService;

        if (Auth::check())
        {
            $model = Products::find($id);

            // Show all category, except selected category
            $listcat = $categoryService->listCategory(true);

            // If model is null, this is new post. Create new object
            if ($model == null)
            {
                $model = new Products;
            }

            if ($request->isMethod('POST'))
            {
                $datas = $request->all();
                unset($datas['_token']);

                // $rules = [
                //     'name_post'    => 'required',
                //     'url_post'     => 'required',
                //     'content_post' => 'required',
                //     'enable'       => 'required',
                // ];

                // $messages = [
                //     'name_post.required' => 'Name product is required',
                // ];

                // $validator = \Validator::make($datas, $rules, $messages);

                // if ($validator->fails()) {
                //     return \Redirect::back()->withInput()->withErrors($validator->errors());
                // }

                $viewData = $productService->insertUpdate($datas, $request, '../upload/images/thumbnail/products');

                return redirect()->route('product-index');

                // if ($validator->fails()) {
                //     var_dump('<pre>','jha');die;
                //     return \Redirect::back()->withInput()->withErrors($validator->errors());
                // }
                // foreach ($datas as $key => $value) {
                //     $model->{$key} = $value;
                // }
                // try {
                //     return redirect(route('post-index'))->with('success', 'Tạo bài viết mới thành công.');
                // } catch (\Exception $ex) {
                //     return redirect()->back()->withInput()->with('error', $ex->getMessage());
                // }
            }

            return view('admin.pages.product-insert', compact('listcat','model'));
        }
        else {
            return redirect()->route('login');
        }
    }
}
