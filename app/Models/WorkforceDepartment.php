<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;

class WorkforceDepartment extends Model
{
    use SoftDeletes;

    protected $table = 'workforce_departments';

    public $timestamps = true;

    public function workforce_department_data()
    {
        return $this->hasOne('App\Models\CompanyDepartment', 'id', 'department_id')->where('company_id',
            Auth::user()->id)->where('status', 1);
    }

    public function total_courses()
    {
        return $this->hasMany('App\Models\RequiredCourseDepartment', 'department_id', 'department_id')
            ->where('status', 1);
    }

    public function users()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
