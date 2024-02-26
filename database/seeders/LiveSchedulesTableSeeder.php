<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LiveSchedulesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('live_schedules')->truncate();

        \DB::table('live_schedules')->insert([
            0 => [
                'id' => 1,
                'section_id' => 1,
                'created_by' => 474,
                'seat_available' => 12,
                'max_num_of_participate' => 20,
                'zoom_link' => 'wwwwqqqq',
                'event_date_time' => '2021-06-26 13:52:00',
                'expiry_date_time' => '2021-07-04 13:52:00',
                'team_link' => 'https://teams.microsoft.com/l/meetup-join/',
                'created_at' => '2021-06-17 10:22:23',
                'updated_at' => '2021-06-17 10:22:23'
            ],
            1 => [
                'id' => 2,
                'section_id' => 7,
                'created_by' => 474,
                'seat_available' => 12,
                'max_num_of_participate' => 20,
                'zoom_link' => 'wwww',
                'event_date_time' => '2021-06-18 17:35:00',
                'expiry_date_time' => '2021-06-26 17:35:00',
                'team_link' => 'https://teams.microsoft.com/l/meetup-join/',
                'created_at' => '2021-06-18 14:05:29',
                'updated_at' => '2021-06-18 14:05:29'
            ]
        ]);
    }
}
