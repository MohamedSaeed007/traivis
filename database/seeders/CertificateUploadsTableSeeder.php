<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CertificateUploadsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('certificate_uploads')->truncate();

        \DB::table('certificate_uploads')->insert([
            0 => [
                'id' => 1,
                'user_id' => 478,
                'course_id' => 3,
                'certificate' => '2021/6/screenshot-from-2021-06-02-17-04-30.png',
                'status' => 1,
                'created_at' => '2021-06-09 15:56:20',
                'updated_at' => '2021-06-09 15:56:20'
            ],
            1 => [
                'id' => 2,
                'user_id' => 509,
                'course_id' => 8,
                'certificate' => '2021/6/thiago-gomes-k0yuymawctq-unsplash.jpg',
                'status' => 1,
                'created_at' => '2021-06-18 12:55:33',
                'updated_at' => '2021-06-18 12:55:33'
            ]
        ]);
    }
}
