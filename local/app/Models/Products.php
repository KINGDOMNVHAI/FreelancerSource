<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    //Khai báo tên table
    protected $table = 'products';

    // Khai báo primary key
    // Trong Laravel có categories::find() nghĩa là tìm theo primary key
    protected $primaryKey = 'id_product';

    // Bỏ updated_at
    public $timestamps = true;

    protected $fillable = [
        'id_product', 'name_product',
        'url_product', 'info_product', 'present_product', 'content_product',
        'price_product', 'unit_product',
        'thumbnail_product', 'img_product_1', 'img_product_2', 'img_product_3', 'img_product_4',
        'id_cat_product', 'id_author', 'popular', 'enable_product',
    ];
}
