<?php

namespace App\Traits;

use App\Models\InfluencerOffer;
use App\Models\UserKarmaShare;

trait CallCourseDetailsFromCourse
{
    public function getTagsAttribute()
    {
        return $this->courseDetails?->tags;
    }
    public function getTitleAttribute()
    {
        return $this->courseDetails?->title;
    }
    public function getMetaDescriptionAttribute()
    {
        return $this->courseDetails?->meta_description;
    }
    public function getShortDescriptionAttribute()
    {
        return $this->courseDetails?->short_description;
    }
    public function getDescriptionAttribute()
    {
        return $this->courseDetails?->Description;
    }
    public function getPriceAttribute()
    {
        return $this->courseDetails?->price;
    }
    public function getSalePriceAttribute()
    {
        return $this->courseDetails?->sale_price;
    }
    public function getBenefitsAttribute()
    {
        return $this->courseDetails?->benefits;
    }
    public function getCertAccrAttribute()
    {
        return $this->courseDetails?->cert_accr;
    }
    public function getRequirementsAttribute()
    {
        return $this->courseDetails?->requirements;
    }
    public function getCourseLevelAttribute()
    {
        return $this->courseDetails?->course_level;
    }
    public function getSeatsAttribute()
    {
        return $this->courseDetails?->seats;
    }

    public function getFinalPriceAttribute()
    {
        $finalPrice = $this->courseDetails?->sale_price ?? $this->courseDetails?->price;
        if (session('user_karma_share_id') && $finalPrice) {
            $userKarmaShare = UserKarmaShare::find(session('user_karma_share_id'));
            if ($userKarmaShare->course->id == $this->id) {
                $acceptedOffer = InfluencerOffer::with('campaign')
                    ->where('status', InfluencerOffer::STATUS['accepted'])
                    ->where([
                        'user_id' => $userKarmaShare->user->id,
                        'course_id' => $this->id
                    ])->first();
                if ($acceptedOffer) {
                    $finalPrice = $finalPrice - $acceptedOffer->campaign->student_discount * $finalPrice / 100;
                }
            }

        }
        return $finalPrice ?? 0;
    }

    public function getImageAttribute()
    {
        return $this->courseDetails?->hasMedia('cover') ? $this->courseDetails?->getFirstMediaUrl('cover') : null;
    }

    public function getVideoAttribute()
    {
        return $this->courseDetails?->hasMedia('video') ? $this->courseDetails?->getFirstMedia('video') : null;
    }

    public function getThumbnailUrlAttribute()
    {
        return $this->courseDetails?->image ?? asset('uploads/placeholder-image.png');
    }
}