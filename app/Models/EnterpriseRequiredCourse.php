<?php

namespace App\Models;

use App\Models\EnterpriseRequiredCourseEnterpriseWorkforce as ModelsEnterpriseRequiredCourseEnterpriseWorkforce;
use Carbon\Carbon;
use EnterpriseRequiredCourseEnterpriseWorkforce;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class EnterpriseRequiredCourse extends Model
{
    use HasFactory;
    protected $table = 'company_required_courses';

    public $timestamps = true;


    public $fillable =['en_course_name','validity','type','company_id'];

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

    public function getCourseExpireDateAttribute()
    {
        return  Carbon::parse($this->created_at)
        ->startOfDay()
        ->addMonth($this->validity)->toDateString();
    }


    public function business()
    {
        return $this->belongsTo(Business::class);
    }

    public function enterpriseWorkforces()
    {
        return $this->belongsToMany(EnterpriseWorkforce::class,'enterprise_required_course_enterprise_workforce','enterprise_required_course_id','enterprise_workforce_id')->withTimestamps()->withPivot('issue_date','upcoming_date')->withTimestamps()->withPivot('issue_date','upcoming_date');
    }




    public function positions()
    {
        return $this->belongsToMany(Position::class)->withTimestamps();
    }

    public function departments()
    {
        return $this->belongsToMany(Department::class)->withTimestamps();
    }

    public function projects()
    {
        return $this->belongsToMany(Project::class)->withTimestamps();
    }

    public function branches()
    {
        return $this->belongsToMany(Branch::class)->withTimestamps();
    }

    public function departmentProjects()
    {
        return $this->belongsToMany(DepartmentProject::class,'department_project_position','enterprise_required_course_id','department_project_id')->withTimestamps();
    }

    



}
