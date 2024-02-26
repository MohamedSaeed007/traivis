<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MediaTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('media')->truncate();

        \DB::table('media')->insert([
            0 => [
                'id' => 1,
                'user_id' => 474,
                'name' => 'download.jpeg',
                'title' => null,
                'alt_text' => null,
                'slug' => 'download',
                'slug_ext' => 'download.jpeg',
                'file_size' => '6996',
                'mime_type' => 'image/jpeg',
                'metadata' => null,
                'sort_order' => 0,
                'created_at' => '2021-06-08 09:41:49',
                'updated_at' => '2021-06-08 09:41:49'
            ],
            1 => [
                'id' => 2,
                'user_id' => 476,
                'name' => 'thiago-gomes-K0YuYMAwCTQ-unsplash.jpg',
                'title' => null,
                'alt_text' => null,
                'slug' => 'thiago-gomes-k0yuymawctq-unsplash',
                'slug_ext' => 'thiago-gomes-k0yuymawctq-unsplash.jpg',
                'file_size' => '699720',
                'mime_type' => 'image/jpeg',
                'metadata' => null,
                'sort_order' => 0,
                'created_at' => '2021-06-09 15:15:28',
                'updated_at' => '2021-06-09 15:15:28'
            ],
            2 => [
                'id' => 3,
                'user_id' => 476,
                'name' => 'Mohamed Salah , PHP Developer.pdf',
                'title' => null,
                'alt_text' => null,
                'slug' => 'mohamed-salah-php-developer',
                'slug_ext' => 'mohamed-salah-php-developer.pdf',
                'file_size' => '259915',
                'mime_type' => 'application/pdf',
                'metadata' => null,
                'sort_order' => 0,
                'created_at' => '2021-06-09 15:17:36',
                'updated_at' => '2021-06-09 15:17:36'
            ],
            3 => [
                'id' => 4,
                'user_id' => 476,
                'name' => 'bmw_car_bumper_191131_1920x1080.jpg',
                'title' => null,
                'alt_text' => null,
                'slug' => 'bmw-car-bumper-191131-1920x1080',
                'slug_ext' => 'bmw-car-bumper-191131-1920x1080.jpg',
                'file_size' => '258553',
                'mime_type' => 'image/jpeg',
                'metadata' => null,
                'sort_order' => 0,
                'created_at' => '2021-06-09 15:25:00',
                'updated_at' => '2021-06-09 15:25:00'
            ],
            4 => [
                'id' => 5,
                'user_id' => 1,
                'name' => 'download.jpeg',
                'title' => null,
                'alt_text' => null,
                'slug' => 'download-1',
                'slug_ext' => 'download-1.jpeg',
                'file_size' => '6996',
                'mime_type' => 'image/jpeg',
                'metadata' => null,
                'sort_order' => 0,
                'created_at' => '2021-06-18 09:58:10',
                'updated_at' => '2021-06-18 09:58:10'
            ],
            5 => [
                'id' => 6,
                'user_id' => 476,
                'name' => 'jeremy-bishop-9pRjY4d7nJE-unsplash.jpg',
                'title' => null,
                'alt_text' => null,
                'slug' => 'jeremy-bishop-9prjy4d7nje-unsplash',
                'slug_ext' => 'jeremy-bishop-9prjy4d7nje-unsplash.jpg',
                'file_size' => '1700764',
                'mime_type' => 'image/jpeg',
                'metadata' => null,
                'sort_order' => 0,
                'created_at' => '2021-06-18 12:49:18',
                'updated_at' => '2021-06-18 12:49:18'
            ]
        ]);
    }
}
