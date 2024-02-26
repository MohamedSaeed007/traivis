<?php

namespace App\Models;

class Company extends Model
{
    protected $table = 'companies';

    public $timestamps = true;

    protected $fillable = ['name'];

    public function getUser()
    {
        return $this->hasOne('App\Models\CompanyUser', 'company_id', 'id')
            ->where('user_role', 2)
            ->first();
    }

    public function companyProjects()
    {
      //   return $this->belongsToMany(CompanyPosition::class);
      return $this->belongsToMany('App\Models\CompanyProject', 'company_project', 'company_id', 'project_id');

    }

    public function companyDepartments(){
         return $this->hasManyThrough(CompanyDepartment::class,CompanyProject::class);
    }

}
