<?php

namespace App\Console;

use App\Models\SocialPostDate;
use App\SocialPoster\FacebookRepository;
use App\SocialPoster\LinkedInPoster;
use App\SocialPoster\PinterestPoster;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use Illuminate\Support\Facades\Http;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        //
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        //  $schedule->command('inspire')->withoutOverlapping()->hourly();
        $schedule
            ->command('schedule:posts')
            ->withoutOverlapping()
            ->runInBackground()
            ->everyMinute();
        $schedule
            ->command('schedule:posts')
            ->withoutOverlapping()
            ->everyMinute();
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__ . '/Commands');

        require base_path('routes/console.php');
    }
}
