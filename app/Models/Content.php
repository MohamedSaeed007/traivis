<?php

namespace App\Models;

use App\Mail\CourseApprovalStatus;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Spatie\EloquentSortable\Sortable;
use Spatie\EloquentSortable\SortableTrait;

class Content extends Model implements Sortable
{
    use SortableTrait;

    protected $fillable = [
        'user_id',
        'course_id',
        'section_id',
        'title',
        'slug',
        'text',
        'video_src',
        'video_time',
        'item_type',
        'is_preview',
        'status',
        'sort_order',
        'options',
        'quiz_gradable',
        'unlock_date',
        'unlock_days',
        'assignment_file',
        'quiz_file',
        'contentable_type',
        'contentable_id',
        'content_id',
        'version',
        'review_feedback',
        'publish_status',
    ];
    protected $guarded = [];
    protected $casts = [
        'options' => 'json',
    ];
    protected $appends = ['asm_file', 'qz_file'];

    public static function booted()
    {
        static::updated(function (Content $content) {
            if ($content->course->publish_status == 'Under review') {
                if (
                    $content->course->contents->contains(
                        'publish_status',
                        'Declined'
                    ) || $content->course->courseDetails->publish_status == 'Declined'
                ) {
                    $content->course->publish_status = 'Declined';
                } elseif (
                    $content->course->contents->contains(
                        'publish_status',
                        'Approved'
                    ) || $content->course->courseDetails->publish_status == 'Approved'
                ) {
                    $content->course->publish_status = 'Approved';
                }
                $content->course->save();
                Mail::to($content->course->maker->business_email)->queue(new CourseApprovalStatus($content->course));
            }
        });
        static::deleted(function ($model) {
            $model->contentable->delete();
            // if ($model->contentable_type == Quiz::class) {
            //     $model->contentable->questions->every(function ($question) {
            //         $question->options->every(function ($option) {
            //             $option->delete();
            //         });
            //         $question->forceDelete();
            //     });
            // }
        });
    }


    public function getAsmFileAttribute()
    {
        return $this->assignment_file
            ? asset("storage/course/assignments/$this->assignment_file")
            : null;
    }

    public function getQzFileAttribute()
    {
        return $this->quiz_file ? asset("storage/course/quizzes/$this->quiz_file") : null;
    }

    public function course()
    {
        //        return $this->belongsTo(Course::class)->with('sections', 'sections.items');
        return $this->belongsTo(Course::class);
    }

    public function section()
    {
        return $this->belongsTo(Section::class);
    }

    public function questions()
    {
        return $this->hasMany(Question::class, 'quiz_id')
            ->with('media')
            ->orderBy('sort_order', 'asc');
    }

    public function attempts()
    {
        return $this->hasMany(Attempt::class, 'quiz_id');
    }

    public function completes(): \Illuminate\Database\Eloquent\Relations\morphMany
    {
        return $this->morphMany(Complete::class, 'completable');
    }

    /**
     * @param null $key
     * @return mixed|null
     *
     * Get Attached Video Info
     */
    public function video_info($key = null)
    {
        $video_info = null;
        if ($this->video_src) {
            $video_info = json_decode($this->video_src, true);
        }
        if ($key && is_array($video_info)) {
            return array_get($video_info, $key);
        }

        return $video_info;
    }

    public function getUrlAttribute()
    {
        if ($this->item_type === 'lecture') {
            return route('single_lecture', [$this->course_id, $this->id]);
        } elseif ($this->item_type === 'assignment') {
            return route('single_assignment', [$this->course_id, $this->id]);
        } elseif ($this->item_type === 'quiz') {
            return route('single_quiz', [$this->course_id, $this->id]);
        }

        return null;
    }

    public function getRuntimeSecondsAttribute()
    {
        $hours = (int) $this->video_info('runtime.hours') * 3600;
        $mins = (int) $this->video_info('runtime.mins') * 60;
        $secs = (int) $this->video_info('runtime.secs');

        return $hours + $mins + $secs;
    }

    public function getRuntimeAttribute()
    {
        $seconds = $this->runtime_seconds;
        if ($seconds) {
            return seconds_to_time_format($this->runtime_seconds);
        }

        return false;
    }

