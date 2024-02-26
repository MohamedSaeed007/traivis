<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Position extends Model
{
    use HasFactory , SoftDeletes ;
    
    protected $fillable  =['position_name_ar','position_name_en','status','business_id','id'];

    public function departments()
    {
        return $this->belongsToMany(Department::class)->withTimestamps();
    }


    public function enterpriseRequiredCourses()
    {
        return $this->belongsToMany(EnterpriseRequiredCourse::class)->withTimestamps();
    }



    public function enterpriseWorkforce()
    {
        return $this->hasMany(EnterpriseWorkforce::class)->withTimestamps();
    }

    public function business()
    {
        return $this->belongsTo(Business::class);
    }

    public function departmentProjects()
    {
        return $this->belongsToMany(DepartmentProject::class,'department_project_position','position_id','department_project_id')->withTimestamps();
    }


}
