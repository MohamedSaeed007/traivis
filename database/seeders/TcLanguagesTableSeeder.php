<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TcLanguagesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('tc_languages')->truncate();

        \DB::table('tc_languages')->insert([
            0 => [
                'id' => 25,
                'user_id' => 248,
                'language_id' => 2,
                'created_at' => '2021-03-18 06:38:00',
                'updated_at' => '2021-03-18 06:38:00',
                'deleted_at' => null
            ],
            1 => [
                'id' => 26,
                'user_id' => 248,
                'language_id' => 3,
                'created_at' => '2021-03-18 06:38:00',
                'updated_at' => '2021-03-18 06:38:00',
                'deleted_at' => null
            ],
            2 => [
                'id' => 41,
                'user_id' => 243,
                'language_id' => 2,
                'created_at' => '2021-05-24 17:13:56',
                'updated_at' => '2021-05-24 17:13:56',
                'deleted_at' => null
            ],
            3 => [
                'id' => 42,
                'user_id' => 243,
                'language_id' => 3,
                'created_at' => '2021-05-24 17:13:56',
                'updated_at' => '2021-05-24 17:13:56',
                'deleted_at' => null
            ],
            4 => [
                'id' => 43,
                'user_id' => 380,
                'language_id' => 3,
                'created_at' => '2021-05-28 09:53:17',
                'updated_at' => '2021-05-28 09:53:17',
                'deleted_at' => null
            ],
            5 => [
                'id' => 56,
                'user_id' => 455,
                'language_id' => 3,
                'created_at' => '2021-06-03 16:15:40',
                'updated_at' => '2021-06-03 16:15:40',
                'deleted_at' => null
            ],
            6 => [
                'id' => 57,
                'user_id' => 455,
                'language_id' => 5,
                'created_at' => '2021-06-03 16:15:40',
                'updated_at' => '2021-06-03 16:15:40',
                'deleted_at' => null
            ],
            7 => [
                'id' => 58,
                'user_id' => 1,
                'language_id' => 2,
                'created_at' => '2021-06-17 07:34:33',
                'updated_at' => '2021-06-17 07:34:33',
                'deleted_at' => null
            ],
            8 => [
                'id' => 59,
                'user_id' => 1,
                'language_id' => 3,
                'created_at' => '2021-06-17 07:34:33',
                'updated_at' => '2021-06-17 07:34:33',
                'deleted_at' => null
            ]
        ]);
    }
}
