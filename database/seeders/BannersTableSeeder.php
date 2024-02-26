<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BannersTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('banners')->truncate();

        \DB::table('banners')->insert([
            0 => [
                'id' => 1,
                'page_id' => 1,
                'title_en' => 'Company Landing',
                'title_ar' => 'هبوط الشركة',
                'content_en' =>
                    'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse.',
                'content_ar' =>
                    'ويونيكود، حيث ستتم، على الصعيدين الدولي والمحلي على حد سواء مناقشة سبل استخدام يونكود في النظم القائمة وفيما يخص التطبيقات الحاسوبية، الخطوط، تصميم النصوص والحوسبة متعددة اللغات.',
                'slug' => 'company-landing',
                'logo' => '5f96b4b1c5b24.png',
                'status' => 1,
                'created_at' => '2020-10-26 06:00:01',
                'updated_at' => '2021-05-06 13:57:09'
            ],
            1 => [
                'id' => 3,
                'page_id' => 2,
                'title_en' => 'Registration for Training Centers',
                'title_ar' => 'dfgdfgdf',
                'content_en' =>
                    'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse.',
                'content_ar' => 'hjhtr',
                'slug' => 'test',
                'logo' => '5f96b46b5a6fe.png',
                'status' => 1,
                'created_at' => '2020-10-26 06:42:38',
                'updated_at' => '2021-01-27 03:17:07'
            ],
            2 => [
                'id' => 4,
                'page_id' => 3,
                'title_en' => 'Registration for Individuals',
                'title_ar' => 'dgfdfdfgdfg',
                'content_en' =>
                    'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse.',
                'content_ar' => 'dfgdfg',
                'slug' => 'casdasd',
                'logo' => '601124c282c95.png',
                'status' => 1,
                'created_at' => '2020-10-26 06:43:10',
                'updated_at' => '2021-01-27 05:02:17'
            ],
            3 => [
                'id' => 5,
                'page_id' => 4,
                'title_en' => 'Registration for Trainers',
                'title_ar' => 'asdas',
                'content_en' =>
                    'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse.',
                'content_ar' => 'asdasd',
                'slug' => 'asd',
                'logo' => '601123849e9e5.png',
                'status' => 1,
                'created_at' => '2020-10-26 06:43:22',
                'updated_at' => '2021-01-27 04:55:40'
            ],
            4 => [
                'id' => 6,
                'page_id' => 5,
                'title_en' => 'About Us',
                'title_ar' => 'About Us',
                'content_en' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod <br>
tempor incididunt ut labore et dolore magna aliqua.',
                'content_ar' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod <br>
tempor incididunt ut labore et dolore magna aliqua.',
                'slug' => 'about-us',
                'logo' => '5f96baa533e13.jpeg',
                'status' => 1,
                'created_at' => '2020-10-26 08:30:45',
                'updated_at' => '2021-03-30 06:26:25'
            ],
            5 => [
                'id' => 9,
                'page_id' => 6,
                'title_en' => 'Privacy Policy',
                'title_ar' => 'Tested',
                'content_en' => null,
                'content_ar' => null,
                'slug' => 'test-1',
                'logo' => '6065a9f8a4983.jpg',
                'status' => 1,
                'created_at' => '2020-12-09 06:17:59',
                'updated_at' => '2021-04-01 13:09:44'
            ],
            6 => [
                'id' => 10,
                'page_id' => 7,
                'title_en' => 'Contact',
                'title_ar' => 'Contact',
                'content_en' => 'test',
                'content_ar' => 'tds',
                'slug' => 'contact',
                'logo' => '6065aaf93f714.jpg',
                'status' => 1,
                'created_at' => '2020-12-09 06:55:37',
                'updated_at' => '2021-04-01 13:14:01'
            ]
        ]);
    }
}
