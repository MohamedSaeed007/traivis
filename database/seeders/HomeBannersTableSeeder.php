<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class HomeBannersTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('home_banners')->truncate();

        \DB::table('home_banners')->insert([
            0 => [
                'id' => 1,
                'page_id' => 1,
                'short_desc_en' => 'lorem ipsum',
                'short_desc_ar' => 'lorem ipsum2',
                'title_en' => 'Home Page',
                'title_ar' => 'Home Page',
                'content_en' =>
                    '<h1>Take your next step towards <a href="#" class="typewrite" data-period="2000" data-type="[ " employ",="" "employ",="" "employ"="" ]"=""><span class="wrap"></span></a> Training</h1><p>95% of people learning for professional development report career benefits like getting a promotion, a raise, or starting a new career.</p>',
                'content_ar' =>
                    '<h1>اتخذ خطوتك التالية نحو التدريب<a href="#" class="typewrite" data-period="2000" data-type="[ " employ",="" "employ",="" "employ"="" ]"=""><span class="wrap"></span></a> </h1><p>أبلغ 95٪ من الأشخاص الذين يتعلمون من أجل التطوير المهني عن مزايا وظيفية مثل الحصول على ترقية أو علاوة أو بدء مهنة جديدة.</p>',
                'slug' => 'test-1',
                'logo' => '605465ff6c890.jpg',
                'status' => 1,
                'created_at' => '2020-10-28 06:19:35',
                'updated_at' => '2021-05-06 13:38:16'
            ]
        ]);
    }
}
