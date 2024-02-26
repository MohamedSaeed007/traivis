<?php

namespace App\Listeners;

use App\Events\CoursePublished;
use App\Models\Post;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class CreateCoursePost
{
    public function __construct()
    {
        //
    }
    public function handle(CoursePublished $event)
    {
        //create new post with type course
        $post = Post::updateOrCreate(
            [
                'course_id' => $event->course->id,
            ],
            [
                'title' => $event->course->title,
                'post_content' => $event->course->description,
                'user_id' => $event->course->maker->owner->id,
                'business_id' => $event->course->business_id,
                'course_id' => $event->course->id,
                'type' => 'course',
                'status' => 'published',
            ],
        );
        if ($event->course->hasMedia('cover')) {
            $media = $event->course->getFirstMedia('cover');
            if ($post->hasMedia()) {
                $post->getfirstMedia()->delete();
            }

            $post
                ->copyMedia($media->getPath())
                ->usingName($media->name)
                ->usingFileName($media->file_name)
                ->toMediaCollection();
        }
    }
}
