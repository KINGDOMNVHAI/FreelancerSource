<?php
namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class UserLinks extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    //Khai báo tên table
    protected $table = 'links';

    // Khai báo primary key
    // Trong Laravel có tags::find() nghĩa là tìm theo primary key
    protected $primaryKey = 'id_link';
    // protected $keyType = 'string';

    // Bỏ updated_at
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id_link', 'id_user', 'url_link', 'enable_link'
    ];
}
