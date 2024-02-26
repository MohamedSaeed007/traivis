<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CourseAssignTrainersTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('course_assign_trainers')->truncate();

        \DB::table('course_assign_trainers')->insert([
            0 => [
                'id' => 2,
                'course_id' => 1,
                'status' => 0,
                'trainer_user_id' => 475,
                'created_at' => '2021-06-08 11:48:40',
                'updated_at' => '2021-06-08 11:48:40'
            ],
            1 => [
                'id' => 3,
                'course_id' => 3,
                'status' => 0,
                'trainer_user_id' => 477,
                'created_at' => '2021-06-09 15:45:38',
                'updated_at' => '2021-06-09 15:45:38'
            ],
            2 => [
                'id' => 4,
                'course_id' => 8,
                'status' => 0,
                'trainer_user_id' => 477,
                'created_at' => '2021-06-18 12:49:32',
                'updated_at' => '2021-06-18 12:49:32'
            ],
            3 => [
                'id' => 5,
                'course_id' => 9,
                'status' => 0,
                'trainer_user_id' => 475,
                'created_at' => '2021-06-18 13:52:16',
                'updated_at' => '2021-06-18 13:52:16'
            ]
        ]);
    }
}
