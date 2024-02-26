<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\CourseDetails;
use Illuminate\Database\Seeder;

class BusinessCourses extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $course = Course::create([
            'business_id' => 1,
            'course_types' => 1,
            // 'is_paid' => 1,
            'publish_status' => 'Published',
            //            'published' => true,
            'slug' => 'dm-course',
        ]);
        CourseDetails::create([
            'course_id' => $course->id,
            'title' => 'Digital Marketing',
            'short_description' => 'DM Course',
            'description' => 'Very Important Course in DM',
            'price' => 1000,
            'sale_price' => 900,
            'course_level' => 'intermediate',
            'seats' => 10,
            'publish_status' => 'Published',
        ]);
    }
}