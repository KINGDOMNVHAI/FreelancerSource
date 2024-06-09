<?php
namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Services\CartService;
use App\Services\CategoryService;
use App\Services\UserService;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use DB;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function locale($locale)
    {
        if (! in_array($locale, ['en','vi'])) {
            abort(400);
        }
        App::setLocale($locale);
        session()->put('locale', $locale);
        return redirect('/');
    }

    public function index(Request $request)
    {
        // Nếu gặp lỗi sau khi đăng nhập, gõ /login trên trình duyệt bị chuyển sang trang /home
        // xem file RouteServiceProvider
        $cartService = new CartService;
        $categoryService = new CategoryService;

        $title = "LOGIN " . config('type.login');

        $arrayCart = $request->session()->get('arrayCart');
        $total = $cartService->getTotal($request, $arrayCart);
        $totalQuantity = $request->session()->get('totalQuantity');

        return view('main.pages.login', [
            'title'         => $title,
            'arrayCart'     => $arrayCart,
            'total'         => $total,
            'totalQuantity' => $totalQuantity,
        ]);
    }

    public function login(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');

        // Cách login bằng md5()
        $checklogin = new UserService;
        $user = $checklogin->login($username, $password);

        // Cách login bằng bcrypt()
        // if (Auth::attempt(['username' => $username, 'password' => $password]))

        if($user != null)
        {
            Auth::login($user);
            return redirect('dashboard');
            // return redirect()->intended('dashboard');
        }
        else
        {
            $checkuser = $checklogin->checkUserByUsername($username);
            // File auth.php
            if ($checkuser == '')
            {
                return redirect()->route('login')->with('message', __('auth.failed.wrong_username'));
            }
            else
            {
                return redirect()->route('login')->with('message', __('auth.failed.wrong_password'));
            }
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('login');
    }
}
