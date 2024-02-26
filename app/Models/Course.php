<?php

namespace App\Models;

use App\Classes\Helper;
use App\Traits\CallCourseDetailsFromCourse;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Casts\AsCollection;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Course extends Model
{
    use CallCourseDetailsFromCourse;

    protected $with = ['courseDetails'];

    protected $fillable = [
        'course_types',
        'slug',
        'publish_status',
        'visibility',
        'delivery_mode',
        'launch_at',
        'course_duration',
        'rating_value',
        'rating_count',
        'one_star_count',
        'two_star_count',
        'three_star_count',
        'four_star_count',
        'five_star_count',
        'published_at',
        'business_id',
        'last_lecture_end_date',
        'visited_after_publish',
    ];
    protected $casts = [
        'delivery_mode' => AsCollection::class,
    ];
    protected static function booted()
    {
        static::created(function (Course $course) {
            $course->certificate()->create([]);
        });
    }

    protected static function generateUniqueSlug($title, $id = null)
    {
        $starting_slug = Helper::slugify($title);
        $slug = $starting_slug;
        $count = 1;

        // Check if the slug already exists in the database
        $query = static::where('slug', $slug);
        if ($id !== null) {
            $query->where('id', '<>', $id);
        }
        while ($query->where('slug', $slug)->exists()) {
            $count++;
            $slug = $starting_slug . '-' . $count;
        }

        return $slug;
    }
    public function getDurationAttribute()
    {
        $seconds = $this->course_duration;
        return gmdate('H:i:s', $seconds);
    }

    public function getDeliveryModesAttribute()
    {
        //have not created yet
        if (!$this->id) {
            return [];
        }
        if (!$this->delivery_mode) {
            $this->updateLecturesRelatedAttributes();
        }

        return $this->delivery_mode
            ?->map(function ($item) {
                return config('enums.delivery_modes.' . $item);
            })
            ->toArray() ?? [];
    }

    public function updateLecturesRelatedAttributes(): void
    {
        $this->update([
            'course_duration' => $this->lectures()->sum('duration'),
            'delivery_mode' => $this->lectures()
                ->pluck('delivery_mode')
                ->filter()
                ->unique(),
            'last_lecture_end_date' => $this->lectures()
                ->where('delivery_mode', '!=', 2)
                ->latest()
                ->first()?->end_date,
        ]);
    }

    public function lectures(): HasMany
    {
        return $this->hasMany(Lecture::class);
    }

    public function updateReviewRatings(): void
    {
        $ratingCount = $this->reviews->count();

        $ratingVal = 0;
        if ($ratingCount > 0) {
            $ratingVal = $this->reviews->sum('rating') / $ratingCount;
        }

        $this->update([
            'rating_value' => $ratingVal,
            'rating_count' => $ratingCount,
            'one_star_count' => $this->reviews()
                ->whereRating(1)
                ->count(),
            'two_star_count' => $this->reviews()
                ->whereRating(2)
                ->count(),
            'three_star_count' => $this->reviews()
                ->whereRating(3)
                ->count(),
            'four_star_count' => $this->reviews()
                ->whereRating(4)
                ->count(),
            'five_star_count' => $this->reviews()
                ->whereRating(5)
                ->count(),
        ]);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class)
            ->where('status', 'approve')
            ->with('user', 'reply')
            ->orderBy('id', 'desc');
    }

    public function underReviewCourseDetails()
    {
        return $this->hasOne(CourseDetails::class)->where('publish_status', 'Under review');
    }

    public function courseDetails()
    {
        return $this->hasOne(CourseDetails::class)->where('is_clone', 0);
    }

    public function courseDetailsClone()
    {
        return $this->hasOne(CourseDetails::class)->where('is_clone', 1);
    }

    public function reviewsProcess()
    {
        return $this->hasMany(Review::class)
            ->whereNull('reply_to_id')
            ->where(function ($query) {
                $query->where('status', 'approve')->when(auth()->check(), function ($query) {
                    if (
                        auth()
                        ->user()
                        ->hasRole('super_admin')
                    ) {
                        $query->orWhere(function ($query) {
                            $query->Where('status', ['hold', 'approve']);
                        });
                    } else {
                        $query->orWhere(function ($query) {
                            $query->Where('status', ['hold', 'approve'])->whereUserId(Auth()->id());
                        });
                    }
                });
            })
            ->with('user', 'reply')
            ->orderBy('id', 'desc');
    }

    public function maker()
    {
        return $this->belongsTo(Business::class, 'business_id', 'id');
    }

    public function cartItems()
    {
        return $this->hasMany(CartItem::class);
    }

    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }

    public function courseViews()
    {
        return $this->hasMany(CourseView::class);
    }

    public function studentCourses()
    {
        return $this->hasMany(StudentCourse::class);
    }

    // Relationship with the Section model

    public function scopePublish($query)
    {
        return $query
            ->where('publish_status', 'published')
            ->where('visibility', 'public')
            ->with('author');
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function instructors()
    {
        return $this->belongsToMany(User::class)->withPivot('added_at');
    }

    public function industries()
    {
        return $this->belongsToMany(Industry::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public function assignments(): HasMany
    {
        return $this->hasMany(Assignment::class);
    }

    public function quizzes(): HasMany
    {
        return $this->hasMany(Quiz::class);
    }

    public function attempts()
    {
        return $this->hasMany(Attempt::class);
    }

    public function assignment_submissions_waiting()
    {
        return $this->hasMany(AssignmentSubmission::class)->where('is_evaluated', '<', 1);
    }

    public function completes(): \Illuminate\Database\Eloquent\Relations\morphMany
    {
        return $this->morphMany(Complete::class, 'completable');
    }

    public function teasers()
    {
        return $this->hasMany(TeaserOriginalDraft::class);
    }

    /**
     * Delete Event
     */
    public function delete_and_sync()
    {
        DB::table('course_user')
            ->where('course_id', $this->id)
            ->delete();
        $this->sections()->delete();
        $this->contents()->delete(); //Delete lecture, assignments, quiz
        $this->contents_attachments()->delete();
        $this->assignment_submissions()->delete();
        DB::table('completes')
            ->where('course_id', $this->id)
            ->delete();
        DB::table('completes')
            ->whereCourseId('completed_course_id', $this->id)
            ->delete();
        $this->delete();

        return $this;
    }

    public function sections()
    {
        return $this->hasMany(Section::class)->orderBy('sort_order', 'asc');
    }

    public function contents()
    {
        return $this->hasMany(Content::class);
    }

    public function contents_attachments()
    {
        return $this->hasMany(Attachment::class, 'belongs_course_id', 'id');
    }

    public function assignment_submissions()
    {
        return $this->hasMany(AssignmentSubmission::class);
    }
    //total_video_time
    //course_duration

    public function underReviewContents()
    {
        return $this->hasMany(Content::class)->where('publish_status', 'Under review');
    }

    /**
     * Sync anytime With Contents
     */
    public function sync_everything()
    {
        $now = Carbon::now()->toDateTimeString();

        $course = $this;
        $course_runtime = $course->lectures->sum('video_time');
        $total_lectures = $course->lectures->count();
        $total_assignments = $course->assignments->count();
        $total_quiz = $course->quizzes->count();

        $course->total_video_time = $course_runtime;
        $course->total_lectures = $total_lectures;
        $course->total_assignments = $total_assignments;
        $course->total_quiz = $total_quiz;
        $course->save();
    }

    public function getUrlAttribute()
    {
        return route('course', $this->slug);
    }

    public function completed_percent($user = null)
    {
        /**
         * If not passed user id, get user id from auth
         * if auth user is not available, return percent 0;
         */
        if (!$user) {
            $user = Auth::user();
        }
        if (!$user instanceof User) {
            $user = \App\Models\User::find($user);
        }

        $completed_course = (array) $user->get_option('completed_courses');

        return (int) array_get($completed_course, $this->id . '.percent');

        /*
        $total_contents = (int) Content::whereCourseId($this->id)->count();
        $total_completed = (int) Complete::whereUserId($user->id)->whereCourseId($this->id)->count();
        if ( ! $total_contents || ! $total_completed){
        return 0;
        }
        return (int) number_format(($total_completed * 100 ) / $total_contents);
        */
    }

    public function getFinalRatingValue()
    {
        $ratingCount = $this->reviews->count();
        if ($ratingCount > 0) {
            $ratingVal = $this->reviews->sum('rating');
            $ratingVal = $ratingVal / $ratingCount;
        } else {
            $ratingVal = 0;
        }
        return $ratingVal;
    }

    /* public function get_ratings($key = null)
    {
        $ratingCount = $this->rating_count;

        $five_percent = 0;
        if ($this->five_star_count > 0) {
            $five_percent = ($this->five_star_count * 100) / $ratingCount;
        }
        $four_percent = 0;
        if ($this->four_star_count > 0) {
            $four_percent = ($this->four_star_count * 100) / $ratingCount;
        }
        $three_percent = 0;
        if ($this->three_star_count > 0) {
            $three_percent = ($this->three_star_count * 100) / $ratingCount;
        }
        $two_percent = 0;
        if ($this->two_star_count > 0) {
            $two_percent = ($this->two_star_count * 100) / $ratingCount;
        }
        $one_percent = 0;
        if ($this->one_star_count > 0) {
            $one_percent = ($this->one_star_count * 100) / $ratingCount;
        }

        $ratings = [
            'rating_count' => $ratingCount,
            'rating_avg' => $this->rating_value,
            'stats' => [
                5 => [
                    'count' => $this->five_star_count,
                    'percent' => number_format($five_percent),
                ],
                4 => [
                    'count' => $this->four_star_count,
                    'percent' => number_format($four_percent),
                ],
                3 => [
                    'count' => $this->three_star_count,
                    'percent' => number_format($three_percent),
                ],
                2 => [
                    'count' => $this->two_star_count,
                    'percent' => number_format($two_percent),
                ],
                1 => [
                    'one_count' => $this->one_star_count,
                    'percent' => number_format($one_percent),
                ],
            ],
        ];

        if ($key) {
            return array_get($ratings, $key);
        }

        return $ratings;
    } */

    /* public function getDripItemsAttribute()
    {
        $dripItems = [
            'sections' => [],
            'contents' => [],
        ];

        if (!Auth::check()) {
            return $dripItems;
        }

        $dripSectionIds = [];
        $dripContentIds = [];
        $dripSections = $this->sections()
            ->where('unlock_date', '!=', null)
            ->orWhere('unlock_days', '>', 0)
            ->get();
        $dripContents = $this->contents()
            ->where('unlock_date', '!=', null)
            ->orWhere('unlock_days', '>', 0)
            ->get();

        $time = Carbon::now()->timestamp;
        $user = Auth::user();
        $isEnrol = $user->isCourseUsered($this->id);

        foreach ($dripSections as $dripSection) {
            if ($dripSection->unlock_date && strtotime($dripSection->unlock_date) > $time) {
                $dripSectionIds[] = $dripSection->id;
            } elseif ($dripSection->unlock_days && $dripSection->unlock_days > 0) {
                $unlock_date = Carbon::parse($isEnrol->created_at)->addDays($dripSection->unlock_days);
                $now = Carbon::now();

                if ($unlock_date->gt($now)) {
                    $dripSectionIds[] = $dripSection->id;
                }
            }
        }

        foreach ($dripContents as $dripContent) {
            if ($dripContent->unlock_date && strtotime($dripContent->unlock_date) > $time) {
                $dripContentIds[] = $dripContent->id;
            } elseif ($dripContent->unlock_days && $dripContent->unlock_days > 0) {
                $unlock_date = Carbon::parse($isEnrol->created_at)->addDays($dripContent->unlock_days);
                $now = Carbon::now();

                if ($unlock_date->gt($now)) {
                    $dripContentIds[] = $dripContent->id;
                }
            }
        }

        $dripItems['sections'] = array_unique($dripSectionIds);
        $dripItems['contents'] = array_unique($dripContentIds);

        return $dripItems;
    } */

    /* public function liveSection()
    {
        return $this->hasOne('App\Models\Section', 'course_id', 'id')->where('section_type', 3);
    }

    public function coursePurchaseEmployee()
    {
        return $this->hasOne('App\Models\CoursePurchase', 'purchased_course_id', 'id');
    }

    public function entrolledStatusChange()
    {
        return $this->belongsTo('App\Models\CourseUser', 'id', 'course_id');
    } */

    /* public function completeCourses()
    {
        return $this->hasMany(Complete::class);
    } */

    public function certificate()
    {
        return $this->hasOne(Certificate::class);
    }

    public function post()
    {
        return $this->hasOne(Post::class);
    }

    public function courseCertificate($userId, $completeCourseId)
    {
        return $this->hasMany(CertificateUpload::class)
            ->where([
                ['certificate_uploads.user_id', $userId],
                ['certificate_uploads.course_id', $completeCourseId],
            ])
            ->get();
    }

    public function transactions()
    {
        return $this->morphMany(Transaction::class, 'productable');
    }

    public function isMaker(): bool
    {
        $maker = $this->maker;

        if (!$maker) {
            return false;
        }

        $currentEntity = Helper::getCurrentEntity();
        if ($currentEntity instanceof User) {
            $makerToCheck = $currentEntity->businesses()->find($maker->id);
        } else {
            $makerToCheck = $currentEntity;
        }

        return $maker->is($makerToCheck);
    }

    public function tasks(): HasMany
    {
        return $this->hasMany(CourseTask::class, 'course_id')->where(function ($q) {
            $q->where('institute_id', session('business_id'));
            $q->orWhere('instructor_id', session('business_id'));
        });
    }

    public function isEnrollable()
    {
        return $this->courseDetails->seats > $this->users()->count();
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'course_user')
            ->where('status', 'success')
            ->using(CourseUser::class)
            ->withPivot(['transaction_id', 'permissions', 'purchased_by', 'course_price', 'status'])
            ->withTimestamps()
            ->orderBy('created_at', 'desc');
    }
    public function courseUsers()
    {
        return $this->hasMany(CourseUser::class);
    }

    public function influencerCampaigns()
    {
        return $this->hasMany(InfluencerCampaign::class);
    }

    public function generateCertificate($userId)
    {
        // dd($this);
        //return false if the course has Live or F2F Lecture
        $lectures = $this->lectures()->whereIn('section_id', [1, 2])->exists();
        if ($lectures) {
            return false;
        }

        $quizes = $this->quizzes;
        foreach ($quizes as $quiz) {
            //return false if any quiz has open-ended questions
            // if ($quiz->questions()->where('type', 'opened')->exists()) {
            //     return false;
            // }
            //return false if user has failed in any quiz
            $attempts = $this->attempts()->where('quiz_id', $quiz->id)->where('status', 'Passed')->exists();
            if (!$attempts) {
                return false;
            }
        }


        //return false if the attended lectures not equal course lectures
        $attendedLecturesCount = $this->lectures()->whereRelation('users', 'user_id', $userId)->count();
        if ($attendedLecturesCount != count($this->lectures)) {
            return false;
        }
        $this->certificate->users()->syncWithoutDetaching($userId);
    }
}
