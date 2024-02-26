<?php

namespace App\Models;


class Wishlist extends Model
{

    protected $fillable = [
        'course_id',
        'user_id',
    ];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
