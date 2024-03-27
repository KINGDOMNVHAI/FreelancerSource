<?php
namespace App\Dto;

use Illuminate\Database\Eloquent\Model;

class EmailDto extends Model
{
    protected $fillable = [
        'from_email', 'to_email', 'fullname',
    ];
}
