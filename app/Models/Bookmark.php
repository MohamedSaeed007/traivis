<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use App\Models\Presenters\CommentPresenter;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Bookmark extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['post_id'];

    public function bookmarkable()
    {
        return $this->morphTo();
    }
    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
