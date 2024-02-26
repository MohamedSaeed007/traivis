<?php

namespace App\Models;

class CourseLanguage extends Model
{
    protected $table = 'course_languages';

    public $timestamps = true;

    public function getLanguage()
    {
        return $this->belongsTo('App\Models\AllLanguage', 'language_id', 'id');
    }
}
