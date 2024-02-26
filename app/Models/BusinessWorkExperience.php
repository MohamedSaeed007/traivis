<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class BusinessWorkExperience extends Model
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
        'business_id',
    ];

    public function business()
    {
        return $this->belongsTo(Business::class);
    }

}
