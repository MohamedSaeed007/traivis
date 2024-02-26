<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;

class WorkforceProject extends Model
{
    use SoftDeletes;

    protected $table = 'workforce_projects';

    public $timestamps = true;

    public function workforce_projects_data()
    {
        return $this->hasOne('App\Models\CompanyProject', 'id', 'project_id')->where('status', 1);
    }
}