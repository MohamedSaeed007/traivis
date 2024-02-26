<?php

namespace Database\Seeders;

use App\Models\PersonalInformation;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class PersonalInformationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    { 
//        Schema::disableForeignKeyConstraints();
        PersonalInformation::truncate();
//        Schema::enableForeignKeyConstraints();
        $data = [
            ['residence'=>'sudan', 'from_where'=> 'sudan','status' => 'singl','gender' => 'male','user_id' => 1],
            ['residence'=>'egypt', 'from_where'=> 'uk','status' => 'mirre','gender' => 'female','user_id' => 2],
            ['residence'=>'france','from_where'=> 'france','status' => 'mirre','gender' => 'both','user_id' => 3],
            ['residence'=>'usa', 'from_where'=> 'egypt','status' => 'singl','gender' => 'gay','user_id' => 1],
        ];
        PersonalInformation::insert($data);
    }
}
