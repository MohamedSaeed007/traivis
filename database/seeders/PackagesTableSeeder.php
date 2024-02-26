<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PackagesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('packages')->truncate();

        \DB::table('packages')->insert([
            0 => [
                'id' => 1,
                'title' => 'Essentials',
                'month' => 3,
                'regular_price' => '1000.00',
                'sale_price' => '5000.00',
                'description' => 'basic description 123',
                'status' => 1,
                'created_at' => '2021-02-10 01:34:59',
                'updated_at' => '2021-02-17 09:45:48'
            ],
            1 => [
                'id' => 2,
                'title' => 'Standard',
                'month' => 2,
                'regular_price' => '5000.00',
                'sale_price' => '10000.00',
                'description' => 'description Premium',
                'status' => 1,
                'created_at' => '2021-02-10 01:43:01',
                'updated_at' => '2021-02-17 09:45:58'
            ],
            2 => [
                'id' => 3,
                'title' => 'Premium',
                'month' => 12,
                'regular_price' => '100.00',
                'sale_price' => '200.00',
                'description' => 'test description 123',
                'status' => 1,
                'created_at' => '2021-02-10 04:03:35',
                'updated_at' => '2021-02-17 09:47:18'
            ],
            3 => [
                'id' => 4,
                'title' => 'Free',
                'month' => 1,
                'regular_price' => '0.00',
                'sale_price' => '0.00',
                'description' => 'test description 123',
                'status' => 1,
                'created_at' => '2021-02-18 03:17:12',
                'updated_at' => '2021-02-18 03:19:35'
            ]
        ]);
    }
}
