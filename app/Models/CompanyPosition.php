<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;

class CompanyPosition extends Model
{
    protected $table = 'company_positions';

    public $timestamps = true;

    use SoftDeletes;

    public function total_courses()
    {
        return $this->hasMany('App\Models\RequiredCoursePosition', 'position_id', 'id')
        ->where([['status', 1], ['created_by', Auth::user()->id]]);
    }

    public function total_coursesWorkForce()
    {
        return $this->hasMany(RequiredCourseWorkforce::class, 'position_id')
        ->where('upload_status', 1);
    }

    public function expired_courses()
    {
        return $this->hasMany(RequiredCourseWorkforce::class, 'position_id')
        ->where('upload_status', 1)
        ->where('expiry_date', '<', date('Y-m-d'));
    }

    public function valid_courses()
    {
        return $this->hasMany(RequiredCourseWorkforce::class, 'position_id')
        ->where('upload_status', 1)

        // ->where('status',1)
        ->where('expiry_date', '>', date('Y-m-d', strtotime('+90 days')));
    }

    public function aboutToExpireCourse()
    {
        $beforeThreeMonth = Carbon::now()->addDay(90)->format('Y-m-d');
        // dd($beforeThreeMonth);
        return $this->hasMany(RequiredCourseWorkforce::class, 'position_id')
        ->where('upload_status', 1)
        ->where('expiry_date', '<', date('Y-m-d', strtotime('+90 days')));
    }

    // many to many 

    public function companyDepartments()
    {
        // return $this->belongsToMany(CompanyDepartment::class);
        return $this->belongsToMany('App\Models\CompanyDepartment', 'department_position','position_id','department_id');
    }

    // end many  to many 
}
