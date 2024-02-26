<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AssignmentSubmissionsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('assignment_submissions')->truncate();

        \DB::table('assignment_submissions')->insert([
            0 => [
                'id' => 1,
                'user_id' => 478,
                'course_id' => 3,
                'assignment_id' => 4,
                'instructor_id' => null,
                'text_submission' => null,
                'earned_numbers' => null,
                'instructors_note' => null,
                'status' => 'submitted',
                'is_evaluated' => 0,
                'evaluated_at' => null,
                'created_at' => '2021-06-09 15:50:16',
                'updated_at' => '2021-06-09 15:50:18'
            ],
            1 => [
                'id' => 2,
                'user_id' => 479,
                'course_id' => 3,
                'assignment_id' => 4,
                'instructor_id' => null,
                'text_submission' => null,
                'earned_numbers' => null,
                'instructors_note' => null,
                'status' => 'submitted',
                'is_evaluated' => 0,
                'evaluated_at' => null,
                'created_at' => '2021-06-10 11:20:05',
                'updated_at' => '2021-06-10 11:20:06'
            ]
        ]);
    }
}
