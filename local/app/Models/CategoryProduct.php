<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategoryProduct extends Model
{
    //Khai báo tên table
    protected $table = 'category_product';

    // Khai báo primary key
    // Trong Laravel có categories::find() nghĩa là tìm theo primary key
    protected $primaryKey = 'id_cat';

    // Bỏ updated_at
    public $timestamps = false;

    protected $fillable = [
        'id_cat_product', 'name_cat_product', 'thumbnail_cat_product',
        'url_cat_product', 'id_parent', 'enable_cat_product'
    ];
}
