<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AnswersTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('answers')->truncate();

//        \DB::table('answers')->insert([
//            0 => [
//                'id' => 1,
//                'quiz_id' => 3,
//                'question_id' => 5,
//                'user_id' => 478,
//                'attempt_id' => 1,
//                'answer' => '["12","13"]',
//                'q_type' => 'checkbox',
//                'q_score' => '5.0',
//                'r_score' => '5.0',
//                'is_correct' => 1
//            ],
//            1 => [
//                'id' => 2,
//                'quiz_id' => 3,
//                'question_id' => 6,
//                'user_id' => 478,
//                'attempt_id' => 1,
//                'answer' => 'aa',
//                'q_type' => 'text',
//                'q_score' => '5.0',
//                'r_score' => '0.0',
//                'is_correct' => 1
//            ],
//            2 => [
//                'id' => 3,
//                'quiz_id' => 3,
//                'question_id' => 4,
//                'user_id' => 478,
//                'attempt_id' => 1,
//                'answer' => '9',
//                'q_type' => 'radio',
//                'q_score' => null,
//                'r_score' => null,
//                'is_correct' => 1
//            ],
//            3 => [
//                'id' => 4,
//                'quiz_id' => 3,
//                'question_id' => 7,
//                'user_id' => 478,
//                'attempt_id' => 1,
//                'answer' => 'aa',
//                'q_type' => 'textarea',
//                'q_score' => '5.0',
//                'r_score' => '0.0',
//                'is_correct' => 1
//            ],
//            4 => [
//                'id' => 5,
//                'quiz_id' => 3,
//                'question_id' => 7,
//                'user_id' => 479,
//                'attempt_id' => 2,
//                'answer' => 'a',
//                'q_type' => 'textarea',
//                'q_score' => '5.0',
//                'r_score' => '0.0',
//                'is_correct' => 0
//            ],
//            5 => [
//                'id' => 6,
//                'quiz_id' => 3,
//                'question_id' => 4,
//                'user_id' => 479,
//                'attempt_id' => 2,
//                'answer' => '11',
//                'q_type' => 'radio',
//                'q_score' => null,
//                'r_score' => '0.0',
//                'is_correct' => 0
//            ],
//            6 => [
//                'id' => 7,
//                'quiz_id' => 3,
//                'question_id' => 5,
//                'user_id' => 479,
//                'attempt_id' => 2,
//                'answer' => '["15","16"]',
//                'q_type' => 'checkbox',
//                'q_score' => '5.0',
//                'r_score' => '0.0',
//                'is_correct' => 0
//            ],
//            7 => [
//                'id' => 8,
//                'quiz_id' => 3,
//                'question_id' => 6,
//                'user_id' => 479,
//                'attempt_id' => 2,
//                'answer' => 'aa',
//                'q_type' => 'text',
//                'q_score' => '5.0',
//                'r_score' => '0.0',
//                'is_correct' => 0
//            ],
//            8 => [
//                'id' => 9,
//                'quiz_id' => 12,
//                'question_id' => 9,
//                'user_id' => 509,
//                'attempt_id' => 3,
//                'answer' => '20',
//                'q_type' => 'radio',
//                'q_score' => null,
//                'r_score' => null,
//                'is_correct' => 1
//            ],
//            9 => [
//                'id' => 10,
//                'quiz_id' => 12,
//                'question_id' => 10,
//                'user_id' => 509,
//                'attempt_id' => 3,
//                'answer' => '["23","24"]',
//                'q_type' => 'checkbox',
//                'q_score' => null,
//                'r_score' => null,
//                'is_correct' => 1
//            ]
//        ]);
    }
}
