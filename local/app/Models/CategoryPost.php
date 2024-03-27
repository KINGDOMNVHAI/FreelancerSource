<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategoryPost extends Model
{
    //Khai báo tên table
    protected $table = 'category_post';

    // Khai báo primary key
    // Trong Laravel có CategoryPost::find() nghĩa là tìm theo primary key
    protected $primaryKey = 'id_cat_post';

    // Bỏ updated_at
    public $timestamps = false;

    protected $fillable = [
        'id_cat_post', 'name_vi_cat_post', 'name_en_cat_post', 'url_cat_post', 'enable_cat_post'
    ];
}
