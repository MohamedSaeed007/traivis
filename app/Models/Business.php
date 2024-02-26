<?php

namespace App\Models;

use App\Contracts\ChatParticipantModel;
use App\Traits\HasCachedMedia;
use App\Traits\IsChatParticipant;
use Assada\Achievements\Achiever;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use LucasDotVin\Soulbscription\Models\Concerns\HasSubscriptions;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Permission\PermissionRegistrar;

class Business extends Model implements ChatParticipantModel, HasMedia
{
    use HasFactory;
    use HasSubscriptions;
    use Achiever;
    use IsChatParticipant;
    use \Staudenmeir\EloquentHasManyDeep\HasRelationships;
    use InteractsWithMedia;
    use HasCachedMedia {
        HasCachedMedia::getMedia insteadof InteractsWithMedia;
        HasCachedMedia::getFirstMedia insteadof InteractsWithMedia;
        HasCachedMedia::getFirstMediaUrl insteadof InteractsWithMedia;
    }

    protected $fillable = [
        'business_name',
        'business_number',
        'business_type',
        'business_email',
        'business_phone_one',
        'business_phone_two',
        'business_website',
        'course_categories',
        'course_industries',
        'course_languages',
        'contact_full_name',
        'country_id',
        'state',
        'city',
        'suspend',
        'approved',
        'waiting',
        'created_by',
        // 'user_id',
        'subscription_id',
        'tier_id',
        'hold_balance',
        'balance',
        //        'profile_pic',
        'cover_pic',
        'description',
        'is_verified',
    ];

    // protected $with = ['media', 'settings', 'followers'];
    public static function booted()
    {
        self::creating(function ($business) {
            $business->business_number = self::generateBusinessNumber();
        });

        // here assign this team to a global user with global default role
        self::created(function ($the_new_business_model) {
            // get session team_id for restore it later
            $session_team_id = getPermissionsTeamId();
            // set actual new team_id to package instance
            setPermissionsTeamId($the_new_business_model);
            // get the admin user and assign roles/permissions on new team model
            //            if(Role::where('name','super_admin')->first())
            //            {
            User::find(1)->assignRole('super_admin');
            User::find($the_new_business_model->created_by)->assignRole('owner');
            //            }
            // restore session team_id to package instance
            setPermissionsTeamId($session_team_id);
        });
    }

    protected static function generateBusinessNumber()
    {
        $number = sprintf(
            config('app.business_number_format'),
            'TR',
            now()->format('Ymd'),
            mt_rand(1, 9999999),
        );

        if (self::businessNumberExists($number)) {
            return self::generateBusinessNumber();
        }

        return $number;
    }

    protected static function businessNumberExists($number)
    {
        // query the database and return a boolean
        // for instance, it might look like this in Laravel
        return self::whereBusinessNumber($number)->exists();
    }

    public function achievementProgressPercentage($className)
    {
        $currentPoints = $this->achievementStatus($className)->points;
        $requiredPointsToUnlock = $className->getPoints();
        return round(($currentPoints / $requiredPointsToUnlock) * 100);
    }

    public function users(): BelongsToMany
    {
        //        dump(
        //            config('permission.table_names.model_has_roles'),
        //            config('permission.column_names.model_morph_key')
        //        );

        $relationship = $this->belongsToMany(
            User::class,
            config('permission.table_names.model_has_roles'),
            PermissionRegistrar::$teamsKey,
            config('permission.column_names.model_morph_key'),
            //            'field2',
            //            'field3',
            //            'field4',
        )->withPivot(PermissionRegistrar::$pivotRole);

        ////        dd(PermissionRegistrar::$teamsKey);
        ////        dd(PermissionRegistrar::$pivotRole);
        //        $relationship = $this->belongsToMany(
        //            Business::class,
        //            config('permission.table_names.model_has_roles'),
        //            config('permission.column_names.model_morph_key'),
        //            )
        //            ->wherePivot('model_type',
        //                User::class
        //            )
        ////            ->wherePivot(PermissionRegistrar::$teamsKey,
        ////                $this->id
        ////            )
        //            ->withPivot(PermissionRegistrar::$pivotRole)//
        //        ;

        //        dd(
        ////            PermissionRegistrar::$teamsKey,
        //            $relationship->getBindings(),
        //            $relationship->toSql()
        //        );
        return $relationship;
    }

    public function getReviewsCount()
    {
        $ratingCount = 0;
        foreach ($this->courses as $course) {
            $ratingCount += $course->reviews->count();
        }
        return $ratingCount;
    }

    public function tierFeatures()
    {
        return $this->belongsToMany(TierFeature::class)->withPivot(['consumed']);
    }

    public function getFinalRatingValue()
    {
        $ratingCount = $this->reviews->count();

        $ratingVal = 0;
        if ($ratingCount > 0) {
            $ratingVal = $this->reviews->sum('rating') / $ratingCount;
        }

        return number_format($ratingVal, 2);
    }

    public function reviews()
    {
        return $this->hasManyThrough(Review::class, Course::class);
    }

    public function assignmentResponses()
    {
        return $this->morphMany(AssignmentUserResponse::class, 'responseable');
    }

