<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class InstructorTrainersTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('instructor_trainers')->truncate();

        \DB::table('instructor_trainers')->insert([
            0 => [
                'id' => 1,
                'instructor_user_id' => 474,
                'trainer_user_id' => 475,
                'request_status' => 1,
                'created_at' => '2021-06-08 10:02:23',
                'updated_at' => '2021-06-08 10:02:23'
            ],
            1 => [
                'id' => 2,
                'instructor_user_id' => 476,
                'trainer_user_id' => 477,
                'request_status' => 1,
                'created_at' => '2021-06-09 15:44:12',
                'updated_at' => '2021-06-09 15:44:12'
            ]
        ]);
    }
}
