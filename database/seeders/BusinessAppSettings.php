<?php

namespace Database\Seeders;

use App\Models\Business;
use App\Models\BusinessAppSetting;
use Illuminate\Database\Seeder;

class BusinessAppSettings extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BusinessAppSetting::truncate();
        foreach (Business::get() as $business) {
            $business_id = $business->id;
            BusinessAppSetting::create([
                'business_id' => $business_id,
                'key' => 'private_space',
                'value' => '1',
            ]);
            BusinessAppSetting::create([
                'business_id' => $business_id,
                'key' => 'restrict_comments',
                'value' => '1',

            ]);
            BusinessAppSetting::create([
                'business_id' => $business_id,
                'key' => 'restrict_tagging',
                'value' => '1',

            ]);
            BusinessAppSetting::create([
                'business_id' => $business_id,
                'key' => 'show_analytics',
                'value' => 'public', //public-followers-me

            ]);
            BusinessAppSetting::create([
                'business_id' => $business_id,
                'key' => 'business_environment',
                'value' => 'followers',

            ]);
            BusinessAppSetting::create([
                'business_id' => $business_id,
                'key' => 'rewards_deals',
                'value' => 'me',

            ]);

            BusinessAppSetting::create([
                'business_id' => $business_id,
                'key' => 'followers_visibility',
                'value' => 'public',

            ]);
            BusinessAppSetting::create([
                'business_id' => $business_id,
                'key' => 'message_ability',
                'value' => 'followers',

            ]);
            BusinessAppSetting::create([
                'business_id' => $business_id,
                'key' => 'notes_visibility',
                'value' => 'public',

            ]);
            BusinessAppSetting::create([
                'business_id' => $business_id,
                'key' => 'hint_visibility',
                'value' => 'followers',

            ]);
            BusinessAppSetting::create([
                'business_id' => $business_id,
                'key' => 'blog_visibility',
                'value' => 'public',

            ]);
            BusinessAppSetting::create([
                'business_id' => $business_id,
                'key' => 'traivis_algorithms',
                'value' => '1',

            ]);
            BusinessAppSetting::create([
                'business_id' => $business_id,
                'key' => 'social_media_slots',
                'value' => 20,
            ]);

        }
    }
}