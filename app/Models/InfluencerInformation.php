<?php

namespace App\Models;


class InfluencerInformation extends Model
{
    public $fillable = [
        'user_id',
        'facebook_url',
        'instagram_url',
        'twitter_url',
        'youtube_url',
        'snap_chat_url',
        'tiktok_url',
        'facebook_followers',
        'instagram_followers',
        'twitter_followers',
        'youtube_followers',
        'snap_chat_followers',
        'tiktok_followers',

        'message',
        'status'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}
