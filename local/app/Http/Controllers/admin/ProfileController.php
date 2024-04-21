<?php
namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Services\All\VideoService;
use App\Services\UserService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    // Công việc:
    // 1) Tìm cách gộp 2 hàm index và update làm 1
    // 2) Sửa hàm callUserBySession bằng cách gọi hàm trong UserService, vẫn cho truyền fields vào
    public function profileUpdate($id = null, Request $request)
    {
        if (Auth::check())
        {
            $fields = [
                'id', 'lastname', 'firstname', 'username', 'password',
                'email', 'role', 'city', 'address',
                // 'company', 'facebook', 'twitter', 'description', 'signature',
                'banner', 'avatar',
            ];

            $userProfile = new UserService;
            $viewData = $userProfile->checkUserBySession($fields, Auth::user()->id);

            if ($request->isMethod('POST'))
            {
                $viewData = $userProfile->updateProfile($request);
                return redirect()->route('user-profile');
            }

            return view('admin.pages.profile', [
                'title' => 'User Profile',
                'user' => $viewData
            ]);
        }
        else {
            return redirect()->route('login');
        }
    }

    public function index()
    {
        if (Auth::check())
        {
            $fields = [
                'id', 'lastname', 'firstname', 'username', 'password',
                'email', 'role', 'city', 'address',
                // 'company', 'facebook', 'twitter', 'description', 'signature',
                'banner', 'avatar',
            ];

            $userProfile = new UserService;
            $viewData   = $userProfile->checkUserBySession($fields);

            return view('admin.pages.profile', [
                'title' => 'User Profile',
                'user' => $viewData
            ]);
        }
        else {
            return redirect()->route('login');
        }
    }

    public function update(Request $request)
    {
        $updateProfile = new UserService;
        $viewData = $updateProfile->updateProfile($request);

        return redirect('/user-profile');
    }

    public function printPDFProfile()
    {
        if (Auth::check())
        {

            $format = 'A5-L';
            $fontsize = 10;
            $fontTitle = 14;
            $fontThead = 10;
            $fontTD = 10;
            $fontHead = 10;

            try {



                $viewData = [
                    'title' => 'Thông tin cá nhân',
                    'date' => date("d/m/Y"),
                    'fontsize' => $fontsize,
                    'format' => $format,
                    'fontTitle' => $fontTitle,
                    'fontThead' => $fontThead,
                    'fontTD' => $fontTD,
                    'fontHead' => $fontHead
                ];

                $options = [
                    // 'format' => $format,
                    // 'tempDir' => storage_path('tempdir'),
                    // 'default_font_size'=> $fontsize,
                    'mode' => 'utf-8'
                ];


                $url = 'export/pdf/profile-'. microtime(true) .'.pdf';

                $pdf = PDF::loadView('pdf.profile-template',  $viewData, [], 'utf-8');
                $pdf->save($url);

                $responseData = [
                    'result' => true,
                    'data' => $url,
                    'message' => trans('message.success_action'),
                    'code' => 200,
                ];


            } catch (Exception $e) {
                var_dump("fail");
                die();
                // $responseData = [
                //     'result' => false,
                //     'data' => [],
                //     'message' => trans('message.fail_action').$e,
                //     'code' => 500,
                // ];
                // return response()->json($responseData);
                // // return view('errors.404-message');
            }






        }
        else {
            return redirect()->route('login');
        }
    }
}
