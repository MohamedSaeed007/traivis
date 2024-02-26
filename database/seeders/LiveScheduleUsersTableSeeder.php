<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LiveScheduleUsersTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('live_schedule_users')->truncate();

        \DB::table('live_schedule_users')->insert([
            0 => [
                'id' => 1,
                'live_schedule_id' => 1,
                'user_id' => 471,
                'created_at' => '2021-06-17 10:22:23',
                'updated_at' => '2021-06-17 10:22:23'
            ],
            1 => [
                'id' => 2,
                'live_schedule_id' => 2,
                'user_id' => 474,
                'created_at' => '2021-06-18 14:05:29',
                'updated_at' => '2021-06-18 14:05:29'
            ]
        ]);
    }
}
