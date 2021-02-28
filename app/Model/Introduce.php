<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Introduce extends Model
{
    //use Searchable;
    protected $table = 'introduce';

    // Bỏ updated_at
    public $timestamps = true;

    protected $fillable = [
        'id_introduce', 'name_introduce', 'url_introduce',
        'content1_introduce',
        'content2_introduce',
        'content3_introduce',
        'content4_introduce',
        'thumbnail_introduce', 'enable_introduce'
    ];
}
