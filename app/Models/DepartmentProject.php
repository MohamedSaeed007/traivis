<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;

class DepartmentProject extends Pivot
{

 
    public function  positions()
    {
     return $this->belongsToMany(Position::class,'department_project_position','department_project_id','position_id')->withTimestamps();
    }

    public function enterpriseRequiredCourses()
    {
        return $this->belongsToMany(EnterpriseRequiredCourse::class,'department_project_enterprise_required_course','department_project_id','enterprise_required_course_id')->withTimestamps();
    }

}
