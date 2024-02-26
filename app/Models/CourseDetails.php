<?php

namespace App\Models;

use App\Mail\CourseApprovalStatus;
use App\Traits\HasCachedMedia;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Traits\HasTags;
use Illuminate\Support\Facades\Mail;
use Spatie\Image\Manipulations;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media as BaseMedia;

class CourseDetails extends Model implements HasMedia
{
    use HasFactory;
    use HasTags;
    use InteractsWithMedia;
    use HasCachedMedia {
        HasCachedMedia::getMedia insteadof InteractsWithMedia;
        HasCachedMedia::getFirstMedia insteadof InteractsWithMedia;
        HasCachedMedia::getFirstMediaUrl insteadof InteractsWithMedia;
    }

    //    protected $with = ['media'];

    protected $fillable = [
        'title',
        'meta_description',
        'short_description',
        'description',
        'price',
        'sale_price',
        'benefits',
        'cert_accr',
        'requirements',
        'publish_status',
        'course_level',
        'seats',
        'review_feedback',
        'version',
        'parent_id',
        'is_clone',
        'course_id',
    ];

    protected $appends = ['image', 'video'];

    public static function booted()
    {
        static::updated(function (CourseDetails $courseDetails) {
            if (
                $courseDetails->course->publish_status == 'Under review' &&
                !$courseDetails->course
                    ->contents()
                    ->where('publish_status', 'Under review')
                    ->exists()
            ) {
                if (
                    $courseDetails->course->contents->contains('publish_status', 'Declined') ||
                    $courseDetails->publish_status == 'Declined'
                ) {
                    $courseDetails->course->publish_status = 'Declined';
                } elseif (
                    $courseDetails->course->contents->contains('publish_status', 'Approved') ||
                    $courseDetails->publish_status == 'Approved'
                ) {
                    $courseDetails->course->publish_status = 'Approved';
                }
                $courseDetails->course->save();
                Mail::to($courseDetails->course->maker->business_email)->queue(
                    new CourseApprovalStatus($courseDetails->course),
                );
            }
        });
        static::saved(function (CourseDetails $courseDetails) {
            if ($courseDetails->isDirty('title')) {
                $courseDetails->course->slug = $courseDetails->course::generateUniqueSlug(
                    $courseDetails->title,
                    $courseDetails->id,
                );
                $courseDetails->course->save();
            }
        });
        static::created(function (CourseDetails $courseDetails) {
            //create new post with type course
            $post = Post::updateOrCreate(
                [
                    'course_id' => $courseDetails->course->id,
                ],
                [
                    'title' => $courseDetails->title,
                    'post_content' => $courseDetails->description,
                    'business_id' => $courseDetails->course->business_id,
                    'user_id' => $courseDetails->course->maker->owner->id,
                    'course_id' => $courseDetails->course->id,
                    'type' => 'course',
                    'status' => 'Published',
                ],
            );
            //add or update post image
            if ($courseDetails->image) {
                if ($post->hasMedia()) {
                    $post->getFirstMedia()->delete();
                }
                $post
                    ->addMedia($courseDetails->image->getRealPath())
                    ->usingName($courseDetails->image->getClientOriginalName())
                    ->preservingOriginal()
                    ->toMediaCollection();
            }
        });
    }

    public function getFinalPriceAttribute()
    {
        $finalPrice = $this->sale_price ?? $this->price;
        return $finalPrice ?? 0;
    }

    public function getImageAttribute()
    {
        return $this->hasMedia('cover') ? $this->getFirstMediaUrl('cover') : null;
    }

    public function getVideoAttribute()
    {
        return $this->hasMedia('video') ? $this->getFirstMedia('video') : null;
    }

    public function getThumbnailUrlAttribute()
    {
        return $this->image ?? asset('uploads/placeholder-image.png');
    }

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
    public function original()
    {
        return $this->belongsTo(CourseDetails::class, 'parent_id');
    }

    public function clone()
    {
        return $this->hasOne(CourseDetails::class, 'parent_id');
    }

    public function registerMediaConversions(BaseMedia $media = null): void
    {
        //                $this->addMediaConversion('preview')
        //                    ->blur(50)
        //                    ->brightness(-40)
        //                    ->performOnCollections('cover')
        //                    ->width(800);
        $this->addMediaConversion('preview')
            ->crop(Manipulations::CROP_CENTER, 800, 160)
            //            ->blur(50)
            //            ->brightness(-40)
            ->performOnCollections('cover')
            ->nonQueued();
        //            ->width(800)

        $this->addMediaConversion('preview')
            ->performOnCollections('video')
            ->format('jpg')
            //            return $this->image ?? asset('uploads/placeholder-image.png');placeholder-image-transparent.png
            ->watermark(public_path('uploads/placeholder-image-transparent.png'))
            ->watermarkPosition('center')
            ->watermarkOpacity(70)
            ->watermarkPadding(10)
            ->width(800)
            ->nonQueued();
    }
}
