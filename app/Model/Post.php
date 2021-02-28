<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'id_post', 'name_post', 'url_post', 'content_post',
        'date_post', 'thumbnail_post', 'enable_post'
    ];
}
