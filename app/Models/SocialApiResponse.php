<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class SocialApiResponse extends Model
{
    use HasFactory;
    protected $fillable=[
        'social_media_id',
        'id_str',
        'text',
        'user_id_str',
        'platform', //name of platform like twitter
        'response_code',
    ];
}
