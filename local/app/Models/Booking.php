<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    //Khai báo tên table
    protected $table = 'booking';

    // Khai báo primary key
    // Trong Laravel có booking::find() nghĩa là tìm theo primary key
    protected $primaryKey = 'id_booking';

    // Bỏ updated_at
    public $timestamps = true;

    protected $fillable = [
        'id_booking', 'code_booking', 'amount_sale', 'amount_net',
    ];
}
