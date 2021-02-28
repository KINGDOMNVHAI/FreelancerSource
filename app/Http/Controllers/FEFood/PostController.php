<?php

namespace App\Http\Controllers\FEFood;

use App\Http\Controllers\Controller;
use App\Services\all\ListPostService;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function blog()
    {
        // Public Services
        $listpost     = new ListPostService;
        $viewListPost = $listpost->listpost();

        return view('FEFood.pages.blog', [
            'title'     => TITLE_FRONTEND_INDEX,

            'listpost'  => $viewListPost,
        ]);
    }

    public function post($urlPost)
    {
        // Public Services
        $detailpost     = new ListPostService;
        $viewDetailPost = $detailpost->detailpost($urlPost);

        return view('FEFood.pages.post', [
            'title'      => TITLE_FRONTEND_INDEX,

            'detailpost' => $viewDetailPost,
        ]);
    }
}
