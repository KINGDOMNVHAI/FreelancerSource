<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    //Khai báo tên table
    protected $table = 'product_category';

    // Khai báo primary key
    // Trong Laravel có product_category::find() nghĩa là tìm theo primary key
    protected $primaryKey = 'id_product_category';

    // Bỏ updated_at
    public $timestamps = false;

    protected $fillable = [
        'id_product_category', 'id_product', 'id_category', 'enable_product_category'
    ];
}
