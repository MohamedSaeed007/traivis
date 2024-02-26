<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class IndividualCurrentJobDetailsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('individual_current_job_details')->truncate();

        \DB::table('individual_current_job_details')->insert([
            0 => [
                'id' => 1,
                'user_id' => 478,
                'country_id' => null,
                'industry_id' => 1,
                'employer' => null,
                'employment_status' => null,
                'occupation_id' => 1,
                'experience_level_id' => 1,
                'created_at' => '2021-06-09 13:51:40',
                'updated_at' => '2021-06-09 13:51:40',
                'deleted_at' => null
            ],
            1 => [
                'id' => 2,
                'user_id' => 480,
                'country_id' => null,
                'industry_id' => 1,
                'employer' => null,
                'employment_status' => null,
                'occupation_id' => 1,
                'experience_level_id' => 1,
                'created_at' => '2021-06-10 12:22:39',
                'updated_at' => '2021-06-10 12:22:39',
                'deleted_at' => null
            ],
            2 => [
                'id' => 3,
                'user_id' => 506,
                'country_id' => null,
                'industry_id' => 1,
                'employer' => null,
                'employment_status' => null,
                'occupation_id' => 1,
                'experience_level_id' => 1,
                'created_at' => '2021-06-17 07:19:21',
                'updated_at' => '2021-06-17 07:19:21',
                'deleted_at' => null
            ],
            3 => [
                'id' => 4,
                'user_id' => 509,
                'country_id' => null,
                'industry_id' => 1,
                'employer' => null,
                'employment_status' => null,
                'occupation_id' => 1,
                'experience_level_id' => 1,
                'created_at' => '2021-06-17 09:13:13',
                'updated_at' => '2021-06-17 09:13:13',
                'deleted_at' => null
            ]
        ]);
    }
}
