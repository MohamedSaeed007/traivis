<?php

namespace Database\Seeders;

use App\Models\Branch;
use Illuminate\Database\Seeder;

class BranchTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i < 6; $i++) { 
            Branch::create([
                'id'=>$i,
                'branch_name_en'=>'branch '.$i,
                'business_id'=>3
                ]
            );
        }
    }
}
