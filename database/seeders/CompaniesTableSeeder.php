<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CompaniesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('companies')->truncate();

        \DB::table('companies')->insert([
            0 => [
                'id' => 1,
                'en_company_name' => 'Yarddiant',
                'ar_company_name' => null,
                'logo' => null,
                'en_about_company' => 'this is test',
                'ar_about_company' => null,
                'website' => 'www.yarddiant.com',
                'address' => 'Abhayam, kohinoor, calicut university',
                'country_id' => 103,
                'latitude' => null,
                'longitude' => null,
                'newsletter_status' => 1,
                'status' => 1,
                'created_at' => '2021-06-08 09:16:49',
                'updated_at' => '2021-06-08 09:16:49',
                'deleted_at' => null
            ],
            1 => [
                'id' => 2,
                'en_company_name' => 'Company30',
                'ar_company_name' => null,
                'logo' => null,
                'en_about_company' => null,
                'ar_about_company' => null,
                'website' => null,
                'address' => null,
                'country_id' => 1,
                'latitude' => null,
                'longitude' => null,
                'newsletter_status' => null,
                'status' => 1,
                'created_at' => '2021-06-10 14:29:14',
                'updated_at' => '2021-06-10 14:29:14',
                'deleted_at' => null
            ],
            2 => [
                'id' => 3,
                'en_company_name' => 'My Company',
                'ar_company_name' => null,
                'logo' => null,
                'en_about_company' => null,
                'ar_about_company' => null,
                'website' => null,
                'address' => null,
                'country_id' => 1,
                'latitude' => null,
                'longitude' => null,
                'newsletter_status' => 0,
                'status' => 1,
                'created_at' => '2021-06-17 06:57:03',
                'updated_at' => '2021-06-17 07:09:27',
                'deleted_at' => null
            ],
            3 => [
                'id' => 4,
                'en_company_name' => 'My Company',
                'ar_company_name' => null,
                'logo' => null,
                'en_about_company' => null,
                'ar_about_company' => null,
                'website' => null,
                'address' => null,
                'country_id' => 1,
                'latitude' => null,
                'longitude' => null,
                'newsletter_status' => null,
                'status' => 1,
                'created_at' => '2021-06-18 12:13:29',
                'updated_at' => '2021-06-18 12:13:29',
                'deleted_at' => null
            ],
            4 => [
                'id' => 5,
                'en_company_name' => 'vivin',
                'ar_company_name' => null,
                'logo' => null,
                'en_about_company' => 'about',
                'ar_about_company' => null,
                'website' => null,
                'address' => 'address',
                'country_id' => 103,
                'latitude' => null,
                'longitude' => null,
                'newsletter_status' => null,
                'status' => 1,
                'created_at' => '2021-06-18 12:17:50',
                'updated_at' => '2021-06-18 12:17:50',
                'deleted_at' => null
            ],
            5 => [
                'id' => 6,
                'en_company_name' => 'Avada',
                'ar_company_name' => null,
                'logo' => null,
                'en_about_company' => 'Avada is a company',
                'ar_about_company' => 'Avada is a company',
                'website' => null,
                'address' => 'Abhayam, kohinoor, calicut university',
                'country_id' => 10,
                'latitude' => null,
                'longitude' => null,
                'newsletter_status' => 0,
                'status' => 1,
                'created_at' => '2021-06-18 17:39:39',
                'updated_at' => '2021-06-18 17:45:54',
                'deleted_at' => null
            ],
            6 => [
                'id' => 7,
                'en_company_name' => 'Testing',
                'ar_company_name' => null,
                'logo' => null,
                'en_about_company' => 'Testing',
                'ar_about_company' => null,
                'website' => null,
                'address' => 'Testing',
                'country_id' => 8,
                'latitude' => null,
                'longitude' => null,
                'newsletter_status' => null,
                'status' => 1,
                'created_at' => '2021-06-20 18:11:12',
                'updated_at' => '2021-06-20 18:11:12',
                'deleted_at' => null
            ],
            7 => [
                'id' => 8,
                'en_company_name' => 'com',
                'ar_company_name' => null,
                'logo' => null,
                'en_about_company' => 'cmo des',
                'ar_about_company' => null,
                'website' => null,
                'address' => null,
                'country_id' => 1,
                'latitude' => null,
                'longitude' => null,
                'newsletter_status' => null,
                'status' => 1,
                'created_at' => '2021-06-20 18:36:22',
                'updated_at' => '2021-06-20 18:36:22',
                'deleted_at' => null
            ],
            8 => [
                'id' => 9,
                'en_company_name' => 'Taivis',
                'ar_company_name' => null,
                'logo' => null,
                'en_about_company' => 'kj',
                'ar_about_company' => null,
                'website' => null,
                'address' => 'flat 3 block40
chilingham road',
                'country_id' => 235,
                'latitude' => null,
                'longitude' => null,
                'newsletter_status' => null,
                'status' => 1,
                'created_at' => '2021-06-22 13:27:23',
                'updated_at' => '2021-06-22 13:27:23',
                'deleted_at' => null
            ],
            9 => [
                'id' => 10,
                'en_company_name' => 'John',
                'ar_company_name' => null,
                'logo' => null,
                'en_about_company' => 'Test',
                'ar_about_company' => null,
                'website' => null,
                'address' => 'defre',
                'country_id' => 8,
                'latitude' => null,
                'longitude' => null,
                'newsletter_status' => 1,
                'status' => 1,
                'created_at' => '2021-06-22 14:01:30',
                'updated_at' => '2021-06-22 14:01:30',
                'deleted_at' => null
            ]
        ]);
    }
}
