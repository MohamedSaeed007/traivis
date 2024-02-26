<?php

namespace App\Models;

use App\Models\MediaLibrary as Media;
use App\Traits\HasCachedMedia;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media as BaseMedia;

class Assignment extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;
    use HasCachedMedia {
        HasCachedMedia::getMedia insteadof InteractsWithMedia;
        HasCachedMedia::getFirstMedia insteadof InteractsWithMedia;
        HasCachedMedia::getFirstMediaUrl insteadof InteractsWithMedia;
    }

    protected $fillable = ['title', 'text', 'options', 'course_id'];

    protected $casts = [
        'options' => 'array',
    ];

    public function option($key = null, $default = null)
    {
        /*$options = null;
        if ($this->options) {
            $options = json_decode($this->options, true);
        }*/
        if ($key) {
            if (is_array($this->options) && array_get($this->options, $key)) {
                return array_get($this->options, $key);
            } else {
                return $default;
            }
        }
        return $this->options;
    }

    public function course(): BelongsTo
    {
        return $this->belongsTo(Course::class);
    }

    public function content(): \Illuminate\Database\Eloquent\Relations\MorphOne
    {
        return $this->morphOne(Content::class, 'contentable');
    }

    public function registerMediaConversions(BaseMedia $media = null): void
    {
        $this->addMediaConversion('preview')
            ->performOnCollections('resources')
            ->width(800)
            ->nonQueued();
    }

    public function users(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(User::class)
            ->using(AssignmentUser::class)
            ->withPivot(['id', 'grade', 'assignment_submission_date', 'status', 'end_time'])
            ->withTimestamps();
    }
}
