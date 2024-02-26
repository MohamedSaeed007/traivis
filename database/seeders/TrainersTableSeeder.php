<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TrainersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('trainers')->truncate();
        
        \DB::table('trainers')->insert(array (
            0 =>             array (
                'id' => 1,
                'user_id' => 1,
                'teaching_approach' => NULL,
                'country_id' => NULL,
                'current_occupation' => 1,
                'receive_newsletter' => NULL,
                'accr' => NULL,
                'dob' => '1970-01-01',
                'gender' => NULL,
                'website_url' => NULL,
                'job_industry' => 1,
                'phone_number' => NULL,
                'twitter' => NULL,
                'facebook' => NULL,
                'linkedin' => NULL,
                'instagram' => NULL,
                'created_at' => '2021-06-09 13:54:06',
                'updated_at' => '2021-06-09 13:54:06',
                'deleted_at' => NULL,
            ),
            1 =>             array (
                'id' => 2,
                'user_id' => 507,
                'teaching_approach' => NULL,
                'country_id' => NULL,
                'current_occupation' => 1,
                'receive_newsletter' => NULL,
                'accr' => NULL,
                'dob' => '1970-01-01',
                'gender' => NULL,
                'website_url' => NULL,
                'job_industry' => 1,
                'phone_number' => NULL,
                'twitter' => NULL,
                'facebook' => NULL,
                'linkedin' => NULL,
                'instagram' => NULL,
                'created_at' => '2021-06-17 07:24:50',
                'updated_at' => '2021-06-17 07:24:50',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}
