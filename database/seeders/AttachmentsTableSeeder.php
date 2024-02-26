<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AttachmentsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('attachments')->truncate();

        \DB::table('attachments')->insert([
            0 => [
                'id' => 1,
                'course_id' => null,
                'assignment_submission_id' => null,
                'belongs_course_id' => 3,
                'content_id' => 1,
                'user_id' => 476,
                'media_id' => 3,
                'hash_id' => '0crtswdqg7wth244661lwprihgg5uifq'
            ]
        ]);
    }
}
