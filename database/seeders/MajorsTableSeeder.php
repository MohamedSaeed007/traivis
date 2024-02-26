<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MajorsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('majors')->truncate();
    }
}
