<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Carts extends Model
{
    //Khai báo tên table
    protected $table = 'carts';

    // Khai báo primary key
    // Trong Laravel có categories::find() nghĩa là tìm theo primary key
    protected $primaryKey = 'id_cart';

    // Bỏ updated_at
    public $timestamps = false;

    protected $fillable = [
        'id_cart', 'code_cart'

        // User info
        , 'fullname', 'email', 'phone'
        , 'account', 'status' // 1: cart, 2: payment

        // Product info
        , 'id_product', 'name_product', 'price_product', 'quantity', 'price_discount', 'type_discount'

        , 'enable_cart'
    ];
}
