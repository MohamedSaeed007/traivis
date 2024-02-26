<?php

namespace App\Models;

use App\Traits\HasCachedMedia;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\EloquentSortable\Sortable;
use Spatie\EloquentSortable\SortableTrait;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media as BaseMedia;
use Illuminate\Database\Eloquent\Casts\AsArrayObject;

class Quiz extends Model implements HasMedia
{
    use InteractsWithMedia;
    use HasCachedMedia {
        HasCachedMedia::getMedia insteadof InteractsWithMedia;
        HasCachedMedia::getFirstMedia insteadof InteractsWithMedia;
        HasCachedMedia::getFirstMediaUrl insteadof InteractsWithMedia;
    }

    protected $fillable = ['title', 'slug', 'description', 'options', 'user_id', 'course_id'];

    protected $casts = [
        'options' => AsArrayObject::class,
    ];
    protected static function booted()
    {
        static::deleted(function (Quiz $quiz) {
            $quiz->questionsWithTrashed->every(function ($question) {
                $question->options->every(function ($option) {
                    $option->delete();
                });
                $question->forceDelete();
            });
        });
    }

    public function getQuestionsCountAttribute()
    {
        return $this->questions->count();
    }

    public function questions(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Question::class, 'quiz_id')
            ->with('media')
            ->orderBy('sort_order', 'asc');
    }

    public function questionsWithTrashed(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Question::class, 'quiz_id')
            ->with('media')
            ->withTrashed()
            ->orderBy('sort_order', 'asc');
    }

    public function content(): \Illuminate\Database\Eloquent\Relations\MorphOne
    {
        return $this->morphOne(Content::class, 'contentable');
    }

    public function attempts(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Attempt::class, 'quiz_id');
    }

    //    public function option($key = null, $default = null)
    //    {
    //        $options = null;
    //        if ($this->options) {
    //            $options = json_decode($this->options, true);
    //        }
    //        if ($key) {
    //            if (is_array($options) && array_get($options, $key)) {
    //                return array_get($options, $key);
    //            } else {
    //                return $default;
    //            }
    //        }
    //
    //        return $options;
    //    }

    public function course(): BelongsTo
    {
        return $this->belongsTo(Course::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function options()
    {
        return $this->hasManyThrough(QuestionOption::class, Question::class);
    }

    public function getUrlAttribute()
    {
        return route('single_quiz', [$this->course_id, $this->id]);
    }

    public function registerMediaConversions(BaseMedia $media = null): void
    {
        $this->addMediaConversion('preview')
            ->performOnCollections('resources')
            ->width(800)
            ->nonQueued();
    }
}
