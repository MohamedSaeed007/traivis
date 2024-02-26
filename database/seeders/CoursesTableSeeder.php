<?php

namespace Database\Seeders;

use App\Models\Certificate;
use App\Models\CourseDetails;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class CoursesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        // Schema::disableForeignKeyConstraints();
        \DB::table('courses')->truncate();

        for ($i = 0; $i < 10; $i++) {
            # code...
            $title = $faker->paragraph();
            \DB::table('courses')->insert([
                $i => [
                    'id' => $i + 1,
                    'business_id' => $i + 1,
                    'available_student' => null,
                    'parent_category_id' => 1,
                    'second_category_id' => 3,
                    //                    'category_id' => 6,
                    //start add new feilsd knV2
                    'course_duration' => null,
                    // 'lecture_id' => 1,
                    'course_types' => 1,
                    'publish_status' => 'Published',
                    //                    'published' => 1,
                    // 'is_paid' => 1,
                    //end add new feilsd knV2

                    'slug' => \Str::of($title)->slug(),
                    // 'level' => 2,
                    //                    'status' => 1,
                    'launch_at' => null,
                    // 'thumbnail_id' => 1,
                    'total_video_time' => 0,
                    // 'require_enroll' => 1,
                    // 'require_login' => 1,
                    // 'total_lectures' => 1,
                    // 'total_assignments' => 0,
                    // 'total_quiz' => 0,
                    'rating_value' => '0.00',
                    'rating_count' => 0,
                    'five_star_count' => 0,
                    'four_star_count' => 0,
                    'three_star_count' => 0,
                    'two_star_count' => 0,
                    'one_star_count' => 0,
                    'is_featured' => null,
                    'featured_at' => null,
                    'is_popular' => null,
                    'popular_added_at' => null,
                    'published_at' => '2021-06-08 11:49:59',
                    'created_at' => '2021-06-08 11:48:07',
                    'updated_at' => '2021-06-17 12:20:34',
                    // 'accepted_trainer_id' => null
                ]
            ]);

            CourseDetails::create([
                'course_id' => $i + 1,
                'title' => $title,
                'short_description' => $faker->paragraph(),
                'description' => $faker->paragraph(6),
                'benefits' => $faker->paragraph(6),
                'requirements' => $faker->paragraph(6),
                'cert_accr' => null,
                'price' => '200.00',
                'sale_price' => '100.00',
                'course_level' => 'intermediate',
                'seats' => 10,
                'publish_status' => 'Published',
            ]);

            Certificate::create([
                'course_id' => $i + 1,
            ]);

            // Schema::enableForeignKeyConstraints();
        }
    }
}
