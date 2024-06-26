<?php
namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\CategoryProduct;
use App\Models\Products;
use App\Services\AuthorService;
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

    public function index(Request $request)
    {
        if (Auth::check())
        {
            $request = Request::capture();
            $categoryService = new CategoryService;
            $productService = new ProductService;

            $listCategories = $categoryService->listCategory(false, true);
            $listCategoriesCount = $categoryService->listCategoryHaveCountProduct();

            $arrIdCat[] = $request->idCat;
            $filter = [
                'keyword' => $request->keyword,
                'minPrice' => $request->minPrice,
                'maxPrice' => $request->maxPrice,
                // 'idCat' => $arrIdCat,
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

    public function productInsert()
    {
        $authorService = new AuthorService;
        $categoryService = new CategoryService;
        $productService = new ProductService;
        if (Auth::check())
        {
            $model = new Products();
            $listcat = $categoryService->listCategory(false, true);
            $listAuthor = $authorService->listAuthor(false, true);

            return view('admin.pages.product-insert', [
                'model'  => $model,
                'listAuthor'  => $listAuthor,
                'listcat'  => $listcat,
            ]);
        }
        else {
            return redirect()->route('login');
        }
    }

    public function productUpdate($idProduct)
    {
        $authorService = new AuthorService;
        $categoryService = new CategoryService;
        if (Auth::check())
        {
            $model = Products::find($idProduct);
            $listcat = $categoryService->listCategory(false, true);
            $listAuthor = $authorService->listAuthor(false, true);

            return view('admin.pages.product-insert', [
                'model'  => $model,
                'listAuthor'  => $listAuthor,
                'listcat'  => $listcat,
            ]);
        }
        else {
            return redirect()->route('login');
        }
    }

    public function productInsertUpdate($idProduct, Request $request)
    {
        $categoryService = new CategoryService;
        $productService = new ProductService;

        if (Auth::check())
        {
            $model = Products::find($idProduct);

            // Show all category, except selected category
            $listcat = $categoryService->listCategory(false, true);

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

    public function productDelete($id)
    {
        $productService = new ProductService();
        if (Auth::check())
        {
            $productService->productChangeStatus($id, false);
            return redirect()->route('product-index');
        }
        else {
            return redirect()->route('login');
        }
    }
}
