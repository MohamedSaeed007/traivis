<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Department extends Model
{
    use HasFactory , SoftDeletes;

    protected $fillable = ['status','department_name_ar','department_name_en','business_id','id'];

    public function positions()
    {
       return $this->belongsToMany(Position::class)->withTimestamps();
    }

    public function projects()
    {
        return $this->belongsToMany(Project::class)->using(DepartmentProject::class);
    }

    public function business()
    {
        return $this->belongsTo(Business::class);
    }

    public function enterpriseWorkforces()
    {
        return $this->belongsTo(EnterpriseWorkforce::class);
    }

    public function enterpriseRequiredCourses()
    {
        return $this->belongsToMany(EnterpriseRequiredCourse::class)->withTimestamps();
    }
}
