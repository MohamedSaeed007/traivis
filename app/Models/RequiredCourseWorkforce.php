<?php

namespace App\Models;

class RequiredCourseWorkforce extends Model
{
    protected $table = 'required_course_workforces';

    public $timestamps = true;

    public function course_assigned_to()
    {
        return $this->hasOne('App\Models\CompanyWorkforce', 'id', 'user_id')->where('status', 1);
    }

    public function purchaseWorkforces()
    {
        return $this->hasOne('App\Models\User', 'id', 'user_id');
    }

    public function departments()
    {
        return $this->hasMany('App\Models\CompanyDepartment', 'id', 'department_id');
    }
}
