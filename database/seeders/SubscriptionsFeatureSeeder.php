<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use LucasDotVin\Soulbscription\Models\Feature;

class SubscriptionsFeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Awarded plan features
        Feature::create(['name' => 'Ads on Traivis platform in hours', 'consumable' => true]);
        Feature::create(['name' => 'Teaser slots', 'consumable' => true]);
        Feature::create(['name' => 'Email messages', 'consumable' => true]);
        Feature::create(['name' => 'Video On TRAIVIS\' Youtube.com channel']);
        Feature::create(['name' => 'Twitter\'s tweets', 'consumable' => true]);
        Feature::create(['name' => 'Facebook\'s posts', 'consumable' => true]);
        Feature::create(['name' => 'Facebook\'s ADs', 'consumable' => true]);
        Feature::create(['name' => 'LinkedIn\'s posts', 'consumable' => true]);
        Feature::create(['name' => 'Telegram\'s posts', 'consumable' => true]);
        Feature::create(['name' => 'Course fee discount', 'consumable' => true]);
        Feature::create(['name' => 'Partner\s badge', 'consumable' => true]);
        Feature::create(['name' => 'TRAIVIS Partner\'s uniform', 'consumable' => true]);
    }
}
