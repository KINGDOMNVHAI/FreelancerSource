<?php

namespace App\Http\Controllers\FEFood;

use App\Http\Controllers\Controller;
use App\Services\all\IntroduceService;
use App\Services\all\PostService;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        // Public Services
        $post     = new PostService;
        $viewListPost = $post->listPostHavePaginate(0,6);

        $introduce    = new IntroduceService;
        $viewIntroduce = $introduce->detailIntroduce('vinaseed-cung-cap-giai-phap-ben-vung');

        return view('FEFood.pages.home', [
            'title'     => TITLE_FRONTEND_INDEX,

            'intro1' => $viewIntroduce,
            'listpost'  => $viewListPost,
        ]);
    }

    public function about()
    {
        return view('FEFood.pages.about', [
            'title' => TITLE_FRONTEND_INDEX,
        ]);
    }

    public function contact()
    {
        return view('FEFood.pages.contact', [
            'title' => TITLE_FRONTEND_INDEX,
        ]);
    }
}
