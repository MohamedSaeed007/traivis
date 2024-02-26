<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class InstituteWorkPlace extends Model
{
    use HasFactory;
    protected $fillable=
        [
            'worker_type', //staff,freelancer
            'instructor_id',
            'institute_id',
            'task_status',//in case freelancer: active,finished

        ];
    public function instructor()
    {
        return $this->belongsTo(Business::class,'instructor_id','id');
    }
    public function institute()
    {
        return $this->belongsTo(Business::class,'institute_id','id');
    }
}
