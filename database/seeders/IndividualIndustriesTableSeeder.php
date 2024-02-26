<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class IndividualIndustriesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('individual_industries')->truncate();

        \DB::table('individual_industries')->insert([
            0 => [
                'id' => 27,
                'user_id' => 2,
                'industry_id' => 1,
                'created_at' => '2020-12-30 08:12:19',
                'updated_at' => '2020-12-30 08:12:19'
            ],
            1 => [
                'id' => 28,
                'user_id' => 2,
                'industry_id' => 3,
                'created_at' => '2020-12-30 08:12:19',
                'updated_at' => '2020-12-30 08:12:19'
            ],
            2 => [
                'id' => 29,
                'user_id' => 197,
                'industry_id' => 2,
                'created_at' => '2021-01-14 06:02:44',
                'updated_at' => '2021-01-14 06:02:44'
            ],
            3 => [
                'id' => 30,
                'user_id' => 235,
                'industry_id' => 4,
                'created_at' => '2021-02-06 18:17:21',
                'updated_at' => '2021-02-06 18:17:21'
            ],
            4 => [
                'id' => 32,
                'user_id' => 337,
                'industry_id' => 3,
                'created_at' => '2021-03-22 12:39:18',
                'updated_at' => '2021-03-22 12:39:18'
            ],
            5 => [
                'id' => 33,
                'user_id' => 342,
                'industry_id' => 6,
                'created_at' => '2021-03-24 13:33:50',
                'updated_at' => '2021-03-24 13:33:50'
            ],
            6 => [
                'id' => 35,
                'user_id' => 382,
                'industry_id' => 3,
                'created_at' => '2021-05-11 01:43:41',
                'updated_at' => '2021-05-11 01:43:41'
            ]
        ]);
    }
}
