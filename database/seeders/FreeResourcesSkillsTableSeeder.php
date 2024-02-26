<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FreeResourcesSkillsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('free_resources_skills')->truncate();

        \DB::table('free_resources_skills')->insert([
            0 => [
                'id' => 1,
                'free_resource_id' => 1,
                'skill_id' => 2,
                'created_at' => '2021-06-09 14:03:00',
                'updated_at' => '2021-06-09 14:03:00'
            ],
            1 => [
                'id' => 2,
                'free_resource_id' => 2,
                'skill_id' => 6,
                'created_at' => '2021-06-17 07:41:15',
                'updated_at' => '2021-06-17 07:41:15'
            ]
        ]);
    }
}
