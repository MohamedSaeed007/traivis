<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class QuestionsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('questions')->truncate();
        return;
        \DB::table('questions')->insert([
            0 => [
                'id' => 1,
                'user_id' => 1,
                'quiz_id' => 1,
                'title' => 'Q 1',
                'image_id' => null,
                'type' => 'closed',
                'score' => 50,
                'sort_order' => 1,
            ],
            1 => [
                'id' => 2,
                'user_id' => 1,
                'quiz_id' => 1,
                'title' => 'Q 2',
                'image_id' => null,
                'type' => 'closed',
                'score' => 100,
                'sort_order' => 2,
            ],
            2 => [
                'id' => 3,
                'user_id' => 1,
                'quiz_id' => 1,
                'title' => 'Q 3',
                'image_id' => null,
                'type' => 'opened',
                'score' => 10,
                'sort_order' => 3,
            ],
            3 => [
                'id' => 4,
                'user_id' => 476,
                'quiz_id' => 3,
                'title' => 'quiz 1 ?',
                'image_id' => null,
                'type' => 'radio',
                'score' => null,
                'sort_order' => 1,
            ],
            4 => [
                'id' => 5,
                'user_id' => 476,
                'quiz_id' => 3,
                'title' => 'quiz 2 ?',
                'image_id' => 4,
                'type' => 'checkbox',
                'score' => '5.0',
                'sort_order' => 2,
            ],
            5 => [
                'id' => 6,
                'user_id' => 476,
                'quiz_id' => 3,
                'title' => 'quiz 3 ?',
                'image_id' => null,
                'type' => 'text',
                'score' => '5.0',
                'sort_order' => 3,
            ],
            6 => [
                'id' => 7,
                'user_id' => 476,
                'quiz_id' => 3,
                'title' => 'quiz 4 ?',
                'image_id' => null,
                'type' => 'textarea',
                'score' => '5.0',
                'sort_order' => 4,
            ],
            7 => [
                'id' => 8,
                'user_id' => 476,
                'quiz_id' => 7,
                'title' => 'quiz 1 ?',
                'image_id' => null,
                'type' => 'radio',
                'score' => '10.0',
                'sort_order' => 1,
            ],
            8 => [
                'id' => 9,
                'user_id' => 476,
                'quiz_id' => 12,
                'title' => 'quiz 1 ?',
                'image_id' => null,
                'type' => 'radio',
                'score' => null,
                'sort_order' => 1,
            ],
            9 => [
                'id' => 10,
                'user_id' => 476,
                'quiz_id' => 12,
                'title' => 'quiz 2 ?',
                'image_id' => null,
                'type' => 'checkbox',
                'score' => null,
                'sort_order' => 2,
            ],
        ]);
    }
}
