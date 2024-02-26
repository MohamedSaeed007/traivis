<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class CompanyDepartment extends Model
{
    protected $table = 'company_departments';

    public $timestamps = true;

    public function total_courses()
    {
        return $this->hasMany('App\Models\RequiredCourseDepartment', 'department_id', 'id')
            ->where([['status', 1], ['created_by', Auth::user()->id]]);
    }

    public function total_coursesWorkForce()
    {
        return $this->hasMany('App\Models\RequiredCourseWorkforce',
            'department_id', 'id')
            ->where('upload_status', 1);
    }

    public function expired_courses()
    {
        return $this->hasMany('App\Models\RequiredCourseWorkforce',
            'department_id', 'id')
            ->where('upload_status', 1)

            // ->where('required_course_departments.status',1)
            ->where('expiry_date', '<', date('Y-m-d'));
    }

    public function valid_courses()
    {
        return $this->hasMany('App\Models\RequiredCourseWorkforce',
            'department_id', 'id')
            ->where('upload_status', 1)

            // ->where('status',1)
            ->where('expiry_date', '>', date('Y-m-d', strtotime('+90 days')));
    }

    public function aboutToExpireCourse()
    {
        $beforeThreeMonth = Carbon::now()->addDay(90)->format('Y-m-d');
        // dd($beforeThreeMonth);
        return $this->hasMany('App\Models\RequiredCourseWorkforce',
            'department_id', 'id')
            ->where('upload_status', 1)
            // ->where('status',1)
            ->whereBetween('expiry_date', [date('Y-m-d'), $beforeThreeMonth]);
    }

    public function department_workforces()
    {
        return $this->hasMany('App\Models\CompanyWorkforce', 'department_id', 'id')
            ->where('status', 1);
    }


      // many to many 

      public function companyPositions()
      {
        //   return $this->belongsToMany(CompanyPosition::class);
        return $this->belongsToMany('App\Models\CompanyPosition', 'department_position', 'department_id', 'position_id');

      }

      public function companyProjects()
      {
        //   return $this->belongsToMany(CompanyPosition::class);
        return $this->belongsToMany('App\Models\CompanyProject', 'department_project', 'department_id', 'project_id');

      }
  
      // end many  to many 
}
