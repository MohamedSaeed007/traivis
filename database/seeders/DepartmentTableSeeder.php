<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Seeder;

class DepartmentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i < 6; $i++) { 
            Department::create([
                'id'=>$i,
                'department_name_en'=>'depart '.$i,
                'business_id'=>3
                ]
            );
        }
    }
}
