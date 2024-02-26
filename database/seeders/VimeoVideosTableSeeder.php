<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class VimeoVideosTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('vimeo_videos')->truncate();

        \DB::table('vimeo_videos')->insert([
            0 => [
                'id' => 1,
                'title' => 'Wordpress video',
                'code' => '560306314',
                'status' => 1,
                'created_by' => 474,
                'created_at' => '2021-06-08 07:43:59',
                'updated_at' => '2021-06-08 07:43:59'
            ],
            1 => [
                'id' => 2,
                'title' => 'sample',
                'code' => '560317215',
                'status' => 1,
                'created_by' => 1,
                'created_at' => '2021-06-08 08:23:29',
                'updated_at' => '2021-06-08 08:23:29'
            ],
            2 => [
                'id' => 3,
                'title' => 'php',
                'code' => '560860645',
                'status' => 1,
                'created_by' => 476,
                'created_at' => '2021-06-09 13:10:39',
                'updated_at' => '2021-06-09 13:10:39'
            ],
            3 => [
                'id' => 4,
                'title' => 'live',
                'code' => '560861114',
                'status' => 1,
                'created_by' => 476,
                'created_at' => '2021-06-09 13:11:43',
                'updated_at' => '2021-06-09 13:11:43'
            ],
            4 => [
                'id' => 5,
                'title' => 'test video',
                'code' => '564595151',
                'status' => 1,
                'created_by' => 474,
                'created_at' => '2021-06-18 11:50:50',
                'updated_at' => '2021-06-18 11:50:50'
            ]
        ]);
    }
}
