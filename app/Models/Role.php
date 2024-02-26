<?php

namespace App\Models;

class Role extends Model
{
    protected $table = 'roles';

    public $timestamps = true;

    public function permissions()
    {
        return $this->belongsToMany('App\Models\Permission');
    }

//    public function permissionRoles()
//    {
//        return $this->belongsToMany('App\PermissionRole', 'role_id', 'id');
//    }
}
