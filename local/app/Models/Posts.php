<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    //Khai báo tên table
    protected $table = 'posts';

    // Khai báo primary key
    // Trong Laravel có posts::find() nghĩa là tìm theo primary key
    protected $primaryKey = 'id_post';

    // Bỏ updated_at
    public $timestamps = true;

    protected $fillable = [
        'id_post', 'name_post', 'url_post',
        'present_post','content_post',
        'date_post', 'thumbnail_post', 'url_cat_post',
        'views', 'enable_post', 'home',
        'created_at', 'updated_at'
    ];
}
