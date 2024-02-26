<?php

namespace Database\Seeders;

use App\Models\PromoCode;
use Illuminate\Database\Seeder;

class PromoCodeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PromoCode::create([
            'title' => 'promo',
            'code' => 'promo',
            'type' => 'percentage',
            'discount_amount' => 15,
            'valid_from' => now(),
            'valid_to' => now()->addYear(),
            'valid_for' => ['courses'],
        ]);
    }
}