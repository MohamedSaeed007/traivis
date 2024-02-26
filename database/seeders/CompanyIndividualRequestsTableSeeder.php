<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CompanyIndividualRequestsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('company_individual_requests')->truncate();
    }
}
