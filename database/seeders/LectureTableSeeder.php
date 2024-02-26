<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Lecture;
use Illuminate\Support\Facades\Schema;

class LectureTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //        Schema::disableForeignKeyConstraints();
        Lecture::truncate();
        //        Schema::enableForeignKeyConstraints();
        $data = [
            ['course_id' => 11, 'section_id' => 1, 'title' => 'Islamic', 'content_lecture' => 'Learn religin step by step', 'category_id' => 1, 'instructor_by' => 1, 'duration' => '2021-06-07'],
            ['course_id' => 11, 'section_id' => 2, 'title' => 'Arabic', 'content_lecture' => 'Learn Arabic step by step', 'category_id' => 2, 'instructor_by' => 1, 'duration' => '2021-06-07'],
            // ['section_id' => 3, 'title' => 'Math', 'content_lecture' => 'Learn math step by step', 'category_id' => 2, 'instructor_by' => 1, 'duration' => '2021-06-07'],
            // ['section_id' => 4, 'title' => 'Computer', 'content_lecture' => 'Learn computer step by step', 'category_id' => 1, 'instructor_by' => 1, 'duration' => '2021-06-07'],
        ];
        Lecture::insert($data);
    }
}