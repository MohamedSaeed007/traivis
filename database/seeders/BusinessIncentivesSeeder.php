<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\CourseUser;
use Illuminate\Database\Seeder;

class BusinessIncentivesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (range(1, 99) as $c) {
            $course = Course::create([
                'business_id' => 1,
                'lecture_id' => 1,
                'course_types' => 1,
                'is_paid' => 1,
                'publish_status' => 'published',
                //                'published' => 1,
                'price' => 1000,
                'sale_price' => 900,
                'description' => 'Very Important Course in DM ' . $c,
                'title' => 'Digital Marketing ' . $c,
                'slug' => (string) \Str::of('DM Course ' . $c)->slug(),
                'short_description' => 'DM Course ' . $c
            ]);

            CourseUser::unguard();
            foreach (range(1, 20) as $i) {
                CourseUser::create([
                    'course_id' => $course->id,
                    'user_id' => $i,
                    'status' => 'success'
                ]);
            }
        }
    }
}
