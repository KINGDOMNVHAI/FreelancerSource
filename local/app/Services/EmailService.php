<?php
namespace App\Services;

use App\Services\Mail\BuildEmail;
use DB;
use File;
use Illuminate\Bus\Queueable;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\ServiceProvider;

class EmailService extends Mailable
{
    use Queueable, SerializesModels;

    public $password;

    public function __construct()
    {

    }

    public function sendEmailPayment($idBooking)
    {
        $bookingService = new BookingService;

        $infoBooking = $bookingService->getBooking($idBooking);
        if ($infoBooking != null) {

            $listProduct = $bookingService->getBookingDetail($infoBooking->id_booking);

            $email = 'nvhai2306@gmail.com';
            $to_email = $infoBooking->email; // Tới email mà người dùng đăng ký
            $fullname = $infoBooking->fullname;
            $phone = $infoBooking->phone;
            $address = $infoBooking->address;
            $code = $infoBooking->code_booking;

            $subject = "Thông tin hóa đơn " . $code;

            // Check email
            if ($to_email != null)
            {
                $buildEmail = new BuildEmail($subject, $infoBooking, $listProduct);
                Mail::to($to_email)->send($buildEmail);
                return true;
            }
        }
        return false;
    }

    public function sendEmailForgotPassword(Request $request)
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

                $request->session()->put('message', EMAIL_IS_SENT);
                return redirect()->route('login')->with('message', __(EMAIL_IS_SENT)); //trả về name của router kèm theo thông tin trả về
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
}
