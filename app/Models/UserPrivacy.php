<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class UserPrivacy extends Model
{
    use HasFactory;
    protected $fillable =[
        "user_id",
        'general_account_privacy',
        'general_profile_picture_visibility',
        'general_comments',
        'general_mentions',
        'general_enrolled_courses',
        'general_analytics',
        'general_business_env',
        'general_rewards_deals',
        'connections_visibility',
        'connections_block',
        'social_notes',
        'social_hints',
        'social_blogs',
        'traiml_algorithms',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
