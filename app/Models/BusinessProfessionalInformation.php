<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class BusinessProfessionalInformation extends Model
{
    use HasFactory;
    public $fillable=[
        'is_freelancer',
        'show_email',
        'show_phone',
        'industry',
        'teaching_years',
        'preferred_languages',
        'preferred_subjects',
        'preferred_teaching_mode',
        'teaching_hourly_rate',
        'personal_website',
        'asscoited_link',
        'accerditions',
        'business_id'
    ];
    public function business()
    {
        return $this->belongsTo(Business::class);
    }
}
