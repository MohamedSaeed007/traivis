<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AttemptsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('attempts')->truncate();

        \DB::table('attempts')->insert([
            0 => [
                'id' => 1,
                'course_id' => 3,
                'quiz_id' => 3,
                'user_id' => 478,
                'reviewer_id' => 476,
                'questions_limit' => 10,
                'total_answered' => 4,
                'total_scores' => '15.0',
                'earned_score' => '5.0',
                'passing_percent' => 0,
                'earned_percentage' => 33,
                'status' => 'finished',
                'quiz_gradable' => 1,
                'is_reviewed' => 1,
                'ended_at' => '2021-06-09 15:50:11',
                'reviewed_at' => '2021-06-09 15:56:47',
                'passed' => 1,
                'created_at' => '2021-06-09 15:49:46',
                'updated_at' => '2021-06-09 15:56:47'
            ],
            1 => [
                'id' => 2,
                'course_id' => 3,
                'quiz_id' => 3,
                'user_id' => 479,
                'reviewer_id' => null,
                'questions_limit' => 10,
                'total_answered' => 4,
                'total_scores' => '15.0',
                'earned_score' => '0.0',
                'passing_percent' => 0,
                'earned_percentage' => 0,
                'status' => 'in_review',
                'quiz_gradable' => 1,
                'is_reviewed' => 0,
                'ended_at' => '2021-06-10 11:20:00',
                'reviewed_at' => null,
                'passed' => 1,
                'created_at' => '2021-06-10 11:19:43',
                'updated_at' => '2021-06-10 11:20:00'
            ],
            2 => [
                'id' => 3,
                'course_id' => 8,
                'quiz_id' => 12,
                'user_id' => 509,
                'reviewer_id' => 476,
                'questions_limit' => 10,
                'total_answered' => 2,
                'total_scores' => '0.0',
                'earned_score' => '0.0',
                'passing_percent' => 0,
                'earned_percentage' => 0,
                'status' => 'finished',
                'quiz_gradable' => 1,
                'is_reviewed' => 1,
                'ended_at' => '2021-06-18 12:53:34',
                'reviewed_at' => '2021-06-18 12:54:52',
                'passed' => 1,
                'created_at' => '2021-06-18 12:53:26',
                'updated_at' => '2021-06-18 12:54:52'
            ]
        ]);
    }
}
