<?php

namespace Database\Seeders;

use App\Models\WorkingPlace;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class WorkingPlaceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        Schema::disableForeignKeyConstraints();
        WorkingPlace::truncate();
//        Schema::enableForeignKeyConstraints();
        $data = [
            ['place_name'=>'MTN Sudan', 'from_date'=> '2004-06-08','to_date' => '2005-06-08','position_name' => 'manager','user_id' => 1],
            ['place_name'=>'WE eg', 'from_date'=> '2003-06-08','to_date' => '2001-07-08','position_name' => 'tech Support','user_id' => 2],
            ['place_name'=>'MTN Sudav','from_date'=> '2005-06-08','to_date' => '2006-06-08','position_name' => 'programer','user_id' => 3],
            ['place_name'=>'Cemas Co', 'from_date'=> '2007-06-08','to_date' => '20021-06-08','position_name' => 'tech Support','user_id' => 1],
        ];
        WorkingPlace::insert($data);
    }
}
