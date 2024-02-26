<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserNotificationsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('user_notifications')->truncate();

        \DB::table('user_notifications')->insert([
            0 => [
                'id' => 1,
                'notifiable_user_id' => 1,
                'notification' => 'New company admin Company123 registered ',
                'is_read' => 0,
                'model_id' => 466,
                'model' => 'company-register',
                'snooze_interval' => 0,
                'created_at' => '2021-06-07 18:43:27',
                'updated_at' => '2021-06-07 18:43:27'
            ],
            1 => [
                'id' => 2,
                'notifiable_user_id' => 1,
                'notification' => 'New company admin Company1234 registered ',
                'is_read' => 0,
                'model_id' => 467,
                'model' => 'company-register',
                'snooze_interval' => 0,
                'created_at' => '2021-06-07 21:05:01',
                'updated_at' => '2021-06-07 21:05:01'
            ],
            2 => [
                'id' => 3,
                'notifiable_user_id' => 1,
                'notification' => 'New company admin Company registered ',
                'is_read' => 0,
                'model_id' => 468,
                'model' => 'company-register',
                'snooze_interval' => 0,
                'created_at' => '2021-06-08 09:12:23',
                'updated_at' => '2021-06-08 09:12:23'
            ],
            3 => [
                'id' => 4,
                'notifiable_user_id' => 475,
                'notification' => 'You have a new course Wordpress development Assigned By Prasoon ',
                'is_read' => 0,
                'model_id' => 1,
                'model' => 'course_assigned_to_trainer',
                'snooze_interval' => 0,
                'created_at' => '2021-06-08 11:48:07',
                'updated_at' => '2021-06-08 11:48:07'
            ],
            4 => [
                'id' => 5,
                'notifiable_user_id' => 474,
                'notification' => 'You have successfully added Wordpress development ',
                'is_read' => 0,
                'model_id' => 1,
                'model' => 'course-added',
                'snooze_interval' => 0,
                'created_at' => '2021-06-08 11:48:07',
                'updated_at' => '2021-06-08 11:48:07'
            ],
            5 => [
                'id' => 6,
                'notifiable_user_id' => 475,
                'notification' => 'You have a new Wordpress development course assigned by Prasoon',
                'is_read' => 0,
                'model_id' => 1,
                'model' => 'course-added-to-trainer',
                'snooze_interval' => 0,
                'created_at' => '2021-06-08 11:48:40',
                'updated_at' => '2021-06-08 11:48:40'
            ],
            6 => [
                'id' => 7,
                'notifiable_user_id' => 1,
                'notification' => 'Prasoon  added new course',
                'is_read' => 0,
                'model_id' => 1,
                'model' => 'course_created',
                'snooze_interval' => 0,
                'created_at' => '2021-06-08 11:49:21',
                'updated_at' => '2021-06-08 11:49:21'
            ],
            7 => [
                'id' => 8,
                'notifiable_user_id' => 474,
                'notification' => 'You have created new Wordpress development course',
                'is_read' => 0,
                'model_id' => 1,
                'model' => 'course_created',
                'snooze_interval' => 0,
                'created_at' => '2021-06-08 11:49:21',
                'updated_at' => '2021-06-08 11:49:21'
            ],
            8 => [
                'id' => 9,
                'notifiable_user_id' => 1,
                'notification' =>
                    'You have successfully changed to Publishthe Wordpress development course',
                'is_read' => 0,
                'model_id' => 1,
                'model' => 'course_update',
                'snooze_interval' => 0,
                'created_at' => '2021-06-08 11:49:59',
                'updated_at' => '2021-06-08 11:49:59'
            ],
            9 => [
                'id' => 10,
                'notifiable_user_id' => 474,
                'notification' =>
                    'Admin successfuly status changed to Publish the Wordpress development course',
                'is_read' => 0,
                'model_id' => 1,
                'model' => 'course_update',
                'snooze_interval' => 0,
                'created_at' => '2021-06-08 11:49:59',
                'updated_at' => '2021-06-08 11:49:59'
            ],
            10 => [
                'id' => 11,
                'notifiable_user_id' => 1,
                'notification' => 'You have successfully added Yarddiant EBS ',
                'is_read' => 0,
                'model_id' => 2,
                'model' => 'course-added',
                'snooze_interval' => 0,
                'created_at' => '2021-06-08 11:51:36',
                'updated_at' => '2021-06-08 11:51:36'
            ],
            11 => [
                'id' => 12,
                'notifiable_user_id' => 1,
                'notification' => 'Traivis Admin  added new course',
                'is_read' => 0,
                'model_id' => 2,
                'model' => 'course_created',
                'snooze_interval' => 0,
                'created_at' => '2021-06-08 11:51:49',
                'updated_at' => '2021-06-08 11:51:49'
            ],
            12 => [
                'id' => 13,
                'notifiable_user_id' => 1,
                'notification' => 'You have created new Yarddiant EBS course',
                'is_read' => 0,
                'model_id' => 2,
                'model' => 'course_created',
                'snooze_interval' => 0,
                'created_at' => '2021-06-08 11:51:49',
                'updated_at' => '2021-06-08 11:51:49'
            ],
            13 => [
                'id' => 14,
                'notifiable_user_id' => 1,
                'notification' => 'You have successfully changed to Publishthe Yarddiant EBS course',
                'is_read' => 0,
                'model_id' => 2,
                'model' => 'course_update',
                'snooze_interval' => 0,
                'created_at' => '2021-06-08 11:52:26',
                'updated_at' => '2021-06-08 11:52:26'
            ],
            14 => [
                'id' => 15,
                'notifiable_user_id' => 1,
                'notification' => 'Admin successfuly status changed to Publish the Yarddiant EBS course',
                'is_read' => 0,
                'model_id' => 2,
                'model' => 'course_update',
                'snooze_interval' => 0,
                'created_at' => '2021-06-08 11:52:26',
                'updated_at' => '2021-06-08 11:52:26'
            ],
            15 => [
                'id' => 16,
                'notifiable_user_id' => 471,
                'notification' =>
                    'You have a new Course   Wordpress development  purchased By  Company ....  Please waiting for super admin approvel ',
                'is_read' => 0,
                'model_id' => null,
                'model' => 'course_purchase_by_company_for_work_forces',
                'snooze_interval' => 0,
                'created_at' => '2021-06-08 11:55:27',
                'updated_at' => '2021-06-08 11:55:27'
            ],
            16 => [
                'id' => 17,
                'notifiable_user_id' => 468,
                'notification' => 'You have successfully purchase Course   Wordpress development  ',
                'is_read' => 0,
                'model_id' => 1,
                'model' => 'company_purchase_courses',
                'snooze_interval' => 0,
                'created_at' => '2021-06-08 11:55:27',
                'updated_at' => '2021-06-08 11:55:27'
            ],
            17 => [
                'id' => 18,
                'notifiable_user_id' => 474,
                'notification' => 'Your Course Wordpress development  purchased by Company ',
                'is_read' => 0,
                'model_id' => 1,
                'model' => 'course_created_user',
                'snooze_interval' => 0,
                'created_at' => '2021-06-08 11:55:27',
                'updated_at' => '2021-06-08 11:55:27'
            ],
            18 => [
                'id' => 19,
                'notifiable_user_id' => 471,
                'notification' =>
                    'Super Admin Successfully approved Wordpress development course. Continue learning',
                'is_read' => 0,
                'model_id' => 1,
                'model' => 'course-purchase-success',
                'snooze_interval' => 0,
                'created_at' => '2021-06-08 11:56:02',
                'updated_at' => '2021-06-08 11:56:02'
            ],
            19 => [
                'id' => 20,
                'notifiable_user_id' => 476,
                'notification' => 'You have successfully added php ',
                'is_read' => 0,
                'model_id' => 3,
                'model' => 'course-added',
                'snooze_interval' => 0,
                'created_at' => '2021-06-09 15:15:55',
                'updated_at' => '2021-06-09 15:15:55'
            ],
            20 => [
                'id' => 21,
                'notifiable_user_id' => 1,
                'notification' => 'TrainigCenter  added new course',
                'is_read' => 0,
                'model_id' => 3,
                'model' => 'course_created',
                'snooze_interval' => 0,
                'created_at' => '2021-06-09 15:27:30',
                'updated_at' => '2021-06-09 15:27:30'
            ],
            21 => [
                'id' => 22,
                'notifiable_user_id' => 476,
                'notification' => 'You have created new php course',
                'is_read' => 0,
                'model_id' => 3,
                'model' => 'course_created',
                'snooze_interval' => 0,
                'created_at' => '2021-06-09 15:27:30',
                'updated_at' => '2021-06-09 15:27:30'
            ],
            22 => [
                'id' => 23,
                'notifiable_user_id' => 1,
                'notification' => 'You have successfully changed to Publishthe php course',
                'is_read' => 0,
                'model_id' => 3,
                'model' => 'course_update',
                'snooze_interval' => 0,
                'created_at' => '2021-06-09 15:28:05',
                'updated_at' => '2021-06-09 15:28:05'
            ],
            23 => [
                'id' => 24,
                'notifiable_user_id' => 476,
                'notification' => 'Admin successfuly status changed to Publish the php course',
                'is_read' => 0,
                'model_id' => 3,
                'model' => 'course_update',
                'snooze_interval' => 0,
                'created_at' => '2021-06-09 15:28:05',
                'updated_at' => '2021-06-09 15:28:05'
            ],
            24 => [
                'id' => 25,
                'notifiable_user_id' => 477,
                'notification' => 'You have a new php course assigned by TrainigCenter',
                'is_read' => 0,
                'model_id' => 3,
                'model' => 'course-added-to-trainer',
                'snooze_interval' => 0,
                'created_at' => '2021-06-09 15:45:38',
                'updated_at' => '2021-06-09 15:45:38'
            ],
            25 => [
                'id' => 26,
                'notifiable_user_id' => 1,
                'notification' => 'student mohamed  complete  php course',
                'is_read' => 0,
                'model_id' => 3,
                'model' => 'course_complete',
                'snooze_interval' => 0,
                'created_at' => '2021-06-09 15:50:30',
                'updated_at' => '2021-06-09 15:50:30'
            ],
            26 => [
                'id' => 27,
                'notifiable_user_id' => 478,
                'notification' => 'You have  completed  php course',
                'is_read' => 0,
                'model_id' => 3,
                'model' => 'course_complete',
                'snooze_interval' => 0,
                'created_at' => '2021-06-09 15:50:30',
                'updated_at' => '2021-06-09 15:50:30'
            ],
            27 => [
                'id' => 28,
                'notifiable_user_id' => 1,
                'notification' => 'mo.salah  complete  php course',
                'is_read' => 0,
                'model_id' => 3,
                'model' => 'course_complete',
                'snooze_interval' => 0,
                'created_at' => '2021-06-10 11:20:21',
                'updated_at' => '2021-06-10 11:20:21'
            ],
            28 => [
                'id' => 29,
                'notifiable_user_id' => 479,
                'notification' => 'You have  completed  php course',
                'is_read' => 0,
                'model_id' => 3,
                'model' => 'course_complete',
                'snooze_interval' => 0,
                'created_at' => '2021-06-10 11:20:21',
                'updated_at' => '2021-06-10 11:20:21'
            ],
            29 => [
                'id' => 30,
                'notifiable_user_id' => 1,
                'notification' => 'New company admin company registered ',
                'is_read' => 0,
                'model_id' => 481,
                'model' => 'company-register',
                'snooze_interval' => 0,
                'created_at' => '2021-06-10 14:24:21',
                'updated_at' => '2021-06-10 14:24:21'
            ],
            30 => [
                'id' => 31,
                'notifiable_user_id' => 1,
                'notification' => ' company subscribed Premium package',
                'is_read' => 0,
                'model_id' => 1,
                'model' => 'subscrib',
                'snooze_interval' => 0,
                'created_at' => '2021-06-10 14:24:42',
                'updated_at' => '2021-06-10 14:24:42'
            ],
            31 => [
                'id' => 32,
                'notifiable_user_id' => 476,
                'notification' => 'You course  php  has a bidding request by company ',
                'is_read' => 0,
                'model_id' => 1,
                'model' => 'biddig-request',
                'snooze_interval' => 0,
                'created_at' => '2021-06-10 19:28:56',
                'updated_at' => '2021-06-10 19:28:56'
            ],
            32 => [
                'id' => 33,
                'notifiable_user_id' => 481,
                'notification' => 'Your Bidding Request is acceppted for php .Accepted Price  0',
                'is_read' => 0,
                'model_id' => 1,
                'model' => 'biddig-accept',
                'snooze_interval' => 0,
                'created_at' => '2021-06-10 19:31:43',
                'updated_at' => '2021-06-10 19:31:43'
            ],
            33 => [
                'id' => 34,
                'notifiable_user_id' => 1,
                'notification' => 'New company admin Dixie Kertzmann registered ',
                'is_read' => 0,
                'model_id' => 495,
                'model' => 'company-register',
                'snooze_interval' => 0,
                'created_at' => '2021-06-13 17:00:17',
                'updated_at' => '2021-06-13 17:00:17'
            ],
            34 => [
                'id' => 35,
                'notifiable_user_id' => 1,
                'notification' => 'New company admin Laverne Kautzer registered ',
                'is_read' => 0,
                'model_id' => 496,
                'model' => 'company-register',
                'snooze_interval' => 0,
                'created_at' => '2021-06-15 06:27:16',
                'updated_at' => '2021-06-15 06:27:16'
            ],
            35 => [
                'id' => 36,
                'notifiable_user_id' => 1,
                'notification' => 'Traivis Admin  complete  php course',
                'is_read' => 0,
                'model_id' => 3,
                'model' => 'course_complete',
                'snooze_interval' => 0,
                'created_at' => '2021-06-15 15:41:21',
                'updated_at' => '2021-06-15 15:41:21'
            ],
            36 => [
                'id' => 37,
                'notifiable_user_id' => 1,
                'notification' => 'You have  completed  php course',
                'is_read' => 0,
                'model_id' => 3,
                'model' => 'course_complete',
                'snooze_interval' => 0,
                'created_at' => '2021-06-15 15:41:21',
                'updated_at' => '2021-06-15 15:41:21'
            ],
            37 => [
                'id' => 38,
                'notifiable_user_id' => 1,
                'notification' => 'New company admin Stefan Kub registered ',
                'is_read' => 0,
                'model_id' => 497,
                'model' => 'company-register',
                'snooze_interval' => 0,
                'created_at' => '2021-06-16 17:23:15',
                'updated_at' => '2021-06-16 17:23:15'
            ],
            38 => [
                'id' => 39,
                'notifiable_user_id' => 474,
                'notification' =>
                    'You course  Wordpress development  has a bidding request by Company1234 ',
                'is_read' => 0,
                'model_id' => 3,
                'model' => 'biddig-request',
                'snooze_interval' => 0,
                'created_at' => '2021-06-17 10:00:11',
                'updated_at' => '2021-06-17 10:00:11'
            ],
            39 => [
                'id' => 40,
                'notifiable_user_id' => 467,
                'notification' =>
                    'Your Bidding Request is acceppted for Wordpress development .Accepted Price  32',
                'is_read' => 0,
                'model_id' => 3,
                'model' => 'biddig-accept',
                'snooze_interval' => 0,
                'created_at' => '2021-06-17 10:02:31',
                'updated_at' => '2021-06-17 10:02:31'
            ],
            40 => [
                'id' => 41,
                'notifiable_user_id' => 467,
                'notification' =>
                    'Coupon code genarate for Wordpress development .A new coupon code \'  700NQY9A \'  validity  \' 2021-10-28 \'',
                'is_read' => 0,
                'model_id' => 1,
                'model' => 'biddig-coupon-code',
                'snooze_interval' => 0,
                'created_at' => '2021-06-17 10:03:06',
                'updated_at' => '2021-06-17 10:03:06'
            ],
            41 => [
                'id' => 42,
                'notifiable_user_id' => 507,
                'notification' => 'You have purchased New Course  Wordpress development ..... ',
                'is_read' => 0,
                'model_id' => 2,
                'model' => 'individually_purchased',
                'snooze_interval' => 0,
                'created_at' => '2021-06-17 10:08:25',
                'updated_at' => '2021-06-17 10:08:25'
            ],
            42 => [
                'id' => 43,
                'notifiable_user_id' => 474,
                'notification' => 'Your Course Wordpress development  purchased  Prasoon ',
                'is_read' => 0,
                'model_id' => 2,
                'model' => 'course_created_user',
                'snooze_interval' => 0,
                'created_at' => '2021-06-17 10:08:25',
                'updated_at' => '2021-06-17 10:08:25'
            ],
            43 => [
                'id' => 44,
                'notifiable_user_id' => 507,
                'notification' => 'You have purchased New Course  Wordpress development ..... ',
                'is_read' => 0,
                'model_id' => 3,
                'model' => 'individually_purchased',
                'snooze_interval' => 0,
                'created_at' => '2021-06-17 10:17:30',
                'updated_at' => '2021-06-17 10:17:30'
            ],
            44 => [
                'id' => 45,
                'notifiable_user_id' => 474,
                'notification' => 'Your Course Wordpress development  purchased  Prasoon ',
                'is_read' => 0,
                'model_id' => 3,
                'model' => 'course_created_user',
                'snooze_interval' => 0,
                'created_at' => '2021-06-17 10:17:30',
                'updated_at' => '2021-06-17 10:17:30'
            ],
            45 => [
                'id' => 46,
                'notifiable_user_id' => 471,
                'notification' =>
                    'You have a new Live section in  Wordpress development  course ...Team Link: https://teams.microsoft.com/l/meetup-join/   ,Please join Befote  2021-07-04T13:52  ',
                'is_read' => 0,
                'model_id' => 1,
                'model' => 'live-section',
                'snooze_interval' => 0,
                'created_at' => '2021-06-17 10:22:23',
                'updated_at' => '2021-06-17 10:22:23'
            ],
            46 => [
                'id' => 47,
                'notifiable_user_id' => 476,
                'notification' => 'You have successfully added test ',
                'is_read' => 0,
                'model_id' => 4,
                'model' => 'course-added',
                'snooze_interval' => 0,
                'created_at' => '2021-06-17 11:09:39',
                'updated_at' => '2021-06-17 11:09:39'
            ],
            47 => [
                'id' => 48,
                'notifiable_user_id' => 1,
                'notification' => 'TrainigCenter  added new course',
                'is_read' => 0,
                'model_id' => 4,
                'model' => 'course_created',
                'snooze_interval' => 0,
                'created_at' => '2021-06-17 11:10:54',
                'updated_at' => '2021-06-17 11:10:54'
            ],
            48 => [
                'id' => 49,
                'notifiable_user_id' => 476,
                'notification' => 'You have created new test course',
                'is_read' => 0,
                'model_id' => 4,
                'model' => 'course_created',
                'snooze_interval' => 0,
                'created_at' => '2021-06-17 11:10:54',
                'updated_at' => '2021-06-17 11:10:54'
            ],
            49 => [
                'id' => 50,
                'notifiable_user_id' => 1,
                'notification' => 'You have successfully changed to Publishthe test course',
                'is_read' => 0,
                'model_id' => 4,
                'model' => 'course_update',
                'snooze_interval' => 0,
                'created_at' => '2021-06-17 11:11:19',
                'updated_at' => '2021-06-17 11:11:19'
            ],
            50 => [
                'id' => 51,
                'notifiable_user_id' => 476,
                'notification' => 'Admin successfuly status changed to Publish the test course',
                'is_read' => 0,
                'model_id' => 4,
                'model' => 'course_update',
                'snooze_interval' => 0,
                'created_at' => '2021-06-17 11:11:19',
                'updated_at' => '2021-06-17 11:11:19'
            ],
            51 => [
                'id' => 52,
                'notifiable_user_id' => 476,
                'notification' => 'You have successfully added new course ',
                'is_read' => 0,
                'model_id' => 5,
                'model' => 'course-added',
                'snooze_interval' => 0,
                'created_at' => '2021-06-17 11:21:50',
                'updated_at' => '2021-06-17 11:21:50'
            ],
            52 => [
                'id' => 53,
                'notifiable_user_id' => 476,
                'notification' => 'You have successfully added new course ',
                'is_read' => 0,
                'model_id' => 6,
                'model' => 'course-added',
                'snooze_interval' => 0,
                'created_at' => '2021-06-17 11:22:13',
                'updated_at' => '2021-06-17 11:22:13'
            ],
            53 => [
                'id' => 54,
                'notifiable_user_id' => 1,
                'notification' => 'TrainigCenter  added new course',
                'is_read' => 0,
                'model_id' => 6,
                'model' => 'course_created',
                'snooze_interval' => 0,
                'created_at' => '2021-06-17 11:23:49',
                'updated_at' => '2021-06-17 11:23:49'
            ],
            54 => [
                'id' => 55,
                'notifiable_user_id' => 476,
                'notification' => 'You have created new new course course',
                'is_read' => 0,
                'model_id' => 6,
                'model' => 'course_created',
                'snooze_interval' => 0,
                'created_at' => '2021-06-17 11:23:49',
                'updated_at' => '2021-06-17 11:23:49'
            ],
            55 => [
                'id' => 56,
                'notifiable_user_id' => 1,
                'notification' => 'You have successfully changed to Publishthe new course course',
                'is_read' => 0,
                'model_id' => 6,
                'model' => 'course_update',
                'snooze_interval' => 0,
                'created_at' => '2021-06-17 11:24:13',
                'updated_at' => '2021-06-17 11:24:13'
            ],
            56 => [
                'id' => 57,
                'notifiable_user_id' => 476,
                'notification' => 'Admin successfuly status changed to Publish the new course course',
                'is_read' => 0,
                'model_id' => 6,
                'model' => 'course_update',
                'snooze_interval' => 0,
                'created_at' => '2021-06-17 11:24:13',
                'updated_at' => '2021-06-17 11:24:13'
            ],
            57 => [
                'id' => 58,
                'notifiable_user_id' => 474,
                'notification' =>
                    'You course  Wordpress development  has a bidding request by Company1234 ',
                'is_read' => 0,
                'model_id' => 4,
                'model' => 'biddig-request',
                'snooze_interval' => 0,
                'created_at' => '2021-06-17 11:58:03',
                'updated_at' => '2021-06-17 11:58:03'
            ],
            58 => [
                'id' => 59,
                'notifiable_user_id' => 467,
                'notification' =>
                    'Your Bidding Request is acceppted for Wordpress development .Accepted Price  50',
                'is_read' => 0,
                'model_id' => 4,
                'model' => 'biddig-accept',
                'snooze_interval' => 0,
                'created_at' => '2021-06-17 11:59:14',
                'updated_at' => '2021-06-17 11:59:14'
            ],
            59 => [
                'id' => 60,
                'notifiable_user_id' => 467,
                'notification' =>
                    'Coupon code genarate for Wordpress development .A new coupon code \'  RAZ6ZFZ1 \'  validity  \' 2021-06-30 \'',
                'is_read' => 0,
                'model_id' => 2,
                'model' => 'biddig-coupon-code',
                'snooze_interval' => 0,
                'created_at' => '2021-06-17 12:00:11',
                'updated_at' => '2021-06-17 12:00:11'
            ],
            60 => [
                'id' => 61,
                'notifiable_user_id' => 467,
                'notification' =>
                    'Your Bidding Request is acceppted for Yarddiant EBS .Accepted Price  20',
                'is_read' => 0,
                'model_id' => 7,
                'model' => 'biddig-accept',
                'snooze_interval' => 0,
                'created_at' => '2021-06-17 12:28:44',
                'updated_at' => '2021-06-17 12:28:44'
            ],
            61 => [
                'id' => 62,
                'notifiable_user_id' => 467,
                'notification' =>
                    'Coupon code genarate for Wordpress development .A new coupon code \'  RAZ6ZFZ1 \'  validity  \' 2021-06-30 \'',
                'is_read' => 0,
                'model_id' => 2,
                'model' => 'biddig-coupon-code',
                'snooze_interval' => 0,
                'created_at' => '2021-06-17 12:29:22',
                'updated_at' => '2021-06-17 12:29:22'
            ],
            62 => [
                'id' => 63,
                'notifiable_user_id' => 1,
                'notification' => 'New company admin New Company registered ',
                'is_read' => 0,
                'model_id' => 511,
                'model' => 'company-register',
                'snooze_interval' => 0,
                'created_at' => '2021-06-17 15:04:50',
                'updated_at' => '2021-06-17 15:04:50'
            ],
            63 => [
                'id' => 64,
                'notifiable_user_id' => 1,
                'notification' => 'You have successfully added Wordpress course ',
                'is_read' => 0,
                'model_id' => 7,
                'model' => 'course-added',
                'snooze_interval' => 0,
                'created_at' => '2021-06-18 09:59:35',
                'updated_at' => '2021-06-18 09:59:35'
            ],
            64 => [
                'id' => 65,
                'notifiable_user_id' => 1,
                'notification' => 'Traivis Admin  added new course',
                'is_read' => 0,
                'model_id' => 7,
                'model' => 'course_created',
                'snooze_interval' => 0,
                'created_at' => '2021-06-18 10:01:13',
                'updated_at' => '2021-06-18 10:01:13'
            ],
            65 => [
                'id' => 66,
                'notifiable_user_id' => 1,
                'notification' => 'You have created new Wordpress course course',
                'is_read' => 0,
                'model_id' => 7,
                'model' => 'course_created',
                'snooze_interval' => 0,
                'created_at' => '2021-06-18 10:01:13',
                'updated_at' => '2021-06-18 10:01:13'
            ],
            66 => [
                'id' => 67,
                'notifiable_user_id' => 1,
                'notification' => 'You have successfully changed to Publishthe Wordpress course course',
                'is_read' => 0,
                'model_id' => 7,
                'model' => 'course_update',
                'snooze_interval' => 0,
                'created_at' => '2021-06-18 10:01:50',
                'updated_at' => '2021-06-18 10:01:50'
            ],
            67 => [
                'id' => 68,
                'notifiable_user_id' => 1,
                'notification' =>
                    'Admin successfuly status changed to Publish the Wordpress course course',
                'is_read' => 0,
                'model_id' => 7,
                'model' => 'course_update',
                'snooze_interval' => 0,
                'created_at' => '2021-06-18 10:01:50',
                'updated_at' => '2021-06-18 10:01:50'
            ],
            68 => [
                'id' => 69,
                'notifiable_user_id' => 467,
                'notification' =>
                    'A new coupon code \'  YT58JFQG \' for \' Wordpress course \'.  validity  \' 2021-06-24 \'',
                'is_read' => 0,
                'model_id' => 12,
                'model' => 'biddig-coupon-code',
                'snooze_interval' => 0,
                'created_at' => '2021-06-18 10:10:04',
                'updated_at' => '2021-06-18 10:10:04'
            ],
            69 => [
                'id' => 70,
                'notifiable_user_id' => 1,
                'notification' => 'New company admin vivin registered ',
                'is_read' => 0,
                'model_id' => 516,
                'model' => 'company-register',
                'snooze_interval' => 0,
                'created_at' => '2021-06-18 12:17:06',
                'updated_at' => '2021-06-18 12:17:06'
            ],
            70 => [
                'id' => 71,
                'notifiable_user_id' => 477,
                'notification' => 'You have a new course java Assigned By TrainigCenter ',
                'is_read' => 0,
                'model_id' => 8,
                'model' => 'course_assigned_to_trainer',
                'snooze_interval' => 0,
                'created_at' => '2021-06-18 12:49:32',
                'updated_at' => '2021-06-18 12:49:32'
            ],
            71 => [
                'id' => 72,
                'notifiable_user_id' => 476,
                'notification' => 'You have successfully added java ',
                'is_read' => 0,
                'model_id' => 8,
                'model' => 'course-added',
                'snooze_interval' => 0,
                'created_at' => '2021-06-18 12:49:32',
                'updated_at' => '2021-06-18 12:49:32'
            ],
            72 => [
                'id' => 73,
                'notifiable_user_id' => 1,
                'notification' => 'TrainigCenter  added new course',
                'is_read' => 0,
                'model_id' => 8,
                'model' => 'course_created',
                'snooze_interval' => 0,
                'created_at' => '2021-06-18 12:51:26',
                'updated_at' => '2021-06-18 12:51:26'
            ],
            73 => [
                'id' => 74,
                'notifiable_user_id' => 476,
                'notification' => 'You have created new java course',
                'is_read' => 0,
                'model_id' => 8,
                'model' => 'course_created',
                'snooze_interval' => 0,
                'created_at' => '2021-06-18 12:51:26',
                'updated_at' => '2021-06-18 12:51:26'
            ],
            74 => [
                'id' => 75,
                'notifiable_user_id' => 1,
                'notification' => 'You have successfully changed to Publishthe java course',
                'is_read' => 0,
                'model_id' => 8,
                'model' => 'course_update',
                'snooze_interval' => 0,
                'created_at' => '2021-06-18 12:52:09',
                'updated_at' => '2021-06-18 12:52:09'
            ],
            75 => [
                'id' => 76,
                'notifiable_user_id' => 476,
                'notification' => 'Admin successfuly status changed to Publish the java course',
                'is_read' => 0,
                'model_id' => 8,
                'model' => 'course_update',
                'snooze_interval' => 0,
                'created_at' => '2021-06-18 12:52:09',
                'updated_at' => '2021-06-18 12:52:09'
            ],
            76 => [
                'id' => 77,
                'notifiable_user_id' => 1,
                'notification' => 'student mohamed  complete  java course',
                'is_read' => 0,
                'model_id' => 8,
                'model' => 'course_complete',
                'snooze_interval' => 0,
                'created_at' => '2021-06-18 12:53:41',
                'updated_at' => '2021-06-18 12:53:41'
            ],
            77 => [
                'id' => 78,
                'notifiable_user_id' => 509,
                'notification' => 'You have  completed  java course',
                'is_read' => 0,
                'model_id' => 8,
                'model' => 'course_complete',
                'snooze_interval' => 0,
                'created_at' => '2021-06-18 12:53:41',
                'updated_at' => '2021-06-18 12:53:41'
            ],
            78 => [
                'id' => 79,
                'notifiable_user_id' => 468,
                'notification' =>
                    'A new coupon code \'  GR1Z1G2X \' for \' Wordpress course \'.  validity  \' 2021-07-11 \'',
                'is_read' => 0,
                'model_id' => 1,
                'model' => 'biddig-coupon-code',
                'snooze_interval' => 0,
                'created_at' => '2021-06-18 13:45:13',
                'updated_at' => '2021-06-18 13:45:13'
            ],
            79 => [
                'id' => 80,
                'notifiable_user_id' => 475,
                'notification' => 'You have a new course new word press Assigned By Prasoon ',
                'is_read' => 0,
                'model_id' => 9,
                'model' => 'course_assigned_to_trainer',
                'snooze_interval' => 0,
                'created_at' => '2021-06-18 13:52:16',
                'updated_at' => '2021-06-18 13:52:16'
            ],
            80 => [
                'id' => 81,
                'notifiable_user_id' => 474,
                'notification' => 'You have successfully added new word press ',
                'is_read' => 0,
                'model_id' => 9,
                'model' => 'course-added',
                'snooze_interval' => 0,
                'created_at' => '2021-06-18 13:52:16',
                'updated_at' => '2021-06-18 13:52:16'
            ],
            81 => [
                'id' => 82,
                'notifiable_user_id' => 1,
                'notification' => 'Prasoon  added new course',
                'is_read' => 0,
                'model_id' => 9,
                'model' => 'course_created',
                'snooze_interval' => 0,
                'created_at' => '2021-06-18 13:54:38',
                'updated_at' => '2021-06-18 13:54:38'
            ],
            82 => [
                'id' => 83,
                'notifiable_user_id' => 474,
                'notification' => 'You have created new new word press course',
                'is_read' => 0,
                'model_id' => 9,
                'model' => 'course_created',
                'snooze_interval' => 0,
                'created_at' => '2021-06-18 13:54:38',
                'updated_at' => '2021-06-18 13:54:38'
            ],
            83 => [
                'id' => 84,
                'notifiable_user_id' => 1,
                'notification' => 'You have successfully changed to Publishthe new word press course',
                'is_read' => 0,
                'model_id' => 9,
                'model' => 'course_update',
                'snooze_interval' => 0,
                'created_at' => '2021-06-18 13:55:09',
                'updated_at' => '2021-06-18 13:55:09'
            ],
            84 => [
                'id' => 85,
                'notifiable_user_id' => 474,
                'notification' =>
                    'Admin successfuly status changed to Publish the new word press course',
                'is_read' => 0,
                'model_id' => 9,
                'model' => 'course_update',
                'snooze_interval' => 0,
                'created_at' => '2021-06-18 13:55:09',
                'updated_at' => '2021-06-18 13:55:09'
            ],
            85 => [
                'id' => 86,
                'notifiable_user_id' => 468,
                'notification' =>
                    'A new coupon code \'  BQTD5H6E \' for \' new word press \'.  validity  \' 2021-06-20 \'',
                'is_read' => 0,
                'model_id' => 2,
                'model' => 'biddig-coupon-code',
                'snooze_interval' => 0,
                'created_at' => '2021-06-18 13:57:36',
                'updated_at' => '2021-06-18 13:57:36'
            ],
            86 => [
                'id' => 87,
                'notifiable_user_id' => 474,
                'notification' =>
                    'You have a new Live section in  new word press  course ...Team Link: https://teams.microsoft.com/l/meetup-join/   ,Please join Befote  2021-06-26T17:35  ',
                'is_read' => 0,
                'model_id' => 9,
                'model' => 'live-section',
                'snooze_interval' => 0,
                'created_at' => '2021-06-18 14:05:29',
                'updated_at' => '2021-06-18 14:05:29'
            ],
            87 => [
                'id' => 88,
                'notifiable_user_id' => 1,
                'notification' => 'New company admin Radhika registered ',
                'is_read' => 0,
                'model_id' => 522,
                'model' => 'company-register',
                'snooze_interval' => 0,
                'created_at' => '2021-06-18 17:37:49',
                'updated_at' => '2021-06-18 17:37:49'
            ],
            88 => [
                'id' => 89,
                'notifiable_user_id' => 1,
                'notification' => 'New company admin Traivis registered ',
                'is_read' => 0,
                'model_id' => 526,
                'model' => 'company-register',
                'snooze_interval' => 0,
                'created_at' => '2021-06-20 16:54:05',
                'updated_at' => '2021-06-20 16:54:05'
            ],
            89 => [
                'id' => 90,
                'notifiable_user_id' => 1,
                'notification' => 'New company admin yhjhjh registered ',
                'is_read' => 0,
                'model_id' => 527,
                'model' => 'company-register',
                'snooze_interval' => 0,
                'created_at' => '2021-06-20 17:01:03',
                'updated_at' => '2021-06-20 17:01:03'
            ],
            90 => [
                'id' => 91,
                'notifiable_user_id' => 1,
                'notification' => 'New company admin Mohamed Salah registered ',
                'is_read' => 0,
                'model_id' => 528,
                'model' => 'company-register',
                'snooze_interval' => 0,
                'created_at' => '2021-06-20 17:08:41',
                'updated_at' => '2021-06-20 17:08:41'
            ],
            91 => [
                'id' => 92,
                'notifiable_user_id' => 1,
                'notification' => ' Mohamed Salah subscribed Premium package',
                'is_read' => 0,
                'model_id' => 2,
                'model' => 'subscrib',
                'snooze_interval' => 0,
                'created_at' => '2021-06-20 17:09:08',
                'updated_at' => '2021-06-20 17:09:08'
            ],
            92 => [
                'id' => 93,
                'notifiable_user_id' => 1,
                'notification' => 'New company admin Vicky registered ',
                'is_read' => 0,
                'model_id' => 529,
                'model' => 'company-register',
                'snooze_interval' => 0,
                'created_at' => '2021-06-20 18:09:56',
                'updated_at' => '2021-06-20 18:09:56'
            ],
            93 => [
                'id' => 94,
                'notifiable_user_id' => 1,
                'notification' => 'New company admin Traivis registered ',
                'is_read' => 0,
                'model_id' => 534,
                'model' => 'company-register',
                'snooze_interval' => 0,
                'created_at' => '2021-06-22 13:26:46',
                'updated_at' => '2021-06-22 13:26:46'
            ],
            94 => [
                'id' => 95,
                'notifiable_user_id' => 1,
                'notification' => 'New company admin John Dennis registered ',
                'is_read' => 0,
                'model_id' => 535,
                'model' => 'company-register',
                'snooze_interval' => 0,
                'created_at' => '2021-06-22 13:38:47',
                'updated_at' => '2021-06-22 13:38:47'
            ],
            95 => [
                'id' => 96,
                'notifiable_user_id' => 1,
                'notification' => 'New company admin John registered ',
                'is_read' => 0,
                'model_id' => 536,
                'model' => 'company-register',
                'snooze_interval' => 0,
                'created_at' => '2021-06-22 14:00:51',
                'updated_at' => '2021-06-22 14:00:51'
            ]
        ]);
    }
}
