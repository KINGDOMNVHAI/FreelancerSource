<?php
namespace App\Services\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ForgotPasswordEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $fullname, $password;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($fullname, $ps)
    {
        $this->password = $ps;
        $this->fullname = $fullname;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // từ phần controller dẫn qua
        return $this->from("kingdomnvhai@gmail.com") // từ email của admin để trả password mới về
        ->subject("Mật khẩu mới")
        ->view('email.forgot-password-email') //dẫn tới template của người dùng
        ->with([
            'password' => $this->password,
            'fullname' => $this->fullname,
        ]);
    }
}
