<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SubscriptionsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('subscriptions_old')->truncate();

        for ($i = 0; $i < 15; $i++) {
            \DB::table('subscriptions_old')->insert([
                $i => [
                    'id' => $i + 1,
                    'subscription_trail_duration' => '2021-06-10',
                    'subscription_start' => '2020-06-10',
                    'subscription_end' => '202' . $i . '-06-10',
                    'name' => 'company ' . $i,
                    'month' => '1' . $i,
                    'package_id' => $i + 1,
                    'email' => 'newcompany' . $i . '@gmail.com',
                    'user_id' => $i + 1,
                    'amount' => '0.00',
                    'total_amount' => '200.00',
                    'fees_name' => null,
                    'fees_amount' => null,
                    'fees_total' => null,
                    'fees_type' => null,
                    'payment_method' => 'stripe',
                    'status' => 'success',
                    'currency' => 'INR',
                    'token_id' => null,
                    'card_last4' => '42' . $i . '2',
                    'card_id' => 'card_1J0mw8Ag8zMsH1HfuYc2kDiS',
                    'card_brand' => 'Visa',
                    'card_country' => null,
                    'card_exp_month' => '4' . $i,
                    'card_exp_year' => '20' . $i . '4',
                    'client_ip' => null,
                    'charge_id_or_token' => 'ch_1J0mw9Ag8zMsH1HfnEkpaAEx',
                    'payer_email' => null,
                    'description' => 'Traivis\'s subscription' . $i,
                    'local_transaction_id' => null,
                    'payment_created' => 1623327881,
                    'bank_swift_code' => null,
                    'account_number' => null,
                    'branch_name' => null,
                    'branch_address' => null,
                    'account_name' => null,
                    'iban' => null,
                    'payment_note' => null,
                    'created_at' => '2021-06-10 14:24:42',
                    'updated_at' => '2021-06-10 14:24:42'
                ]
            ]);
        }
    }
}
