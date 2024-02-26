<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class SocialMedia extends Model
{
    use HasFactory;
    protected $fillable=[
        'id',
        'social_name',
        'social_icon',
        'created_at',
        'updated_at'
    ];

}
