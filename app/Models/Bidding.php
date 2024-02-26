<?php

namespace App\Models;

use App\Traits\HasCachedMedia;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Bidding extends Model implements HasMedia
{
    use SoftDeletes;
    use InteractsWithMedia;
    use HasCachedMedia {
        HasCachedMedia::getMedia insteadof InteractsWithMedia;
        HasCachedMedia::getFirstMedia insteadof InteractsWithMedia;
        HasCachedMedia::getFirstMediaUrl insteadof InteractsWithMedia;
    }

    public $timestamps = true;
    protected $table = 'biddings';
    protected $fillable = [
        'language_code',
        'trainees',
        'bidding_start_date',
        'bidding_end_date',
        'request_document',
        'voucher',
        'name',
        'number_of_employees',
        'status',
        'document',
        'message',
        'privacy',
    ];
    protected $dates = ['deleted_at'];

    public function biddingRequestCourse()
    {
        return $this->belongsTo('App\Models\Course', 'required_course_id', 'id');
    }

    // many to many

    public function categories()
    {
        return $this->belongsToMany(
            'App\Models\Category',
            'bidding_category',
            'bidding_id',
            'category_id',
        );
    }

    public function industries()
    {
        return $this->belongsToMany(
            'App\Models\Industry',
            'bidding_industry',
            'bidding_id',
            'industry_id',
        );
    }

    // end many to many

    // one to many
    public function BiddingOffers()
    {
        return $this->hasMany(BiddingOffer::class);
    }

    // one to one

    public function language()
    {
        return $this->belongsTo(language::class, 'language_code', 'code');
    }

    public function business()
    {
        return $this->belongsTo(Business::class);
    }

    // end one to one

    public function biddingRequestCategory()
    {
        return $this->belongsTo('App\Models\Category', 'category_id', 'id');
    }

    public function companyDetails()
    {
        return $this->belongsTo('App\Models\User', 'company_id', 'id');
    }

    public function couponCodeCheck()
    {
        return $this->hasOne('App\Models\CouponCode', 'bidding_id', 'id');
    }
    public function course()
    {
        return $this->belongsTo(Course::class, 'required_course_id', 'id');
    }

    public function instructorName()
    {
        return $this->belongsTo('App\Models\User', 'updated_by', 'id');
    }

    public function couponCodeCheckUser()
    {
        return $this->hasOne('App\Models\CouponCode', 'bidding_id', 'id')->where(
            'user_id',
            Auth::user()->id,
        );
    }
    public function invitations()
    {
        return $this->belongsToMany(Business::class);
    }
    public function MyInvitations()
    {
        return $this->belongsToMany(Business::class)->wherePivot('business_id', session('business_id'));
    }
}
