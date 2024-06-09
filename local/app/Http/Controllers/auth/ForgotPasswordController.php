<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Services\Mail\ForgotPasswordEmail;
use App\Mail\InforUserEmail;
use App\Services\CartService;
use App\Services\CategoryService;
use App\Services\UserService;
use DB;
use File;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailable;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Response;

class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function index(Request $request)
    {
        $cartService = new CartService;
        $categoryService = new CategoryService;

        $title = "Forgot Password " . config('title.forgot-password');

        $arrayCart = $request->session()->get('arrayCart');
        $total = $cartService->getTotal($request, $arrayCart);
        $totalQuantity = $request->session()->get('totalQuantity');

        return view('main.pages.forgot-password', [
            'title'         => $title,
            'arrayCart'     => $arrayCart,
            'total'         => $total,
            'totalQuantity' => $totalQuantity,
        ]);
    }

    public function sendcode(Request $request)
    {
        $to_email = $request->email; // Tới email mà người dùng đăng ký

        // Check email
        if ($to_email != null)
        {
            //check email
            $user = new UserService;
            $query = $user->checkUserByEmail($to_email);

            // if they exist
            if ($query != null)
            {
                $newpassword = 'ABCXYZ1234'; //mật khẩu mới
                $firstname_query = $query->firstname;
                $lastname_query = $query->lastname;
                $fullname_query = $firstname_query . " " . $lastname_query;

                $email = $user->changePasswordById($query->id, $newpassword); //lấy id của email người dùng và password mới
                Mail::to($to_email)->send(new ForgotPasswordEmail($fullname_query, $newpassword)); // nhận password mới

                $request->session()->put('message', config('email.sent'));
                return redirect()->route('login')->with('message', __(config('email.sent'))); //trả về name của router kèm theo thông tin trả về
            }
            else
            {
                return redirect('forgot-password')->with('message', 'Email không tồn tại');
            }
        }
        else
        {
            return redirect('forgot-password')->with('message', 'Bạn chưa nhập email');
        }
    }

    // Gửi code theo dạng download file txt

    public function downloadcode(Request $request)
    {
        $username   = $request->input('username');
        $email      = $request->input('email');

        // Check username
        if ($username != null)
        {
            // Check email
            if ($email != null)
            {
                // Function File:: need destination, fileName and data
                $fileName = time() . '_datafile.txt';
                $destinationPath = public_path('upload\txt'.$fileName);
                File::put($destinationPath,$email);

                // Download file
                return Response::download($destinationPath, $fileName);
                return redirect('/forgot-password')->with('message', 'Mã xác nhận đã được gửi. Vui lòng kiểm tra email để xác nhận');
            }
            else
            {
                return redirect('/forgot-password')->with('message', 'Bạn chưa nhập email');
            }
        }
        else
        {
            return redirect('/forgot-password')->with('message', 'Bạn chưa nhập tên đăng nhập');
        }
    }
}
