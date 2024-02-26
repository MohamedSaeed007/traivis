<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class UserKarmaShare extends Model
{
    use HasFactory;

    protected $fillable = ['user_id','course_id','earnings','enrolled','register','reached'];

    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}
