<?php

namespace Database\Seeders;

use App\Models\Quiz;
use Illuminate\Database\Seeder;

class QuizTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Quiz::truncate();
        // return;
        $data = [
            [
                'title' => 'Islamic',
                'course_id' => 11,
                'slug' => 'islamic',
                'description' => 'Learn religin step by step',
                'options' => [
                    'time_limit' => '10',
                    'attempts_limit' => true,
                    'questions_limit' => true,
                    'passing_score' => '5',
                ],
            ],
            [
                'title' => 'Arabic',
                'course_id' => 11,
                'slug' => 'islamic',
                'description' => 'Learn religin step by step',
                'options' => [
                    'time_limit' => '5',
                    'attempts_limit' => true,
                    'questions_limit' => true,
                    'passing_score' => '5',
                ],
            ],
        ];
        foreach ($data as $a) {
            Quiz::create($a);
        }
    }
}