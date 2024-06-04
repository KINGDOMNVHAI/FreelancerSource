<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Distributors extends Model
{
    //Khai báo tên table
    protected $table = 'distributors';

    // Khai báo primary key
    // Trong Laravel có channel::find() nghĩa là tìm theo primary key
    protected $primaryKey = 'id_dis';

    // Bỏ updated_at
    public $timestamps = false;

    protected $fillable = [
        'id_dis', 'name_dis',
        'address_dis', 'email_dis', 'phone_dis', 'enable_dis'
    ];
}
