<?php
namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\All\VideoService;
use App\Services\Admin\DashboardService;
use Illuminate\Support\Facades\Auth;
use App\Services\PostService;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware("auth");
    }

    public function index()
    {
        if (Auth::check())
        {
            $title = config('title.dashboard');

            // $postService = new PostService;
            // $viewNewest = $postService->getListPost(config('limit.6'), false);

            $dashboardService = new DashboardService;
            $viewCategories    = $dashboardService->analyticsProduct();

            return view('admin.pages.dashboard', [
                'title'         => $title,
                'categories'    => $viewCategories,
                // 'newest'        => $viewNewest,
            ]);
        }
        else {
            return redirect()->route('login');
        }
    }
}
