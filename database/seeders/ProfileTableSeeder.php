<?php

namespace Database\Seeders;

use App\Models\Profile;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class ProfileTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        Schema::disableForeignKeyConstraints();
        Profile::truncate();
//        Schema::enableForeignKeyConstraints();
        $data = [
            ['notes'=>'for managing your tasks right with every day.', 'story'=> 'tasks right with every day.','date_of_birth' => '2000-06-08','public_id' => '123e4567-e89b-12d3-a456-426655440000','user_id' => 1],
            ['notes'=>'for managing your tasks right with every day.', 'story'=> 'tasks right with every day.','date_of_birth' => '2001-06-08','public_id' => '123e4567-e89b-12d3-a456-426655440000','user_id' => 2],
            ['notes'=>'for managing your tasks right with every day.','story'=> 'tasks right with every day.','date_of_birth' => '2001-06-08','public_id' => '123e4567-e89b-12d3-a456-426655440000','user_id' => 3],
            ['notes'=>'powerful tool for managing your every day.', 'story'=> 'tasks right with every day.','date_of_birth' => '2001-06-08','public_id' => '123e4567-e89b-12d3-a456-426655440000','user_id' => 1],
        ];
        Profile::insert($data);
    }
}
