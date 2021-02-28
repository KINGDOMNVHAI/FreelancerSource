<?php

namespace App\Http\Controllers\FEFood;

use App\Http\Controllers\Controller;
use App\Services\all\ListPostService;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        // Public Services
        $listpost     = new ListPostService;
        $viewListPost = $listpost->listpost();

        return view('FEFood.pages.home', [
            'title'     => TITLE_FRONTEND_INDEX,

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
