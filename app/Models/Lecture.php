<?php

namespace App\Models;

use App\Casts\DateTimeTZ;
use App\Events\LectureUserDisallowed;
use App\Events\LectureUserMuted;
use App\Events\LectureUserUpraised;
use App\Traits\HasCachedMedia;
use Carbon\Carbon;
use Carbon\CarbonInterval;
use getID3;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media as BaseMedia;

class Lecture extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;
    use HasCachedMedia {
        HasCachedMedia::getMedia insteadof InteractsWithMedia;
        HasCachedMedia::getFirstMedia insteadof InteractsWithMedia;
        HasCachedMedia::getFirstMediaUrl insteadof InteractsWithMedia;
    }

    protected $fillable = [
        'title',
        'content_lecture',
        'url_lecture',
        'published',
        'duration',
        'instructor_attended_minutes',
        'category_id',
        'instructor_by',
        'drip_days',
        'drip_datetime',
        'course_id',
        'section_id',
        'lecture_file',
        'end_date',
    ];

    protected $casts = ['drip_datetime' => DateTimeTZ::class . ':Y-m-d H:i:s'];

    protected $appends = ['file'];

    protected static function booted()
    {
        static::saved(function (Lecture $lecture) {
            $lecture->course->updateLecturesRelatedAttributes();
        });
    }

    public function course(): BelongsTo
    {
        return $this->belongsTo(Course::class);
    }

    /**
     * @return string|null
     */
    public function getFileAttribute(): ?string
    {
        return $this->lecture_file ? asset("storage/course/lectures/$this->lecture_file") : null;
    }

    public function getFormattedDurationAttribute()
    {
        return CarbonInterval::seconds($this->duration)
            ->cascade()
            ->forHumans();
    }

    public function getVideoAttribute()
    {
        return $this->hasMedia('video') ? $this->getFirstMedia('video') : null;
    }

    public function getEndDateAttribute(): ?string
    {
        if ($this->delivery_mode != 2) {
            return Carbon::parse($this->drip_datetime)->addSeconds($this->duration);
        } else {
            return null;
        }
    }

    public function content(): \Illuminate\Database\Eloquent\Relations\MorphOne
    {
        return $this->morphOne(Content::class, 'contentable');
    }

    /**
     * @return BelongsTo
     */
    public function section(): BelongsTo
    {
        return $this->belongsTo(Section::class);
    }

    /**
     * delivery mode
     * @param $type
     * @return void
     */
    public function updateParentSectionType($type): void
    {
        $this->section->section_type = $type;
        $this->section->save();
    }

    /**
     * @param User $user
     * @param bool $isInstructor
     * @return void
     */

    public function muteUser(User $user, bool $isInstructor = false): void
    {
        $this->users()->syncWithoutDetaching([$user->id => ['muted' => true]]);
        $this->users()->syncWithoutDetaching([$user->id => ['muted_by_instructor' => $isInstructor]]);
        LectureUserMuted::dispatch($this, $user->id);
    }

    /**
     * @return BelongsToMany
     */
    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class)->withPivot([
            'muted',
            'disallowed',
            'upraised',
            'attended_minutes',
            'muted_by_instructor',
        ]);
        //            ->withTimestamps()
    }

    /**
     * @param User $user
     * @param bool $isInstructor
     * @return void
     */
    public function unmuteUser(User $user, bool $isInstructor = false): void
    {
        $pivotData = $this->users()
            ->where('user_id', $user->id)
            ->first()?->pivot;

        if ($pivotData && $pivotData->muted_by_instructor) {
            // If the current user is not an instructor, do not proceed with the unmute

            if (!$isInstructor) {
                return;
            }
        } elseif ($pivotData) {
            $this->users()->syncWithoutDetaching([$user->id => ['muted' => false]]);
        }

        $this->users()->syncWithoutDetaching([$user->id => ['muted_by_instructor' => false]]);
        LectureUserMuted::dispatch($this, $user->id, false);
    }

    /**
     * @param User $user
     * @return void
     */
    public function disallowUser(User $user): void
    {
        $this->users()->syncWithoutDetaching([$user->id => ['disallowed' => true]]);
        LectureUserDisallowed::dispatch($this, $user->id);
    }

    /**
     * @param User $user
     * @return void
     */
    public function allowUser(User $user): void
    {
        $this->users()->syncWithoutDetaching([$user->id => ['disallowed' => false]]);
        LectureUserDisallowed::dispatch($this, $user->id, false);
    }

    public function upraise(User $user): void
    {
        $this->users()->syncWithoutDetaching([$user->id => ['upraised' => true]]);
        LectureUserUpraised::dispatch($this, $user->id);
    }

    public function lower(User $user): void
    {
        $this->users()->syncWithoutDetaching([$user->id => ['upraised' => false]]);
        LectureUserUpraised::dispatch($this, $user->id, false);
    }

    /**
     * @param $userId
     * @return bool[]
     */
    public function userAttributes($userId): array
    {
        $user = $this->users()
            ->where('users.id', $userId)
            ->first();

        if (!$user) {
            return [
                'muted' => false,
                'disallowed' => false,
                'upraised' => false,
            ];
        }

        return [
            'muted' => $user->pivot->muted == 1,
            'disallowed' => $user->pivot->disallowed == 1,
            'upraised' => $user->pivot->upraised == 1,
        ];
    }

    public function registerMediaConversions(BaseMedia $media = null): void
    {
        $this->addMediaConversion('preview')
            ->performOnCollections('resources')
            ->width(800)
            ->nonQueued();

        $this->addMediaConversion('preview')
            ->performOnCollections('video')
            ->width(800)
            ->nonQueued();
    }
    //    public function getDripDatetimeAttribute($value): ?string
    //    {
    //        return Carbon::parse($value)->format('Y-m-d\TH:i:s');
    //    }
    //    public function setDripDatetimeAttribute($value): void
    //    {
    //        $this->attributes['drip_datetime'] = (string) $value;
    //    }
}
