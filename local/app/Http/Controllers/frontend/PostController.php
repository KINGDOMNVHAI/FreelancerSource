<?php
namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Services\CartService;
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

    public function blog(Request $request, $idCat)
    {
        $cartService = new CartService;
        $categoryService = new CategoryService;
        $postService = new PostService;

        $title = 'Bài viết' . config('type.main');

        $listCategories = $categoryService->listCategory(false, true);

        $listPost = $postService->getListPost(config('limit.6'), false);
        $listRandomPost = $postService->getListRandomPost(config('limit.6'), false);

        $arrayCart = $request->session()->get('arrayCart');
        $total = $cartService->getTotal($request, $arrayCart);
        $totalQuantity = $request->session()->get('totalQuantity');

        return view('main.pages.blog', [
            'title' => $title ,
            'listCategories' => $listCategories,
            'listPost' => $listPost,
            'listRandomPost' => $listRandomPost,
            'arrayCart' => $arrayCart,
            'total' => $total,
            'totalQuantity' => $totalQuantity,
        ]);
    }

    public function post(Request $request, $urlPost)
    {
        $cartService = new CartService;
        $categoryService = new CategoryService;
        $postService = new PostService;

        $listCategories = $categoryService->listCategory(false, true);

        $post = $postService->detail($urlPost);
        $listPost = $postService->getListRandomPost(config('limit.6'), true);

        $title = $post->name_post . config('type.main');

        $arrayCart = $request->session()->get('arrayCart');
        $total = $cartService->getTotal($request, $arrayCart);
        $totalQuantity = $request->session()->get('totalQuantity');

        return view('main.pages.post', [
            'title' => $title ,
            'listCategories' => $listCategories,
            'listPost' => $listPost,
            'post' => $post,
            'ogImagePost' => $post->thumbnail_post,
            'ogDescriptionPost' => $post->present_post,
            'arrayCart' => $arrayCart,
            'total' => $total,
            'totalQuantity' => $totalQuantity,
        ]);
    }
}
