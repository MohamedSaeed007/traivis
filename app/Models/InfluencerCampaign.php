<?php

namespace App\Models;


class InfluencerCampaign extends Model
{
    const STATUS = [
        'active' => 1,
        'deactivated' => 2
    ];

    public $fillable = [
        'user_id',
        'course_id',
        'end_date',
        'offer_end_date',
        'commission',
        'student_discount',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id');
    }

    public function influencerOffers()
    {
        return $this->hasMany(InfluencerOffer::class, 'influencer_campaign_id');
    }

}
