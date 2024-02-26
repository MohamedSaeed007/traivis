<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ReviewsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('reviews')->truncate();

        \DB::table('reviews')->insert([
            0 => [
                'id' => 1,
                'user_id' => 479,
                'course_id' => 3,
                //                'review_id' => 0,
                'review' => 'test review',
                'rating' => 1,
                'status' => 1,
                'created_at' => '2021-06-10 11:20:41',
                'updated_at' => '2021-06-10 11:20:41',
            ],
        ]);
    }
}
