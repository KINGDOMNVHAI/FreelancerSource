<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Authors extends Model
{
    //Khai báo tên table
    protected $table = 'authors';

    // Khai báo primary key
    // Trong Laravel có channel::find() nghĩa là tìm theo primary key
    protected $primaryKey = 'id_author';

    // Bỏ updated_at
    public $timestamps = false;

    protected $fillable = [
        'id_author', 'name_author', 'email_author', 'phone_author', 'enable_author'
    ];
}
