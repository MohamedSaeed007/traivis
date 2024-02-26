<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class CourseView extends AbstractView
{
    use HasFactory;

    public function __construct(array $attributes = [])
    {
        $this->mergeFillable(['course_id']);
        parent::__construct($attributes);
    }

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
