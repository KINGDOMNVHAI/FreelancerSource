<?php
namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\categorypost;
use App\Models\posts;
use App\Services\AuthorService;
use App\Services\CategoryService;
use App\Services\PostService;
use App\Services\UserService;
use App\Services\Admin\Post\UpdatePostService;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index()
    {
        if (Auth::check())
        {
            $listCategory = new CategoryService;
            $postService = new PostService;

            // Luôn luôn trong trạng thái lấy data từ các input trong form dù có search hay không
            $request = Request::capture();
            $params = [
                'name_post' => $request->query('name_post'),
                'year' => $request->query('year'),
                'month' => $request->query('month'),
                'newold' => $request->query('newold'),
                'id_cat_post' => $request->query('idCat'),
                'sort' => 'DESC'
            ];

            $viewPost = $postService->getListPostJoinCategoryPaginate($params);

            $viewCategory = $listCategory->listCategory(false, true);

            //Str::limit('The quick brown fox jumps over the lazy dog', 20, ' (...)');
            //https://laravel.com/docs/8.x/helpers#method-str-limit

            return view('admin.pages.post-list', [
                'title'      => config('title.post-management'),
                'currentyear'   => date("Y"),
                'posts'      => $viewPost,
                'categories' => $viewCategory,
            ]);
        }
        else {
            return redirect()->route('login');
        }
    }

    public function postInsertUpdate($id = null, Request $request)
    {
        $postService = new PostService;
        $categoryService = new CategoryService;
        if (Auth::check())
        {
            $model = posts::find($id);

            // Show all category, except selected category
            $listcat = $categoryService->listCategory(false, true);

            // If model is null, this is new post. Create new object
            if ($model == null)
            {
                $model = new posts;
            }

            if ($request->isMethod('POST'))
            {
                $datas = $request->all();
                unset($datas['_token']);

                // If don't click popular and upload
                if (!isset($datas['popular']))
                {
                    $datas['popular'] = 0;
                }
                if (!isset($datas['update']))
                {
                    $datas['update'] = 0;
                }

                $rules = [
                    'name_post'    => 'required',
                    'url_post'     => 'required',
                    'content_post' => 'required',
                    'enable'       => 'required',
                ];

                $messages = [
                    'name_post.required' => 'Name product is required',
                ];

                $validator = \Validator::make($datas, $rules, $messages);

                if ($validator->fails()) {
                    return \Redirect::back()->withInput()->withErrors($validator->errors());
                }

                $viewData = $postService->update($datas, $request, '../upload/images/thumbnail/posts');

                return redirect()->route('post-list');

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

            return view('admin.post.post-insert', compact('listcat','model'));
        }
        else {
            return redirect()->route('login');
        }
    }
}