    public function option($key = null, $default = null)
    {
        $options = null;
        if ($this->options) {
            $options = json_decode($this->options, true);
        }
        if ($key) {
            if (is_array($options) && array_get($options, $key)) {
                return array_get($options, $key);
            } else {
                return $default;
            }
        }

        return $options;
    }

    public function attachments()
    {
        return $this->hasMany(Attachment::class);
    }

    public function getIconHtmlAttribute()
    {
        $icon_class = 'file-text';

        if ($this->video_src) {
            $icon_class = 'youtube';
        }
        if ($this->item_type === 'assignment') {
            $icon_class = 'clipboard';
        }
        if ($this->item_type === 'quiz') {
            $icon_class = 'tasks';
        }

        return "<i class='la la-{$icon_class}'></i> ";
    }

    public function has_submission($user_id = 0)
    {
        if (!$user_id && Auth::check()) {
            $user_id = Auth::user()->id;
        }

        return $this->hasOne(AssignmentSubmission::class, 'assignment_id')->where('user_id', $user_id);
    }

    public function submissions()
    {
        return $this->hasMany(AssignmentSubmission::class, 'assignment_id');
    }

    public function previous()
    {
        return $this->hasOne(Content::class, 'course_id', 'course_id')
            ->where('sort_order', $this->sort_order - 1)
            ->where('course_id', $this->course_id)
            ->orderBy('sort_order', 'desc');
    }

    public function next()
    {
        return $this->hasOne(Content::class, 'course_id', 'course_id')
            ->where('sort_order', $this->sort_order + 1)
            ->where('course_id', $this->course_id)
            ->orderBy('sort_order', 'asc');
    }

    public function is_completed()
    {
        if (Auth::user()) {
            $user_id = Auth::user()->id;

            return $this->hasOne(Complete::class)->whereUserId($user_id);
        }

        return false;
    }

    /**
     * @param array $data
     * @return $this
     *
     * Save content and sync to all necessary place
     */
    public function save_and_sync($data = [])
    {
        if (is_array($data) && count($data)) {
            $data['video_time'] = $this->runtime_seconds;
            $this->update($data);
        } else {
            $this->video_time = $this->runtime_seconds;
            $this->save();
        }

        $this->course->sync_everything();

        return $this;
    }

    /**
     * Content Drip
     */
    public function enrolled_course()
    {
        if (!Auth::check()) {
            return null;
        }

        $user_id = Auth::check();

        return $this->hasOne(CourseUser::class, 'course_id', 'course_id')
            ->where('user_id', $user_id)
            ->where('status', 'success');
    }

    public function getDripAttribute()
    {
        $section_drip = $this->section->drip;

        $data = [
            'is_lock' => false,
            'message' => null,
        ];

        /**
         * If Section is Lock
         */
        if ($section_drip->is_lock) {
            $data['is_lock'] = true;
            $data['message'] = $section_drip->message;

            return (object) $data;
        }

        /**
         * If Lock by date
         */
        $time = Carbon::now()->timestamp;

        if ($this->unlock_date && strtotime($this->unlock_date) > $time) {
            $unlock_date = Carbon::parse($this->unlock_date)->format(get_option('date_format'));

            $data['is_lock'] = true;
            $data['message'] = ' The content will become available at ' . $unlock_date;
        }

        /**
         * If Lock by Days
         */
        if ($this->unlock_days && $this->unlock_days > 0) {
            if (Auth::check()) {
                $user = Auth::user();

                $isEnrol = $user->isEnrolled($this->course_id);
                $unlock_date = Carbon::parse($isEnrol->created_at)->addDays($this->unlock_days);
                $now = Carbon::now();

                if ($unlock_date->gt($now)) {
                    $diffDays = $unlock_date->diffInDays($now);
                    $data['is_lock'] = true;
                    $data['message'] = "The content will become available in {$diffDays} days";
                }
            }
        }

        return (object) $data;
    }

    public function discussions()
    {
        return $this->hasMany(Discussion::class)
            ->with('user', 'replies', 'user.photo_query')
            ->where('discussion_id', 0);
    }

    public function contentable()
    {
        return $this->morphTo();
    }

    public function buildSortQuery()
    {
        return static::query()->where('section_id', $this->section_id);
    }
}