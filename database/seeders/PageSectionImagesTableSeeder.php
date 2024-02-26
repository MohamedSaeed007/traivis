<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PageSectionImagesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('page_section_images')->truncate();

        \DB::table('page_section_images')->insert([
            0 => [
                'id' => 2,
                'page_id' => 1,
                'section_id' => 1,
                'img' => '600a709aaf114.png',
                'created_at' => '2021-01-22 06:28:42',
                'updated_at' => '2021-02-08 05:50:59'
            ],
            1 => [
                'id' => 3,
                'page_id' => 1,
                'section_id' => 2,
                'img' => '600a709ab6c17.png',
                'created_at' => '2021-01-22 06:28:42',
                'updated_at' => '2021-02-08 05:50:59'
            ],
            2 => [
                'id' => 4,
                'page_id' => 1,
                'section_id' => 3,
                'img' => '600a6f878adce.png',
                'created_at' => '2021-01-22 06:28:42',
                'updated_at' => '2021-02-08 05:50:59'
            ],
            3 => [
                'id' => 23,
                'page_id' => 5,
                'section_id' => 1,
                'img' => '600a728684205.jpg',
                'created_at' => '2021-01-22 06:36:54',
                'updated_at' => '2021-02-08 05:50:59'
            ],
            4 => [
                'id' => 28,
                'page_id' => 2,
                'section_id' => 1,
                'img' => '600a728684205.jpg',
                'created_at' => '2021-01-22 06:36:54',
                'updated_at' => '2021-02-08 05:50:59'
            ],
            5 => [
                'id' => 29,
                'page_id' => 2,
                'section_id' => 2,
                'img' => '60128581db7b9.png',
                'created_at' => '2021-01-22 06:36:54',
                'updated_at' => '2021-02-08 05:50:59'
            ],
            6 => [
                'id' => 30,
                'page_id' => 2,
                'section_id' => 3,
                'img' => '600e8c900652a.png',
                'created_at' => '2021-01-22 06:36:54',
                'updated_at' => '2021-02-08 05:50:59'
            ],
            7 => [
                'id' => 31,
                'page_id' => 2,
                'section_id' => 4,
                'img' => '600e8c9009de6.png',
                'created_at' => '2021-01-22 06:36:54',
                'updated_at' => '2021-02-08 05:50:59'
            ],
            8 => [
                'id' => 32,
                'page_id' => 3,
                'section_id' => 1,
                'img' => '60112f65858b9.png',
                'created_at' => '2021-01-22 06:36:54',
                'updated_at' => '2021-02-08 05:50:59'
            ],
            9 => [
                'id' => 33,
                'page_id' => 3,
                'section_id' => 2,
                'img' => '60112ffced1c1.png',
                'created_at' => '2021-01-22 06:36:54',
                'updated_at' => '2021-02-08 05:50:59'
            ],
            10 => [
                'id' => 34,
                'page_id' => 3,
                'section_id' => 3,
                'img' => '600e8cb6f0a62.png',
                'created_at' => '2021-01-22 06:36:54',
                'updated_at' => '2021-02-08 05:50:59'
            ],
            11 => [
                'id' => 35,
                'page_id' => 3,
                'section_id' => 4,
                'img' => '600e8cb7000a8.png',
                'created_at' => '2021-01-22 06:36:54',
                'updated_at' => '2021-02-08 05:50:59'
            ],
            12 => [
                'id' => 48,
                'page_id' => 4,
                'section_id' => 1,
                'img' => '601131bdd5c51.png',
                'created_at' => '2021-01-22 10:15:58',
                'updated_at' => '2021-02-08 05:50:59'
            ],
            13 => [
                'id' => 49,
                'page_id' => 4,
                'section_id' => 2,
                'img' => '6011315ad4739.png',
                'created_at' => '2021-01-22 06:36:54',
                'updated_at' => '2021-02-08 05:50:59'
            ],
            14 => [
                'id' => 50,
                'page_id' => 4,
                'section_id' => 3,
                'img' => '600e722ae8467.png',
                'created_at' => '2021-01-22 06:36:54',
                'updated_at' => '2021-02-08 05:50:59'
            ],
            15 => [
                'id' => 51,
                'page_id' => 4,
                'section_id' => 4,
                'img' => '600e722af3aea.png',
                'created_at' => '2021-01-22 06:36:54',
                'updated_at' => '2021-02-08 05:50:59'
            ]
        ]);
    }
}
