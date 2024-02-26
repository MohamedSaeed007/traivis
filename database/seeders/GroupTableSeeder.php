<?php

namespace Database\Seeders;

use App\Models\Group;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class GroupTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        Schema::disableForeignKeyConstraints();
        Group::truncate();
//        Schema::enableForeignKeyConstraints();
        for ($i=0; $i < 20; $i++) { 
            Group::create( [
                'group_title'    => 'group number '.$i,
                'group_description'  => 'Join a group directly· Search for the group: At the top, click My groups and select All groups and messages.',
                'public_id'   => '123e4567-e89b-12d3-a456-426655440000',
                'created_by'       => $i+1,
            ]);

        }
    }
}
