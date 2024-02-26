<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Branch extends Model
{
    use HasFactory , SoftDeletes;

    protected $fillable = ['branch_name_ar','branch_name_en','business_id','status','id'];

    public function projects()
    {
        return $this->belongsToMany(Project::class);
    }

    public function business()
    {
        return $this->belongsTo(Business::class);
    }

    public function departments()
    {
        return $this->hasManyThrough(Department::class,Project::class);
    }

    public function enterpriseRequiredCourses()
    {
        return $this->belongsToMany(EnterpriseRequiredCourse::class)->withTimestamps();
    }

}
