<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class QuestionOptionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('question_options')->truncate();
        return;
        \DB::table('question_options')->insert([
            0 => [
                'id' => 1,
                'question_id' => 1,
                'title' => 'A 1',
                //                'text' => 'A 1',
                'd_pref' => 'text',
                'is_correct' => 1,
                'sort_order' => 1,
            ],
            1 => [
                'id' => 2,
                'question_id' => 1,
                'title' => 'A 2',
                //                'text' => 'A 2',
                'd_pref' => 'text',
                'is_correct' => 0,
                'sort_order' => 2,
            ],
            2 => [
                'id' => 3,
                'question_id' => 1,
                'title' => 'A 3',
                //                'text' => 'A 3',
                'd_pref' => 'text',
                'is_correct' => 0,
                'sort_order' => 3,
            ],
            3 => [
                'id' => 4,
                'question_id' => 1,
                'title' => 'A 4',
                //                'text' => 'A 4',
                'd_pref' => 'text',
                'is_correct' => 0,
                'sort_order' => 4,
            ],
            4 => [
                'id' => 5,
                'question_id' => 2,
                'title' => 'A 1',
                //                'text' => 'A 1',
                'd_pref' => 'text',
                'is_correct' => 1,
                'sort_order' => 1,
            ],
            5 => [
                'id' => 6,
                'question_id' => 2,
                'title' => 'A 2',
                //                'text' => 'A 2',
                'd_pref' => 'text',
                'is_correct' => 0,
                'sort_order' => 2,
            ],
            6 => [
                'id' => 7,
                'question_id' => 2,
                'title' => 'A 3',
                //                'text' => 'A 3',
                'd_pref' => 'text',
                'is_correct' => 0,
                'sort_order' => 3,
            ],
            7 => [
                'id' => 8,
                'question_id' => 2,
                'title' => 'A 4',
                //                'text' => 'A 4',
                'd_pref' => 'text',
                'is_correct' => 0,
                'sort_order' => 4,
            ],
        ]);
    }
}
