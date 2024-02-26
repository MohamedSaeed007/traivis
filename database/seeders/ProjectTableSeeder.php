<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i < 6; $i++) { 
            Project::create([
                'id'=>$i,
                'project_name_en'=>'project '.$i,
                'business_id'=>3
                ]
            );
        }
    }
}
