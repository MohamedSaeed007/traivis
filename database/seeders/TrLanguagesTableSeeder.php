<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TrLanguagesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('tr_languages')->truncate();
    }
}
