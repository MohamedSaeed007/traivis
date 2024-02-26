<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class EnterpriseWorkforce extends Model
{
    use HasFactory, SoftDeletes;
  
    protected $fillable =['company_id','user_id','position_id','work_id','traivis_id','status'];

    protected $table = 'company_workforce';

    public $timestamps = true;

    public function assigned_courses()
    {
        return $this->hasMany('App\Models\RequiredCourseWorkforce', 'user_id', 'user_id')->where([['status', 1], ['upload_status', 1]]);
    }

    public function assigned_courses_valid()
    {
        return $this->hasMany('App\Models\RequiredCourseWorkforce', 'user_id', 'user_id')
        ->where([['expiry_date', '>', date('Y-m-d')], ['status', 1], ['upload_status', 1]]);
    }
    // public function user_department(){
    //     return $this->hasOne('App\CompanyDepartment', 'id', 'department_id');
    // }

    public function workforce_departments()
    {
        return $this->hasMany('App\Models\WorkforceDepartment', 'user_id', 'user_id')->where('status', 1);
    }

    public function departments()
    {
        return $this->belongsToMany(Department::class);
    }

    public function workforce_positions()
    {
        return $this->hasMany('App\Models\WorkforcePosition', 'user_id', 'user_id')->where('status', 1);
    }

    public function position()
    {
        return $this->belongsTo(Position::class);
    }

    public function workforce_projects()
    {
        return $this->hasMany('App\Models\WorkforceProject', 'user_id', 'user_id')->where('status', 1);
    }

    
    public function projects()
    {
        return $this->belongsToMany(Project::class);
    }

    public function branches()
    {
        return $this->belongsToMany(Branch::class);
    }


    public function companyRequiredCourses()
    {

        return $this->belongsToMany(EnterpriseRequiredCourse::class,'enterprise_required_course_enterprise_workforce','enterprise_workforce_id','enterprise_required_course_id')->withTimestamps()->withPivot('issue_date','upcoming_date');
        
    }

    public function business()
    {
        return $this->belongsTo(Business::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
