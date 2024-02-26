<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use HasFactory , SoftDeletes ;
    
    protected $fillable =['project_name_ar','project_name_en','business_id','status','id'];

    public function departments()
    {
        return $this->belongsToMany(Department::class)->using(DepartmentProject::class);
    }

    public function branches()
    {
        return $this->belongsToMany(Branch::class);
    }

    public function enterpriseWorkforces()
    {

        return $this->hasMany(EnterpriseWorkforce::class);

    }

    public function positions()
    {
        return $this->hasManyThrough(Position::class,Department::class);
    }

    public function business()
    {
        return $this->belongsTo(Business::class);
    }

    public function enterpriseRequiredCourses()
    {
        return $this->belongsToMany(EnterpriseRequiredCourse::class)->withTimestamps();
    }


    
}
