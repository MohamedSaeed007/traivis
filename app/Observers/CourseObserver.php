<?php

namespace App\Observers;

use App\Models\Course;
use App\Models\Post;

class CourseObserver
{
    /**
     * Handle the Course "saved" event.
     *
     * @param \App\Models\Course $course
     * @return void
     */
    public function saved(Course $course)
    {
    }

    /**
     * Handle the Course "created" event.
     *
     * @param \App\Models\Course $course
     * @return void
     */

    /**
     * Handle the Course "updated" event.
     *
     * @param \App\Models\Course $course
     * @return void
     */
    public function updated(Course $course)
    {
    }

    /**
     * Handle the Course "deleted" event.
     *
     * @param \App\Models\Course $course
     * @return void
     */
    public function deleted(Course $course)
    {
        //
    }

    /**
     * Handle the Course "restored" event.
     *
     * @param \App\Models\Course $course
     * @return void
     */
    public function restored(Course $course)
    {
        //
    }

    /**
     * Handle the Course "force deleted" event.
     *
     * @param \App\Models\Course $course
     * @return void
     */
    public function forceDeleted(Course $course)
    {
        //
    }
}
