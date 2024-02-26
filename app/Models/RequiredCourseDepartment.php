<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;

class RequiredCourseDepartment extends Model
{
    use SoftDeletes;

    protected $table = 'required_course_departments';

    public $timestamps = true;

    public function expired_courses()
    {
        return $this->hasMany('App\Models\RequiredCourseWorkforce',
            'course_id', 'course_id')
            // ->where('required_course_departments.status',1)
            ->where('expiry_date', '<', date('Y-m-d'));
    }

    public function valid_courses()
    {
        return $this->hasMany('App\Models\RequiredCourseWorkforce',
            'course_id', 'course_id')
            // ->where('status',1)
            ->where('expiry_date', '>', date('Y-m-d'));
    }

    public function company_department()
    {
        return $this->hasOne('App\Models\CompanyDepartment', 'id', 'department_id')->where('status', 1);
    }
}
