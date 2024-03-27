<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BookingDetail extends Model
{
    //Khai báo tên table
    protected $table = 'booking_detail';

    // Khai báo primary key
    // Trong Laravel có booking_detail::find() nghĩa là tìm theo primary key
    protected $primaryKey = 'id_booking_detail';

    // Bỏ updated_at
    public $timestamps = true;

    protected $fillable = [
        'id_booking_detail', 'id_booking', 'id_product',
        'price_sale', 'discount', 'unit_discount', 'price_net'
    ];
}
