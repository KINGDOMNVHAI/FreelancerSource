<?php
namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Services\BookingService;
use App\Services\CategoryService;
use App\Services\PostService;
use App\Services\ProductService;
use App\Services\Admin\DashboardService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

            $bookingService = new BookingService;
            $categoryService = new CategoryService;
            $dashboardService = new DashboardService;
            $productService = new ProductService;

            $viewCategories = $dashboardService->analyticsProduct();
            $countCategory  = $categoryService->countAllCategories();
            $countProducts  = $productService->countAllProducts();

            // Table booking
            $countBookingNew = $bookingService->countAllBookingByStatus(BOOKING_STATUS_NEW);
            $countBookingProcessing = $bookingService->countAllBookingByStatus(BOOKING_STATUS_PROCESSING);
            $countBookingDone = $bookingService->countAllBookingByStatus(BOOKING_STATUS_DONE);
            $countBookingCancel = $bookingService->countAllBookingByStatus(BOOKING_STATUS_CANCELLED);

            return view('admin.pages.dashboard', [
                'title'         => $title,
                'categories'    => $viewCategories,
                'countCategory' => $countCategory,
                'countProducts' => $countProducts,

                'countBookingNew' => $countBookingNew,
                'countBookingProcessing' => $countBookingProcessing,
                'countBookingDone' => $countBookingDone,
                'countBookingCancel' => $countBookingCancel,
            ]);
        }
        else {
            return redirect()->route('login');
        }
    }
}
