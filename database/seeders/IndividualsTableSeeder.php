<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class IndividualsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('individuals')->truncate();

        \DB::table('individuals')->insert([
            0 => [
                'id' => 1,
                'user_id' => 478,
                'highest_degree_id' => null,
                'university' => null,
                'major_id' => null,
                'employment_status' => null,
                'new_job_preference' => null,
                'career_goal' => null,
                'goal_privacy' => null,
                'self_intro' => null,
                'living_location' => null,
                'dob' => null,
                'gender' => null,
                'website_url' => null,
                'phone_number' => null,
                'personal_info_privacy' => null,
                'created_at' => '2021-06-09 13:51:40',
                'updated_at' => '2021-06-09 13:51:40',
                'deleted_at' => null
            ],
            1 => [
                'id' => 2,
                'user_id' => 480,
                'highest_degree_id' => null,
                'university' => null,
                'major_id' => null,
                'employment_status' => null,
                'new_job_preference' => null,
                'career_goal' => null,
                'goal_privacy' => null,
                'self_intro' => null,
                'living_location' => null,
                'dob' => null,
                'gender' => null,
                'website_url' => null,
                'phone_number' => null,
                'personal_info_privacy' => null,
                'created_at' => '2021-06-10 12:22:39',
                'updated_at' => '2021-06-10 12:22:39',
                'deleted_at' => null
            ],
            2 => [
                'id' => 3,
                'user_id' => 506,
                'highest_degree_id' => null,
                'university' => null,
                'major_id' => null,
                'employment_status' => null,
                'new_job_preference' => null,
                'career_goal' => null,
                'goal_privacy' => null,
                'self_intro' => null,
                'living_location' => null,
                'dob' => null,
                'gender' => null,
                'website_url' => null,
                'phone_number' => null,
                'personal_info_privacy' => null,
                'created_at' => '2021-06-17 07:19:21',
                'updated_at' => '2021-06-17 07:19:21',
                'deleted_at' => null
            ],
            3 => [
                'id' => 4,
                'user_id' => 509,
                'highest_degree_id' => null,
                'university' => null,
                'major_id' => null,
                'employment_status' => null,
                'new_job_preference' => null,
                'career_goal' => null,
                'goal_privacy' => null,
                'self_intro' => null,
                'living_location' => null,
                'dob' => null,
                'gender' => null,
                'website_url' => null,
                'phone_number' => null,
                'personal_info_privacy' => null,
                'created_at' => '2021-06-17 09:13:13',
                'updated_at' => '2021-06-17 09:13:13',
                'deleted_at' => null
            ]
        ]);
    }
}
