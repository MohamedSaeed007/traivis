<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CompanyContactDetailsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('company_contact_details')->truncate();

        \DB::table('company_contact_details')->insert([
            0 => [
                'id' => 1,
                'company_id' => 1,
                'contact_first_name' => 'Neeraj',
                'contact_last_name' => 'Gupta',
                'position' => null,
                'gender' => 2,
                'dob' => '2020-01-01',
                'email_id' => 'neeraj.rk@gmail.com',
                'phone' => '09995202212',
                'visibility_status' => null,
                'created_at' => '2021-06-08 07:16:49',
                'updated_at' => '2021-06-08 07:16:49'
            ],
            1 => [
                'id' => 2,
                'company_id' => 2,
                'contact_first_name' => null,
                'contact_last_name' => null,
                'position' => null,
                'gender' => null,
                'dob' => '2020-01-01',
                'email_id' => null,
                'phone' => null,
                'visibility_status' => null,
                'created_at' => '2021-06-10 12:29:14',
                'updated_at' => '2021-06-10 12:29:14'
            ],
            2 => [
                'id' => 3,
                'company_id' => 3,
                'contact_first_name' => null,
                'contact_last_name' => null,
                'position' => null,
                'gender' => null,
                'dob' => '2020-01-01',
                'email_id' => null,
                'phone' => null,
                'visibility_status' => null,
                'created_at' => '2021-06-17 04:57:03',
                'updated_at' => '2021-06-17 04:57:03'
            ],
            3 => [
                'id' => 4,
                'company_id' => 4,
                'contact_first_name' => null,
                'contact_last_name' => null,
                'position' => null,
                'gender' => null,
                'dob' => '2020-01-01',
                'email_id' => 'newcompany1234@gmail.com',
                'phone' => null,
                'visibility_status' => null,
                'created_at' => '2021-06-18 10:13:29',
                'updated_at' => '2021-06-18 10:13:29'
            ],
            4 => [
                'id' => 5,
                'company_id' => 5,
                'contact_first_name' => 'thomas',
                'contact_last_name' => 'vasudev',
                'position' => null,
                'gender' => null,
                'dob' => '2020-01-01',
                'email_id' => 'vivin@gmail.com',
                'phone' => '748576356',
                'visibility_status' => null,
                'created_at' => '2021-06-18 10:17:50',
                'updated_at' => '2021-06-18 10:17:50'
            ],
            5 => [
                'id' => 6,
                'company_id' => 6,
                'contact_first_name' => 'Neeraj',
                'contact_last_name' => 'Gupta',
                'position' => null,
                'gender' => null,
                'dob' => '2020-01-01',
                'email_id' => 'neeraj.rk@gmail.com',
                'phone' => '09995202212',
                'visibility_status' => null,
                'created_at' => '2021-06-18 15:39:39',
                'updated_at' => '2021-06-18 15:39:39'
            ],
            6 => [
                'id' => 7,
                'company_id' => 7,
                'contact_first_name' => 'Vicky',
                'contact_last_name' => 'Last',
                'position' => 'Manager',
                'gender' => 2,
                'dob' => '2020-01-01',
                'email_id' => 'Vicky@gmail.com',
                'phone' => null,
                'visibility_status' => null,
                'created_at' => '2021-06-20 16:11:12',
                'updated_at' => '2021-06-20 16:11:12'
            ],
            7 => [
                'id' => 8,
                'company_id' => 8,
                'contact_first_name' => null,
                'contact_last_name' => null,
                'position' => null,
                'gender' => null,
                'dob' => '2020-01-01',
                'email_id' => null,
                'phone' => null,
                'visibility_status' => null,
                'created_at' => '2021-06-20 16:36:22',
                'updated_at' => '2021-06-20 16:36:22'
            ],
            8 => [
                'id' => 9,
                'company_id' => 9,
                'contact_first_name' => 'Traivis',
                'contact_last_name' => null,
                'position' => null,
                'gender' => null,
                'dob' => '2020-01-01',
                'email_id' => null,
                'phone' => '07751800331',
                'visibility_status' => null,
                'created_at' => '2021-06-22 11:27:23',
                'updated_at' => '2021-06-22 11:27:23'
            ],
            9 => [
                'id' => 10,
                'company_id' => 10,
                'contact_first_name' => 'dd',
                'contact_last_name' => 'ddd',
                'position' => null,
                'gender' => null,
                'dob' => '2020-01-01',
                'email_id' => null,
                'phone' => '07751800331',
                'visibility_status' => null,
                'created_at' => '2021-06-22 12:01:30',
                'updated_at' => '2021-06-22 12:01:30'
            ]
        ]);
    }
}
