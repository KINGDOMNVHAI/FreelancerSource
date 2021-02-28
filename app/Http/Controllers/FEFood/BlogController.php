<?php

namespace App\Http\Controllers\FEFood;

use App\Http\Controllers\Controller;
use App\Services\all\PostService;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    public function blog()
    {
        // Public Services
        $listpost     = new PostService;
        $viewListPost = $listpost->listPostHavePaginate(12,0);

        return view('FEFood.pages.blog', [
            'title'     => TITLE_FRONTEND_INDEX,

            'listpost'  => $viewListPost,
        ]);
    }

    public function post($urlPost)
    {
        // Public Services
        $detailpost     = new PostService;
        $viewDetailPost = $detailpost->detailPost($urlPost);

        return view('FEFood.pages.post', [
            'title'      => TITLE_FRONTEND_INDEX,

            'detailpost' => $viewDetailPost,
        ]);
    }
}
