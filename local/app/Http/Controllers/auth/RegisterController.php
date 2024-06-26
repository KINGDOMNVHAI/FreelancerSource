<?php
namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Http\Controllers\Controller;
use App\Services\CartService;
use App\Services\CategoryService;
use App\Services\UserService;
use App\Services\Auth\LoginService;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */

    public function index(Request $request)
    {
        $cartService = new CartService;
        $categoryService = new CategoryService;

        $title = "ĐĂNG KÝ " . config('title.main');
        $request->session()->forget(['message']);

        $arrayCart = $request->session()->get('arrayCart');
        $total = $cartService->getTotal($request, $arrayCart);
        $totalQuantity = $request->session()->get('totalQuantity');

        return view('main.pages.register', [
            'title'         => $title,
            'arrayCart'     => $arrayCart,
            'total'         => $total,
            'totalQuantity' => $totalQuantity,
        ]);
    }

    // First name	Tối thiểu 1 ký tự, tối đa 255 ký tự, không được nhập số, ký tự đặc biệt
    // Last name	Tối thiểu 1 ký tự, tối đa 255 ký tự, không được nhập số, ký tự đặc biệt
    // Username	Tối thiểu 5 ký tự, tối đa 20 ký tự, không được nhập ký tự đặc biệt
    // Password	Tối thiểu 5 ký tự, tối đa 20 ký tự, bắt buộc phải có số, chữ in hoa, chữ in thường
    // Email	Tối đa 50 ký tự

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    public $timestamps = true;

    public function create(Request $request)
    {
        $user = new UserService;

        // Values for variables
        $firstname = $request->firstname;
        $lastname = $request->lastname;
        $username = $request->username;
        $password = $request->password;
        $email = $request->email;
        $city = $request->city;
        $address = $request->address;
        $company = $request->company;
        $facebook = $request->facebook;
        $twitter = $request->twitter;

        $datas = [
            'firstname' => $request->firstname,
            'lastname'  => $request->lastname,
            'username'  => $request->username,
            'password'  => $request->password,
            'email'     => $request->email,
            'city'      => $request->city,
            'address'   => $request->address,
            // 'company'   => $request->company,
            // 'facebook'  => $request->facebook,
            // 'twitter'   => $request->twitter,
        ];

        $rules = [
            'firstname' => 'required|string|min:1|max:255',
            'lastname'  => 'required|string|min:1|max:255',
            'username'  => 'required|string|min:5|max:20|unique:users',
            'password'  => 'required|string|min:5|max:20',
            'email'     => 'required|string|email|max:50|unique:users',
        ];

        // Họ và Tên: tối thiểu 1 ký tự, tối đa 255 ký tự, không được nhập số, ký tự đặc biệt
        // username: tối thiểu 5 ký tự, tối đa 20 ký tự, không được nhập ký tự đặc biệt
        // password: tối thiểu 5 ký tự, tối đa 20 ký tự, bắt buộc phải có số, chữ in hoa, chữ in thường
        // email: Tối đa 50 ký tự

        $messages = [
            'firstname.required' => 'Bạn chưa nhập tên',
            'firstname.min' => 'Tên ít nhất phải có 1 ký tự',
            'lastname.required' => 'Bạn chưa nhập họ',
            'username.required' => 'Bạn chưa nhập tên đăng nhập',
            'username.min' => 'Tên đăng nhập phải có 5 ký tự',
            'password.required' => 'Bạn chưa nhập mật khẩu',
            'password.min' => 'Mật khẩu phải có 5 ký tự',
            'email.required' => 'Bạn chưa nhập email',
            'email.unique' => 'Email đã tồn tại',
        ];

        $validator = Validator::make($datas, $rules, $messages);

        if ($validator->fails()) {
            return redirect('register')
                        ->withErrors($validator)
                        ->withInput();
        }

        //check email
        $checkUsername = $user->checkUserByUsername($username);

        if ($checkUsername != null) {
            return redirect()->route('register')->with('messageRegister', 'Username đã tồn tại');
        }
        $checkEmail = $user->checkUserByEmail($email);
        if ($checkEmail != null) {
            return redirect()->route('register')->with('messageRegister', 'Email đã tồn tại');
        }

        User::insert([
            'firstname' => $firstname,
            'lastname'  => $lastname,
            'username'  => $username,
            'password'  => md5($password),
            'email'     => $email,
            'role'      => ROLE_MEMBER,
            'city'      => $city,
            'address'   => $address,
            // 'company'   => $company,
            // 'facebook'  => $facebook,
            // 'twitter'   => $twitter,
        ]);

        // After insert, back to previous page
        return redirect('/login')->with('message', 'Đăng ký thành công');
    }

    public function registerGoogle()
    {
        $imageUser = $_GET['image'];
        $emailUser = $_GET['email'];

        // Username and password is email
        // nvhai@gmail.com => username password is nvhai
        $arr = explode("@", $emailUser, 2);
        $username = $arr[0];
        $password = $arr[0];

        $register = new LoginService;
        $registerGoogle = $register->registerGoogle($username, $password, $emailUser);

        // var_dump($imageUser);
        // var_dump($emailUser);

        // echo $imageUser;
        echo $emailUser;
        echo $username;

        // die;

        return redirect('thank-you-register');
    }

    public function registerThankYou()
    {
        return view('main.pages.thankyou');
    }
}
