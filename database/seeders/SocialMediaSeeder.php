<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SocialMedia;
class SocialMediaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        SocialMedia::create([
            'id'=>'1',
            'social_name'=>'traivis',
            'social_icon'=>'traivis.png',
        ]);
        SocialMedia::create([
            'id'=>'2',
            'social_name'=>'facebook',
            'social_icon'=>'facebook.png',
        ]);
        SocialMedia::create([
            'id'=>'3',
            'social_name'=>'twitter',
            'social_icon'=>'twitter.png',
        ]);
        SocialMedia::create([
            'id'=>'4',
            'social_name'=>'telegram',
            'social_icon'=>'telegram.png',
        ]);
        SocialMedia::create([
            'id'=>'5',
            'social_name'=>'whatsapp',
            'social_icon'=>'whatsapp.png',
        ]);
        SocialMedia::create([
            'id'=>'6',
            'social_name'=>'pinterest',
            'social_icon'=>'pinterest.png',
        ]);
        SocialMedia::create([
            'id'=>'7',
            'social_name'=>'linkedin',
            'social_icon'=>'linkedin.png',
        ]);


    }
}
