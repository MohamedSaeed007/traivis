<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class HomeSectionsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('home_sections')->truncate();

        \DB::table('home_sections')->insert([
            0 => [
                'id' => 1,
                'title_en' => 'Home Section 1',
                'title_ar' => 'Home Section 2',
                'slug' => 'home-section-1',
                'show_on_menu' => 0,
                'status' => 1,
                'created_at' => '2020-10-28 08:40:44',
                'updated_at' => '2021-03-19 06:23:04'
            ]
        ]);
    }
}
