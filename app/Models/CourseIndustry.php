<?php

namespace App\Models;

class CourseIndustry extends Model
{
    protected $table = 'course_industries';

    public $timestamps = true;

    public function industry()
    {
        return $this->belongsTo(Industry::class,'industry_id','id');
    }
}
