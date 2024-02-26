<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TransactionsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('transactions')->truncate();

        \DB::table('transactions')->insert([
            0 => [
                'created_at' => '2023-03-20 12:50:51',
                'hold_balance' => '75.00',
                'id' => 1,
                'order_id' => 1,
                'payeeable_id' => 1,
                'payeeable_type' => 'App\\Models\\Business',
                'payerable_id' => 1,
                'payerable_type' => 'App\\Models\\User',
                'payment_method' => 1,
                'product_price' => '100.00',
                'productable_id' => 1,
                'productable_type' => 'App\\Models\\Course',
                'traivis_commission' => '25.00',
                'transaction_num' => '16793166515909',
                'transaction_status' => 1,
                'transaction_type' => 1,
                'is_refundable' => 1,
                'updated_at' => '2023-03-20 12:50:51'
            ],
            1 => [
                'created_at' => '2023-03-20 12:50:51',
                'hold_balance' => '0.00',
                'id' => 2,
                'order_id' => 1,
                'payeeable_id' => 2,
                'payeeable_type' => 'App\\Models\\Business',
                'payerable_id' => 1,
                'payerable_type' => 'App\\Models\\User',
                'payment_method' => 1,
                'product_price' => '100.00',
                'productable_id' => 2,
                'productable_type' => 'App\\Models\\Course',
                'traivis_commission' => '25.00',
                'transaction_num' => '16793166514773',
                'transaction_status' => 1,
                'transaction_type' => 1,
                'is_refundable' => 1,
                'updated_at' => '2023-03-20 12:50:51'
            ],
            2 => [
                'created_at' => '2023-03-20 18:44:10',
                'id' => 3,
                'transaction_num' => '16793378503943',
                'payment_method' => 1,
                'transaction_type' => 1,
                'transaction_status' => 1,
                'order_id' => 2,
                'traivis_commission' => 25.0,
                'product_price' => 100.0,
                'productable_type' => 'App\\Models\\Course',
                'productable_id' => 3,
                'payerable_type' => 'App\\Models\\User',
                'payerable_id' => 1,
                'payeeable_type' => 'App\\Models\\Business',
                'payeeable_id' => 1,
                'hold_balance' => 75.0,
                'is_refundable' => 1,
                'updated_at' => '2023-03-20 18:44:10'
            ],
            3 => [
                'created_at' => '2023-03-20 12:50:51',
                'hold_balance' => '75.00',
                'id' => 4,
                'order_id' => 1,
                'payeeable_id' => 1,
                'payeeable_type' => 'App\\Models\\Business',
                'payerable_id' => 1,
                'payerable_type' => 'App\\Models\\User',
                'payment_method' => 1,
                'product_price' => '100.00',
                'productable_id' => 32,
                'productable_type' => 'App\\Models\\Course',
                'traivis_commission' => '25.00',
                'transaction_num' => '16793166515908',
                'transaction_status' => 1,
                'transaction_type' => 1,
                'is_refundable' => 1,
                'updated_at' => '2023-03-20 12:50:51'
            ]
        ]);
    }
}
