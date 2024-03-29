<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use App\Models\Presenters\CommentPresenter;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Comment extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'comment',
        'user_id',
        'commentable_type',
        'commentable_id',
        'commenterable_id',
        'commenterable_type',
    ];

    protected $with = ['user.media','commenterable.media'];

    public function presenter()
    {
        return new CommentPresenter($this);
    }

    public function hasParent()
    {
        return is_null($this->parent_id);
    }

    public function scopeParent(Builder $builder)
    {
        $builder->whereNull('parent_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function commenterable()
    {
        return $this->morphTo();
    }

    public function children()
    {
        return $this->hasMany(Comment::class, 'parent_id')->oldest();
    }
    public function likes()
    {
        return $this->morphMany(Like::class, 'likeable')->where('liked', '=', 1);
    }

    public function disLikes()
    {
        return $this->morphMany(Like::class, 'likeable')->where('liked', '=', 0);
    }
    public function commentable()
    {
        return $this->morphTo();
    }
}
