<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class CourseCategory extends Model
{
    use HasFactory;

    //Deprecated
    protected $fillable = [
        'name'
    ];
}