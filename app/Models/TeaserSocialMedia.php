<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class TeaserSocialMedia extends Model
{
    use HasFactory;
    protected $fillable = [
        'post_id',
        'social_media_id',
        'page_id',
        'facebook_page_access_token',
        'board_id',
        'board_section_id',
    ];
    public function originalPost()
    {
        return $this->belongsTo(TeaserOriginalDraft::class, 'post_id', 'id');
    }
    public function social()
    {
        return $this->belongsTo(SocialMedia::class, 'social_media_id', 'id');
    }
    public function postDates()
    {
        return $this->hasMany(SocialPostDate::class, 'social_post_id', 'id');
    }
}
