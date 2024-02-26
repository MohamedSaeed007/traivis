<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('roles')->truncate();

        \DB::table('roles')->insert([
            0 => [
                'id' => 1,
                'name' => 'admin',
                'display_name' => 'SUPER-ADMIN',
                'created_at' => '2018-02-07 03:09:33',
                'updated_at' => '2018-02-14 23:52:55'
            ],
            1 => [
                'id' => 2,
                'name' => 'subadmin',
                'display_name' => 'SUB-ADMIN',
                'created_at' => null,
                'updated_at' => null
            ]
        ]);
    }
}
