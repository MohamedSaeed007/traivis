<?php

namespace App\Providers;

use App\Events\CourseCreated;
use App\Events\CreateCalendarEventEvent;
use App\Events\CoursePublished;
use App\Events\OrderSuccess;
use App\Events\TeaserCampaignCreated;
use App\Listeners\CreateCalendarCampaignEvent;
use App\Listeners\CreateCalendarCourseEvent;
use App\Listeners\CreateCoursePost;
use App\Listeners\SendMailToPayer;
use App\Listeners\SendMailToPayee;
use App\Models\Course;
use App\Models\MediaLibrary;
use App\Observers\AchievementProgressObserver;
use App\Observers\CourseObserver;
use App\Observers\MediaLibraryObserver;
use Assada\Achievements\Model\AchievementProgress;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [SendEmailVerificationNotification::class],
        TeaserCampaignCreated::class => [CreateCalendarCampaignEvent::class],
        CoursePublished::class => [CreateCoursePost::class],
        CourseCreated::class => [CreateCalendarCourseEvent::class],
        OrderSuccess::class => [SendMailToPayer::class, SendMailToPayee::class],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        Course::observe(CourseObserver::class);
        MediaLibrary::observe(MediaLibraryObserver::class);
        // AchievementProgress::observe(AchievementProgressObserver::class);
    }
}
