<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FreeResourcesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('free_resources')->truncate();

        \DB::table('free_resources')->insert([
            0 => [
                'id' => 1,
                'title_en' => 'free test',
                'title_ar' => null,
                'short_desc_en' => null,
                'short_desc_ar' => null,
                'description_en' => null,
                'description_ar' => null,
                'parent_category_id' => null,
                'second_category_id' => null,
                'img' => '60c0ca1427f2c.jpg',
                'document' => '60c0ca1429252.pdf',
                'doc_type' => 'pdf',
                'posted_by' => 476,
                'status' => 1,
                'created_at' => '2021-06-09 14:03:00',
                'updated_at' => '2021-06-09 14:03:37'
            ],
            1 => [
                'id' => 2,
                'title_en' => 't is a long established fact that a reader',
                'title_ar' => null,
                'short_desc_en' =>
                    't is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum',
                'short_desc_ar' => null,
                'description_en' =>
                    '<p>, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a&nbsp;</p>',
                'description_ar' => null,
                'parent_category_id' => null,
                'second_category_id' => null,
                'img' => '60cafc9b6507b.jpg',
                'document' => '60cafc9b651ab.pdf',
                'doc_type' => 'pdf',
                'posted_by' => 507,
                'status' => 1,
                'created_at' => '2021-06-17 07:41:15',
                'updated_at' => '2021-06-17 07:42:19'
            ]
        ]);
    }
}
