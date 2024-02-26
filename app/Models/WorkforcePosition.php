<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;

class WorkforcePosition extends Model
{
    use SoftDeletes;

    protected $table = 'workforce_positions';

    public $timestamps = true;

    public function workforce_positions_data()
    {
        return $this->hasOne('App\Models\CompanyPosition', 'id', 'position_id')->where('status', 1);
    }

    public function users()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
