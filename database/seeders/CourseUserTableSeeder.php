<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class CourseUserTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('course_user')->truncate();
        return;

        \DB::table('course_user')->insert([
            [
                'id' => 1,
                'course_id' => 1,
                'user_id' => 1,
                'permissions' => null,
                'status' => 'success',
                'created_at' => '2021-06-08 11:48:07',
            ],
            [
                'id' => 2,
                'course_id' => 2,
                'user_id' => 1,
                'permissions' => null,
                'status' => 'success',
                'created_at' => '2021-06-08 11:51:36',
            ],
            [
                'id' => 3,
                'course_id' => 3,
                'user_id' => 2,
                'permissions' => null,
                'status' => 'success',
                'created_at' => '2021-06-09 15:15:55',
            ],
            [
                'id' => 4,
                'course_id' => 4,
                'user_id' => 2,
                'permissions' => null,
                'status' => 'success',
                'created_at' => '2021-06-17 11:09:39',
            ],
            [
                'id' => 5,
                'course_id' => 5,
                'user_id' => 2,
                'permissions' => null,
                'status' => 'success',
                'created_at' => '2021-06-17 11:21:50',
            ],
            [
                'id' => 6,
                'course_id' => 6,
                'user_id' => 2,
                'permissions' => null,
                'status' => 'success',
                'created_at' => '2021-06-17 11:22:13',
            ],
            [
                'id' => 7,
                'course_id' => 7,
                'user_id' => 1,
                'permissions' => null,
                'status' => 'success',
                'created_at' => '2021-06-18 09:59:35',
            ],
            [
                'id' => 8,
                'course_id' => 8,
                'user_id' => 2,
                'permissions' => null,
                'status' => 'success',
                'created_at' => '2021-06-18 12:49:32',
            ],
            [
                'id' => 9,
                'course_id' => 9,
                'user_id' => 3,
                'permissions' => null,
                'status' => 'success',
                'created_at' => '2021-06-18 13:52:16',
            ],
            [
                'id' => 10,
                'course_id' => 10,
                'user_id' => 1,
                'permissions' => null,
                'status' => 'success',
                'created_at' => '2021-06-18 13:52:16',
            ],
            [
                'id' => 11,
                'course_id' => 11,
                'user_id' => 1,
                'permissions' => null,
                'status' => 'success',
                'created_at' => '2021-06-18 13:52:16',
            ],
            [
                'id' => 12,
                'course_id' => 12,
                'user_id' => 1,
                'permissions' => null,
                'status' => 'success',
                'created_at' => '2021-06-18 13:52:16',
            ],
            [
                'id' => 13,
                'course_id' => 13,
                'user_id' => 1,
                'permissions' => null,
                'status' => 'success',
                'created_at' => '2021-06-18 13:52:16',
            ],
            [
                'id' => 14,
                'course_id' => 14,
                'user_id' => 1,
                'permissions' => null,
                'status' => 'success',
                'created_at' => '2021-06-18 13:52:16',
            ],
        ]);

        //                foreach (User::take(9)->get() as $user) {
        //                    $user->courses()->attach();
        //                }
    }
}
