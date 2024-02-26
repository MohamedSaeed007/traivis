<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class InstituteInstructorInvitation extends Model
{
    use HasFactory;
    protected $table = 'institute_instructor_invitations';
    protected $fillable=[
        'course_id',
        'institute_id',
        'instructor_id',
        'started_at',
        'instructor_response',
        'institute_response',
        'status',
        'hours',
        'delivery_mode',
        'agreed_price',
        'agreed_price_currency',
        'institute_price',
        'institute_price_currency',
        'instructor_price',
        'instructor_price_currency',
        'sent_on',
    ];
    public function course()
    {
        return $this->belongsTo(Course::class,'course_id','id');
    }

    public function instructor()
    {
        return $this->belongsTo(Business::class,'instructor_id','id');
    }

    public function institute()
    {
        return $this->belongsTo(Business::class,'institute_id','id');
    }
}
