<?php
namespace App\Services;

use App\Models\User;
use DB;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserService extends ServiceProvider
{
    /**
     * Tất cả SQL liên quan đến users
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Check user by username
     */
    public function checkUserByUsername($username)
    {
        return User::where('username', $username)->first();
    }

    public function checkUserBySession($fields)
    {
        return User::where('id', Auth::user()->id)->select($fields)->first();
    }

    /**
     * Login for MD5
     */
    public function login($username, $password)
    {
        return User::where('username', $username)
            ->where('password',md5($password))
            ->first();
    }

    /**
     * Check user by id
     */
    public function checkUserById($id)
    {
        return User::where('id', $id)->first();
    }

    /**
     * Check user by email
     */
    public function checkUserByEmail($email)
    {
        return User::where('email', $email)->first();
    }

    /**
     * Get list account is user
     */
    public function getListAccountByRoleHavePaginate($role, $limit = 0)
    {
        $query = User::where('role', $role)->get();
        if ($role > 0) {
            $query = $query->paginate($limit);
        }

        $query = $query->get();
        return $query;
    }

    public function changePasswordById($id, $password)
    {
        $query = DB::table('users')
            ->where('id', '=', $id)
            ->update([
                'password' => md5($password),
            ]);

        return $query;
    }

    /**
     * Update Profile User
     *
     * @return void
     */
    public function updateProfile($request)
    {
        // File name mặc định không có tên
        $fileNameAvatar = $fileNameBanner = '';

        // Xem tất cả thuộc tính của file
        $input = $request->all();

        //Kiểm tra input có lựa chọn file nào để upload chưa
        if ($request->hasFile('avatar'))
        {
            $file = $request->file('avatar'); // Lấy file từ form
            $input['file'] = $file->getClientOriginalName(); // Tên file
            $file->move(base_path('..\upload\images\avatar'),$file->getClientOriginalName()); // Di chuyển file đến root base_path()
            $fileNameAvatar = $input['file'];
        } else {
            $fileNameAvatar = Auth::user()->avatar;
        }

        if ($request->hasFile('banner'))
        {
            $fileBanner = $request->file('banner'); // Lấy file từ form
            $input['file'] = $fileBanner->getClientOriginalName(); // Tên file
            $fileBanner->move(base_path('..\upload\images\avatar'),$fileBanner->getClientOriginalName()); // Di chuyển file đến public/upload public_path('upload\images\banner')
            $fileNameBanner = $input['file'];
        } else {
            $fileNameBanner = Auth::user()->banner;
        }

        $query = User::where('id', Auth::user()->id)
            ->update([
                'lastname' => $request->lastname,
                'firstname' => $request->firstname,
                'username' => $request->username,
                'password' => md5($request->password),
                'email' => $request->email,
                'city' => $request->city,
                'address' => $request->address,
                // 'company' => $request->company,
                // 'facebook' => $request->facebook,
                // 'twitter' => $request->twitter,
                // 'description' => $request->description,
                // 'signature' => $request->signature,
                'avatar' => $fileNameAvatar, // Lấy tên file
                'banner' => $fileNameBanner, // Lấy tên file
            ]);

        return $query;
    }
}
