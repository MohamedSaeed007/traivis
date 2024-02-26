<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class OrdersTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('orders')->delete();

        \DB::table('orders')->insert([
            [
                'id' => 1,
                'orderable_id' => 1,
                'orderable_type' => 'App\\Models\\User',
                'promo_code_id' => null,
                'created_at' => '2023-03-20 12:50:51',
                'updated_at' => '2023-03-20 12:50:51'
            ],
            [
                'id' => 2,
                'orderable_id' => 1,
                'orderable_type' => 'App\\Models\\User',
                'promo_code_id' => null,
                'created_at' => '2023-03-20 12:50:51',
                'updated_at' => '2023-03-20 12:50:51'
            ]
        ]);
    }
}
