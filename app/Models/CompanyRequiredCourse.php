<?php

namespace App\Models;

use Carbon\Carbon;

class CompanyRequiredCourse extends Model
{
    protected $table = 'company_required_courses';

    public $timestamps = true;

    public function required_course_departments()
    {
        return $this->hasMany('App\Models\RequiredCourseDepartment', 'course_id', 'id')->where('status', 1);
    }

    public function required_course_positions()
    {
        return $this->hasMany('App\Models\RequiredCoursePosition', 'course_id', 'id')->where('status', 1);
    }

    public function required_course_projects()
    {
        return $this->hasMany('App\Models\RequiredCourseProject', 'course_id', 'id')->where('status', 1);
    }

    public function totaldWorkForceCourse()
    {
        return $this->hasMany(RequiredCourseWorkforce::class, 'course_id')
        ->where('upload_status', 1)

        // ->where('status',1)
;
    }

    public function validWorkForceCourse()
    {
        return $this->hasMany(RequiredCourseWorkforce::class, 'course_id')
        ->where('upload_status', 1)

        // ->where('status',1)
        ->where('expiry_date', '>', date('Y-m-d', strtotime('+90 days')));
    }

    public function expiredWorkForceCourse()
    {
        return $this->hasMany(RequiredCourseWorkforce::class, 'course_id')
        ->where('upload_status', 1)
        ->where('expiry_date', '<', date('Y-m-d'));
    }

    public function aboutToExpireCourse()
    {
        $beforeThreeMonth = Carbon::now()->addDay(90)->format('Y-m-d');
        // dd($beforeThreeMonth);
        return $this->hasMany(RequiredCourseWorkforce::class, 'course_id')
        ->where('upload_status', 1)
        ->whereBetween('expiry_date', [date('Y-m-d'), $beforeThreeMonth]);
    }

    
}
