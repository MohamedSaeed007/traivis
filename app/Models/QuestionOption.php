<?php

namespace App\Models;

use App\Traits\CanGetTableNameStatically;
use App\Traits\HasCachedMedia;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media as BaseMedia;

class QuestionOption extends Model implements HasMedia
{
    use InteractsWithMedia;
    use HasCachedMedia {
        HasCachedMedia::getMedia insteadof InteractsWithMedia;
        HasCachedMedia::getFirstMedia insteadof InteractsWithMedia;
        HasCachedMedia::getFirstMediaUrl insteadof InteractsWithMedia;
    }

    use CanGetTableNameStatically;

    public $timestamps = false;

    protected $fillable = [
        'question_id',
        'title',
        //        'text',
        'd_pref',
        'is_correct',
        'sort_order',
    ];

    public function question(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Question::class);
    }

    public function registerMediaConversions(BaseMedia $media = null): void
    {
        $this->addMediaConversion('preview')
            ->performOnCollections('default')
            ->width(800)
            ->nonQueued();
    }
}
