<?php
namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\CategoryProduct;
use App\Services\CategoryService;
use App\Services\PostService;
use App\Services\UserService;
use App\Services\Admin\Post\UpdatePostService;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    public function index()
    {
        if (Auth::check())
        {
            // Luôn luôn trong trạng thái lấy data từ các input trong form dù có search hay không
            $request = Request::capture();
            $filter = [
                'keyword' => $request->query('keyword'),
                'enable' => ENABLE,
            ];

            $categoryService = new CategoryService;
            $viewCategory = $categoryService->searchCategory($filter);

            //Str::limit('The quick brown fox jumps over the lazy dog', 20, ' (...)');
            //https://laravel.com/docs/8.x/helpers#method-str-limit

            return view('admin.pages.category-list', [
                'title'      => config('title.post-management'),
                'currentyear' => date("Y"),
                'categories' => $viewCategory,
            ]);
        }
        else {
            return redirect()->route('login');
        }
    }

    public function listDeteled()
    {
        if (Auth::check())
        {
            // Luôn luôn trong trạng thái lấy data từ các input trong form dù có search hay không
            $request = Request::capture();
            $filter = [
                'keyword' => $request->query('keyword'),
                'enable' => UNENABLE,
            ];

            $listCategory = new CategoryService;
            $viewCategory = $listCategory->searchCategory($filter);

            return view('admin.pages.category-list', [
                'title'      => config('title.post-management'),
                'currentyear' => date("Y"),
                'categories' => $viewCategory,
            ]);
        }
        else {
            return redirect()->route('login');
        }
    }

    public function categoryInsert()
    {
        $categoryService = new CategoryService;
        if (Auth::check())
        {
            $model = new CategoryProduct;
            $listcat = $categoryService->listCategory(false, true);
            return view('admin.pages.category-insert', [
                'model'   => $model,
                'listcat' => $listcat
            ]);
        }
        else {
            return redirect()->route('login');
        }
    }

    public function categoryUpdate($idCat)
    {
        $categoryService = new CategoryService;
        if (Auth::check())
        {
            $model = CategoryProduct::find($idCat);
            $listcat = $categoryService->listCategory(false, true);
            return view('admin.pages.category-insert', [
                'model'   => $model,
                'listcat' => $listcat
            ]);
        }
        else {
            return redirect()->route('login');
        }
    }

    public function categoryInsertUpdate(string $idCat = null, Request $request)
    {
        $categoryService = new CategoryService;
        if (Auth::check())
        {
            $model = CategoryProduct::find($idCat);

            // If model is null, this is new post. Create new object
            if ($model == null)
            {
                $model = new CategoryProduct;
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

                $viewData = $categoryService->insertUpdate($datas, $request, '../upload/images/thumbnail/categories');

                return redirect()->route('category-index');

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

            return view('admin.pages.category-insert', compact('model'));
        }
        else {
            return redirect()->route('login');
        }
    }

    public function categoryDelete($idCat)
    {
        $categoryService = new CategoryService();
        if (Auth::check())
        {
            $categoryService->changeEnable($idCat, false);
            $viewCategory = $categoryService->listCategory(true, true);

            return redirect()->route('category-index', [
                'title'       => config('title.post-management'),
                'currentyear' => date("Y"),
                'categories'  => $viewCategory
            ]);
        }
        else {
            return redirect()->route('login');
        }
    }

    public function categoryReturn($idCat)
    {
        $categoryService = new CategoryService();
        if (Auth::check())
        {
            $categoryService->changeEnable($idCat, true);
            $viewCategory = $categoryService->listCategory(true, false);

            return redirect()->route('category-list-deteled', [
                'title'       => config('title.post-management'),
                'currentyear' => date("Y"),
                'categories'  => $viewCategory
            ]);
        }
        else {
            return redirect()->route('login');
        }
    }
}
