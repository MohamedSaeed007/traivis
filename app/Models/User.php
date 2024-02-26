<?php

namespace App\Models;

use App\Casts\DateTimeTZ;
use App\Contracts\ChatParticipantModel;
use App\Traits\HasCachedMedia;
use App\Traits\IsChatParticipant;
use Carbon\Carbon;
use Eloquent;
use Filament\Models\Contracts\FilamentUser;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Laravel\Cashier\Billable;
use Rawilk\Settings\Models\HasSettings;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Permission\PermissionRegistrar;
use Spatie\Permission\Traits\HasRoles;

/* @mixin Eloquent */

class User extends Authenticatable implements
    MustVerifyEmail,
    FilamentUser,
    ChatParticipantModel,
    HasMedia
{
    use SoftDeletes;
    use Notifiable;
    use HasRoles;
    use Billable;
    use HasSettings;
    use IsChatParticipant;
    use InteractsWithMedia;
    use HasCachedMedia {
        HasCachedMedia::getMedia insteadof InteractsWithMedia;
        HasCachedMedia::getFirstMedia insteadof InteractsWithMedia;
        HasCachedMedia::getFirstMediaUrl insteadof InteractsWithMedia;
    }

    // protected $with = ['media','userPrivacy'];
    // protected $with = ['businesses.media'];

    protected $guarded = [];

    protected $fillable = [
        'name',
        'username',
        'first_name',
        'middle_name',
        'last_name',
        'approved',
        'state_id',
        'city_id',
        'email',
        'password',
        'gender',
        'company_name',
        'country_id',
        'address',
        'address_2',
        'city',
        'zip_code',
        'postcode',
        'website',
        'phone',
        'about_me',
        'date_of_birth',
        'photo',
        //        'profile_pic',
        'cover_pic',
        'job_title',
        'options',
        'user_type',
        'role',
        'course_type',
        'active_status',
        'provider_user_id',
        'provider',
        'reset_token',
        'verification_status',
        'profile_completion_status',
        'remember_token',
        'timezone',
        'parent_company',
        'country',
        'otp',
        'took_survey',
        'delivery_mode',
        'description',
        'user_karma_share_id',
        'user_karma_key',
        'balance',
        'hold_balance',
        'stripe_account_id',
        'stripe_account_status',
        'pending_withdrawal',
        'paypal_email',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => DateTimeTZ::class,
    ];

    protected static function boot()
    {
        parent::boot();
    }

    public function canAccessFilament(): bool
    {
        return $this->id == 1;
    }
    public function getUrlAttribute()
    {
        return route('user-profile-social', $this->id);
    }

    public function getAvatarAttribute(): string
    {
        // $this->load('userPrivacy');
        if ((auth()->check() && auth()->id() == $this->id) || $this->userPrivacy == null) {
            return $this->hasMedia()
                ? $this->getFirstMediaUrl()
                : 'https://www.gravatar.com/avatar/' . md5($this->email) . '?s=80&d=mp';
        }

        if ($this->userPrivacy->general_profile_picture_visibility == 1) {
            if (auth()->check()) {
                $isconnected = $this->connections()
                    ->wherePivot('from_user_id', auth()->id())
                    ->orWherePivot('to_user_id', auth()->id())
                    ->first();
                if ($isconnected) {
                    return $this->hasMedia()
                        ? $this->getFirstMediaUrl()
                        : 'https://www.gravatar.com/avatar/' . md5($this->email) . '?s=80&d=mp';
                } else {
                    return 'https://www.gravatar.com/avatar/' . md5($this->email) . '?s=80&d=mp';
                }
            } else {
                return 'https://www.gravatar.com/avatar/' . md5($this->email) . '?s=80&d=mp';
            }
        }
        return $this->hasMedia()
            ? $this->getFirstMediaUrl()
            : 'https://www.gravatar.com/avatar/' . md5($this->email) . '?s=80&d=mp';
        //        return $this->profile_pic ?? 'https://www.gravatar.com/avatar/' . md5($this->id) . '?s=80&d=mp';
    }

    public function connections()
    {
        return $this->belongsToMany(User::class, 'user_connections', 'from_user_id', 'to_user_id');
    }

    public function rewards()
    {
        return $this->morphMany(Rewards::class, 'rewardable');
    }

    public function scopeActive($query)
    {
        return $query->where('active_status', 1)->with('photo_query');
    }

    // start add by mohamed

    public function scopeInstructor($query)
    {
        return $query->where('user_type', 'instructor');
    }

    public function likePosts()
    {
        return $this->belongsToMany(Post::class, 'likes')
            ->withPivot('liked')
            ->withTimestamps();
    }

    public function profileViews()
    {
        return $this->hasMany(UserProfileView::class, 'profile_id');
    }

    public function posts()
    {
        return $this->hasMany(Post::class)->orderBy('created_at', 'desc');
    }

    public function industries()
    {
        return $this->belongsToMany(Industry::class);
    }

    public function languages()
    {
        return $this->belongsToMany(Language::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public function certificates()
    {
        return $this->belongsToMany(Certificate::class)->withTimestamps();
    }
    public function certificateUsers()
    {
        return $this->hasMany(CertificateUser::class);
    }

    public function assignments()
    {
        return $this->belongsToMany(Assignment::class)
            ->using(AssignmentUser::class)
            ->withPivot(['id', 'grade', 'assignment_submission_date', 'status', 'end_time'])
            ->withTimestamps();
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

    //
    //    public function rewards()
    //    {
    //        return $this->hasMany(Rewards::class, 'user_id');
    //    }

    public function reels()
    {
        return $this->hasMany(Reel::class);
    }

    //    public function businesses()
    //    {
    //        return $this->hasMany(Business::class);
    //    }

    //https://github.com/spatie/laravel-permission/discussions/1990

    public function blogs()
    {
        return $this->hasMany(Post::class)
            ->whereType('blog')
            ->orderBy('created_at', 'desc');
    }

    public function businesses(): BelongsToMany
    {
        return $this->belongsToMany(
            Business::class,
            config('permission.table_names.model_has_roles'),
            config('permission.column_names.model_morph_key'),
            PermissionRegistrar::$teamsKey,
        )
            ->wherePivot('model_type', User::class)
            ->withPivot('role_id'); //
    }

    // end add by mohamed

    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable')
            ->whereNull('parent_id')
            ->orderBy('id', 'DESC');
    }

    public function medias()
    {
        return $this->hasMany(Media::class);
    }

    public function assignedTrainerCourses()
    {
        return $this->hasMany('App\Models\Course', 'accepted_trainer_id')->orderBy('created_at', 'desc');
    }

    public function trainerAssignedCourse()
    {
        return $this->hasMany('App\Models\Course', 'accepted_trainer_id')->orderBy('created_at', 'desc');
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function get_reviews()
    {
        return $this->belongsToMany(
            Review::class,
            'course_user',
            'user_id',
            'course_id',
            'id',
            'course_id',
        );
    }

    public function instructor_discussions()
    {
        return $this->belongsToMany(
            Discussion::class,
            'course_user',
            'user_id',
            'course_id',
            'id',
            'course_id',
        )
            ->with('user', 'user.photo_query')
            ->where('discussion_id', 0);
    }

    public function wishlist()
    {
        return $this->belongsToMany(Course::class, 'wishlists');
    }

    // public function instructor_discussions(){
    //     return $this->belongsToMany('App\Discussion', 'course_user', 'user_id', 'course_id', 'id', 'course_id')->with('user', 'user.photo_query')->where('discussion_id', 0);
    // }

    public function earnings()
    {
        return $this->hasMany(Earning::class, 'instructor_id')->where('payment_status', 'success');
    }

    public function withdraws()
    {
        return $this->hasMany(Withdraw::class)->orderBy('created_at', 'desc');
    }

    public function purchases()
    {
        return $this->hasMany(Payment::class)->orderBy('created_at', 'desc');
    }

    public function country()
    {
        return $this->belongsTo(Country::class, 'country_id');
    }

    public function attempts()
    {
        return $this->hasMany(Attempt::class);
    }

    public function getGetRatingAttribute()
    {
        $sql = "select count(reviews.id) as rating_count,
avg(reviews.rating) as rating_avg
from reviews
inner join course_user on reviews.course_id = course_user.course_id
where course_user.user_id = {$this->id} and reviews.status = 1";

        $rating = DB::selectOne(DB::raw($sql));
        $rating->rating_avg = number_format($rating->rating_avg, 2);

        return $rating;
    }

    public function isSubAdmin()
    {
        return $this->user_type === 'sub-admin';
    }

    public function getIsAdminAttribute()
    {
        return $this->isAdmin();
    }

    public function isAdmin()
    {
        return $this->user_type === 'admin';
    }

    public function getIsInstructorAttribute()
    {
        return $this->isInstructor();
    }

    public function isInstructor()
    {
        return $this->user_type === 'instructor' || $this->isAdmin() || $this->user_type === 'trainer';
    }

    public function photo_query()
    {
        return $this->belongsTo(Media::class, 'photo');
    }

    public function getGetPhotoAttribute()
    {
        if ($this->photo) {
            $url = media_image_uri($this->photo_query)->thumbnail;

            return "<img src='{$url}' class='profile-photo' alt='{$this->name}' /> ";
        }

        $arr = explode(' ', trim($this->name));

        if (count($arr) > 1) {
            $first_char = substr($arr[0], 0, 1);
            $second_char = substr($arr[1], 0, 1);
        } else {
            $first_char = substr($arr[0], 0, 1);
            $second_char = substr($arr[0], 1, 1);
        }

        $textPhoto = strtoupper($first_char . $second_char);

        $bg_color = '#' . substr(md5($textPhoto), 0, 6);
        $textPhoto = "<span class='profile-text-photo' style='color: #fff8e5'>{$textPhoto}</span>";

        return $textPhoto;
    }

    public function getGetNameAttribute()
    {
        $arr = explode(' ', trim($this->name));

        if (count($arr) > 1) {
            $first_char = substr($arr[0], 0, 1);
            $second_char = substr($arr[1], 0, 1);
        } else {
            $first_char = substr($arr[0], 0, 1);
            $second_char = substr($arr[0], 1, 1);
        }
        $name = strtoupper($first_char . $second_char);

        return $name;
    }

    public function isEnrolled($course_id = 0)
    {
        if ($course_id === 0) {
            return false;
        }

        $isEnrolled = $this->courses()
            ->where('course_user.course_id', $course_id)
            ->wherePivot('status', 'success')
            ->orderBy('created_at', 'desc')
            ->first();

        return $isEnrolled;
    }

    // Updated By Mondy

    public function courses()
    {
        return $this->belongsToMany(Course::class, 'course_user')
            ->using(CourseUser::class)
            ->withPivot([
                'transaction_id',
                'permissions',
                'purchased_by',
                'course_price',
                'status',
                'course_price',
            ])
            ->withTimestamps()
            ->orderBy('created_at', 'desc');
    }

    public function isInstructorInCourse($course_id)
    {
        return $this->courses()
            ->whereCourseId($course_id)
            ->first();
    }

    public function complete_course($course_id = null)
    {
        if (!$course_id) {
            return false;
        }

        $is_completed = Complete::whereCompletedCourseId($course_id)
            ->whereUserId($this->id)
            ->first();

        if ($is_completed) {
            return $is_completed;
        }
        $data = [
            'user_id' => $this->id,
            'completed_course_id' => $course_id,
            'completed_at' => Carbon::now()->toDateTimeString(),
        ];

        return Complete::create($data);
    }

    public function is_completed_course($course_id)
    {
        $is_completed = Complete::whereCompletedCourseId($course_id)
            ->whereUserId($this->id)
            ->first();

        return $is_completed;
    }

    public function update_option($key = null, $value = '')
    {
        if ($key) {
            $options = (array) json_decode($this->options, true);
            $options[$key] = $value;
            $this->update(['options' => $options]);
        }
    }

    public function student_enrolls()
    {
        return $this->belongsToMany(
            CourseUser::class,
            'course_user',
            'user_id',
            'course_id',
            'id',
            'course_id',
        )->whereStatus('success');
    }

    /**
     * Earning Related
     */
    public function getEarningAttribute()
    {
        $sales_amount = $this->earnings->sum('amount');

        $earnings = $this->earnings->sum('instructor_amount');
        $commission = $this->earnings->sum('admin_amount');

        $withdraws_sum = $this->withdraws->where('status', '!=', 'rejected')->sum('amount');
        $withdraws_total = $this->withdraws->where('status', 'approved')->sum('amount');

        $balance = $earnings - $withdraws_sum;

        $data = [
            'sales_amount' => $sales_amount,
            'commission' => $commission,
            'earnings' => $earnings,
            'balance' => $balance,
            'withdrawals' => $withdraws_total,
        ];

        return (object) $data;
    }

    /* public function enroll_sync()
    {
        $enrolledCourse = (array) $this->enrolls()
            ->pluck('course_id')
            ->all();
        $enrolledCourse = array_unique($enrolledCourse);
        $this->update_option('enrolled_courses', $enrolledCourse);

        return $this;
    } */

    public function getWithdrawMethodAttribute()
    {
        $method = $this->get_option('withdraw_preference');
        $method_key = array_get($method, 'method');

        if (!array_get($method, 'method')) {
            return null;
        }

        $saved_method = active_withdraw_methods($method_key);
        $saved_method['method_key'] = $method_key;
        $form_fields = array_get($saved_method, 'form_fields');

        if (is_array($form_fields) && count($form_fields)) {
            foreach ($form_fields as $form_key => $form_value) {
                $form_value['value'] = array_get($method, $method_key . '.' . $form_key);
                $form_fields[$form_key] = $form_value;
            }
        }

        $saved_method['form_fields'] = $form_fields;
        $saved_method['admin_form_fields'] = get_option("withdraw_methods.{$method_key}");

        return (object) $saved_method;
    }

    public function get_option($key = null, $default = null)
    {
        if ($this->options) {
            $options = (array) json_decode($this->options, true);
            $value = get_from_array($key, $options);

            if ($value) {
                return $value;
            }
        }

        return $default;
    }

    public function get_attempt($quiz_id)
    {
        $attempt = Attempt::where('user_id', $this->id)
            ->where('quiz_id', $quiz_id)
            ->first();

        return $attempt;
    }

    public function selectedWorkForceUser($sheduleId, $userId)
    {
        return $this->hasOne('App\Models\LiveScheduleUser', 'user_id', 'id')
            ->where([['live_schedule_id', $sheduleId], ['user_id', $userId]])
            ->first();
    }

    public function trainers($trainerId, $courseId)
    {
        return $this->belongsTo('App\Models\CourseAssignTrainer', 'id', 'trainer_user_id')
            ->where([['trainer_user_id', $trainerId], ['course_id', $courseId]])
            ->first();
    }

    public function trainingCenterTrainer($userId)
    {
        // dd($userId);
        return $this->hasOne(InstructorTrainer::class, 'trainer_user_id')
            ->where([
                ['trainer_user_id', $userId],
                ['instructor_user_id', Auth::user()->id],
                ['request_status', 1],
            ])
            ->exists();
    }

    public function trainingCenterTrainerRequested($userId)
    {
        // dd($userId);
        return $this->hasOne(InstructorTrainer::class, 'trainer_user_id')
            ->where([
                ['trainer_user_id', $userId],
                ['instructor_user_id', Auth::user()->id],
                ['request_status', 0],
            ])
            ->exists();
    }

    public function messsageLastTime()
    {
        return $this->belongsTo(Chat::class, 'sender_id', 'receiver_id')->latest();
    }

    //************************************************************************************* */
    public function totaldWorkForceCourse()
    {
        return $this->hasMany(RequiredCourseWorkforce::class, 'user_id')->where('upload_status', 1);

        // ->where('status',1)
    }

    public function validWorkForceCourse()
    {
        return $this->hasMany(RequiredCourseWorkforce::class, 'user_id')
            ->where('upload_status', 1)

            // ->where('status',1)
            ->where('expiry_date', '>', date('Y-m-d', strtotime('+90 days')));
    }

    public function expiredWorkForceCourse()
    {
        return $this->hasMany(RequiredCourseWorkforce::class, 'user_id')
            ->where('upload_status', 1)
            ->where('expiry_date', '<', date('Y-m-d'));
    }

    public function aboutToExpireCourse()
    {
        $beforeThreeMonth = Carbon::now()
            ->addDay(90)
            ->format('Y-m-d');
        // dd($beforeThreeMonth);
        return $this->hasMany(RequiredCourseWorkforce::class, 'user_id')
            ->where('upload_status', 1)
            ->whereBetween('expiry_date', [date('Y-m-d'), $beforeThreeMonth]);
    }

    public function notifications()
    {
        return $this->morphMany(Notification::class, 'notifiable');
    }

    public function bookmarks()
    {
        return $this->morphMany(Bookmark::class, 'bookmarkable')->orderBy('created_at', 'DESC');
    }

    public function enterpriseWorkforce()
    {
        return $this->hasMany(EnterpriseWorkforce::class)->withTimestamps();
    }

    ////////////////////to get contractor employees
    public function ContractorEmployees()
    {
        return $this->belongsToMany(User::class, 'contractor_employees', 'contractor_id', 'employee_id');
    }

    public function completes()
    {
        return $this->hasMany(Complete::class);
    }

    public function lectures()
    {
        return $this->belongsToMany(Lecture::class)->withPivot([
            'muted',
            'disallowed',
            'upraised',
            'muted_by_instructor',
            'attended_minutes',
        ]);
    }

    //from students model
    public function quizes()
    {
        return $this->hasMany(StudentQuiz::class);
    }

    public function assignmentResponses(): MorphMany
    {
        return $this->morphMany(AssignmentUserResponse::class, 'responseable');
    }

    /* public function assignments()
     {
         return $this->hasMany(StudentAssignment::class);
     }*/

    /*public function assignments_submissions()
    {
        return $this->morphMany(AssignmentSubmission::class, 'assignmentable');
    }*/

    public function payments(): MorphMany
    {
        return $this->morphMany(Transaction::class, 'payerable');
    }

    public function fselias_courses(): BelongsToMany
    {
        return $this->belongsToMany(Course::class);
    }

    public function fselias_quizes(): BelongsToMany
    {
        return $this->belongsToMany(Quiz::class, 'student_quizzes');
    }

    public function educationInformations(): HasMany
    {
        return $this->hasMany(EducationInformation::class);
    }

    public function workExperiences(): HasMany
    {
        return $this->hasMany(WorkExperience::class);
    }

    public function careerInformation(): HasOne
    {
        return $this->hasOne(UserCareerInformation::class);
    }

    public function userPrivacy(): HasOne
    {
        return $this->hasOne(UserPrivacy::class);
    }

    public function isActingAsBusiness(): bool
    {
        return !is_null(session('business_id'));
    }

    public function actingAsBusiness($withMedia = 0): ?Business
    {
        $business_id = session('business_id');
        if (
            $business_id &&
            ($business = Business::query()
                ->when($withMedia, function ($q) {
                    $q->with('media');
                })
                ->findOrFail($business_id))
        ) {
            return $business;
        }
        return null;
    }
    public function socilaMedia()
    {
        return $this->morphOne(SocilaMedia::class, 'modelable');
    }
}
