<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Review extends Model
{
    use SoftDeletes;

    protected $guarded = [];

    public static function booted()
    {
        static::created(function (Review $review) {
            $review->course->updateReviewRatings();
            $review->course->maker();
        });
        static::updated(function (Review $review) {
            $review->course->updateReviewRatings();
        });
        static::saved(function (Review $review) {
            $review->course->updateReviewRatings();
        });
    }

    public function course(): BelongsTo
    {
        return $this->belongsTo(Course::class, 'course_id');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id')->with('photo_query');
    }
    public function replyTo(): BelongsTo
    {
        return $this->belongsTo(Review::class, 'reply_to_id');
    }
    public function reply(): HasOne
    {
        return $this->hasOne(Review::class, 'reply_to_id')->where('status','!=','spam');
    }

    public function approvedBy(): BelongsTo
    {
        return $this->belongsTo(User::class, 'approved_by_id');
    }

    /**
     * Scope a query to only include approved reviews.
     */
    public function scopeApproved(Builder $query): void
    {
        $query->where('status', 'approve');
    }
    //Commented By FSElias
    /*    public function save_and_sync($data = [])
    {
        if (is_array($data) && count($data)) {
            $this->update($data);
        } else {
            $this->save();
        }

        $course = $this->course;

        $ratingCount = $course->reviews->count();

        $ratingVal = '0.00';
        if ($ratingCount > 0) {
            $ratingVal = $course->reviews->sum('rating');
            $ratingVal = $ratingVal / $ratingCount;
        }
        $one_star_count = $course
            ->reviews()
            ->whereRating(1)
            ->count();
        $two_star_count = $course
            ->reviews()
            ->whereRating(2)
            ->count();
        $three_star_count = $course
            ->reviews()
            ->whereRating(3)
            ->count();
        $four_star_count = $course
            ->reviews()
            ->whereRating(4)
            ->count();
        $five_star_count = $course
            ->reviews()
            ->whereRating(5)
            ->count();

        $course->rating_value = $ratingVal;
        $course->rating_count = $ratingCount;
        $course->five_star_count = $five_star_count;
        $course->four_star_count = $four_star_count;
        $course->three_star_count = $three_star_count;
        $course->two_star_count = $two_star_count;
        $course->one_star_count = $one_star_count;

        $course->save();

        return $this;
    }*/
}
