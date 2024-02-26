<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class IndividualPreferedJobDetailsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('individual_prefered_job_details')->truncate();
    }
}
