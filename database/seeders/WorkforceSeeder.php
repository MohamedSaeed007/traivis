<?php

namespace Database\Seeders;

use App\Models\EnterpriseWorkforce;
use App\Models\User;
use Illuminate\Database\Seeder;

class WorkforceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0 ;$i<5;$i++){

        $user = User::create([
            'name' =>  str_random(7),
            "email" => str_random(5).'@gmail.com',
            "phone" => 01222447,
        ]);

        $enterprise = EnterpriseWorkforce::create([
            'company_id' => 3,
            'user_id' => $user->id,
            'position_id' => $i,
            'work_id' => $i,
            'traivis_id' => $i,
            'status' => 1,
        ]);

        $enterprise->departments()->attach([2,4]);
        $enterprise->projects()->attach([1,3]);
        $enterprise->branches()->attach([3,5]);
        
    }}
}
