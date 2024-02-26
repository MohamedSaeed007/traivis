<?php

namespace App\Models;

use Carbon\Carbon;

class CompanyProject extends Model
{
    protected $table = 'company_projects';

    public $timestamps = true;

    // public function projectWorkForce()
    // {
    //     return $this->hasMany(RequiredCourseWorkforce::class,'user_id')
    //     ->where('upload_status',1)
    //     ->where('expiry_date','<', date("Y-m-d"));;
    // }
    public function courses()
    {
        return $this->belongsToMany(CompanyRequiredCourse::class, 'required_course_projects', 'project_id', 'course_id');
    }

    public function total_coursesWorkForce()
    {
        return $this->hasMany('App\Models\RequiredCourseWorkforce',
        'project_id', 'id')
        ->where('upload_status', 1);
    }
    // public function courses_without_certs(){
    //     return $this->hasMany('App\RequiredCourseWorkforce',
    //     'project_id', 'id')
    //     ->where('upload_status',0)

    //     ;
    // }
    public function expired_courses()
    {
        return $this->hasMany(RequiredCourseWorkforce::class, 'project_id')
        ->where('upload_status', 1)
        // ->where('required_course_departments.status',1)
        ->where('expiry_date', '<', date('Y-m-d'));
    }

    public function valid_courses()
    {
        return $this->hasMany(RequiredCourseWorkforce::class, 'project_id')
        ->where('upload_status', 1)
        // ->where('status',1)
        ->where('expiry_date', '>', date('Y-m-d', strtotime('+90 days')));
    }

    public function aboutToExpireCourse()
    {
        $beforeThreeMonth = Carbon::now()->addDay(90)->format('Y-m-d');
        // dd($beforeThreeMonth);
        return $this->hasMany(RequiredCourseWorkforce::class, 'project_id')
        ->where('upload_status', 1)
        // ->where('status',1)
        ->whereBetween('expiry_date', [date('Y-m-d'), $beforeThreeMonth]);
    }


    public function companyPositions()
    {
        return $this->hasManyThrough(CompanyPosition::class, CompanyDepartment::class);
    }

    public function companies()
    {
      //   return $this->belongsToMany(CompanyPosition::class);
      return $this->belongsToMany(Company::class, 'company_project', 'project_id', 'company_id');

    }


    // public function companyDepartments()
    // {
    //   //   return $this->belongsToMany(CompanyPosition::class);
    //   return $this->belongsToMany('App\Models\CompanyDepartment', 'department_project', 'project_id', 'department_id');

    // }


}
