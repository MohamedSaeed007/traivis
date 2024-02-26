<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class WorkExperience extends Model
{
    use HasFactory;
    public $fillable=[
        'employer_name',
        'employment_status',
        'industry',
        'position',
        'experience',
        'location',
        'url',
        'start',
        'end',
        'user_id',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
