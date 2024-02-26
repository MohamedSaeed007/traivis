<?php

namespace Database\Seeders;

use App\Models\Assignment;
use App\Models\Lecture;
use App\Models\Quiz;
use Illuminate\Database\Seeder;

class ContentsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('contents')->truncate();

        \DB::table('contents')->insert([
            [
                'id' => 1,
                'user_id' => 1,
                'course_id' => 11,
                'section_id' => 1,
                'title' => 'lec 1',
                'slug' => 'lec-1',
                'text' => '<p>lec desc</p>',
                'video_src' =>
                    '{"source":"vimeo","source_vimeo":"https:\\/\\/player.vimeo.com\\/video\\/560861114","html5_video_id":null,"html5_video_poster_id":null,"source_external_url":null,"source_youtube":null,"source_embedded":null,"runtime":{"hours":"00","mins":"00","secs":"5"}}',
                'video_time' => 5,
                'item_type' => 'lecture',
                'is_preview' => null,
                'status' => 1,
                'sort_order' => 1,
                'options' => null,
                'quiz_gradable' => null,
                'unlock_date' => null,
                'unlock_days' => null,
                'contentable_type' => Lecture::class,
                'contentable_id' => 1,
                'created_at' => '2021-06-09 15:16:35',
                'updated_at' => '2021-06-10 11:18:43'
            ],
            [
                'id' => 2,
                'user_id' => 1,
                'course_id' => 11,
                'section_id' => 2,
                'title' => 'lec 1',
                'slug' => 'lec-1',
                'text' => '<p>lec desc</p>',
                'video_src' =>
                    '{"source":"vimeo","source_vimeo":"https:\\/\\/player.vimeo.com\\/video\\/560861114","html5_video_id":null,"html5_video_poster_id":null,"source_external_url":null,"source_youtube":null,"source_embedded":null,"runtime":{"hours":"00","mins":"00","secs":"5"}}',
                'video_time' => 5,
                'item_type' => 'lecture',
                'is_preview' => null,
                'status' => 1,
                'sort_order' => 1,
                'options' => null,
                'quiz_gradable' => null,
                'unlock_date' => null,
                'unlock_days' => null,
                'contentable_type' => Lecture::class,
                'contentable_id' => 1,
                'created_at' => '2021-06-09 15:16:35',
                'updated_at' => '2021-06-10 11:18:43'
            ],
            [
                'id' => 3,
                'user_id' => 1,
                'course_id' => 11,
                'section_id' => 1,
                'title' => 'quiz',
                'slug' => 'quiz',
                'text' => null,
                'video_src' => null,
                'video_time' => 0,
                'item_type' => 'quiz',
                'is_preview' => 0,
                'status' => 1,
                'sort_order' => 2,
                'options' =>
                    '{"show_time":"1","time_limit":"1","passing_score":null,"questions_limit":"10"}',
                'quiz_gradable' => 1,
                'unlock_date' => null,
                'unlock_days' => null,
                'contentable_type' => Quiz::class,
                'contentable_id' => 1,
                'created_at' => '2021-06-09 15:24:15',
                'updated_at' => '2021-06-09 15:26:02'
            ],
            [
                'id' => 4,
                'user_id' => 1,
                'course_id' => 11,
                'section_id' => 2,
                'title' => 'quiz',
                'slug' => 'quiz',
                'text' => null,
                'video_src' => null,
                'video_time' => 0,
                'item_type' => 'quiz',
                'is_preview' => 0,
                'status' => 1,
                'sort_order' => 3,
                'options' =>
                    '{"show_time":"1","time_limit":"1","passing_score":null,"questions_limit":"10"}',
                'quiz_gradable' => 1,
                'unlock_date' => null,
                'unlock_days' => null,
                'contentable_type' => Quiz::class,
                'contentable_id' => 2,
                'created_at' => '2021-06-09 15:24:15',
                'updated_at' => '2021-06-09 15:26:02'
            ],
            [
                'id' => 5,
                'user_id' => 1,
                'course_id' => 11,
                'section_id' => 1,
                'title' => 'Assignment',
                'slug' => 'assignment',
                'text' => null,
                'video_src' => null,
                'video_time' => null,
                'item_type' => 'assignment',
                'is_preview' => 0,
                'status' => 1,
                'sort_order' => 4,
                'options' =>
                    '{"time_duration":{"time_value":"1","time_type":"hours"},"total_number":"10","pass_number":"5","upload_attachment_limit":"1","upload_attachment_size_limit":"5"}',
                'quiz_gradable' => null,
                'unlock_date' => null,
                'unlock_days' => null,
                'contentable_type' => Assignment::class,
                'contentable_id' => 1,
                'created_at' => '2021-06-09 15:26:39',
                'updated_at' => '2021-06-09 15:26:39'
            ],
            [
                'id' => 6,
                'user_id' => 1,
                'course_id' => 11,
                'section_id' => 2,
                'title' => 'Assignment',
                'slug' => 'assignment',
                'text' => null,
                'video_src' => null,
                'video_time' => null,
                'item_type' => 'assignment',
                'is_preview' => 0,
                'status' => 1,
                'sort_order' => 5,
                'options' =>
                    '{"time_duration":{"time_value":"1","time_type":"hours"},"total_number":"10","pass_number":"5","upload_attachment_limit":"1","upload_attachment_size_limit":"5"}',
                'quiz_gradable' => null,
                'unlock_date' => null,
                'unlock_days' => null,
                'contentable_type' => Assignment::class,
                'contentable_id' => 2,
                'created_at' => '2021-06-09 15:26:39',
                'updated_at' => '2021-06-09 15:26:39'
            ],
        ]);
    }
}