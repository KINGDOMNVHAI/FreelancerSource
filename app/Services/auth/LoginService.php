<?php
namespace App\Services\auth;

use App\Model\User;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginService extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     *
     *
     * @return void
     */
    public function checkUser($username)
    {
        $query = User::where('username', $username)->first();

        return $query;
    }
}
