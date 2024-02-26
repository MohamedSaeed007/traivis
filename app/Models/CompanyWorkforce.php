<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;

class CompanyWorkforce extends Model
{
    // todo:deprecated model
    use SoftDeletes;

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

    public function workforce_positions()
    {
        return $this->hasMany('App\Models\WorkforcePosition', 'user_id', 'user_id')->where('status', 1);
    }

    public function workforce_projects()
    {
        return $this->hasMany('App\Models\WorkforceProject', 'user_id', 'user_id')->where('status', 1);
    }

    public function workforceUser()
    {
        return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }
}