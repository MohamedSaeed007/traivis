<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class IndustryTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('industries')->truncate();

        \DB::table('industries')->insert([
            0 => [
                'id' => 1,
                'en_name' => 'Abortion Policy/Anti-Abortion',
                'ar_name' => 'Abortion Policy/Anti-Abortion',
                'slug' => 'abortion-policyanti-abortion',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:08',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            1 => [
                'id' => 2,
                'en_name' => 'Abortion Policy/Pro-Abortion Rights',
                'ar_name' => 'Abortion Policy/Pro-Abortion Rights',
                'slug' => 'abortion-policypro-abortion-rights',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:08',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            2 => [
                'id' => 3,
                'en_name' => 'Accountants',
                'ar_name' => 'Accountants',
                'slug' => 'accountants',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:09',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            3 => [
                'id' => 4,
                'en_name' => 'Advertising/Public Relations',
                'ar_name' => 'Advertising/Public Relations',
                'slug' => 'advertisingpublic-relations',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:09',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            4 => [
                'id' => 5,
                'en_name' => 'Aerospace, Defense Contractors',
                'ar_name' => 'Aerospace, Defense Contractors',
                'slug' => 'aerospace-defense-contractors',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:09',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            5 => [
                'id' => 6,
                'en_name' => 'Agribusiness',
                'ar_name' => 'Agribusiness',
                'slug' => 'agribusiness',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:09',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            6 => [
                'id' => 7,
                'en_name' => 'Agricultural Services & Products',
                'ar_name' => 'Agricultural Services & Products',
                'slug' => 'agricultural-services-products',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:09',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            7 => [
                'id' => 8,
                'en_name' => 'Agriculture',
                'ar_name' => 'Agriculture',
                'slug' => 'agriculture',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:09',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            8 => [
                'id' => 9,
                'en_name' => 'Air Transport',
                'ar_name' => 'Air Transport',
                'slug' => 'air-transport',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:09',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            9 => [
                'id' => 10,
                'en_name' => 'Air Transport Unions',
                'ar_name' => 'Air Transport Unions',
                'slug' => 'air-transport-unions',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:09',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            10 => [
                'id' => 11,
                'en_name' => 'Airlines',
                'ar_name' => 'Airlines',
                'slug' => 'airlines',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:09',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            11 => [
                'id' => 12,
                'en_name' => 'Alcoholic Beverages',
                'ar_name' => 'Alcoholic Beverages',
                'slug' => 'alcoholic-beverages',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:09',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            12 => [
                'id' => 13,
                'en_name' => 'Alternative Energy Production & Services',
                'ar_name' => 'Alternative Energy Production & Services',
                'slug' => 'alternative-energy-production-services',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:09',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            13 => [
                'id' => 14,
                'en_name' => 'Architectural Services',
                'ar_name' => 'Architectural Services',
                'slug' => 'architectural-services',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:09',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            14 => [
                'id' => 15,
                'en_name' => 'Attorneys/Law Firms',
                'ar_name' => 'Attorneys/Law Firms',
                'slug' => 'attorneyslaw-firms',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:09',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            15 => [
                'id' => 16,
                'en_name' => 'Auto Dealers',
                'ar_name' => 'Auto Dealers',
                'slug' => 'auto-dealers',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:09',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            16 => [
                'id' => 17,
                'en_name' => 'Auto Dealers, Japanese',
                'ar_name' => 'Auto Dealers, Japanese',
                'slug' => 'auto-dealers-japanese',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:09',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            17 => [
                'id' => 18,
                'en_name' => 'Auto Manufacturers',
                'ar_name' => 'Auto Manufacturers',
                'slug' => 'auto-manufacturers',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:09',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            18 => [
                'id' => 19,
                'en_name' => 'Automotive',
                'ar_name' => 'Automotive',
                'slug' => 'automotive',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:09',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            19 => [
                'id' => 20,
                'en_name' => 'Banking, Mortgage',
                'ar_name' => 'Banking, Mortgage',
                'slug' => 'banking-mortgage',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:09',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            20 => [
                'id' => 21,
                'en_name' => 'Banks, Commercial',
                'ar_name' => 'Banks, Commercial',
                'slug' => 'banks-commercial',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:09',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            21 => [
                'id' => 22,
                'en_name' => 'Banks, Savings & Loans',
                'ar_name' => 'Banks, Savings & Loans',
                'slug' => 'banks-savings-loans',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:10',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            22 => [
                'id' => 23,
                'en_name' => 'Bars & Restaurants',
                'ar_name' => 'Bars & Restaurants',
                'slug' => 'bars-restaurants',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:10',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            23 => [
                'id' => 24,
                'en_name' => 'Beer, Wine & Liquor',
                'ar_name' => 'Beer, Wine & Liquor',
                'slug' => 'beer-wine-liquor',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:10',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            24 => [
                'id' => 25,
                'en_name' => 'Books, Magazines & Newspapers',
                'ar_name' => 'Books, Magazines & Newspapers',
                'slug' => 'books-magazines-newspapers',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:10',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            25 => [
                'id' => 26,
                'en_name' => 'Broadcasters, Radio/TV',
                'ar_name' => 'Broadcasters, Radio/TV',
                'slug' => 'broadcasters-radiotv',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:10',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            26 => [
                'id' => 27,
                'en_name' => 'Builders/General Contractors',
                'ar_name' => 'Builders/General Contractors',
                'slug' => 'buildersgeneral-contractors',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:10',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            27 => [
                'id' => 28,
                'en_name' => 'Builders/Residential',
                'ar_name' => 'Builders/Residential',
                'slug' => 'buildersresidential',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:10',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            28 => [
                'id' => 29,
                'en_name' => 'Building Materials & Equipment',
                'ar_name' => 'Building Materials & Equipment',
                'slug' => 'building-materials-equipment',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:10',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            29 => [
                'id' => 30,
                'en_name' => 'Building Trade Unions',
                'ar_name' => 'Building Trade Unions',
                'slug' => 'building-trade-unions',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:10',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            30 => [
                'id' => 31,
                'en_name' => 'Business Associations',
                'ar_name' => 'Business Associations',
                'slug' => 'business-associations',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:10',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            31 => [
                'id' => 32,
                'en_name' => 'Business Services',
                'ar_name' => 'Business Services',
                'slug' => 'business-services',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:10',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            32 => [
                'id' => 33,
                'en_name' => 'Cable & Satellite TV Production & Distribution',
                'ar_name' => 'Cable & Satellite TV Production & Distribution',
                'slug' => 'cable-satellite-tv-production-distribution',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:10',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            33 => [
                'id' => 34,
                'en_name' => 'Candidate Committees',
                'ar_name' => 'Candidate Committees',
                'slug' => 'candidate-committees',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:10',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            34 => [
                'id' => 35,
                'en_name' => 'Candidate Committees, Democratic',
                'ar_name' => 'Candidate Committees, Democratic',
                'slug' => 'candidate-committees-democratic',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:11',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            35 => [
                'id' => 36,
                'en_name' => 'Candidate Committees, Republican',
                'ar_name' => 'Candidate Committees, Republican',
                'slug' => 'candidate-committees-republican',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:11',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            36 => [
                'id' => 37,
                'en_name' => 'Car Dealers',
                'ar_name' => 'Car Dealers',
                'slug' => 'car-dealers',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:11',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            37 => [
                'id' => 38,
                'en_name' => 'Car Dealers, Imports',
                'ar_name' => 'Car Dealers, Imports',
                'slug' => 'car-dealers-imports',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:11',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            38 => [
                'id' => 39,
                'en_name' => 'Car Manufacturers',
                'ar_name' => 'Car Manufacturers',
                'slug' => 'car-manufacturers',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:11',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            39 => [
                'id' => 40,
                'en_name' => 'Casinos / Gambling',
                'ar_name' => 'Casinos / Gambling',
                'slug' => 'casinos-gambling',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:11',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            40 => [
                'id' => 41,
                'en_name' => 'Cattle Ranchers/Livestock',
                'ar_name' => 'Cattle Ranchers/Livestock',
                'slug' => 'cattle-rancherslivestock',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:11',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            41 => [
                'id' => 42,
                'en_name' => 'Chemical & Related Manufacturing',
                'ar_name' => 'Chemical & Related Manufacturing',
                'slug' => 'chemical-related-manufacturing',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:11',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            42 => [
                'id' => 43,
                'en_name' => 'Chiropractors',
                'ar_name' => 'Chiropractors',
                'slug' => 'chiropractors',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:11',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            43 => [
                'id' => 44,
                'en_name' => 'Civil Servants/Public Officials',
                'ar_name' => 'Civil Servants/Public Officials',
                'slug' => 'civil-servantspublic-officials',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:11',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            44 => [
                'id' => 45,
                'en_name' => 'Clergy & Religious Organizations',
                'ar_name' => 'Clergy & Religious Organizations',
                'slug' => 'clergy-religious-organizations',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:11',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            45 => [
                'id' => 46,
                'en_name' => 'Clothing Manufacturing',
                'ar_name' => 'Clothing Manufacturing',
                'slug' => 'clothing-manufacturing',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:11',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            46 => [
                'id' => 47,
                'en_name' => 'Coal Mining',
                'ar_name' => 'Coal Mining',
                'slug' => 'coal-mining',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:11',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            47 => [
                'id' => 48,
                'en_name' => 'Colleges, Universities & Schools',
                'ar_name' => 'Colleges, Universities & Schools',
                'slug' => 'colleges-universities-schools',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:11',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            48 => [
                'id' => 49,
                'en_name' => 'Commercial Banks',
                'ar_name' => 'Commercial Banks',
                'slug' => 'commercial-banks',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:11',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            49 => [
                'id' => 50,
                'en_name' => 'Commercial TV & Radio Stations',
                'ar_name' => 'Commercial TV & Radio Stations',
                'slug' => 'commercial-tv-radio-stations',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:12',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            50 => [
                'id' => 51,
                'en_name' => 'Communications/Electronics',
                'ar_name' => 'Communications/Electronics',
                'slug' => 'communicationselectronics',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:12',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            51 => [
                'id' => 52,
                'en_name' => 'Computer Software',
                'ar_name' => 'Computer Software',
                'slug' => 'computer-software',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:12',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            52 => [
                'id' => 53,
                'en_name' => 'Conservative/Republican',
                'ar_name' => 'Conservative/Republican',
                'slug' => 'conservativerepublican',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:12',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            53 => [
                'id' => 54,
                'en_name' => 'Construction',
                'ar_name' => 'Construction',
                'slug' => 'construction',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:12',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            54 => [
                'id' => 55,
                'en_name' => 'Construction Services',
                'ar_name' => 'Construction Services',
                'slug' => 'construction-services',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:12',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            55 => [
                'id' => 56,
                'en_name' => 'Construction Unions',
                'ar_name' => 'Construction Unions',
                'slug' => 'construction-unions',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:12',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            56 => [
                'id' => 57,
                'en_name' => 'Credit Unions',
                'ar_name' => 'Credit Unions',
                'slug' => 'credit-unions',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:12',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            57 => [
                'id' => 58,
                'en_name' => 'Crop Production & Basic Processing',
                'ar_name' => 'Crop Production & Basic Processing',
                'slug' => 'crop-production-basic-processing',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:12',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            58 => [
                'id' => 59,
                'en_name' => 'Cruise Lines',
                'ar_name' => 'Cruise Lines',
                'slug' => 'cruise-lines',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:12',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            59 => [
                'id' => 60,
                'en_name' => 'Cruise Ships & Lines',
                'ar_name' => 'Cruise Ships & Lines',
                'slug' => 'cruise-ships-lines',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:12',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            60 => [
                'id' => 61,
                'en_name' => 'Dairy',
                'ar_name' => 'Dairy',
                'slug' => 'dairy',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:12',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            61 => [
                'id' => 62,
                'en_name' => 'Defense',
                'ar_name' => 'Defense',
                'slug' => 'defense',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:12',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            62 => [
                'id' => 63,
                'en_name' => 'Defense Aerospace',
                'ar_name' => 'Defense Aerospace',
                'slug' => 'defense-aerospace',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:12',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            63 => [
                'id' => 64,
                'en_name' => 'Defense Electronics',
                'ar_name' => 'Defense Electronics',
                'slug' => 'defense-electronics',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:12',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            64 => [
                'id' => 65,
                'en_name' => 'Defense/Foreign Policy Advocates',
                'ar_name' => 'Defense/Foreign Policy Advocates',
                'slug' => 'defenseforeign-policy-advocates',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:12',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            65 => [
                'id' => 66,
                'en_name' => 'Democratic Candidate Committees',
                'ar_name' => 'Democratic Candidate Committees',
                'slug' => 'democratic-candidate-committees',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:12',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            66 => [
                'id' => 67,
                'en_name' => 'Democratic Leadership PACs',
                'ar_name' => 'Democratic Leadership PACs',
                'slug' => 'democratic-leadership-pacs',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:12',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            67 => [
                'id' => 68,
                'en_name' => 'Democratic/Liberal',
                'ar_name' => 'Democratic/Liberal',
                'slug' => 'democraticliberal',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:12',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            68 => [
                'id' => 69,
                'en_name' => 'Dentists',
                'ar_name' => 'Dentists',
                'slug' => 'dentists',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:12',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            69 => [
                'id' => 70,
                'en_name' => 'Doctors & Other Health Professionals',
                'ar_name' => 'Doctors & Other Health Professionals',
                'slug' => 'doctors-other-health-professionals',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:12',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            70 => [
                'id' => 71,
                'en_name' => 'Drug Manufacturers',
                'ar_name' => 'Drug Manufacturers',
                'slug' => 'drug-manufacturers',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:12',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            71 => [
                'id' => 72,
                'en_name' => 'Education',
                'ar_name' => 'Education',
                'slug' => 'education',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:12',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            72 => [
                'id' => 73,
                'en_name' => 'Electric Utilities',
                'ar_name' => 'Electric Utilities',
                'slug' => 'electric-utilities',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:13',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            73 => [
                'id' => 74,
                'en_name' => 'Electronics Manufacturing & Equipment',
                'ar_name' => 'Electronics Manufacturing & Equipment',
                'slug' => 'electronics-manufacturing-equipment',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:13',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            74 => [
                'id' => 75,
                'en_name' => 'Electronics, Defense Contractors',
                'ar_name' => 'Electronics, Defense Contractors',
                'slug' => 'electronics-defense-contractors',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:13',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            75 => [
                'id' => 76,
                'en_name' => 'Energy & Natural Resources',
                'ar_name' => 'Energy & Natural Resources',
                'slug' => 'energy-natural-resources',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:13',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            76 => [
                'id' => 77,
                'en_name' => 'Entertainment Industry',
                'ar_name' => 'Entertainment Industry',
                'slug' => 'entertainment-industry',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:13',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            77 => [
                'id' => 78,
                'en_name' => 'Environment',
                'ar_name' => 'Environment',
                'slug' => 'environment',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:13',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            78 => [
                'id' => 79,
                'en_name' => 'Farm Bureaus',
                'ar_name' => 'Farm Bureaus',
                'slug' => 'farm-bureaus',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:13',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            79 => [
                'id' => 80,
                'en_name' => 'Farming',
                'ar_name' => 'Farming',
                'slug' => 'farming',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:13',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            80 => [
                'id' => 81,
                'en_name' => 'Finance / Credit Companies',
                'ar_name' => 'Finance / Credit Companies',
                'slug' => 'finance-credit-companies',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:13',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            81 => [
                'id' => 82,
                'en_name' => 'Finance, Insurance & Real Estate',
                'ar_name' => 'Finance, Insurance & Real Estate',
                'slug' => 'finance-insurance-real-estate',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:13',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            82 => [
                'id' => 83,
                'en_name' => 'Food & Beverage',
                'ar_name' => 'Food & Beverage',
                'slug' => 'food-beverage',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:13',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            83 => [
                'id' => 84,
                'en_name' => 'Food Processing & Sales',
                'ar_name' => 'Food Processing & Sales',
                'slug' => 'food-processing-sales',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:13',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            84 => [
                'id' => 85,
                'en_name' => 'Food Products Manufacturing',
                'ar_name' => 'Food Products Manufacturing',
                'slug' => 'food-products-manufacturing',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:13',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            85 => [
                'id' => 86,
                'en_name' => 'Food Stores',
                'ar_name' => 'Food Stores',
                'slug' => 'food-stores',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:13',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            86 => [
                'id' => 87,
                'en_name' => 'For-profit Education',
                'ar_name' => 'For-profit Education',
                'slug' => 'for-profit-education',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:13',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            87 => [
                'id' => 88,
                'en_name' => 'For-profit Prisons',
                'ar_name' => 'For-profit Prisons',
                'slug' => 'for-profit-prisons',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:13',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            88 => [
                'id' => 89,
                'en_name' => 'Foreign & Defense Policy',
                'ar_name' => 'Foreign & Defense Policy',
                'slug' => 'foreign-defense-policy',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:13',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            89 => [
                'id' => 90,
                'en_name' => 'Forestry & Forest Products',
                'ar_name' => 'Forestry & Forest Products',
                'slug' => 'forestry-forest-products',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:13',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            90 => [
                'id' => 91,
                'en_name' => 'Foundations, Philanthropists & Non-Profits',
                'ar_name' => 'Foundations, Philanthropists & Non-Profits',
                'slug' => 'foundations-philanthropists-non-profits',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:13',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            91 => [
                'id' => 92,
                'en_name' => 'Funeral Services',
                'ar_name' => 'Funeral Services',
                'slug' => 'funeral-services',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:13',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            92 => [
                'id' => 93,
                'en_name' => 'Gambling & Casinos',
                'ar_name' => 'Gambling & Casinos',
                'slug' => 'gambling-casinos',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:13',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            93 => [
                'id' => 94,
                'en_name' => 'Gambling, Indian Casinos',
                'ar_name' => 'Gambling, Indian Casinos',
                'slug' => 'gambling-indian-casinos',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:14',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            94 => [
                'id' => 95,
                'en_name' => 'Garbage Collection/Waste Management',
                'ar_name' => 'Garbage Collection/Waste Management',
                'slug' => 'garbage-collectionwaste-management',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:14',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            95 => [
                'id' => 96,
                'en_name' => 'Gas & Oil',
                'ar_name' => 'Gas & Oil',
                'slug' => 'gas-oil',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:14',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            96 => [
                'id' => 97,
                'en_name' => 'Gay & Lesbian Rights & Issues',
                'ar_name' => 'Gay & Lesbian Rights & Issues',
                'slug' => 'gay-lesbian-rights-issues',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:14',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            97 => [
                'id' => 98,
                'en_name' => 'General Contractors',
                'ar_name' => 'General Contractors',
                'slug' => 'general-contractors',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:14',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            98 => [
                'id' => 99,
                'en_name' => 'Government Employee Unions',
                'ar_name' => 'Government Employee Unions',
                'slug' => 'government-employee-unions',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:14',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            99 => [
                'id' => 100,
                'en_name' => 'Government Employees',
                'ar_name' => 'Government Employees',
                'slug' => 'government-employees',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:14',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            100 => [
                'id' => 101,
                'en_name' => 'Gun Control',
                'ar_name' => 'Gun Control',
                'slug' => 'gun-control',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:14',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            101 => [
                'id' => 102,
                'en_name' => 'Gun Rights',
                'ar_name' => 'Gun Rights',
                'slug' => 'gun-rights',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:14',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            102 => [
                'id' => 103,
                'en_name' => 'Health',
                'ar_name' => 'Health',
                'slug' => 'health',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:14',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            103 => [
                'id' => 104,
                'en_name' => 'Health Professionals',
                'ar_name' => 'Health Professionals',
                'slug' => 'health-professionals',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:14',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            104 => [
                'id' => 105,
                'en_name' => 'Health Services/HMOs',
                'ar_name' => 'Health Services/HMOs',
                'slug' => 'health-serviceshmos',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:14',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            105 => [
                'id' => 106,
                'en_name' => 'Hedge Funds',
                'ar_name' => 'Hedge Funds',
                'slug' => 'hedge-funds',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:14',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            106 => [
                'id' => 107,
                'en_name' => 'HMOs & Health Care Services',
                'ar_name' => 'HMOs & Health Care Services',
                'slug' => 'hmos-health-care-services',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:15',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            107 => [
                'id' => 108,
                'en_name' => 'Home Builders',
                'ar_name' => 'Home Builders',
                'slug' => 'home-builders',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:15',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            108 => [
                'id' => 109,
                'en_name' => 'Hospitals & Nursing Homes',
                'ar_name' => 'Hospitals & Nursing Homes',
                'slug' => 'hospitals-nursing-homes',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:15',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            109 => [
                'id' => 110,
                'en_name' => 'Hotels, Motels & Tourism',
                'ar_name' => 'Hotels, Motels & Tourism',
                'slug' => 'hotels-motels-tourism',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:15',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            110 => [
                'id' => 111,
                'en_name' => 'Human Rights',
                'ar_name' => 'Human Rights',
                'slug' => 'human-rights',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:15',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            111 => [
                'id' => 112,
                'en_name' => 'Ideological/Single-Issue',
                'ar_name' => 'Ideological/Single-Issue',
                'slug' => 'ideologicalsingle-issue',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:15',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            112 => [
                'id' => 113,
                'en_name' => 'Indian Gaming',
                'ar_name' => 'Indian Gaming',
                'slug' => 'indian-gaming',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:15',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            113 => [
                'id' => 114,
                'en_name' => 'Industrial Unions',
                'ar_name' => 'Industrial Unions',
                'slug' => 'industrial-unions',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:15',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            114 => [
                'id' => 115,
                'en_name' => 'Insurance',
                'ar_name' => 'Insurance',
                'slug' => 'insurance',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:15',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            115 => [
                'id' => 116,
                'en_name' => 'Internet',
                'ar_name' => 'Internet',
                'slug' => 'internet',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:15',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            116 => [
                'id' => 117,
                'en_name' => 'Israel Policy',
                'ar_name' => 'Israel Policy',
                'slug' => 'israel-policy',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:15',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            117 => [
                'id' => 118,
                'en_name' => 'Labor',
                'ar_name' => 'Labor',
                'slug' => 'labor',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:15',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            118 => [
                'id' => 119,
                'en_name' => 'Lawyers & Lobbyists',
                'ar_name' => 'Lawyers & Lobbyists',
                'slug' => 'lawyers-lobbyists',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:15',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            119 => [
                'id' => 120,
                'en_name' => 'Lawyers / Law Firms',
                'ar_name' => 'Lawyers / Law Firms',
                'slug' => 'lawyers-law-firms',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:15',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            120 => [
                'id' => 121,
                'en_name' => 'Leadership PACs',
                'ar_name' => 'Leadership PACs',
                'slug' => 'leadership-pacs',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:15',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            121 => [
                'id' => 122,
                'en_name' => 'Liberal/Democratic',
                'ar_name' => 'Liberal/Democratic',
                'slug' => 'liberaldemocratic',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:15',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            122 => [
                'id' => 123,
                'en_name' => 'Liquor, Wine & Beer',
                'ar_name' => 'Liquor, Wine & Beer',
                'slug' => 'liquor-wine-beer',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:15',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            123 => [
                'id' => 124,
                'en_name' => 'Livestock',
                'ar_name' => 'Livestock',
                'slug' => 'livestock',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:16',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            124 => [
                'id' => 125,
                'en_name' => 'Lobbyists',
                'ar_name' => 'Lobbyists',
                'slug' => 'lobbyists',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:16',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            125 => [
                'id' => 126,
                'en_name' => 'Lodging / Tourism',
                'ar_name' => 'Lodging / Tourism',
                'slug' => 'lodging-tourism',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:16',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            126 => [
                'id' => 127,
                'en_name' => 'Logging, Timber & Paper Mills',
                'ar_name' => 'Logging, Timber & Paper Mills',
                'slug' => 'logging-timber-paper-mills',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:16',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            127 => [
                'id' => 128,
                'en_name' => 'Manufacturing, Misc',
                'ar_name' => 'Manufacturing, Misc',
                'slug' => 'manufacturing-misc',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:16',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            128 => [
                'id' => 129,
                'en_name' => 'Marine Transport',
                'ar_name' => 'Marine Transport',
                'slug' => 'marine-transport',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:16',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            129 => [
                'id' => 130,
                'en_name' => 'Meat processing & products',
                'ar_name' => 'Meat processing & products',
                'slug' => 'meat-processing-products',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:16',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            130 => [
                'id' => 131,
                'en_name' => 'Medical Supplies',
                'ar_name' => 'Medical Supplies',
                'slug' => 'medical-supplies',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:16',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            131 => [
                'id' => 132,
                'en_name' => 'Mining',
                'ar_name' => 'Mining',
                'slug' => 'mining',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:16',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            132 => [
                'id' => 133,
                'en_name' => 'Misc Business',
                'ar_name' => 'Misc Business',
                'slug' => 'misc-business',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:16',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            133 => [
                'id' => 134,
                'en_name' => 'Misc Finance',
                'ar_name' => 'Misc Finance',
                'slug' => 'misc-finance',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:16',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            134 => [
                'id' => 135,
                'en_name' => 'Misc Manufacturing & Distributing',
                'ar_name' => 'Misc Manufacturing & Distributing',
                'slug' => 'misc-manufacturing-distributing',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:16',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            135 => [
                'id' => 136,
                'en_name' => 'Misc Unions',
                'ar_name' => 'Misc Unions',
                'slug' => 'misc-unions',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:16',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            136 => [
                'id' => 137,
                'en_name' => 'Miscellaneous Defense',
                'ar_name' => 'Miscellaneous Defense',
                'slug' => 'miscellaneous-defense',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:16',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            137 => [
                'id' => 138,
                'en_name' => 'Miscellaneous Services',
                'ar_name' => 'Miscellaneous Services',
                'slug' => 'miscellaneous-services',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:16',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            138 => [
                'id' => 139,
                'en_name' => 'Mortgage Bankers & Brokers',
                'ar_name' => 'Mortgage Bankers & Brokers',
                'slug' => 'mortgage-bankers-brokers',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:16',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            139 => [
                'id' => 140,
                'en_name' => 'Motion Picture Production & Distribution',
                'ar_name' => 'Motion Picture Production & Distribution',
                'slug' => 'motion-picture-production-distribution',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:16',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            140 => [
                'id' => 141,
                'en_name' => 'Music Production',
                'ar_name' => 'Music Production',
                'slug' => 'music-production',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:16',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            141 => [
                'id' => 142,
                'en_name' => 'Natural Gas Pipelines',
                'ar_name' => 'Natural Gas Pipelines',
                'slug' => 'natural-gas-pipelines',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:16',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            142 => [
                'id' => 143,
                'en_name' => 'Newspaper, Magazine & Book Publishing',
                'ar_name' => 'Newspaper, Magazine & Book Publishing',
                'slug' => 'newspaper-magazine-book-publishing',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:16',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            143 => [
                'id' => 144,
                'en_name' => 'Non-profits, Foundations & Philanthropists',
                'ar_name' => 'Non-profits, Foundations & Philanthropists',
                'slug' => 'non-profits-foundations-philanthropists',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:16',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            144 => [
                'id' => 145,
                'en_name' => 'Nurses',
                'ar_name' => 'Nurses',
                'slug' => 'nurses',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:17',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            145 => [
                'id' => 146,
                'en_name' => 'Nursing Homes/Hospitals',
                'ar_name' => 'Nursing Homes/Hospitals',
                'slug' => 'nursing-homeshospitals',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:17',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            146 => [
                'id' => 147,
                'en_name' => 'Nutritional & Dietary Supplements',
                'ar_name' => 'Nutritional & Dietary Supplements',
                'slug' => 'nutritional-dietary-supplements',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:17',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            147 => [
                'id' => 148,
                'en_name' => 'Oil & Gas',
                'ar_name' => 'Oil & Gas',
                'slug' => 'oil-gas',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:17',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            148 => [
                'id' => 149,
                'en_name' => 'Other',
                'ar_name' => 'Other',
                'slug' => 'other',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:17',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            149 => [
                'id' => 150,
                'en_name' => 'Payday Lenders',
                'ar_name' => 'Payday Lenders',
                'slug' => 'payday-lenders',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:17',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            150 => [
                'id' => 151,
                'en_name' => 'Pharmaceutical Manufacturing',
                'ar_name' => 'Pharmaceutical Manufacturing',
                'slug' => 'pharmaceutical-manufacturing',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:17',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            151 => [
                'id' => 152,
                'en_name' => 'Pharmaceuticals / Health Products',
                'ar_name' => 'Pharmaceuticals / Health Products',
                'slug' => 'pharmaceuticals-health-products',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:17',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            152 => [
                'id' => 153,
                'en_name' => 'Phone Companies',
                'ar_name' => 'Phone Companies',
                'slug' => 'phone-companies',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:17',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            153 => [
                'id' => 154,
                'en_name' => 'Physicians & Other Health Professionals',
                'ar_name' => 'Physicians & Other Health Professionals',
                'slug' => 'physicians-other-health-professionals',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:17',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            154 => [
                'id' => 155,
                'en_name' => 'Postal Unions',
                'ar_name' => 'Postal Unions',
                'slug' => 'postal-unions',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:17',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            155 => [
                'id' => 156,
                'en_name' => 'Poultry & Eggs',
                'ar_name' => 'Poultry & Eggs',
                'slug' => 'poultry-eggs',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:17',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            156 => [
                'id' => 157,
                'en_name' => 'Power Utilities',
                'ar_name' => 'Power Utilities',
                'slug' => 'power-utilities',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:17',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            157 => [
                'id' => 158,
                'en_name' => 'Printing & Publishing',
                'ar_name' => 'Printing & Publishing',
                'slug' => 'printing-publishing',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:17',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            158 => [
                'id' => 159,
                'en_name' => 'Private Equity & Investment Firms',
                'ar_name' => 'Private Equity & Investment Firms',
                'slug' => 'private-equity-investment-firms',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:17',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            159 => [
                'id' => 160,
                'en_name' => 'Pro-Israel',
                'ar_name' => 'Pro-Israel',
                'slug' => 'pro-israel',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:17',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            160 => [
                'id' => 161,
                'en_name' => 'Professional Sports, Sports Arenas & Related Equipment & Services',
                'ar_name' => 'Professional Sports, Sports Arenas & Related Equipment & Services',
                'slug' => 'professional-sports-sports-arenas-related-equipment-services',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:17',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            161 => [
                'id' => 162,
                'en_name' => 'Progressive/Democratic',
                'ar_name' => 'Progressive/Democratic',
                'slug' => 'progressivedemocratic',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:17',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            162 => [
                'id' => 163,
                'en_name' => 'Public Employees',
                'ar_name' => 'Public Employees',
                'slug' => 'public-employees',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:18',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            163 => [
                'id' => 164,
                'en_name' => 'Public Sector Unions',
                'ar_name' => 'Public Sector Unions',
                'slug' => 'public-sector-unions',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:18',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            164 => [
                'id' => 165,
                'en_name' => 'Publishing & Printing',
                'ar_name' => 'Publishing & Printing',
                'slug' => 'publishing-printing',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:18',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            165 => [
                'id' => 166,
                'en_name' => 'Radio/TV Stations',
                'ar_name' => 'Radio/TV Stations',
                'slug' => 'radiotv-stations',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:18',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            166 => [
                'id' => 167,
                'en_name' => 'Railroads',
                'ar_name' => 'Railroads',
                'slug' => 'railroads',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:18',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            167 => [
                'id' => 168,
                'en_name' => 'Real Estate',
                'ar_name' => 'Real Estate',
                'slug' => 'real-estate',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:18',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            168 => [
                'id' => 169,
                'en_name' => 'Record Companies/Singers',
                'ar_name' => 'Record Companies/Singers',
                'slug' => 'record-companiessingers',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:18',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            169 => [
                'id' => 170,
                'en_name' => 'Recorded Music & Music Production',
                'ar_name' => 'Recorded Music & Music Production',
                'slug' => 'recorded-music-music-production',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:18',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            170 => [
                'id' => 171,
                'en_name' => 'Recreation / Live Entertainment',
                'ar_name' => 'Recreation / Live Entertainment',
                'slug' => 'recreation-live-entertainment',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:18',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            171 => [
                'id' => 172,
                'en_name' => 'Religious Organizations/Clergy',
                'ar_name' => 'Religious Organizations/Clergy',
                'slug' => 'religious-organizationsclergy',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:18',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            172 => [
                'id' => 173,
                'en_name' => 'Republican Candidate Committees',
                'ar_name' => 'Republican Candidate Committees',
                'slug' => 'republican-candidate-committees',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:18',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            173 => [
                'id' => 174,
                'en_name' => 'Republican Leadership PACs',
                'ar_name' => 'Republican Leadership PACs',
                'slug' => 'republican-leadership-pacs',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:18',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            174 => [
                'id' => 175,
                'en_name' => 'Republican/Conservative',
                'ar_name' => 'Republican/Conservative',
                'slug' => 'republicanconservative',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:18',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            175 => [
                'id' => 176,
                'en_name' => 'Residential Construction',
                'ar_name' => 'Residential Construction',
                'slug' => 'residential-construction',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:18',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            176 => [
                'id' => 177,
                'en_name' => 'Restaurants & Drinking Establishments',
                'ar_name' => 'Restaurants & Drinking Establishments',
                'slug' => 'restaurants-drinking-establishments',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:19',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            177 => [
                'id' => 178,
                'en_name' => 'Retail Sales',
                'ar_name' => 'Retail Sales',
                'slug' => 'retail-sales',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:19',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            178 => [
                'id' => 179,
                'en_name' => 'Retired',
                'ar_name' => 'Retired',
                'slug' => 'retired',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:19',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            179 => [
                'id' => 180,
                'en_name' => 'Savings & Loans',
                'ar_name' => 'Savings & Loans',
                'slug' => 'savings-loans',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:19',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            180 => [
                'id' => 181,
                'en_name' => 'Schools/Education',
                'ar_name' => 'Schools/Education',
                'slug' => 'schoolseducation',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:19',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            181 => [
                'id' => 182,
                'en_name' => 'Sea Transport',
                'ar_name' => 'Sea Transport',
                'slug' => 'sea-transport',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:19',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            182 => [
                'id' => 183,
                'en_name' => 'Securities & Investment',
                'ar_name' => 'Securities & Investment',
                'slug' => 'securities-investment',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:19',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            183 => [
                'id' => 184,
                'en_name' => 'Special Trade Contractors',
                'ar_name' => 'Special Trade Contractors',
                'slug' => 'special-trade-contractors',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:19',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            184 => [
                'id' => 185,
                'en_name' => 'Sports, Professional',
                'ar_name' => 'Sports, Professional',
                'slug' => 'sports-professional',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:19',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            185 => [
                'id' => 186,
                'en_name' => 'Steel Production',
                'ar_name' => 'Steel Production',
                'slug' => 'steel-production',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:19',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            186 => [
                'id' => 187,
                'en_name' => 'Stock Brokers/Investment Industry',
                'ar_name' => 'Stock Brokers/Investment Industry',
                'slug' => 'stock-brokersinvestment-industry',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:19',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            187 => [
                'id' => 188,
                'en_name' => 'Student Loan Companies',
                'ar_name' => 'Student Loan Companies',
                'slug' => 'student-loan-companies',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:20',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            188 => [
                'id' => 189,
                'en_name' => 'Sugar Cane & Sugar Beets',
                'ar_name' => 'Sugar Cane & Sugar Beets',
                'slug' => 'sugar-cane-sugar-beets',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:20',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            189 => [
                'id' => 190,
                'en_name' => 'Teachers Unions',
                'ar_name' => 'Teachers Unions',
                'slug' => 'teachers-unions',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:20',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            190 => [
                'id' => 191,
                'en_name' => 'Teachers/Education',
                'ar_name' => 'Teachers/Education',
                'slug' => 'teacherseducation',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:20',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            191 => [
                'id' => 192,
                'en_name' => 'Telecom Services & Equipment',
                'ar_name' => 'Telecom Services & Equipment',
                'slug' => 'telecom-services-equipment',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:20',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            192 => [
                'id' => 193,
                'en_name' => 'Telephone Utilities',
                'ar_name' => 'Telephone Utilities',
                'slug' => 'telephone-utilities',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:20',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            193 => [
                'id' => 194,
                'en_name' => 'Textiles',
                'ar_name' => 'Textiles',
                'slug' => 'textiles',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:20',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            194 => [
                'id' => 195,
                'en_name' => 'Timber, Logging & Paper Mills',
                'ar_name' => 'Timber, Logging & Paper Mills',
                'slug' => 'timber-logging-paper-mills',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:20',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            195 => [
                'id' => 196,
                'en_name' => 'Tobacco',
                'ar_name' => 'Tobacco',
                'slug' => 'tobacco',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:20',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            196 => [
                'id' => 197,
                'en_name' => 'Transportation',
                'ar_name' => 'Transportation',
                'slug' => 'transportation',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:20',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            197 => [
                'id' => 198,
                'en_name' => 'Transportation Unions',
                'ar_name' => 'Transportation Unions',
                'slug' => 'transportation-unions',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:20',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            198 => [
                'id' => 199,
                'en_name' => 'Trash Collection/Waste Management',
                'ar_name' => 'Trash Collection/Waste Management',
                'slug' => 'trash-collectionwaste-management',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:20',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            199 => [
                'id' => 200,
                'en_name' => 'Trucking',
                'ar_name' => 'Trucking',
                'slug' => 'trucking',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:20',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            200 => [
                'id' => 201,
                'en_name' => 'TV / Movies / Music',
                'ar_name' => 'TV / Movies / Music',
                'slug' => 'tv-movies-music',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:20',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            201 => [
                'id' => 202,
                'en_name' => 'TV Production',
                'ar_name' => 'TV Production',
                'slug' => 'tv-production',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:20',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            202 => [
                'id' => 203,
                'en_name' => 'Unions',
                'ar_name' => 'Unions',
                'slug' => 'unions',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:20',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            203 => [
                'id' => 204,
                'en_name' => 'Unions, Airline',
                'ar_name' => 'Unions, Airline',
                'slug' => 'unions-airline',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:20',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            204 => [
                'id' => 205,
                'en_name' => 'Unions, Building Trades',
                'ar_name' => 'Unions, Building Trades',
                'slug' => 'unions-building-trades',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:21',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            205 => [
                'id' => 206,
                'en_name' => 'Unions, Industrial',
                'ar_name' => 'Unions, Industrial',
                'slug' => 'unions-industrial',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:21',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            206 => [
                'id' => 207,
                'en_name' => 'Unions, Misc',
                'ar_name' => 'Unions, Misc',
                'slug' => 'unions-misc',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:21',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            207 => [
                'id' => 208,
                'en_name' => 'Unions, Public Sector',
                'ar_name' => 'Unions, Public Sector',
                'slug' => 'unions-public-sector',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:21',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            208 => [
                'id' => 209,
                'en_name' => 'Unions, Teacher',
                'ar_name' => 'Unions, Teacher',
                'slug' => 'unions-teacher',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:21',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            209 => [
                'id' => 210,
                'en_name' => 'Unions, Transportation',
                'ar_name' => 'Unions, Transportation',
                'slug' => 'unions-transportation',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:21',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            210 => [
                'id' => 211,
                'en_name' => 'Universities, Colleges & Schools',
                'ar_name' => 'Universities, Colleges & Schools',
                'slug' => 'universities-colleges-schools',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:21',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            211 => [
                'id' => 212,
                'en_name' => 'Vegetables & Fruits',
                'ar_name' => 'Vegetables & Fruits',
                'slug' => 'vegetables-fruits',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:21',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            212 => [
                'id' => 213,
                'en_name' => 'Venture Capital',
                'ar_name' => 'Venture Capital',
                'slug' => 'venture-capital',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:21',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            213 => [
                'id' => 214,
                'en_name' => 'Waste Management',
                'ar_name' => 'Waste Management',
                'slug' => 'waste-management',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:21',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            214 => [
                'id' => 215,
                'en_name' => 'Wine, Beer & Liquor',
                'ar_name' => 'Wine, Beer & Liquor',
                'slug' => 'wine-beer-liquor',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:21',
                'updated_at' => '2021-02-15 12:07:26'
            ],
            215 => [
                'id' => 216,
                'en_name' => 'Women\'s Issues',
                'ar_name' => 'Women\'s Issues',
                'slug' => 'womens-issues',
                'status' => 1,
                'created_at' => '2021-02-15 05:54:21',
                'updated_at' => '2021-02-15 12:07:26'
            ]
        ]);
    }
}
