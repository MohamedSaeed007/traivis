<?php

namespace Database\Seeders;

use App\Models\Position;
use Illuminate\Database\Seeder;

class PositionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i < 6; $i++) { 
            Position::create([
                'id'=>$i,
                'position_name_en'=>'pos '.$i,
                'business_id'=>3
                ]
            );
        }
    }
}
