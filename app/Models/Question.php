<?php

namespace App\Models;

use App\Traits\HasCachedMedia;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\EloquentSortable\Sortable;
use Spatie\EloquentSortable\SortableTrait;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media as BaseMedia;

class Question extends Model implements Sortable, HasMedia
{
    use SortableTrait;
    use InteractsWithMedia;
    use HasCachedMedia {
        HasCachedMedia::getMedia insteadof InteractsWithMedia;
        HasCachedMedia::getFirstMedia insteadof InteractsWithMedia;
        HasCachedMedia::getFirstMediaUrl insteadof InteractsWithMedia;
    }

    use SoftDeletes;

    public $timestamps = false;
    public $fillable = ['business_id', 'quiz_id', 'title', 'image_id', 'type', 'score', 'sort_order'];
    protected $guarded = [];

    //    public function media(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    //    {
    //        return $this->belongsTo(Media::class, 'image_id');
    //    }

    protected static function booted()
    {
        static::deleted(function (Question $question) {
            $question->options()->delete();
        });
    }

    public function options(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(QuestionOption::class)->orderBy('sort_order');
    }

    public function getImageUrlAttribute()
    {
        return media_image_uri($this->media);
    }

    public function delete_sync(): void
    {
        $this->options()->delete();
        $this->delete();
    }

    public function answers()
    {
        return $this->hasMany(Answer::class);
    }

    public function buildSortQuery()
    {
        return static::query()->where('quiz_id', $this->quiz_id);
    }
    public function registerMediaConversions(BaseMedia $media = null): void
    {
        $this->addMediaConversion('preview')
            ->performOnCollections('default')
            ->width(800)
            ->nonQueued();
    }
}
