<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SectionsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('sections')->truncate();

        \DB::table('sections')->insert([
            0 => [
                'id' => 1,
                'course_id' => 1,
                'section_name' => 'introduction',
                'section_type' => 3,
                'unlock_date' => null,
                'unlock_days' => null,
                'sort_order' => 0
            ],
            1 => [
                'id' => 2,
                'course_id' => 1,
                'section_name' => 'intro',
                'section_type' => 3,
                'unlock_date' => null,
                'unlock_days' => null,
                'sort_order' => 0
            ],
            2 => [
                'id' => 3,
                'course_id' => 4,
                'section_name' => 'intro',
                'section_type' => 3,
                'unlock_date' => null,
                'unlock_days' => null,
                'sort_order' => 0
            ],
            3 => [
                'id' => 4,
                'course_id' => 6,
                'section_name' => 'intro',
                'section_type' => 3,
                'unlock_date' => null,
                'unlock_days' => null,
                'sort_order' => 0
            ],
            4 => [
                'id' => 5,
                'course_id' => 7,
                'section_name' => 'Intro',
                'section_type' => 2,
                'unlock_date' => null,
                'unlock_days' => null,
                'sort_order' => 0
            ],
            5 => [
                'id' => 6,
                'course_id' => 8,
                'section_name' => 'intro',
                'section_type' => 3,
                'unlock_date' => null,
                'unlock_days' => null,
                'sort_order' => 0
            ],
            6 => [
                'id' => 7,
                'course_id' => 9,
                'section_name' => 'base 1',
                'section_type' => 3,
                'unlock_date' => null,
                'unlock_days' => null,
                'sort_order' => 0
            ],
            7 => [
                'id' => 8,
                'course_id' => 9,
                'section_name' => 'base 2',
                'section_type' => 2,
                'unlock_date' => null,
                'unlock_days' => null,
                'sort_order' => 0
            ]
        ]);
    }
}