    public function tierTierFeatures()
    {
        return $this->belongsToMany(
            TierTierFeature::class,
            'business_tier_tier_feature',
            'business_id',
            'tier_tier_feature_id',
        )->withPivot(['consumed']);
    }

    public function teaserOriginalDrafts()
    {
        return $this->hasMany(TeaserOriginalDraft::class);
    }

    public function courseViews()
    {
        return $this->hasManyThrough(CourseView::class, Course::class);
    }

    public function owner()
    {
        return $this->belongsTo(User::class, 'created_by', 'id');
    }

    public function promoCodes()
    {
        return $this->belongsToMany(PromoCode::class);
    }

    public function tier()
    {
        return $this->belongsTo(Tier::class);
    }

    public function posts()
    {
        return $this->hasMany(Post::class)->orderBy('created_at', 'desc');
    }

    public function hints()
    {
        return $this->hasMany(Post::class)
            ->whereType('hint')
            ->latest();
    }

    public function biddings()
    {
        return $this->hasMany(Bidding::class);
    }

    public function biddingOffers()
    {
        return $this->hasMany(App\Models\BiddingOffer::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'business_category', 'business_id', 'category_id');
    }

    public function industries()
    {
        return $this->belongsToMany(Industry::class);
    }

    public function languages()
    {
        return $this->belongsToMany(Language::class);
    }

    public function reels()
    {
        return $this->hasMany(Reel::class);
    }

    public function blogsPublished()
    {
        return $this->blogs()->whereStatus('published');
    }

    public function blogs()
    {
        return $this->hasMany(Post::class)
            ->whereType('blog')
            ->orderBy('created_at', 'desc');
    }

    public function followers()
    {
        return $this->hasMany(BusinessFollow::class);
    }

    public function notifications()
    {
        return $this->morphMany(Notification::class, 'notifiable');
    }

    public function rewards()
    {
        return $this->morphMany(Rewards::class, 'rewardable');
    }

    public function bookmarks()
    {
        return $this->morphMany(Bookmark::class, 'bookmarkable')->orderBy('created_at', 'DESC');
    }

    public function coursesPublished()
    {
        return $this->courses()->whereStatus('publish');
    }

    public function courses()
    {
        return $this->hasMany(Course::class);
    }

    public function students()
    {
        return $this->hasManyDeepFromRelations($this->courseUsers(), (new CourseUser())->user())
            ->where('course_user.status', 'success')
            ->distinct()
            ->with([
                'courses' => function ($courseQuery) {
                    $courseQuery->with([
                        'transactions',
                        'attempts' => function ($q) {
                            $q->latest();
                        },
                        'assignments' => function ($q) {
                            $q->with(['users']);
                            $q->latest();
                        },
                    ]);
                    $courseQuery->where('courses.business_id', $this->id);
                } /*, 'courses.attempts', 'courses.assignments'*/,
            ])
            ->withCount([
                'courses' => function ($q) {
                    $q->distinct();
                    $q->where('courses.business_id', $this->id);
                },
            ]);
    }

    public function courseUsers()
    {
        return $this->hasManyThrough(CourseUser::class, Course::class)->where(
            'course_user.status',
            'success',
        );
    }

    public function getAvatarAttribute(): string
    {
        return $this->hasMedia()
            ? $this->getFirstMediaUrl()
            : 'https://www.gravatar.com/avatar/' . md5($this->business_email) . '?s=80&d=mp';
        //        return $this->profile_pic ?? 'https://www.gravatar.com/avatar/' . md5($this->id) . '?s=80&d=mp';
    }

    public function getUrlAttribute()
    {
        return route('business-profile-social', $this->id);
    }

    // many to many

    // end many to many

    // one to many

    public function settings()
    {
        return $this->hasMany(BusinessAppSetting::class);
    }

    public function branches()
    {
        return $this->hasMany(Branch::class);
    }

    public function positions()
    {
        return $this->hasMany(Position::class);
    }

    public function projects()
    {
        return $this->hasMany(Project::class);
    }

    public function departments()
    {
        return $this->hasMany(Department::class);
    }

    public function enterpriseWorkforces()
    {
        return $this->hasMany(EnterpriseWorkforce::class);
    }

    public function enterpriseRequiredCourses()
    {
        return $this->hasMany(EnterpriseRequiredCourse::class);
    }

    public function cart()
    {
        return $this->morphOne(Cart::class, 'cartable');
    }

    public function orders()
    {
        return $this->morphMany(Order::class, 'orderable');
    }

    public function payerTransactions()
    {
        return $this->morphMany(Transaction::class, 'payerable');
    }

    public function payeeTransactions()
    {
        return $this->morphMany(Transaction::class, 'payeeable');
    }

    // end one to many

    public function getNameAttribute()
    {
        return $this->business_name;
    }

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function professionalInformation()
    {
        return $this->hasOne(BusinessProfessionalInformation::class);
    }

    public function workExperiences()
    {
        return $this->hasMany(BusinessWorkExperience::class);
    }

    public function educationInfos()
    {
        return $this->hasMany(BusinessEducationInfo::class);
    }

    public function socilaMedia()
    {
        return $this->morphOne(SocilaMedia::class, 'modelable');
    }

    public function calendarEvents(): HasMany
    {
        return $this->hasMany(BusinessCalenderEvent::class);
    }
}
