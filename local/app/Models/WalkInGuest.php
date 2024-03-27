<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WalkInGuest extends Model
{
    //Khai báo tên table
    protected $table = 'walk_in_guest';

    // Khai báo primary key
    // Trong Laravel có channel::find() nghĩa là tìm theo primary key
    protected $primaryKey = 'id_wig';

    // Bỏ updated_at
    public $timestamps = true;

    protected $fillable = [
        'id_wig', 'name_wig', 'country_wig', 'email_wig', 'phone_wig'
    ];
}
