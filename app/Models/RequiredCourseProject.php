<?php

namespace App\Models;

class RequiredCourseProject extends Model
{
    protected $table = 'required_course_projects';

    public $timestamps = true;

    // public function expired_courses(){

    //     return $this->hasMany('App\RequiredCourseWorkforce',
    //     'required_course_workforces.course_id', 'required_course_projects.course_id')
    //     ->where('status',1)->where('end_date','<', date("Y-m-d"));
    // }

    public function company_project()
    {
        return $this->hasOne('App\Models\CompanyProject', 'id', 'project_id')->where('status', 1);
    }
}
