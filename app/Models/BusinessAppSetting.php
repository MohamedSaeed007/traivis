<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class BusinessAppSetting extends Model
{
    use HasFactory;
    protected $fillable = [
        'business_id',
        'key',
        'value',
        'private_link',/////////////key for private links
    ];

    protected $SETTING_KEYS = [
        'private_space',//0-1
        'restrict_comments',//0-1
        'restrict_tagging', //0-1
        'traivis_algorithms', //0-1
        'show_analytics', //public-followers-me
        'business_environment', //public-followers-me
        'rewards_deals', //public-followers-me
        'followers_visibility', //public-followers-me
        'message_ability', //public-followers-me
        'notes_visibility', //public-followers-me
        'hint_visibility', //public-followers-me
        'blog_visibility', //public-followers-me
        'social_media_slots', //public-followers-me
    ];

    public function business(){
        return $this->belongsTo(Business::class);
    }
}