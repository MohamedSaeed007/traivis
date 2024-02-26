<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ChatsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('chats')->truncate();

        \DB::table('chats')->insert([
            0 => [
                'id' => 1,
                'sender_id' => 476,
                'receiver_id' => 478,
                'message' => 'hello indvi',
                'date' => '2021-06-09',
                'time' => '01:50 pm',
                'is_read' => 1,
                'created_at' => '2021-06-09 13:50:56',
                'updated_at' => '2021-06-09 13:52:20'
            ],
            1 => [
                'id' => 2,
                'sender_id' => 478,
                'receiver_id' => 476,
                'message' => 'hello...!',
                'date' => '2021-06-09',
                'time' => '01:52 pm',
                'is_read' => 1,
                'created_at' => '2021-06-09 13:52:26',
                'updated_at' => '2021-06-09 13:52:40'
            ],
            2 => [
                'id' => 3,
                'sender_id' => 476,
                'receiver_id' => 477,
                'message' => 'hi ss',
                'date' => '2021-06-09',
                'time' => '01:55 pm',
                'is_read' => 1,
                'created_at' => '2021-06-09 13:55:02',
                'updated_at' => '2021-06-09 13:55:11'
            ],
            3 => [
                'id' => 4,
                'sender_id' => 477,
                'receiver_id' => 476,
                'message' => 'hello center',
                'date' => '2021-06-09',
                'time' => '01:55 pm',
                'is_read' => 1,
                'created_at' => '2021-06-09 13:55:22',
                'updated_at' => '2021-06-09 13:55:35'
            ],
            4 => [
                'id' => 5,
                'sender_id' => 481,
                'receiver_id' => 489,
                'message' => 'hi',
                'date' => '2021-06-13',
                'time' => '12:02 am',
                'is_read' => 0,
                'created_at' => '2021-06-13 00:02:46',
                'updated_at' => '2021-06-13 00:02:46'
            ],
            5 => [
                'id' => 6,
                'sender_id' => 498,
                'receiver_id' => 1,
                'message' => 'hi',
                'date' => '2021-06-16',
                'time' => '04:09 pm',
                'is_read' => 1,
                'created_at' => '2021-06-16 16:09:51',
                'updated_at' => '2021-06-17 07:09:05'
            ],
            6 => [
                'id' => 7,
                'sender_id' => 468,
                'receiver_id' => 471,
                'message' => 'hello',
                'date' => '2021-06-17',
                'time' => '04:13 am',
                'is_read' => 0,
                'created_at' => '2021-06-17 04:13:38',
                'updated_at' => '2021-06-17 04:13:38'
            ],
            7 => [
                'id' => 8,
                'sender_id' => 467,
                'receiver_id' => 1,
                'message' => 'Hellooo',
                'date' => '2021-06-17',
                'time' => '05:10 am',
                'is_read' => 1,
                'created_at' => '2021-06-17 05:10:11',
                'updated_at' => '2021-06-17 06:58:00'
            ]
        ]);
    }
}
