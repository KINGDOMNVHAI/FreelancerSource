<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Model\User;
use App\Services\auth\LoginService;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        return view('auth.pages.login', [
            'title' => TITLE_FRONTEND_INDEX,
        ]);
    }

    public function register()
    {
        return view('auth.pages.register', [
            'title' => TITLE_FRONTEND_INDEX,
        ]);
    }

    public function checklogin(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');

        if (Auth::attempt(['' => $username, 'password' => $password]))
        {
            return redirect('list-post');
        }
        else
        {
            $checklogin = new LoginService;
            $checkuser = $checklogin->checkUser($username);

            if ($checkuser == '')
            {
                return redirect()->route('login')->with('message', __(USERNAME_IS_NOT_EXIST));
            }
            else
            {
                return redirect()->route('login')->with('message', __(WRONG_PASSWORD));
            }
        }
    }
}
