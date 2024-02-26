<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PaymentsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('payments')->truncate();

        \DB::table('payments')->insert([
            0 => [
                'id' => 1,
                'name' => 'Anju ',
                'email' => 'anju@yarddiant.com',
                'user_id' => 471,
                'amount' => '200.00',
                'total_amount' => null,
                'fees_name' => 'additional fee',
                'fees_amount' => '10.00',
                'fees_total' => '0.00',
                'fees_type' => 'fixed',
                'payment_method' => 'offline',
                'status' => 'success',
                'currency' => 'INR',
                'token_id' => null,
                'card_last4' => null,
                'card_id' => null,
                'card_brand' => null,
                'card_country' => null,
                'card_exp_month' => null,
                'card_exp_year' => null,
                'client_ip' => null,
                'charge_id_or_token' => null,
                'payer_email' => null,
                'description' => null,
                'local_transaction_id' => 'TRAN_1623146127HRKQI7',
                'payment_created' => null,
                'bank_swift_code' => null,
                'account_number' => null,
                'branch_name' => null,
                'branch_address' => null,
                'account_name' => null,
                'iban' => null,
                'payment_note' => null,
                'created_at' => '2021-06-08 11:55:27',
                'updated_at' => '2021-06-08 11:56:02'
            ]
        ]);
    }
}
