<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class RewardPost extends Model
{
    use HasFactory;

    protected $fillable=[
        'reward_key',
        'reward_post',
        'reward_video',
        'business_id',
    ];

}
