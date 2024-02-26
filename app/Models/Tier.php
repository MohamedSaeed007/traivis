<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tier extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'course_fee_commission',
        'freelancer_commission',
        'tender_commission',
        'pay_in_commission'
    ];

    public function businesses()
    {
        return $this->hasMany(Business::class);
    }

    public function achievements()
    {
        return $this->hasMany(AchievementDetail::class);
    }

    public function features()
    {
        return $this->belongsToMany(TierFeature::class, 'tier_tier_feature')
            ->using(TierTierFeature::class)
            ->withPivot(['id','allowed']);
    }
}
