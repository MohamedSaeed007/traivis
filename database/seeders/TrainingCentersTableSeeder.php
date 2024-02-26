<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TrainingCentersTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('training_centers')->truncate();

        \DB::table('training_centers')->insert([
            0 => [
                'id' => 1,
                'user_id' => 476,
                'about_me' => 'aaaa',
                'teaching_approach' => null,
                'address' => null,
                'country_id' => null,
                'current_occupation' => 1,
                'receive_newsletter' => null,
                'bidding_notification' => null,
                'point_of_contact' => null,
                'name' => 'TrainigCenter',
                'email' => null,
                'position' => null,
                'accr' => null,
                'dob' => '1970-01-01',
                'gender' => null,
                'website_url' => null,
                'job_industry' => 1,
                'phone_number' => null,
                'personal_info_privacy' => null,
                'twitter' => null,
                'facebook' => null,
                'linkedin' => null,
                'instagram' => null,
                'created_at' => '2021-06-09 13:42:43',
                'updated_at' => '2021-06-09 13:42:43',
                'deleted_at' => null
            ],
            1 => [
                'id' => 2,
                'user_id' => 508,
                'about_me' => 'about me',
                'teaching_approach' => null,
                'address' => null,
                'country_id' => null,
                'current_occupation' => 1,
                'receive_newsletter' => null,
                'bidding_notification' => null,
                'point_of_contact' => null,
                'name' => 'vivintrainingCenter',
                'email' => null,
                'position' => null,
                'accr' => null,
                'dob' => '1970-01-01',
                'gender' => null,
                'website_url' => null,
                'job_industry' => 1,
                'phone_number' => null,
                'personal_info_privacy' => null,
                'twitter' => null,
                'facebook' => null,
                'linkedin' => null,
                'instagram' => null,
                'created_at' => '2021-06-17 07:26:40',
                'updated_at' => '2021-06-17 07:26:40',
                'deleted_at' => null
            ],
            2 => [
                'id' => 3,
                'user_id' => 1,
                'about_me' => 'about me',
                'teaching_approach' => null,
                'address' => null,
                'country_id' => null,
                'current_occupation' => 1,
                'receive_newsletter' => null,
                'bidding_notification' => null,
                'point_of_contact' => null,
                'name' => 'Traivis Admin',
                'email' => null,
                'position' => null,
                'accr' => null,
                'dob' => '1970-01-01',
                'gender' => null,
                'website_url' => null,
                'job_industry' => 1,
                'phone_number' => null,
                'personal_info_privacy' => null,
                'twitter' => null,
                'facebook' => null,
                'linkedin' => null,
                'instagram' => null,
                'created_at' => '2021-06-17 07:34:33',
                'updated_at' => '2021-06-17 07:34:33',
                'deleted_at' => null
            ]
        ]);
    }
}
