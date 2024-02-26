<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class FcmToken extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'device_token',
        'app_name' //admin-user
    ];
}
