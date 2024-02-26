<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CourseOccupationsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('course_occupations')->truncate();

        \DB::table('course_occupations')->insert([
            0 => [
                'id' => 2,
                'course_id' => 1,
                'occupation_id' => 2,
                'created_at' => '2021-06-08 09:48:40',
                'updated_at' => '2021-06-08 09:48:40'
            ],
            1 => [
                'id' => 4,
                'course_id' => 3,
                'occupation_id' => 3,
                'created_at' => '2021-06-09 13:45:38',
                'updated_at' => '2021-06-09 13:45:38'
            ],
            2 => [
                'id' => 5,
                'course_id' => 7,
                'occupation_id' => 2,
                'created_at' => '2021-06-18 07:59:35',
                'updated_at' => '2021-06-18 07:59:35'
            ],
            3 => [
                'id' => 6,
                'course_id' => 9,
                'occupation_id' => 4,
                'created_at' => '2021-06-18 11:52:16',
                'updated_at' => '2021-06-18 11:52:16'
            ]
        ]);
    }
}
