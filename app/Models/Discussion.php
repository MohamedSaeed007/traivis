<?php

namespace App\Models;

class Discussion extends Model
{
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function replies()
    {
        return $this->hasMany(Discussion::class)->with('user', 'user.photo_query');
    }

    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id');
    }

    public function content()
    {
        return $this->belongsTo(Content::class, 'content_id');
    }
}
