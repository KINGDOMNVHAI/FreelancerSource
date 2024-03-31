<?php
namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Services\CategoryService;
use App\Services\PostService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Session;

class PostController extends Controller
{
    public function __construct()
    {
        $this->title = " | Nhà thuốc ";
    }

    public function blog($idCat)
    {
        $title = 'Bài viết' . config('type.main');
        $categoryService = new CategoryService;

        $listCategories = $categoryService->listCategory(true);

        $postService = new PostService;
        $listPost = $postService->getListPost(config('limit.6'), false);
        $listRandomPost = $postService->getListRandomPost(config('limit.6'), false);

        return view('main.pages.blog', [
            'title' => $title ,
            'listCategories' => $listCategories,
            'listPost' => $listPost,
            'listRandomPost' => $listRandomPost,
        ]);
    }

    public function post($urlPost)
    {
        $categoryService = new CategoryService;
        $postService = new PostService;

        $listCategories = $categoryService->listCategory(true);

        $post = $postService->detail($urlPost);
        $listPost = $postService->getListRandomPost(config('limit.6'), true);

        $title = $post->name_post . config('type.main');

        return view('main.pages.post', [
            'title' => $title ,
            'listCategories' => $listCategories,
            'listPost' => $listPost,
            'post' => $post,
            'ogImagePost' => $post->thumbnail_post,
            'ogDescriptionPost' => $post->present_post,
        ]);
    }
}
