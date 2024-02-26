<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class IndividualLanguagesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('individual_languages')->truncate();
    }
}
