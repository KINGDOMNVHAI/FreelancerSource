<?php
namespace App\Services\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class BuildEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $subject, $infoBooking, $listProduct;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($subject, $infoBooking, $listProduct)
    {
        $this->subject = $subject;
        $this->infoBooking = $infoBooking;
        $this->listProduct = $listProduct;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // từ phần controller dẫn qua
        return $this->from(config('email.from')) // từ email của admin để trả password mới về
            ->subject($this->subject)
            ->view('email.payment-email') //dẫn tới template của người dùng
            ->with([
                'infoBooking' => $this->infoBooking,
                'listProduct' => $this->listProduct,
            ]);
    }
}
