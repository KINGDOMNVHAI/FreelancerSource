<?php
namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Services\CategoryService;
use App\Services\BookingService;
use App\Services\UserService;
use App\Services\Admin\Post\UpdatePostService;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    public function index()
    {
        if (Auth::check())
        {
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

            $bookingService = new BookingService;
            $listBooking = $bookingService->getListBookingPaginate();

            // $listCategory = new CategoryService;
            // $viewCategory = $listCategory->listCategory(true);

            //Str::limit('The quick brown fox jumps over the lazy dog', 20, ' (...)');
            //https://laravel.com/docs/8.x/helpers#method-str-limit

            return view('admin.pages.booking-list', [
                'title'         => config('title.post-management'),
                'currentyear'   => date("Y"),
                'listBooking'   => $listBooking,
            ]);
        }
        else {
            return redirect()->route('login');
        }
    }

    public function detail($idBooking)
    {
        if (Auth::check())
        {
            $bookingService = new BookingService;
            $viewBooking = $bookingService->getBooking($idBooking);
            $listBookingDetail = $bookingService->getBookingDetail($idBooking);
            return view('admin.pages.booking-detail', [
                'title'             => config('title.booking-detail'),
                'currentyear'       => date("Y"),
                'booking'           => $viewBooking,
                'listBookingDetail' => $listBookingDetail,
            ]);
        }
        else {
            return redirect()->route('login');
        }
    }
}
