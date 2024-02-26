<?php

namespace Database\Seeders;

use App\Models\Business;
use App\Models\TierFeature;
use App\Models\TierTierFeature;
use Illuminate\Database\Seeder;

class TierFeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $features = [
            ["key" => "traivis_ads", "label" => "Ads on Traivis platform ",  'unit' => 'hour', 'consumable' => 1, 'popup' => 0, 'allowed' => [
                1 => 0,
                2 => 50,
                3 => 80,
                4 => 110,
                5 => 140,
                6 => 200,
            ]],
            ["key" => "mails", "label" => "Email Messages",  "unit" => "Message", 'consumable' => 1, 'popup' => 0, 'allowed' => [
                1 => 0,
                2 => 11,
                3 => 21,
                4 => 31,
                5 => 40,
                6 => 50,
            ]],
            ["key" => "teaser_slots", "label" => "Teaser Slots", "unit" => "Slot", 'consumable' => 1, 'popup' => 0, 'allowed' => [
                1 => 0,
                2 => 80,
                3 => 110,
                4 => 140,
                5 => 170,
                6 => 210,
            ]],
            ["key" => "video_on_traivis",  "label" => "Video On TRAIVIS YT", "unit" => "minute", 'consumable' => 1, 'popup' => 1, 'allowed' => [
                1 => 0,
                2 => 10,
                3 => 15,
                4 => 25,
                5 => 25,
                6 => 75,
            ]],
            ["key" => "tweets",  "label" => "Tweet", "unit" => "hour", 'consumable' => 1, 'popup' => 1, 'allowed' => [
                1 => 0,
                2 => 0,
                3 => 0,
                4 => 24,
                5 => 48,
                6 => 144,
            ]],
            ["key" => "fb_posts",  "label" => "Facebook Posts", "unit" => "Post", 'consumable' => 1, 'popup' => 1, 'allowed' => [
                1 => 0,
                2 => 1,
                3 => 2,
                4 => 3,
                5 => 3,
                6 => 5,
            ]],
            ["key" => "telegram_posts",  "label" => "Telegram Posts", "unit" => "Post", 'consumable' => 1, 'popup' => 1, 'allowed' => [
                1 => 0,
                2 => 1,
                3 => 1,
                4 => 3,
                5 => 4,
                6 => 6,
            ]],
            ["key" => "fb_ads",  "label" => "Facebook Ads", "unit" => "Ads", 'consumable' => 1, 'popup' => 1, 'allowed' => [
                1 => 0,
                2 => 0,
                3 => 0,
                4 => 1,
                5 => 2,
                6 => 4,
            ]],
            ["key" => "linkedin_posts",  "label" => "Linkedin Posts", "unit" => "Post", 'consumable' => 1, 'popup' => 1, 'allowed' => [
                1 => 0,
                2 => 0,
                3 => 0,
                4 => 0,
                5 => 1,
                6 => 3,
            ]],
            ["key" => "course_fee",  "label" => "Payment Course fee ", "unit" => "%", 'consumable' => 1, 'popup' => 0, 'allowed' => [
                1 => 0,
                2 => 15,
                3 => 13.5,
                4 => 12,
                5 => 11,
                6 => 10,
            ]],
            ["key" => "traivis_partner",  "label" => "TRAIVIS Partner's uniform", "unit" => "", 'consumable' => 0, 'popup' => 0, 'allowed' => [
                1 => 0,
                2 => 0,
                3 => 0,
                4 => 0,
                5 => 1,
                6 => 1,
            ]],
            ["key" => "badge",  "label" => "Badge", "unit" => "", 'consumable' => 0, 'popup' => 0, 'allowed' => [
                1 => 0,
                2 => 1,
                3 => 1,
                4 => 1,
                5 => 1,
                6 => 1,
            ]],
        ];

        foreach ($features as $feature) {
            $tierFeature = TierFeature::create([
                "key" => $feature['key'],
                "label" => $feature['label'],
                "unit" => $feature['unit'],
                "consumable" => $feature['consumable'],
                "popup" => $feature['popup'],
            ]);
            foreach ($feature['allowed'] as $key => $allowed) {
                $tierFeature->tiers()->attach($key, ['allowed' => $allowed]);
            }
        }
        $businesses = Business::all();
        $tierTierFeaturesIds = TierTierFeature::pluck('id')->toArray();
        foreach ($businesses as $business) {
            $business->tierTierFeatures()->attach($tierTierFeaturesIds);
        }
    }
}
