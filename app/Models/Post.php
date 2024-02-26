<?php

namespace App\Models;

use App\Casts\DateTimeTZ;
use App\Traits\HasCachedMedia;
use App\Traits\HasTimezonedTimestamps;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Post extends Model implements HasMedia
{
    use InteractsWithMedia;
    //    use HasTimezonedTimestamps;
    use HasCachedMedia {
        HasCachedMedia::getMedia insteadof InteractsWithMedia;
        HasCachedMedia::getFirstMedia insteadof InteractsWithMedia;
        HasCachedMedia::getFirstMediaUrl insteadof InteractsWithMedia;
    }

    // protected $with = ['business.media', 'business.users', 'business.settings', 'business.followers', 'user.media', 'user.userPrivacy', 'comments', 'media'];
    protected $guarded = [];

    protected $casts = [
        'created_at' => DateTimeTZ::class,
        'updated_at' => DateTimeTZ::class,
    ];
    public function postViews()
    {
        return $this->hasMany(PostView::class);
    }
    public function bookmarks()
    {
        return $this->hasMany(Bookmark::class);
    }

    public function scopePublish($query)
    {
        return $query->where('status', 'Published');
    }

    public function scopePost($query)
    {
        return $query->where('type', 'post')->with('media', 'author');
    }

    public function getPublishedTimeAttribute()
    {
        return $this->created_at->format(date_time_format());
    }

    public function getUrlAttribute()
    {
        return route('post', $this->slug);
    }

    // start  ADD by mohamed fadol

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function business()
    {
        return $this->belongsTo(Business::class);
    }

    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable')
            ->whereNull('parent_id')
            ->orderBy('id', 'asc');
    }

    public function likes()
    {
        return $this->morphMany(Like::class, 'likeable')->where('liked', '=', 1);
    }

    public function disLikes()
    {
        return $this->morphMany(Like::class, 'likeable')->where('liked', '=', 0);
    }

    // end  ADD by mohamed fadol

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    /*  public function media()
    {
        return $this->belongsTo(Media::class, 'feature_image');
    }
 */
    public function getThumbnailUrlAttribute()
    {
        return media_image_uri($this->media);
    }

    public function getStatusContextAttribute()
    {
        $statusClass = '';
        $iclass = '';
        $status = __a('pending');
        switch ($this->status) {
            case '0':
                $statusClass .= 'dark';
                $iclass = 'clock-o';
                break;
            case '1':
                $statusClass .= 'success';
                $iclass = 'check-circle';
                $status = __a('published');
                break;
            case '2':
                $statusClass .= 'danger';
                $iclass = 'exclamation-circle';
                $status = __a('unpublished');
                break;
        }

        $html = "<span class='badge post-status-{$this->status} badge-{$statusClass}'> <i class='la la-{$iclass}'></i> {$status}</span>";

        return $html;
    }
}
