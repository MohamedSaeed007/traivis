<?php

namespace App\Models;

use App\Traits\HasCachedMedia;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class TeaserOriginalDraft extends Model implements HasMedia
{
    use HasFactory;
    use Notifiable;
    use InteractsWithMedia;
    use HasCachedMedia {
        HasCachedMedia::getMedia insteadof InteractsWithMedia;
        HasCachedMedia::getFirstMedia insteadof InteractsWithMedia;
        HasCachedMedia::getFirstMediaUrl insteadof InteractsWithMedia;
    }

    protected $fillable = [
        'post_txt',
        // 'post_media', //img or video
        'course_id',
        'business_id',
    ];
    protected $appends = ['image'];
    public function getImageAttribute()
    {
        // return $this->post_media
        //     ? asset("storage/course/posts/$this->post_media")
        //     : null;
        return $this->getFirstMediaUrl() ?? null;
    }
    public function business()
    {
        return $this->belongsTo(Business::class);
    }
    public function course()
    {
        return $this->belongsTo(Course::class);
    }
    public function socialPosts()
    {
        return $this->hasMany(TeaserSocialMedia::class, 'post_id', 'id');
    }
    public function socialDates()
    {
        return $this->hasManyThrough(
            SocialPostDate::class,
            TeaserSocialMedia::class,
            'post_id',
            'social_post_id',
        );
    }
}
