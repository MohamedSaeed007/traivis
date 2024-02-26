<?php

namespace App\Models;


class InfluencerOffer extends Model
{
    const STATUS = [
        'accepted' => 1,
        'rejected' => 2,
        'pending' => 3,
        'deactivated' => 4,
    ];

    public $fillable = [
        'user_id',
        'course_id',
        'influencer_campaign_id',
        'reached',
        'enrolled',
        'earnings',
        'status'
    ];
    public function campaign()
    {
        return $this->belongsTo(InfluencerCampaign::class, 'influencer_campaign_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id');
    }

}
