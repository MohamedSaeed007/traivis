<?php

namespace App\Console\Commands;

use App\Models\Business;
use DB;
use Illuminate\Console\Command;
use Illuminate\Database\Eloquent\Builder;

class DailyIncentives extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'daily:incentives';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        //Tier0
        //	Got6Students
        //	Got50UsdCoursesIncome
        //	Got99Followers
        //	Published6Courses
        //	Published6HrsOfCourse
        //	Published9Blogs
        //	Published30Notes
        //	Published32Hints

        //Tier1
        //	Got20Students
        //	Got125UsdCoursesIncome
        //	Got299Followers
        //	Published10Courses
        //	Published19Blogs
        //	Published24HrsOfCourse
        //	Published65Notes
        //	Published89Hints

        //Tier2
        //	Got49Students
        //	Got190UsdCoursesIncome
        //	Got499Followers
        //	Published29Blogs
        //	Published29Courses
        //	Published59HrsOfCourse
        //	Published99Notes
        //	Published129Hints

        //Tier3
        //	Got79Students
        //	Got380UsdCoursesIncome
        //	Got699Followers
        //	Published39Blogs
        //	Published43Courses
        //	Published89HrsOfCourse
        //	Published139Notes
        //	Published189Hints

        //Tier4
        //	Got99Students
        //	Got499UsdCoursesIncome
        //	Got999Followers
        //	Published60Courses
        //	Published69Blogs
        //	Published100HrsOfCourse
        //	Published199Notes
        //	Published249Hints

        dd(
            Business::withCount([
                'courses', //courses
                'posts', //notes
                'blogsPublished', //blogs
                'reels', //hints
                'followers',
                'students as students_count' => function (Builder $query) {
                    $query->select(DB::raw('count(distinct(course_user.user_id))'));
                }
            ])
                ->find(1)
                ->toArray()
        );

        return 0;
    }
}
