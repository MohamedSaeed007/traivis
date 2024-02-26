<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SkillsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('skills')->truncate();

        \DB::table('skills')->insert([
            0 => [
                'id' => 1,
                'en_skill' => ' General hobbies  edit ',
                'ar_skill' => ' General hobbies  edit ',
                'status' => 1,
                'created_at' => '2021-03-02 15:51:31',
                'updated_at' => '2021-03-02 15:51:31'
            ],
            1 => [
                'id' => 2,
                'en_skill' => '  D printing',
                'ar_skill' => '  D printing',
                'status' => 1,
                'created_at' => '2021-03-02 15:51:31',
                'updated_at' => '2021-03-02 15:51:31'
            ],
            2 => [
                'id' => 3,
                'en_skill' => 'Acroyoga',
                'ar_skill' => 'Acroyoga',
                'status' => 1,
                'created_at' => '2021-03-02 15:51:31',
                'updated_at' => '2021-03-02 15:51:31'
            ],
            3 => [
                'id' => 4,
                'en_skill' => 'Acting',
                'ar_skill' => 'Acting',
                'status' => 1,
                'created_at' => '2021-03-02 15:51:32',
                'updated_at' => '2021-03-02 15:51:32'
            ],
            4 => [
                'id' => 5,
                'en_skill' => 'Aerial silk',
                'ar_skill' => 'Aerial silk',
                'status' => 1,
                'created_at' => '2021-03-02 15:51:32',
                'updated_at' => '2021-03-02 15:51:32'
            ],
            5 => [
                'id' => 6,
                'en_skill' => 'Airbrushing',
                'ar_skill' => 'Airbrushing',
                'status' => 1,
                'created_at' => '2021-03-02 15:51:32',
                'updated_at' => '2021-03-02 15:51:32'
            ],
            6 => [
                'id' => 7,
                'en_skill' => 'Amateur radio',
                'ar_skill' => 'Amateur radio',
                'status' => 1,
                'created_at' => '2021-03-02 15:51:32',
                'updated_at' => '2021-03-02 15:51:32'
            ],
            7 => [
                'id' => 8,
                'en_skill' => 'Animation',
                'ar_skill' => 'Animation',
                'status' => 1,
                'created_at' => '2021-03-02 15:51:32',
                'updated_at' => '2021-03-02 15:51:32'
            ],
            8 => [
                'id' => 9,
                'en_skill' => 'Aquascaping',
                'ar_skill' => 'Aquascaping',
                'status' => 1,
                'created_at' => '2021-03-02 15:51:33',
                'updated_at' => '2021-03-02 15:51:33'
            ],
            9 => [
                'id' => 10,
                'en_skill' => 'Art',
                'ar_skill' => 'Art',
                'status' => 1,
                'created_at' => '2021-03-02 15:51:33',
                'updated_at' => '2021-03-02 15:51:33'
            ],
            10 => [
                'id' => 11,
                'en_skill' => 'Astrology',
                'ar_skill' => 'Astrology',
                'status' => 1,
                'created_at' => '2021-03-02 15:51:33',
                'updated_at' => '2021-03-02 15:51:33'
            ],
            11 => [
                'id' => 12,
                'en_skill' => 'Babysitting',
                'ar_skill' => 'Babysitting',
                'status' => 1,
                'created_at' => '2021-03-02 15:51:33',
                'updated_at' => '2021-03-02 15:51:33'
            ],
            12 => [
                'id' => 13,
                'en_skill' => 'Baking',
                'ar_skill' => 'Baking',
                'status' => 1,
                'created_at' => '2021-03-02 15:51:33',
                'updated_at' => '2021-03-02 15:51:33'
            ],
            13 => [
                'id' => 14,
                'en_skill' => 'Basketball',
                'ar_skill' => 'Basketball',
                'status' => 1,
                'created_at' => '2021-03-02 15:51:34',
                'updated_at' => '2021-03-02 15:51:34'
            ],
            14 => [
                'id' => 15,
                'en_skill' => 'Baton twirling',
                'ar_skill' => 'Baton twirling',
                'status' => 1,
                'created_at' => '2021-03-02 15:51:34',
                'updated_at' => '2021-03-02 15:51:34'
            ],
            15 => [
                'id' => 16,
                'en_skill' => 'Beatboxing',
                'ar_skill' => 'Beatboxing',
                'status' => 1,
                'created_at' => '2021-03-02 15:51:34',
                'updated_at' => '2021-03-02 15:51:34'
            ],
            16 => [
                'id' => 17,
                'en_skill' => 'Beer tasting',
                'ar_skill' => 'Beer tasting',
                'status' => 1,
                'created_at' => '2021-03-02 15:51:34',
                'updated_at' => '2021-03-02 15:51:34'
            ],
            17 => [
                'id' => 18,
                'en_skill' => 'Binge-watching',
                'ar_skill' => 'Binge-watching',
                'status' => 1,
                'created_at' => '2021-03-02 15:51:34',
                'updated_at' => '2021-03-02 15:51:34'
            ],
            18 => [
                'id' => 19,
                'en_skill' => 'Blogging',
                'ar_skill' => 'Blogging',
                'status' => 1,
                'created_at' => '2021-03-02 15:51:34',
                'updated_at' => '2021-03-02 15:51:34'
            ],
            19 => [
                'id' => 20,
                'en_skill' => 'Board/tabletop games',
                'ar_skill' => 'Board/tabletop games',
                'status' => 1,
                'created_at' => '2021-03-02 15:51:35',
                'updated_at' => '2021-03-02 15:51:35'
            ],
            20 => [
                'id' => 21,
                'en_skill' => 'Book discussion clubs',
                'ar_skill' => 'Book discussion clubs',
                'status' => 1,
                'created_at' => '2021-03-02 15:51:35',
                'updated_at' => '2021-03-02 15:51:35'
            ],
            21 => [
                'id' => 22,
                'en_skill' => 'Book restoration',
                'ar_skill' => 'Book restoration',
                'status' => 1,
                'created_at' => '2021-03-02 15:51:35',
                'updated_at' => '2021-03-02 15:51:35'
            ],
            22 => [
                'id' => 23,
                'en_skill' => 'Bowling',
                'ar_skill' => 'Bowling',
                'status' => 1,
                'created_at' => '2021-03-02 15:51:35',
                'updated_at' => '2021-03-02 15:51:35'
            ],
            23 => [
                'id' => 24,
                'en_skill' => 'Brazilian jiu-jitsu',
                'ar_skill' => 'Brazilian jiu-jitsu',
                'status' => 1,
                'created_at' => '2021-03-02 15:51:35',
                'updated_at' => '2021-03-02 15:51:35'
            ],
            24 => [
                'id' => 25,
                'en_skill' => 'Breadmaking',
                'ar_skill' => 'Breadmaking',
                'status' => 1,
                'created_at' => '2021-03-02 15:51:35',
                'updated_at' => '2021-03-02 15:51:35'
            ],
            25 => [
                'id' => 26,
                'en_skill' => 'Building',
                'ar_skill' => 'Building',
                'status' => 1,
                'created_at' => '2021-03-02 15:51:35',
                'updated_at' => '2021-03-02 15:51:35'
            ],
            26 => [
                'id' => 27,
                'en_skill' => 'Bullet journaling',
                'ar_skill' => 'Bullet journaling',
                'status' => 1,
                'created_at' => '2021-03-02 15:51:36',
                'updated_at' => '2021-03-02 15:51:36'
            ],
            27 => [
                'id' => 28,
                'en_skill' => 'Cabaret',
                'ar_skill' => 'Cabaret',
                'status' => 1,
                'created_at' => '2021-03-02 15:51:36',
                'updated_at' => '2021-03-02 15:51:36'
            ],
            28 => [
                'id' => 29,
                'en_skill' => 'Calligraphy',
                'ar_skill' => 'Calligraphy',
                'status' => 1,
                'created_at' => '2021-03-02 15:51:36',
                'updated_at' => '2021-03-02 15:51:36'
            ],
            29 => [
                'id' => 30,
                'en_skill' => 'Candle making',
                'ar_skill' => 'Candle making',
                'status' => 1,
                'created_at' => '2021-03-02 15:51:36',
                'updated_at' => '2021-03-02 15:51:36'
            ],
            30 => [
                'id' => 31,
                'en_skill' => 'Candy making',
                'ar_skill' => 'Candy making',
                'status' => 1,
                'created_at' => '2021-03-02 15:51:36',
                'updated_at' => '2021-03-02 15:51:36'
            ],
            31 => [
                'id' => 32,
                'en_skill' => 'Car fixing & building',
                'ar_skill' => 'Car fixing & building',
                'status' => 1,
                'created_at' => '2021-03-02 15:51:36',
                'updated_at' => '2021-03-02 15:51:36'
            ],
            32 => [
                'id' => 33,
                'en_skill' => 'Card games',
                'ar_skill' => 'Card games',
                'status' => 1,
                'created_at' => '2021-03-02 15:51:36',
                'updated_at' => '2021-03-02 15:51:36'
            ],
            33 => [
                'id' => 34,
                'en_skill' => 'Cardistry',
                'ar_skill' => 'Cardistry',
                'status' => 1,
                'created_at' => '2021-03-02 15:51:37',
                'updated_at' => '2021-03-02 15:51:37'
            ],
            34 => [
                'id' => 35,
                'en_skill' => 'Ceramics',
                'ar_skill' => 'Ceramics',
                'status' => 1,
                'created_at' => '2021-03-02 15:51:37',
                'updated_at' => '2021-03-02 15:51:37'
            ],
            35 => [
                'id' => 36,
                'en_skill' => 'Chatting',
                'ar_skill' => 'Chatting',
                'status' => 1,
                'created_at' => '2021-03-02 15:51:37',
                'updated_at' => '2021-03-02 15:51:37'
            ],
            36 => [
                'id' => 37,
                'en_skill' => 'Cheesemaking',
                'ar_skill' => 'Cheesemaking',
                'status' => 1,
                'created_at' => '2021-03-02 15:51:37',
                'updated_at' => '2021-03-02 15:51:37'
            ],
            37 => [
                'id' => 38,
                'en_skill' => 'Chess',
                'ar_skill' => 'Chess',
                'status' => 1,
                'created_at' => '2021-03-02 15:51:37',
                'updated_at' => '2021-03-02 15:51:37'
            ],
            38 => [
                'id' => 39,
                'en_skill' => 'Cleaning',
                'ar_skill' => 'Cleaning',
                'status' => 1,
                'created_at' => '2021-03-02 15:51:37',
                'updated_at' => '2021-03-02 15:51:37'
            ],
            39 => [
                'id' => 40,
                'en_skill' => 'Clothesmaking',
                'ar_skill' => 'Clothesmaking',
                'status' => 1,
                'created_at' => '2021-03-02 15:51:37',
                'updated_at' => '2021-03-02 15:51:37'
            ],
            40 => [
                'id' => 41,
                'en_skill' => 'Coffee roasting',
                'ar_skill' => 'Coffee roasting',
                'status' => 1,
                'created_at' => '2021-03-02 15:51:38',
                'updated_at' => '2021-03-02 15:51:38'
            ],
            41 => [
                'id' => 42,
                'en_skill' => 'Collecting',
                'ar_skill' => 'Collecting',
                'status' => 1,
                'created_at' => '2021-03-02 15:51:38',
                'updated_at' => '2021-03-02 15:51:38'
            ],
            42 => [
                'id' => 43,
                'en_skill' => 'Coloring',
                'ar_skill' => 'Coloring',
                'status' => 1,
                'created_at' => '2021-03-02 15:51:38',
                'updated_at' => '2021-03-02 15:51:38'
            ],
            43 => [
                'id' => 44,
                'en_skill' => 'Communication',
                'ar_skill' => 'Communication',
                'status' => 1,
                'created_at' => '2021-03-02 15:51:38',
                'updated_at' => '2021-03-02 15:51:38'
            ],
            44 => [
                'id' => 45,
                'en_skill' => 'Community activism',
                'ar_skill' => 'Community activism',
                'status' => 1,
                'created_at' => '2021-03-02 15:51:38',
                'updated_at' => '2021-03-02 15:51:38'
            ],
            45 => [
                'id' => 46,
                'en_skill' => 'Computer programming',
                'ar_skill' => 'Computer programming',
                'status' => 1,
                'created_at' => '2021-03-02 15:51:38',
                'updated_at' => '2021-03-02 15:51:38'
            ],
            46 => [
                'id' => 47,
                'en_skill' => 'Confectionery',
                'ar_skill' => 'Confectionery',
                'status' => 1,
                'created_at' => '2021-03-02 15:51:38',
                'updated_at' => '2021-03-02 15:51:38'
            ],
            47 => [
                'id' => 48,
                'en_skill' => 'Construction',
                'ar_skill' => 'Construction',
                'status' => 1,
                'created_at' => '2021-03-02 15:51:39',
                'updated_at' => '2021-03-02 15:51:39'
            ],
            48 => [
                'id' => 49,
                'en_skill' => 'Cooking',
                'ar_skill' => 'Cooking',
                'status' => 1,
                'created_at' => '2021-03-02 15:51:39',
                'updated_at' => '2021-03-02 15:51:39'
            ],
            49 => [
                'id' => 50,
                'en_skill' => 'Cosplaying',
                'ar_skill' => 'Cosplaying',
                'status' => 1,
                'created_at' => '2021-03-02 15:51:39',
                'updated_at' => '2021-03-02 15:51:39'
            ],
            50 => [
                'id' => 51,
                'en_skill' => 'Couch surfing',
                'ar_skill' => 'Couch surfing',
                'status' => 1,
                'created_at' => '2021-03-02 15:51:39',
                'updated_at' => '2021-03-02 15:51:39'
            ],
            51 => [
                'id' => 52,
                'en_skill' => 'Couponing',
                'ar_skill' => 'Couponing',
                'status' => 1,
                'created_at' => '2021-03-02 15:51:39',
                'updated_at' => '2021-03-02 15:51:39'
            ],
            52 => [
                'id' => 53,
                'en_skill' => 'Craft',
                'ar_skill' => 'Craft',
                'status' => 1,
                'created_at' => '2021-03-02 15:51:39',
                'updated_at' => '2021-03-02 15:51:39'
            ],
            53 => [
                'id' => 54,
                'en_skill' => 'Creative writing',
                'ar_skill' => 'Creative writing',
                'status' => 1,
                'created_at' => '2021-03-02 15:51:40',
                'updated_at' => '2021-03-02 15:51:40'
            ],
            54 => [
                'id' => 55,
                'en_skill' => 'Crocheting',
                'ar_skill' => 'Crocheting',
                'status' => 1,
                'created_at' => '2021-03-02 15:51:40',
                'updated_at' => '2021-03-02 15:51:40'
            ],
            55 => [
                'id' => 56,
                'en_skill' => 'Cross-stitch',
                'ar_skill' => 'Cross-stitch',
                'status' => 1,
                'created_at' => '2021-03-02 15:51:40',
                'updated_at' => '2021-03-02 15:51:40'
            ],
            56 => [
                'id' => 57,
                'en_skill' => 'Crossword puzzles',
                'ar_skill' => 'Crossword puzzles',
                'status' => 1,
                'created_at' => '2021-03-02 15:51:40',
                'updated_at' => '2021-03-02 15:51:40'
            ],
            57 => [
                'id' => 58,
                'en_skill' => 'Cryptography',
                'ar_skill' => 'Cryptography',
                'status' => 1,
                'created_at' => '2021-03-02 15:51:40',
                'updated_at' => '2021-03-02 15:51:40'
            ],
            58 => [
                'id' => 59,
                'en_skill' => 'Cue sports',
                'ar_skill' => 'Cue sports',
                'status' => 1,
                'created_at' => '2021-03-02 15:51:40',
                'updated_at' => '2021-03-02 15:51:40'
            ],
            59 => [
                'id' => 60,
                'en_skill' => 'Dance',
                'ar_skill' => 'Dance',
                'status' => 1,
                'created_at' => '2021-03-02 15:51:41',
                'updated_at' => '2021-03-02 15:51:41'
            ],
            60 => [
                'id' => 61,
                'en_skill' => 'Decorating',
                'ar_skill' => 'Decorating',
                'status' => 1,
                'created_at' => '2021-03-02 15:51:41',
                'updated_at' => '2021-03-02 15:51:41'
            ],
            61 => [
                'id' => 62,
                'en_skill' => 'Digital arts',
                'ar_skill' => 'Digital arts',
                'status' => 1,
                'created_at' => '2021-03-02 15:51:41',
                'updated_at' => '2021-03-02 15:51:41'
            ],
            62 => [
                'id' => 63,
                'en_skill' => 'Dining',
                'ar_skill' => 'Dining',
                'status' => 1,
                'created_at' => '2021-03-02 15:51:41',
                'updated_at' => '2021-03-02 15:51:41'
            ],
            63 => [
                'id' => 64,
                'en_skill' => 'Diorama',
                'ar_skill' => 'Diorama',
                'status' => 1,
                'created_at' => '2021-03-02 15:51:41',
                'updated_at' => '2021-03-02 15:51:41'
            ],
            64 => [
                'id' => 65,
                'en_skill' => 'Distro Hopping',
                'ar_skill' => 'Distro Hopping',
                'status' => 1,
                'created_at' => '2021-03-02 15:51:41',
                'updated_at' => '2021-03-02 15:51:41'
            ],
            65 => [
                'id' => 66,
                'en_skill' => 'Diving',
                'ar_skill' => 'Diving',
                'status' => 1,
                'created_at' => '2021-03-02 15:51:42',
                'updated_at' => '2021-03-02 15:51:42'
            ],
            66 => [
                'id' => 67,
                'en_skill' => 'Djembe',
                'ar_skill' => 'Djembe',
                'status' => 1,
                'created_at' => '2021-03-02 15:51:42',
                'updated_at' => '2021-03-02 15:51:42'
            ],
            67 => [
                'id' => 68,
                'en_skill' => 'DJing',
                'ar_skill' => 'DJing',
                'status' => 1,
                'created_at' => '2021-03-02 15:51:42',
                'updated_at' => '2021-03-02 15:51:42'
            ],
            68 => [
                'id' => 69,
                'en_skill' => 'Do it yourself  ',
                'ar_skill' => 'Do it yourself  ',
                'status' => 1,
                'created_at' => '2021-03-02 15:51:42',
                'updated_at' => '2021-03-02 15:51:42'
            ],
            69 => [
                'id' => 70,
                'en_skill' => 'Drama',
                'ar_skill' => 'Drama',
                'status' => 1,
                'created_at' => '2021-03-02 15:51:42',
                'updated_at' => '2021-03-02 15:51:42'
            ],
            70 => [
                'id' => 71,
                'en_skill' => 'Drawing',
                'ar_skill' => 'Drawing',
                'status' => 1,
                'created_at' => '2021-03-02 15:51:42',
                'updated_at' => '2021-03-02 15:51:42'
            ],
            71 => [
                'id' => 72,
                'en_skill' => 'Drink mixing',
                'ar_skill' => 'Drink mixing',
                'status' => 1,
                'created_at' => '2021-03-02 15:51:43',
                'updated_at' => '2021-03-02 15:51:43'
            ],
            72 => [
                'id' => 73,
                'en_skill' => 'Drinking',
                'ar_skill' => 'Drinking',
                'status' => 1,
                'created_at' => '2021-03-02 15:51:43',
                'updated_at' => '2021-03-02 15:51:43'
            ],
            73 => [
                'id' => 74,
                'en_skill' => 'Electronic games',
                'ar_skill' => 'Electronic games',
                'status' => 1,
                'created_at' => '2021-03-02 15:51:43',
                'updated_at' => '2021-03-02 15:51:43'
            ],
            74 => [
                'id' => 75,
                'en_skill' => 'Electronics',
                'ar_skill' => 'Electronics',
                'status' => 1,
                'created_at' => '2021-03-02 15:51:43',
                'updated_at' => '2021-03-02 15:51:43'
            ],
            75 => [
                'id' => 76,
                'en_skill' => 'Embroidery',
                'ar_skill' => 'Embroidery',
                'status' => 1,
                'created_at' => '2021-03-02 15:51:43',
                'updated_at' => '2021-03-02 15:51:43'
            ],
            76 => [
                'id' => 77,
                'en_skill' => 'Engraving',
                'ar_skill' => 'Engraving',
                'status' => 1,
                'created_at' => '2021-03-02 15:51:43',
                'updated_at' => '2021-03-02 15:51:43'
            ],
            77 => [
                'id' => 78,
                'en_skill' => 'Entertaining',
                'ar_skill' => 'Entertaining',
                'status' => 1,
                'created_at' => '2021-03-02 15:51:43',
                'updated_at' => '2021-03-02 15:51:43'
            ],
            78 => [
                'id' => 79,
                'en_skill' => 'Experimenting',
                'ar_skill' => 'Experimenting',
                'status' => 1,
                'created_at' => '2021-03-02 15:51:43',
                'updated_at' => '2021-03-02 15:51:43'
            ],
            79 => [
                'id' => 80,
                'en_skill' => 'Fantasy sports',
                'ar_skill' => 'Fantasy sports',
                'status' => 1,
                'created_at' => '2021-03-02 15:51:44',
                'updated_at' => '2021-03-02 15:51:44'
            ],
            80 => [
                'id' => 81,
                'en_skill' => 'Fashion',
                'ar_skill' => 'Fashion',
                'status' => 1,
                'created_at' => '2021-03-02 15:51:44',
                'updated_at' => '2021-03-02 15:51:44'
            ],
            81 => [
                'id' => 82,
                'en_skill' => 'Fashion design',
                'ar_skill' => 'Fashion design',
                'status' => 1,
                'created_at' => '2021-03-02 15:51:44',
                'updated_at' => '2021-03-02 15:51:44'
            ],
            82 => [
                'id' => 83,
                'en_skill' => 'Feng shui decorating',
                'ar_skill' => 'Feng shui decorating',
                'status' => 1,
                'created_at' => '2021-03-02 15:51:44',
                'updated_at' => '2021-03-02 15:51:44'
            ],
            83 => [
                'id' => 84,
                'en_skill' => 'Filmmaking',
                'ar_skill' => 'Filmmaking',
                'status' => 1,
                'created_at' => '2021-03-02 15:51:44',
                'updated_at' => '2021-03-02 15:51:44'
            ],
            84 => [
                'id' => 85,
                'en_skill' => 'Fingerpainting',
                'ar_skill' => 'Fingerpainting',
                'status' => 1,
                'created_at' => '2021-03-02 15:51:44',
                'updated_at' => '2021-03-02 15:51:44'
            ],
            85 => [
                'id' => 86,
                'en_skill' => 'Fishfarming',
                'ar_skill' => 'Fishfarming',
                'status' => 1,
                'created_at' => '2021-03-02 15:51:44',
                'updated_at' => '2021-03-02 15:51:44'
            ],
            86 => [
                'id' => 87,
                'en_skill' => 'Fishkeeping',
                'ar_skill' => 'Fishkeeping',
                'status' => 1,
                'created_at' => '2021-03-02 15:51:44',
                'updated_at' => '2021-03-02 15:51:44'
            ],
            87 => [
                'id' => 88,
                'en_skill' => 'Flower arranging ',
                'ar_skill' => 'Flower arranging ',
                'status' => 1,
                'created_at' => '2021-03-02 15:51:45',
                'updated_at' => '2021-03-02 15:51:45'
            ],
            88 => [
                'id' => 89,
                'en_skill' => 'Fly tying',
                'ar_skill' => 'Fly tying',
                'status' => 1,
                'created_at' => '2021-03-02 15:51:45',
                'updated_at' => '2021-03-02 15:51:45'
            ],
            89 => [
                'id' => 90,
                'en_skill' => 'Foreign language learning  ',
                'ar_skill' => 'Foreign language learning  ',
                'status' => 1,
                'created_at' => '2021-03-02 15:51:45',
                'updated_at' => '2021-03-02 15:51:45'
            ],
            90 => [
                'id' => 91,
                'en_skill' => 'Furniture building',
                'ar_skill' => 'Furniture building',
                'status' => 1,
                'created_at' => '2021-03-02 15:51:45',
                'updated_at' => '2021-03-02 15:51:45'
            ],
            91 => [
                'id' => 92,
                'en_skill' => 'Gaming',
                'ar_skill' => 'Gaming',
                'status' => 1,
                'created_at' => '2021-03-02 15:51:45',
                'updated_at' => '2021-03-02 15:51:45'
            ],
            92 => [
                'id' => 93,
                'en_skill' => 'Genealogy',
                'ar_skill' => 'Genealogy',
                'status' => 1,
                'created_at' => '2021-03-02 15:51:45',
                'updated_at' => '2021-03-02 15:51:45'
            ],
            93 => [
                'id' => 94,
                'en_skill' => 'Gingerbread house making',
                'ar_skill' => 'Gingerbread house making',
                'status' => 1,
                'created_at' => '2021-03-02 15:51:46',
                'updated_at' => '2021-03-02 15:51:46'
            ],
            94 => [
                'id' => 95,
                'en_skill' => 'Giving advice',
                'ar_skill' => 'Giving advice',
                'status' => 1,
                'created_at' => '2021-03-02 15:51:46',
                'updated_at' => '2021-03-02 15:51:46'
            ],
            95 => [
                'id' => 96,
                'en_skill' => 'Glassblowing',
                'ar_skill' => 'Glassblowing',
                'status' => 1,
                'created_at' => '2021-03-02 15:51:46',
                'updated_at' => '2021-03-02 15:51:46'
            ],
            96 => [
                'id' => 97,
                'en_skill' => 'Graphic design',
                'ar_skill' => 'Graphic design',
                'status' => 1,
                'created_at' => '2021-03-02 15:51:46',
                'updated_at' => '2021-03-02 15:51:46'
            ],
            97 => [
                'id' => 98,
                'en_skill' => 'Gunsmithing',
                'ar_skill' => 'Gunsmithing',
                'status' => 1,
                'created_at' => '2021-03-02 15:51:46',
                'updated_at' => '2021-03-02 15:51:46'
            ],
            98 => [
                'id' => 99,
                'en_skill' => 'Gymnastics',
                'ar_skill' => 'Gymnastics',
                'status' => 1,
                'created_at' => '2021-03-02 15:51:46',
                'updated_at' => '2021-03-02 15:51:46'
            ],
            99 => [
                'id' => 100,
                'en_skill' => 'Hacking',
                'ar_skill' => 'Hacking',
                'status' => 1,
                'created_at' => '2021-03-02 15:51:47',
                'updated_at' => '2021-03-02 15:51:47'
            ],
            100 => [
                'id' => 101,
                'en_skill' => 'Hardware',
                'ar_skill' => 'Hardware',
                'status' => 1,
                'created_at' => '2021-03-02 15:51:47',
                'updated_at' => '2021-03-02 15:51:47'
            ],
            101 => [
                'id' => 102,
                'en_skill' => 'Herp keeping',
                'ar_skill' => 'Herp keeping',
                'status' => 1,
                'created_at' => '2021-03-02 15:51:47',
                'updated_at' => '2021-03-02 15:51:47'
            ],
            102 => [
                'id' => 103,
                'en_skill' => 'Home improvement',
                'ar_skill' => 'Home improvement',
                'status' => 1,
                'created_at' => '2021-03-02 15:51:47',
                'updated_at' => '2021-03-02 15:51:47'
            ],
            103 => [
                'id' => 104,
                'en_skill' => 'Homebrewing',
                'ar_skill' => 'Homebrewing',
                'status' => 1,
                'created_at' => '2021-03-02 15:51:47',
                'updated_at' => '2021-03-02 15:51:47'
            ],
            104 => [
                'id' => 105,
                'en_skill' => 'Houseplant care ',
                'ar_skill' => 'Houseplant care ',
                'status' => 1,
                'created_at' => '2021-03-02 15:51:47',
                'updated_at' => '2021-03-02 15:51:47'
            ],
            105 => [
                'id' => 106,
                'en_skill' => 'Hula hooping',
                'ar_skill' => 'Hula hooping',
                'status' => 1,
                'created_at' => '2021-03-02 15:51:48',
                'updated_at' => '2021-03-02 15:51:48'
            ],
            106 => [
                'id' => 107,
                'en_skill' => 'Humor',
                'ar_skill' => 'Humor',
                'status' => 1,
                'created_at' => '2021-03-02 15:51:48',
                'updated_at' => '2021-03-02 15:51:48'
            ],
            107 => [
                'id' => 108,
                'en_skill' => 'Hydroponics',
                'ar_skill' => 'Hydroponics',
                'status' => 1,
                'created_at' => '2021-03-02 15:51:48',
                'updated_at' => '2021-03-02 15:51:48'
            ],
            108 => [
                'id' => 109,
                'en_skill' => 'Ice skating ',
                'ar_skill' => 'Ice skating ',
                'status' => 1,
                'created_at' => '2021-03-02 15:51:48',
                'updated_at' => '2021-03-02 15:51:48'
            ],
            109 => [
                'id' => 110,
                'en_skill' => 'Inventing',
                'ar_skill' => 'Inventing',
                'status' => 1,
                'created_at' => '2021-03-02 15:51:48',
                'updated_at' => '2021-03-02 15:51:48'
            ],
            110 => [
                'id' => 111,
                'en_skill' => 'Jewelry making',
                'ar_skill' => 'Jewelry making',
                'status' => 1,
                'created_at' => '2021-03-02 15:51:48',
                'updated_at' => '2021-03-02 15:51:48'
            ],
            111 => [
                'id' => 112,
                'en_skill' => 'Jigsaw puzzles',
                'ar_skill' => 'Jigsaw puzzles',
                'status' => 1,
                'created_at' => '2021-03-02 15:51:49',
                'updated_at' => '2021-03-02 15:51:49'
            ],
            112 => [
                'id' => 113,
                'en_skill' => 'Journaling',
                'ar_skill' => 'Journaling',
                'status' => 1,
                'created_at' => '2021-03-02 15:51:49',
                'updated_at' => '2021-03-02 15:51:49'
            ],
            113 => [
                'id' => 114,
                'en_skill' => 'Juggling',
                'ar_skill' => 'Juggling',
                'status' => 1,
                'created_at' => '2021-03-02 15:51:49',
                'updated_at' => '2021-03-02 15:51:49'
            ],
            114 => [
                'id' => 115,
                'en_skill' => 'Karaoke',
                'ar_skill' => 'Karaoke',
                'status' => 1,
                'created_at' => '2021-03-02 15:51:49',
                'updated_at' => '2021-03-02 15:51:49'
            ],
            115 => [
                'id' => 116,
                'en_skill' => 'Karate',
                'ar_skill' => 'Karate',
                'status' => 1,
                'created_at' => '2021-03-02 15:51:49',
                'updated_at' => '2021-03-02 15:51:49'
            ],
            116 => [
                'id' => 117,
                'en_skill' => 'Kendama',
                'ar_skill' => 'Kendama',
                'status' => 1,
                'created_at' => '2021-03-02 15:51:49',
                'updated_at' => '2021-03-02 15:51:49'
            ],
            117 => [
                'id' => 118,
                'en_skill' => 'Knife making',
                'ar_skill' => 'Knife making',
                'status' => 1,
                'created_at' => '2021-03-02 15:51:50',
                'updated_at' => '2021-03-02 15:51:50'
            ],
            118 => [
                'id' => 119,
                'en_skill' => 'Knitting',
                'ar_skill' => 'Knitting',
                'status' => 1,
                'created_at' => '2021-03-02 15:51:50',
                'updated_at' => '2021-03-02 15:51:50'
            ],
            119 => [
                'id' => 120,
                'en_skill' => 'Knot tying',
                'ar_skill' => 'Knot tying',
                'status' => 1,
                'created_at' => '2021-03-02 15:51:50',
                'updated_at' => '2021-03-02 15:51:50'
            ],
            120 => [
                'id' => 121,
                'en_skill' => 'Kombucha brewing',
                'ar_skill' => 'Kombucha brewing',
                'status' => 1,
                'created_at' => '2021-03-02 15:51:50',
                'updated_at' => '2021-03-02 15:51:50'
            ],
            121 => [
                'id' => 122,
                'en_skill' => 'Kung fu',
                'ar_skill' => 'Kung fu',
                'status' => 1,
                'created_at' => '2021-03-02 15:51:50',
                'updated_at' => '2021-03-02 15:51:50'
            ],
            122 => [
                'id' => 123,
                'en_skill' => 'Lace making',
                'ar_skill' => 'Lace making',
                'status' => 1,
                'created_at' => '2021-03-02 15:51:50',
                'updated_at' => '2021-03-02 15:51:50'
            ],
            123 => [
                'id' => 124,
                'en_skill' => 'Lapidary',
                'ar_skill' => 'Lapidary',
                'status' => 1,
                'created_at' => '2021-03-02 15:51:50',
                'updated_at' => '2021-03-02 15:51:50'
            ],
            124 => [
                'id' => 125,
                'en_skill' => 'Leather crafting',
                'ar_skill' => 'Leather crafting',
                'status' => 1,
                'created_at' => '2021-03-02 15:51:51',
                'updated_at' => '2021-03-02 15:51:51'
            ],
            125 => [
                'id' => 126,
                'en_skill' => 'Lego building  ',
                'ar_skill' => 'Lego building  ',
                'status' => 1,
                'created_at' => '2021-03-02 15:51:51',
                'updated_at' => '2021-03-02 15:51:51'
            ],
            126 => [
                'id' => 127,
                'en_skill' => 'Livestreaming',
                'ar_skill' => 'Livestreaming',
                'status' => 1,
                'created_at' => '2021-03-02 15:51:51',
                'updated_at' => '2021-03-02 15:51:51'
            ],
            127 => [
                'id' => 128,
                'en_skill' => 'Listening to music ',
                'ar_skill' => 'Listening to music ',
                'status' => 1,
                'created_at' => '2021-03-02 15:51:51',
                'updated_at' => '2021-03-02 15:51:51'
            ],
            128 => [
                'id' => 129,
                'en_skill' => 'Listening to podcasts',
                'ar_skill' => 'Listening to podcasts',
                'status' => 1,
                'created_at' => '2021-03-02 15:51:51',
                'updated_at' => '2021-03-02 15:51:51'
            ],
            129 => [
                'id' => 130,
                'en_skill' => 'Lock picking',
                'ar_skill' => 'Lock picking',
                'status' => 1,
                'created_at' => '2021-03-02 15:51:52',
                'updated_at' => '2021-03-02 15:51:52'
            ],
            130 => [
                'id' => 131,
                'en_skill' => 'Machining ',
                'ar_skill' => 'Machining ',
                'status' => 1,
                'created_at' => '2021-03-02 15:51:52',
                'updated_at' => '2021-03-02 15:51:52'
            ],
            131 => [
                'id' => 132,
                'en_skill' => 'Macrame',
                'ar_skill' => 'Macrame',
                'status' => 1,
                'created_at' => '2021-03-02 15:51:52',
                'updated_at' => '2021-03-02 15:51:52'
            ],
            132 => [
                'id' => 133,
                'en_skill' => 'Magic',
                'ar_skill' => 'Magic',
                'status' => 1,
                'created_at' => '2021-03-02 15:51:52',
                'updated_at' => '2021-03-02 15:51:52'
            ],
            133 => [
                'id' => 134,
                'en_skill' => 'Makeup',
                'ar_skill' => 'Makeup',
                'status' => 1,
                'created_at' => '2021-03-02 15:51:52',
                'updated_at' => '2021-03-02 15:51:52'
            ],
            134 => [
                'id' => 135,
                'en_skill' => 'Massaging',
                'ar_skill' => 'Massaging',
                'status' => 1,
                'created_at' => '2021-03-02 15:51:52',
                'updated_at' => '2021-03-02 15:51:52'
            ],
            135 => [
                'id' => 136,
                'en_skill' => 'Mazes (indoor/outdoor)',
                'ar_skill' => 'Mazes (indoor/outdoor)',
                'status' => 1,
                'created_at' => '2021-03-02 15:51:53',
                'updated_at' => '2021-03-02 15:51:53'
            ],
            136 => [
                'id' => 137,
                'en_skill' => 'Mechanics',
                'ar_skill' => 'Mechanics',
                'status' => 1,
                'created_at' => '2021-03-02 15:51:53',
                'updated_at' => '2021-03-02 15:51:53'
            ],
            137 => [
                'id' => 138,
                'en_skill' => 'Meditation',
                'ar_skill' => 'Meditation',
                'status' => 1,
                'created_at' => '2021-03-02 15:51:53',
                'updated_at' => '2021-03-02 15:51:53'
            ],
            138 => [
                'id' => 139,
                'en_skill' => 'Memory training',
                'ar_skill' => 'Memory training',
                'status' => 1,
                'created_at' => '2021-03-02 15:51:53',
                'updated_at' => '2021-03-02 15:51:53'
            ],
            139 => [
                'id' => 140,
                'en_skill' => 'Metalworking',
                'ar_skill' => 'Metalworking',
                'status' => 1,
                'created_at' => '2021-03-02 15:51:53',
                'updated_at' => '2021-03-02 15:51:53'
            ],
            140 => [
                'id' => 141,
                'en_skill' => 'Miniature art',
                'ar_skill' => 'Miniature art',
                'status' => 1,
                'created_at' => '2021-03-02 15:51:53',
                'updated_at' => '2021-03-02 15:51:53'
            ],
            141 => [
                'id' => 142,
                'en_skill' => 'Minimalism',
                'ar_skill' => 'Minimalism',
                'status' => 1,
                'created_at' => '2021-03-02 15:51:54',
                'updated_at' => '2021-03-02 15:51:54'
            ],
            142 => [
                'id' => 143,
                'en_skill' => 'Model building',
                'ar_skill' => 'Model building',
                'status' => 1,
                'created_at' => '2021-03-02 15:51:54',
                'updated_at' => '2021-03-02 15:51:54'
            ],
            143 => [
                'id' => 144,
                'en_skill' => 'Model engineering',
                'ar_skill' => 'Model engineering',
                'status' => 1,
                'created_at' => '2021-03-02 15:51:54',
                'updated_at' => '2021-03-02 15:51:54'
            ],
            144 => [
                'id' => 145,
                'en_skill' => 'Music',
                'ar_skill' => 'Music',
                'status' => 1,
                'created_at' => '2021-03-02 15:51:54',
                'updated_at' => '2021-03-02 15:51:54'
            ],
            145 => [
                'id' => 146,
                'en_skill' => 'Nail art',
                'ar_skill' => 'Nail art',
                'status' => 1,
                'created_at' => '2021-03-02 15:51:54',
                'updated_at' => '2021-03-02 15:51:54'
            ],
            146 => [
                'id' => 147,
                'en_skill' => 'Needlepoint',
                'ar_skill' => 'Needlepoint',
                'status' => 1,
                'created_at' => '2021-03-02 15:51:54',
                'updated_at' => '2021-03-02 15:51:54'
            ],
            147 => [
                'id' => 148,
                'en_skill' => 'Origami',
                'ar_skill' => 'Origami',
                'status' => 1,
                'created_at' => '2021-03-02 15:51:54',
                'updated_at' => '2021-03-02 15:51:54'
            ],
            148 => [
                'id' => 149,
                'en_skill' => 'Painting',
                'ar_skill' => 'Painting',
                'status' => 1,
                'created_at' => '2021-03-02 15:51:55',
                'updated_at' => '2021-03-02 15:51:55'
            ],
            149 => [
                'id' => 150,
                'en_skill' => 'Palmistry',
                'ar_skill' => 'Palmistry',
                'status' => 1,
                'created_at' => '2021-03-02 15:51:55',
                'updated_at' => '2021-03-02 15:51:55'
            ],
            150 => [
                'id' => 151,
                'en_skill' => 'Performance',
                'ar_skill' => 'Performance',
                'status' => 1,
                'created_at' => '2021-03-02 15:51:55',
                'updated_at' => '2021-03-02 15:51:55'
            ],
            151 => [
                'id' => 152,
                'en_skill' => 'Pet',
                'ar_skill' => 'Pet',
                'status' => 1,
                'created_at' => '2021-03-02 15:51:55',
                'updated_at' => '2021-03-02 15:51:55'
            ],
            152 => [
                'id' => 153,
                'en_skill' => 'Pet adoption & fostering',
                'ar_skill' => 'Pet adoption & fostering',
                'status' => 1,
                'created_at' => '2021-03-02 15:51:55',
                'updated_at' => '2021-03-02 15:51:55'
            ],
            153 => [
                'id' => 154,
                'en_skill' => 'Pet sitting',
                'ar_skill' => 'Pet sitting',
                'status' => 1,
                'created_at' => '2021-03-02 15:51:55',
                'updated_at' => '2021-03-02 15:51:55'
            ],
            154 => [
                'id' => 155,
                'en_skill' => 'Philately',
                'ar_skill' => 'Philately',
                'status' => 1,
                'created_at' => '2021-03-02 15:51:55',
                'updated_at' => '2021-03-02 15:51:55'
            ],
            155 => [
                'id' => 156,
                'en_skill' => 'Photography',
                'ar_skill' => 'Photography',
                'status' => 1,
                'created_at' => '2021-03-02 15:51:56',
                'updated_at' => '2021-03-02 15:51:56'
            ],
            156 => [
                'id' => 157,
                'en_skill' => 'Pilates',
                'ar_skill' => 'Pilates',
                'status' => 1,
                'created_at' => '2021-03-02 15:51:56',
                'updated_at' => '2021-03-02 15:51:56'
            ],
            157 => [
                'id' => 158,
                'en_skill' => 'Planning',
                'ar_skill' => 'Planning',
                'status' => 1,
                'created_at' => '2021-03-02 15:51:56',
                'updated_at' => '2021-03-02 15:51:56'
            ],
            158 => [
                'id' => 159,
                'en_skill' => 'Plastic art',
                'ar_skill' => 'Plastic art',
                'status' => 1,
                'created_at' => '2021-03-02 15:51:56',
                'updated_at' => '2021-03-02 15:51:56'
            ],
            159 => [
                'id' => 160,
                'en_skill' => 'Playing musical instruments',
                'ar_skill' => 'Playing musical instruments',
                'status' => 1,
                'created_at' => '2021-03-02 15:51:56',
                'updated_at' => '2021-03-02 15:51:56'
            ],
            160 => [
                'id' => 161,
                'en_skill' => 'Poetry',
                'ar_skill' => 'Poetry',
                'status' => 1,
                'created_at' => '2021-03-02 15:51:56',
                'updated_at' => '2021-03-02 15:51:56'
            ],
            161 => [
                'id' => 162,
                'en_skill' => 'Poi',
                'ar_skill' => 'Poi',
                'status' => 1,
                'created_at' => '2021-03-02 15:51:57',
                'updated_at' => '2021-03-02 15:51:57'
            ],
            162 => [
                'id' => 163,
                'en_skill' => 'Pole dancing',
                'ar_skill' => 'Pole dancing',
                'status' => 1,
                'created_at' => '2021-03-02 15:51:57',
                'updated_at' => '2021-03-02 15:51:57'
            ],
            163 => [
                'id' => 164,
                'en_skill' => 'Postcrossing',
                'ar_skill' => 'Postcrossing',
                'status' => 1,
                'created_at' => '2021-03-02 15:51:57',
                'updated_at' => '2021-03-02 15:51:57'
            ],
            164 => [
                'id' => 165,
                'en_skill' => 'Pottery',
                'ar_skill' => 'Pottery',
                'status' => 1,
                'created_at' => '2021-03-02 15:51:57',
                'updated_at' => '2021-03-02 15:51:57'
            ],
            165 => [
                'id' => 166,
                'en_skill' => 'Powerlifting',
                'ar_skill' => 'Powerlifting',
                'status' => 1,
                'created_at' => '2021-03-02 15:51:57',
                'updated_at' => '2021-03-02 15:51:57'
            ],
            166 => [
                'id' => 167,
                'en_skill' => 'Practical jokes',
                'ar_skill' => 'Practical jokes',
                'status' => 1,
                'created_at' => '2021-03-02 15:51:58',
                'updated_at' => '2021-03-02 15:51:58'
            ],
            167 => [
                'id' => 168,
                'en_skill' => 'Pressed flower craft',
                'ar_skill' => 'Pressed flower craft',
                'status' => 1,
                'created_at' => '2021-03-02 15:51:58',
                'updated_at' => '2021-03-02 15:51:58'
            ],
            168 => [
                'id' => 169,
                'en_skill' => 'Proofreading and editing',
                'ar_skill' => 'Proofreading and editing',
                'status' => 1,
                'created_at' => '2021-03-02 15:51:58',
                'updated_at' => '2021-03-02 15:51:58'
            ],
            169 => [
                'id' => 170,
                'en_skill' => 'Proverbs',
                'ar_skill' => 'Proverbs',
                'status' => 1,
                'created_at' => '2021-03-02 15:51:58',
                'updated_at' => '2021-03-02 15:51:58'
            ],
            170 => [
                'id' => 171,
                'en_skill' => 'Public speaking',
                'ar_skill' => 'Public speaking',
                'status' => 1,
                'created_at' => '2021-03-02 15:51:58',
                'updated_at' => '2021-03-02 15:51:58'
            ],
            171 => [
                'id' => 172,
                'en_skill' => 'Puppetry',
                'ar_skill' => 'Puppetry',
                'status' => 1,
                'created_at' => '2021-03-02 15:51:58',
                'updated_at' => '2021-03-02 15:51:58'
            ],
            172 => [
                'id' => 173,
                'en_skill' => 'Puzzles',
                'ar_skill' => 'Puzzles',
                'status' => 1,
                'created_at' => '2021-03-02 15:51:59',
                'updated_at' => '2021-03-02 15:51:59'
            ],
            173 => [
                'id' => 174,
                'en_skill' => 'Pyrography',
                'ar_skill' => 'Pyrography',
                'status' => 1,
                'created_at' => '2021-03-02 15:51:59',
                'updated_at' => '2021-03-02 15:51:59'
            ],
            174 => [
                'id' => 175,
                'en_skill' => 'Quilling',
                'ar_skill' => 'Quilling',
                'status' => 1,
                'created_at' => '2021-03-02 15:51:59',
                'updated_at' => '2021-03-02 15:51:59'
            ],
            175 => [
                'id' => 176,
                'en_skill' => 'Quilting',
                'ar_skill' => 'Quilting',
                'status' => 1,
                'created_at' => '2021-03-02 15:51:59',
                'updated_at' => '2021-03-02 15:51:59'
            ],
            176 => [
                'id' => 177,
                'en_skill' => 'Quizzes',
                'ar_skill' => 'Quizzes',
                'status' => 1,
                'created_at' => '2021-03-02 15:51:59',
                'updated_at' => '2021-03-02 15:51:59'
            ],
            177 => [
                'id' => 178,
                'en_skill' => 'Radio-controlled model playing',
                'ar_skill' => 'Radio-controlled model playing',
                'status' => 1,
                'created_at' => '2021-03-02 15:51:59',
                'updated_at' => '2021-03-02 15:51:59'
            ],
            178 => [
                'id' => 179,
                'en_skill' => 'Rail transport modeling',
                'ar_skill' => 'Rail transport modeling',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:00',
                'updated_at' => '2021-03-02 15:52:00'
            ],
            179 => [
                'id' => 180,
                'en_skill' => 'Rapping',
                'ar_skill' => 'Rapping',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:00',
                'updated_at' => '2021-03-02 15:52:00'
            ],
            180 => [
                'id' => 181,
                'en_skill' => 'Reading',
                'ar_skill' => 'Reading',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:00',
                'updated_at' => '2021-03-02 15:52:00'
            ],
            181 => [
                'id' => 182,
                'en_skill' => 'Recipe creation',
                'ar_skill' => 'Recipe creation',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:00',
                'updated_at' => '2021-03-02 15:52:00'
            ],
            182 => [
                'id' => 183,
                'en_skill' => 'Refinishing',
                'ar_skill' => 'Refinishing',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:00',
                'updated_at' => '2021-03-02 15:52:00'
            ],
            183 => [
                'id' => 184,
                'en_skill' => 'Reiki',
                'ar_skill' => 'Reiki',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:01',
                'updated_at' => '2021-03-02 15:52:01'
            ],
            184 => [
                'id' => 185,
                'en_skill' => 'Reviewing Gadgets',
                'ar_skill' => 'Reviewing Gadgets',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:01',
                'updated_at' => '2021-03-02 15:52:01'
            ],
            185 => [
                'id' => 186,
                'en_skill' => 'Robot combat',
                'ar_skill' => 'Robot combat',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:01',
                'updated_at' => '2021-03-02 15:52:01'
            ],
            186 => [
                'id' => 187,
                'en_skill' => 'Rubik\'s Cube',
                'ar_skill' => 'Rubik\'s Cube',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:01',
                'updated_at' => '2021-03-02 15:52:01'
            ],
            187 => [
                'id' => 188,
                'en_skill' => 'Scrapbooking',
                'ar_skill' => 'Scrapbooking',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:02',
                'updated_at' => '2021-03-02 15:52:02'
            ],
            188 => [
                'id' => 189,
                'en_skill' => 'SCUBA Diving',
                'ar_skill' => 'SCUBA Diving',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:02',
                'updated_at' => '2021-03-02 15:52:02'
            ],
            189 => [
                'id' => 190,
                'en_skill' => 'Sculpting',
                'ar_skill' => 'Sculpting',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:02',
                'updated_at' => '2021-03-02 15:52:02'
            ],
            190 => [
                'id' => 191,
                'en_skill' => 'Sewing',
                'ar_skill' => 'Sewing',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:02',
                'updated_at' => '2021-03-02 15:52:02'
            ],
            191 => [
                'id' => 192,
                'en_skill' => 'Shoemaking',
                'ar_skill' => 'Shoemaking',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:02',
                'updated_at' => '2021-03-02 15:52:02'
            ],
            192 => [
                'id' => 193,
                'en_skill' => 'Singing',
                'ar_skill' => 'Singing',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:02',
                'updated_at' => '2021-03-02 15:52:02'
            ],
            193 => [
                'id' => 194,
                'en_skill' => 'Sketching',
                'ar_skill' => 'Sketching',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:03',
                'updated_at' => '2021-03-02 15:52:03'
            ],
            194 => [
                'id' => 195,
                'en_skill' => 'Skipping rope',
                'ar_skill' => 'Skipping rope',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:03',
                'updated_at' => '2021-03-02 15:52:03'
            ],
            195 => [
                'id' => 196,
                'en_skill' => 'Slot car',
                'ar_skill' => 'Slot car',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:03',
                'updated_at' => '2021-03-02 15:52:03'
            ],
            196 => [
                'id' => 197,
                'en_skill' => 'Soapmaking',
                'ar_skill' => 'Soapmaking',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:03',
                'updated_at' => '2021-03-02 15:52:03'
            ],
            197 => [
                'id' => 198,
                'en_skill' => 'Social media',
                'ar_skill' => 'Social media',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:03',
                'updated_at' => '2021-03-02 15:52:03'
            ],
            198 => [
                'id' => 199,
                'en_skill' => 'Spreadsheets',
                'ar_skill' => 'Spreadsheets',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:04',
                'updated_at' => '2021-03-02 15:52:04'
            ],
            199 => [
                'id' => 200,
                'en_skill' => 'Stamp collecting',
                'ar_skill' => 'Stamp collecting',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:04',
                'updated_at' => '2021-03-02 15:52:04'
            ],
            200 => [
                'id' => 201,
                'en_skill' => 'Stand-up comedy',
                'ar_skill' => 'Stand-up comedy',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:04',
                'updated_at' => '2021-03-02 15:52:04'
            ],
            201 => [
                'id' => 202,
                'en_skill' => 'Storytelling',
                'ar_skill' => 'Storytelling',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:04',
                'updated_at' => '2021-03-02 15:52:04'
            ],
            202 => [
                'id' => 203,
                'en_skill' => 'Stripping',
                'ar_skill' => 'Stripping',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:04',
                'updated_at' => '2021-03-02 15:52:04'
            ],
            203 => [
                'id' => 204,
                'en_skill' => 'Sudoku',
                'ar_skill' => 'Sudoku',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:05',
                'updated_at' => '2021-03-02 15:52:05'
            ],
            204 => [
                'id' => 205,
                'en_skill' => 'Table tennis playing',
                'ar_skill' => 'Table tennis playing',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:05',
                'updated_at' => '2021-03-02 15:52:05'
            ],
            205 => [
                'id' => 206,
                'en_skill' => 'Tapestry',
                'ar_skill' => 'Tapestry',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:05',
                'updated_at' => '2021-03-02 15:52:05'
            ],
            206 => [
                'id' => 207,
                'en_skill' => 'Tarot',
                'ar_skill' => 'Tarot',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:05',
                'updated_at' => '2021-03-02 15:52:05'
            ],
            207 => [
                'id' => 208,
                'en_skill' => 'Tatebanko',
                'ar_skill' => 'Tatebanko',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:05',
                'updated_at' => '2021-03-02 15:52:05'
            ],
            208 => [
                'id' => 209,
                'en_skill' => 'Tattooing',
                'ar_skill' => 'Tattooing',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:06',
                'updated_at' => '2021-03-02 15:52:06'
            ],
            209 => [
                'id' => 210,
                'en_skill' => 'Taxidermy',
                'ar_skill' => 'Taxidermy',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:06',
                'updated_at' => '2021-03-02 15:52:06'
            ],
            210 => [
                'id' => 211,
                'en_skill' => 'Telling jokes',
                'ar_skill' => 'Telling jokes',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:06',
                'updated_at' => '2021-03-02 15:52:06'
            ],
            211 => [
                'id' => 212,
                'en_skill' => 'Thrifting',
                'ar_skill' => 'Thrifting',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:06',
                'updated_at' => '2021-03-02 15:52:06'
            ],
            212 => [
                'id' => 213,
                'en_skill' => 'Upcycling',
                'ar_skill' => 'Upcycling',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:06',
                'updated_at' => '2021-03-02 15:52:06'
            ],
            213 => [
                'id' => 214,
                'en_skill' => 'Video editing',
                'ar_skill' => 'Video editing',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:07',
                'updated_at' => '2021-03-02 15:52:07'
            ],
            214 => [
                'id' => 215,
                'en_skill' => 'Video game developing',
                'ar_skill' => 'Video game developing',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:07',
                'updated_at' => '2021-03-02 15:52:07'
            ],
            215 => [
                'id' => 216,
                'en_skill' => 'Video gaming  ',
                'ar_skill' => 'Video gaming  ',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:07',
                'updated_at' => '2021-03-02 15:52:07'
            ],
            216 => [
                'id' => 217,
                'en_skill' => 'Video making',
                'ar_skill' => 'Video making',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:07',
                'updated_at' => '2021-03-02 15:52:07'
            ],
            217 => [
                'id' => 218,
                'en_skill' => 'VR Gaming',
                'ar_skill' => 'VR Gaming',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:08',
                'updated_at' => '2021-03-02 15:52:08'
            ],
            218 => [
                'id' => 219,
                'en_skill' => 'Watching documentaries',
                'ar_skill' => 'Watching documentaries',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:08',
                'updated_at' => '2021-03-02 15:52:08'
            ],
            219 => [
                'id' => 220,
                'en_skill' => 'Watching movies ',
                'ar_skill' => 'Watching movies ',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:08',
                'updated_at' => '2021-03-02 15:52:08'
            ],
            220 => [
                'id' => 221,
                'en_skill' => 'Watching television',
                'ar_skill' => 'Watching television',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:08',
                'updated_at' => '2021-03-02 15:52:08'
            ],
            221 => [
                'id' => 222,
                'en_skill' => 'Waxing',
                'ar_skill' => 'Waxing',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:08',
                'updated_at' => '2021-03-02 15:52:08'
            ],
            222 => [
                'id' => 223,
                'en_skill' => 'Weaving',
                'ar_skill' => 'Weaving',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:09',
                'updated_at' => '2021-03-02 15:52:09'
            ],
            223 => [
                'id' => 224,
                'en_skill' => 'Webtooning',
                'ar_skill' => 'Webtooning',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:09',
                'updated_at' => '2021-03-02 15:52:09'
            ],
            224 => [
                'id' => 225,
                'en_skill' => 'Weight training',
                'ar_skill' => 'Weight training',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:09',
                'updated_at' => '2021-03-02 15:52:09'
            ],
            225 => [
                'id' => 226,
                'en_skill' => 'Welding',
                'ar_skill' => 'Welding',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:09',
                'updated_at' => '2021-03-02 15:52:09'
            ],
            226 => [
                'id' => 227,
                'en_skill' => 'Whittling',
                'ar_skill' => 'Whittling',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:09',
                'updated_at' => '2021-03-02 15:52:09'
            ],
            227 => [
                'id' => 228,
                'en_skill' => 'Wii sports',
                'ar_skill' => 'Wii sports',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:10',
                'updated_at' => '2021-03-02 15:52:10'
            ],
            228 => [
                'id' => 229,
                'en_skill' => 'Wikipedia editing',
                'ar_skill' => 'Wikipedia editing',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:10',
                'updated_at' => '2021-03-02 15:52:10'
            ],
            229 => [
                'id' => 230,
                'en_skill' => 'Wine tasting',
                'ar_skill' => 'Wine tasting',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:10',
                'updated_at' => '2021-03-02 15:52:10'
            ],
            230 => [
                'id' => 231,
                'en_skill' => 'Winemaking',
                'ar_skill' => 'Winemaking',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:10',
                'updated_at' => '2021-03-02 15:52:10'
            ],
            231 => [
                'id' => 232,
                'en_skill' => 'Witchcraft',
                'ar_skill' => 'Witchcraft',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:10',
                'updated_at' => '2021-03-02 15:52:10'
            ],
            232 => [
                'id' => 233,
                'en_skill' => 'Wood carving ',
                'ar_skill' => 'Wood carving ',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:10',
                'updated_at' => '2021-03-02 15:52:10'
            ],
            233 => [
                'id' => 234,
                'en_skill' => 'Woodworking',
                'ar_skill' => 'Woodworking',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:10',
                'updated_at' => '2021-03-02 15:52:10'
            ],
            234 => [
                'id' => 235,
                'en_skill' => 'Word searches',
                'ar_skill' => 'Word searches',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:10',
                'updated_at' => '2021-03-02 15:52:10'
            ],
            235 => [
                'id' => 236,
                'en_skill' => 'Worldbuilding',
                'ar_skill' => 'Worldbuilding',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:11',
                'updated_at' => '2021-03-02 15:52:11'
            ],
            236 => [
                'id' => 237,
                'en_skill' => 'Writing',
                'ar_skill' => 'Writing',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:11',
                'updated_at' => '2021-03-02 15:52:11'
            ],
            237 => [
                'id' => 238,
                'en_skill' => 'Writing music',
                'ar_skill' => 'Writing music',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:11',
                'updated_at' => '2021-03-02 15:52:11'
            ],
            238 => [
                'id' => 239,
                'en_skill' => 'Yo-yoing',
                'ar_skill' => 'Yo-yoing',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:11',
                'updated_at' => '2021-03-02 15:52:11'
            ],
            239 => [
                'id' => 240,
                'en_skill' => 'Yoga',
                'ar_skill' => 'Yoga',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:11',
                'updated_at' => '2021-03-02 15:52:11'
            ],
            240 => [
                'id' => 241,
                'en_skill' => 'Zumba',
                'ar_skill' => 'Zumba',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:12',
                'updated_at' => '2021-03-02 15:52:12'
            ],
            241 => [
                'id' => 242,
                'en_skill' => 'Outdoors and Sports  edit',
                'ar_skill' => 'Outdoors and Sports  edit',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:12',
                'updated_at' => '2021-03-02 15:52:12'
            ],
            242 => [
                'id' => 243,
                'en_skill' => 'Air sports   ',
                'ar_skill' => 'Air sports   ',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:12',
                'updated_at' => '2021-03-02 15:52:12'
            ],
            243 => [
                'id' => 244,
                'en_skill' => 'Airsoft',
                'ar_skill' => 'Airsoft',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:12',
                'updated_at' => '2021-03-02 15:52:12'
            ],
            244 => [
                'id' => 245,
                'en_skill' => 'Amateur geology',
                'ar_skill' => 'Amateur geology',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:13',
                'updated_at' => '2021-03-02 15:52:13'
            ],
            245 => [
                'id' => 246,
                'en_skill' => 'Amusement park visiting',
                'ar_skill' => 'Amusement park visiting',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:13',
                'updated_at' => '2021-03-02 15:52:13'
            ],
            246 => [
                'id' => 247,
                'en_skill' => 'Archery',
                'ar_skill' => 'Archery',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:13',
                'updated_at' => '2021-03-02 15:52:13'
            ],
            247 => [
                'id' => 248,
                'en_skill' => 'Auto detailing',
                'ar_skill' => 'Auto detailing',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:13',
                'updated_at' => '2021-03-02 15:52:13'
            ],
            248 => [
                'id' => 249,
                'en_skill' => 'Automobilism',
                'ar_skill' => 'Automobilism',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:13',
                'updated_at' => '2021-03-02 15:52:13'
            ],
            249 => [
                'id' => 250,
                'en_skill' => 'Astronomy',
                'ar_skill' => 'Astronomy',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:13',
                'updated_at' => '2021-03-02 15:52:13'
            ],
            250 => [
                'id' => 251,
                'en_skill' => 'Backpacking',
                'ar_skill' => 'Backpacking',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:14',
                'updated_at' => '2021-03-02 15:52:14'
            ],
            251 => [
                'id' => 252,
                'en_skill' => 'Badminton',
                'ar_skill' => 'Badminton',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:14',
                'updated_at' => '2021-03-02 15:52:14'
            ],
            252 => [
                'id' => 253,
                'en_skill' => 'BASE jumping  ',
                'ar_skill' => 'BASE jumping  ',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:14',
                'updated_at' => '2021-03-02 15:52:14'
            ],
            253 => [
                'id' => 254,
                'en_skill' => 'Baseball',
                'ar_skill' => 'Baseball',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:14',
                'updated_at' => '2021-03-02 15:52:14'
            ],
            254 => [
                'id' => 255,
                'en_skill' => 'Basketball',
                'ar_skill' => 'Basketball',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:14',
                'updated_at' => '2021-03-02 15:52:14'
            ],
            255 => [
                'id' => 256,
                'en_skill' => 'Beachcombing',
                'ar_skill' => 'Beachcombing',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:15',
                'updated_at' => '2021-03-02 15:52:15'
            ],
            256 => [
                'id' => 257,
                'en_skill' => 'Beekeeping',
                'ar_skill' => 'Beekeeping',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:15',
                'updated_at' => '2021-03-02 15:52:15'
            ],
            257 => [
                'id' => 258,
                'en_skill' => 'Birdwatching',
                'ar_skill' => 'Birdwatching',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:15',
                'updated_at' => '2021-03-02 15:52:15'
            ],
            258 => [
                'id' => 259,
                'en_skill' => 'Blacksmithing',
                'ar_skill' => 'Blacksmithing',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:15',
                'updated_at' => '2021-03-02 15:52:15'
            ],
            259 => [
                'id' => 260,
                'en_skill' => 'BMX',
                'ar_skill' => 'BMX',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:16',
                'updated_at' => '2021-03-02 15:52:16'
            ],
            260 => [
                'id' => 261,
                'en_skill' => 'Board sports ',
                'ar_skill' => 'Board sports ',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:16',
                'updated_at' => '2021-03-02 15:52:16'
            ],
            261 => [
                'id' => 262,
                'en_skill' => 'Bodybuilding',
                'ar_skill' => 'Bodybuilding',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:16',
                'updated_at' => '2021-03-02 15:52:16'
            ],
            262 => [
                'id' => 263,
                'en_skill' => 'Bonsai',
                'ar_skill' => 'Bonsai',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:16',
                'updated_at' => '2021-03-02 15:52:16'
            ],
            263 => [
                'id' => 264,
                'en_skill' => 'Butterfly watching',
                'ar_skill' => 'Butterfly watching',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:16',
                'updated_at' => '2021-03-02 15:52:16'
            ],
            264 => [
                'id' => 265,
                'en_skill' => 'Bus riding',
                'ar_skill' => 'Bus riding',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:17',
                'updated_at' => '2021-03-02 15:52:17'
            ],
            265 => [
                'id' => 266,
                'en_skill' => 'Camping',
                'ar_skill' => 'Camping',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:17',
                'updated_at' => '2021-03-02 15:52:17'
            ],
            266 => [
                'id' => 267,
                'en_skill' => 'Canoeing',
                'ar_skill' => 'Canoeing',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:17',
                'updated_at' => '2021-03-02 15:52:17'
            ],
            267 => [
                'id' => 268,
                'en_skill' => 'Canyoning',
                'ar_skill' => 'Canyoning',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:17',
                'updated_at' => '2021-03-02 15:52:17'
            ],
            268 => [
                'id' => 269,
                'en_skill' => 'Car riding',
                'ar_skill' => 'Car riding',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:17',
                'updated_at' => '2021-03-02 15:52:17'
            ],
            269 => [
                'id' => 270,
                'en_skill' => 'Car tuning',
                'ar_skill' => 'Car tuning',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:18',
                'updated_at' => '2021-03-02 15:52:18'
            ],
            270 => [
                'id' => 271,
                'en_skill' => 'Caving',
                'ar_skill' => 'Caving',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:18',
                'updated_at' => '2021-03-02 15:52:18'
            ],
            271 => [
                'id' => 272,
                'en_skill' => 'City trip',
                'ar_skill' => 'City trip',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:18',
                'updated_at' => '2021-03-02 15:52:18'
            ],
            272 => [
                'id' => 273,
                'en_skill' => 'Composting',
                'ar_skill' => 'Composting',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:18',
                'updated_at' => '2021-03-02 15:52:18'
            ],
            273 => [
                'id' => 274,
                'en_skill' => 'Cycling',
                'ar_skill' => 'Cycling',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:18',
                'updated_at' => '2021-03-02 15:52:18'
            ],
            274 => [
                'id' => 275,
                'en_skill' => 'Dandyism',
                'ar_skill' => 'Dandyism',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:19',
                'updated_at' => '2021-03-02 15:52:19'
            ],
            275 => [
                'id' => 276,
                'en_skill' => 'Dog training',
                'ar_skill' => 'Dog training',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:19',
                'updated_at' => '2021-03-02 15:52:19'
            ],
            276 => [
                'id' => 277,
                'en_skill' => 'Dog walking',
                'ar_skill' => 'Dog walking',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:19',
                'updated_at' => '2021-03-02 15:52:19'
            ],
            277 => [
                'id' => 278,
                'en_skill' => 'Dowsing',
                'ar_skill' => 'Dowsing',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:19',
                'updated_at' => '2021-03-02 15:52:19'
            ],
            278 => [
                'id' => 279,
                'en_skill' => 'Driving',
                'ar_skill' => 'Driving',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:19',
                'updated_at' => '2021-03-02 15:52:19'
            ],
            279 => [
                'id' => 280,
                'en_skill' => 'Farming',
                'ar_skill' => 'Farming',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:20',
                'updated_at' => '2021-03-02 15:52:20'
            ],
            280 => [
                'id' => 281,
                'en_skill' => 'Fishing',
                'ar_skill' => 'Fishing',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:20',
                'updated_at' => '2021-03-02 15:52:20'
            ],
            281 => [
                'id' => 282,
                'en_skill' => 'Flag football ',
                'ar_skill' => 'Flag football ',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:20',
                'updated_at' => '2021-03-02 15:52:20'
            ],
            282 => [
                'id' => 283,
                'en_skill' => 'Flower growing',
                'ar_skill' => 'Flower growing',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:20',
                'updated_at' => '2021-03-02 15:52:20'
            ],
            283 => [
                'id' => 284,
                'en_skill' => 'Flying',
                'ar_skill' => 'Flying',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:21',
                'updated_at' => '2021-03-02 15:52:21'
            ],
            284 => [
                'id' => 285,
                'en_skill' => 'Flying disc',
                'ar_skill' => 'Flying disc',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:21',
                'updated_at' => '2021-03-02 15:52:21'
            ],
            285 => [
                'id' => 286,
                'en_skill' => 'Flying model planes',
                'ar_skill' => 'Flying model planes',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:21',
                'updated_at' => '2021-03-02 15:52:21'
            ],
            286 => [
                'id' => 287,
                'en_skill' => 'Foraging',
                'ar_skill' => 'Foraging',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:21',
                'updated_at' => '2021-03-02 15:52:21'
            ],
            287 => [
                'id' => 288,
                'en_skill' => 'Fossicking',
                'ar_skill' => 'Fossicking',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:21',
                'updated_at' => '2021-03-02 15:52:21'
            ],
            288 => [
                'id' => 289,
                'en_skill' => 'Freestyle football ',
                'ar_skill' => 'Freestyle football ',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:22',
                'updated_at' => '2021-03-02 15:52:22'
            ],
            289 => [
                'id' => 290,
                'en_skill' => 'Fruit picking',
                'ar_skill' => 'Fruit picking',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:22',
                'updated_at' => '2021-03-02 15:52:22'
            ],
            290 => [
                'id' => 291,
                'en_skill' => 'Gardening',
                'ar_skill' => 'Gardening',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:22',
                'updated_at' => '2021-03-02 15:52:22'
            ],
            291 => [
                'id' => 292,
                'en_skill' => 'Geocaching',
                'ar_skill' => 'Geocaching',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:22',
                'updated_at' => '2021-03-02 15:52:22'
            ],
            292 => [
                'id' => 293,
                'en_skill' => 'Ghost hunting',
                'ar_skill' => 'Ghost hunting',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:22',
                'updated_at' => '2021-03-02 15:52:22'
            ],
            293 => [
                'id' => 294,
                'en_skill' => 'Gold prospecting',
                'ar_skill' => 'Gold prospecting',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:23',
                'updated_at' => '2021-03-02 15:52:23'
            ],
            294 => [
                'id' => 295,
                'en_skill' => 'Graffiti',
                'ar_skill' => 'Graffiti',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:23',
                'updated_at' => '2021-03-02 15:52:23'
            ],
            295 => [
                'id' => 296,
                'en_skill' => 'Groundhopping',
                'ar_skill' => 'Groundhopping',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:23',
                'updated_at' => '2021-03-02 15:52:23'
            ],
            296 => [
                'id' => 297,
                'en_skill' => 'Guerrilla gardening',
                'ar_skill' => 'Guerrilla gardening',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:23',
                'updated_at' => '2021-03-02 15:52:23'
            ],
            297 => [
                'id' => 298,
                'en_skill' => 'Handball',
                'ar_skill' => 'Handball',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:23',
                'updated_at' => '2021-03-02 15:52:23'
            ],
            298 => [
                'id' => 299,
                'en_skill' => 'Herbalism',
                'ar_skill' => 'Herbalism',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:23',
                'updated_at' => '2021-03-02 15:52:23'
            ],
            299 => [
                'id' => 300,
                'en_skill' => 'Herping',
                'ar_skill' => 'Herping',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:24',
                'updated_at' => '2021-03-02 15:52:24'
            ],
            300 => [
                'id' => 301,
                'en_skill' => 'High-power rocketry',
                'ar_skill' => 'High-power rocketry',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:24',
                'updated_at' => '2021-03-02 15:52:24'
            ],
            301 => [
                'id' => 302,
                'en_skill' => 'Hiking',
                'ar_skill' => 'Hiking',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:24',
                'updated_at' => '2021-03-02 15:52:24'
            ],
            302 => [
                'id' => 303,
                'en_skill' => 'Hobby horsing',
                'ar_skill' => 'Hobby horsing',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:24',
                'updated_at' => '2021-03-02 15:52:24'
            ],
            303 => [
                'id' => 304,
                'en_skill' => 'Hobby tunneling',
                'ar_skill' => 'Hobby tunneling',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:24',
                'updated_at' => '2021-03-02 15:52:24'
            ],
            304 => [
                'id' => 305,
                'en_skill' => 'Hooping',
                'ar_skill' => 'Hooping',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:24',
                'updated_at' => '2021-03-02 15:52:24'
            ],
            305 => [
                'id' => 306,
                'en_skill' => 'Horseback riding',
                'ar_skill' => 'Horseback riding',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:25',
                'updated_at' => '2021-03-02 15:52:25'
            ],
            306 => [
                'id' => 307,
                'en_skill' => 'Hunting',
                'ar_skill' => 'Hunting',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:25',
                'updated_at' => '2021-03-02 15:52:25'
            ],
            307 => [
                'id' => 308,
                'en_skill' => 'Inline skating  ',
                'ar_skill' => 'Inline skating  ',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:25',
                'updated_at' => '2021-03-02 15:52:25'
            ],
            308 => [
                'id' => 309,
                'en_skill' => 'Jogging',
                'ar_skill' => 'Jogging',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:25',
                'updated_at' => '2021-03-02 15:52:25'
            ],
            309 => [
                'id' => 310,
                'en_skill' => 'Jumping rope',
                'ar_skill' => 'Jumping rope',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:25',
                'updated_at' => '2021-03-02 15:52:25'
            ],
            310 => [
                'id' => 311,
                'en_skill' => 'Karting',
                'ar_skill' => 'Karting',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:26',
                'updated_at' => '2021-03-02 15:52:26'
            ],
            311 => [
                'id' => 312,
                'en_skill' => 'Kayaking',
                'ar_skill' => 'Kayaking',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:26',
                'updated_at' => '2021-03-02 15:52:26'
            ],
            312 => [
                'id' => 313,
                'en_skill' => 'Kite flying',
                'ar_skill' => 'Kite flying',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:26',
                'updated_at' => '2021-03-02 15:52:26'
            ],
            313 => [
                'id' => 314,
                'en_skill' => 'Kitesurfing',
                'ar_skill' => 'Kitesurfing',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:26',
                'updated_at' => '2021-03-02 15:52:26'
            ],
            314 => [
                'id' => 315,
                'en_skill' => 'Lacrosse',
                'ar_skill' => 'Lacrosse',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:26',
                'updated_at' => '2021-03-02 15:52:26'
            ],
            315 => [
                'id' => 316,
                'en_skill' => 'LARPing',
                'ar_skill' => 'LARPing',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:27',
                'updated_at' => '2021-03-02 15:52:27'
            ],
            316 => [
                'id' => 317,
                'en_skill' => 'Letterboxing',
                'ar_skill' => 'Letterboxing',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:27',
                'updated_at' => '2021-03-02 15:52:27'
            ],
            317 => [
                'id' => 318,
                'en_skill' => 'Lomography',
                'ar_skill' => 'Lomography',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:27',
                'updated_at' => '2021-03-02 15:52:27'
            ],
            318 => [
                'id' => 319,
                'en_skill' => 'Longboarding',
                'ar_skill' => 'Longboarding',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:27',
                'updated_at' => '2021-03-02 15:52:27'
            ],
            319 => [
                'id' => 320,
                'en_skill' => 'Martial arts',
                'ar_skill' => 'Martial arts',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:27',
                'updated_at' => '2021-03-02 15:52:27'
            ],
            320 => [
                'id' => 321,
                'en_skill' => 'Metal detecting ',
                'ar_skill' => 'Metal detecting ',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:27',
                'updated_at' => '2021-03-02 15:52:27'
            ],
            321 => [
                'id' => 322,
                'en_skill' => 'Motorcycling',
                'ar_skill' => 'Motorcycling',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:28',
                'updated_at' => '2021-03-02 15:52:28'
            ],
            322 => [
                'id' => 323,
                'en_skill' => 'Meteorology',
                'ar_skill' => 'Meteorology',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:28',
                'updated_at' => '2021-03-02 15:52:28'
            ],
            323 => [
                'id' => 324,
                'en_skill' => 'Motor sports ',
                'ar_skill' => 'Motor sports ',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:28',
                'updated_at' => '2021-03-02 15:52:28'
            ],
            324 => [
                'id' => 325,
                'en_skill' => 'Mountain biking   ',
                'ar_skill' => 'Mountain biking   ',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:28',
                'updated_at' => '2021-03-02 15:52:28'
            ],
            325 => [
                'id' => 326,
                'en_skill' => 'Mountaineering',
                'ar_skill' => 'Mountaineering',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:28',
                'updated_at' => '2021-03-02 15:52:28'
            ],
            326 => [
                'id' => 327,
                'en_skill' => 'Museum visiting',
                'ar_skill' => 'Museum visiting',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:28',
                'updated_at' => '2021-03-02 15:52:28'
            ],
            327 => [
                'id' => 328,
                'en_skill' => 'Mushroom hunting/mycology',
                'ar_skill' => 'Mushroom hunting/mycology',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:29',
                'updated_at' => '2021-03-02 15:52:29'
            ],
            328 => [
                'id' => 329,
                'en_skill' => 'Netball',
                'ar_skill' => 'Netball',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:29',
                'updated_at' => '2021-03-02 15:52:29'
            ],
            329 => [
                'id' => 330,
                'en_skill' => 'Noodling',
                'ar_skill' => 'Noodling',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:29',
                'updated_at' => '2021-03-02 15:52:29'
            ],
            330 => [
                'id' => 331,
                'en_skill' => 'Nordic skating',
                'ar_skill' => 'Nordic skating',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:29',
                'updated_at' => '2021-03-02 15:52:29'
            ],
            331 => [
                'id' => 332,
                'en_skill' => 'Orienteering',
                'ar_skill' => 'Orienteering',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:29',
                'updated_at' => '2021-03-02 15:52:29'
            ],
            332 => [
                'id' => 333,
                'en_skill' => 'Paintball',
                'ar_skill' => 'Paintball',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:30',
                'updated_at' => '2021-03-02 15:52:30'
            ],
            333 => [
                'id' => 334,
                'en_skill' => 'Paragliding',
                'ar_skill' => 'Paragliding',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:30',
                'updated_at' => '2021-03-02 15:52:30'
            ],
            334 => [
                'id' => 335,
                'en_skill' => 'Parkour',
                'ar_skill' => 'Parkour',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:30',
                'updated_at' => '2021-03-02 15:52:30'
            ],
            335 => [
                'id' => 336,
                'en_skill' => 'Photography',
                'ar_skill' => 'Photography',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:30',
                'updated_at' => '2021-03-02 15:52:30'
            ],
            336 => [
                'id' => 337,
                'en_skill' => 'Picnicking',
                'ar_skill' => 'Picnicking',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:30',
                'updated_at' => '2021-03-02 15:52:30'
            ],
            337 => [
                'id' => 338,
                'en_skill' => 'Podcast hosting',
                'ar_skill' => 'Podcast hosting',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:30',
                'updated_at' => '2021-03-02 15:52:30'
            ],
            338 => [
                'id' => 339,
                'en_skill' => 'Polo',
                'ar_skill' => 'Polo',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:31',
                'updated_at' => '2021-03-02 15:52:31'
            ],
            339 => [
                'id' => 340,
                'en_skill' => 'Public transport riding',
                'ar_skill' => 'Public transport riding',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:31',
                'updated_at' => '2021-03-02 15:52:31'
            ],
            340 => [
                'id' => 341,
                'en_skill' => 'Qigong',
                'ar_skill' => 'Qigong',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:31',
                'updated_at' => '2021-03-02 15:52:31'
            ],
            341 => [
                'id' => 342,
                'en_skill' => 'Radio-controlled model playing',
                'ar_skill' => 'Radio-controlled model playing',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:31',
                'updated_at' => '2021-03-02 15:52:31'
            ],
            342 => [
                'id' => 343,
                'en_skill' => 'Rafting',
                'ar_skill' => 'Rafting',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:31',
                'updated_at' => '2021-03-02 15:52:31'
            ],
            343 => [
                'id' => 344,
                'en_skill' => 'Railway journeys',
                'ar_skill' => 'Railway journeys',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:32',
                'updated_at' => '2021-03-02 15:52:32'
            ],
            344 => [
                'id' => 345,
                'en_skill' => 'Rappelling',
                'ar_skill' => 'Rappelling',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:32',
                'updated_at' => '2021-03-02 15:52:32'
            ],
            345 => [
                'id' => 346,
                'en_skill' => 'Renaissance fair',
                'ar_skill' => 'Renaissance fair',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:32',
                'updated_at' => '2021-03-02 15:52:32'
            ],
            346 => [
                'id' => 347,
                'en_skill' => 'Renovating',
                'ar_skill' => 'Renovating',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:32',
                'updated_at' => '2021-03-02 15:52:32'
            ],
            347 => [
                'id' => 348,
                'en_skill' => 'Road biking',
                'ar_skill' => 'Road biking',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:33',
                'updated_at' => '2021-03-02 15:52:33'
            ],
            348 => [
                'id' => 349,
                'en_skill' => 'Rock climbing  ',
                'ar_skill' => 'Rock climbing  ',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:33',
                'updated_at' => '2021-03-02 15:52:33'
            ],
            349 => [
                'id' => 350,
                'en_skill' => 'Rock painting',
                'ar_skill' => 'Rock painting',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:33',
                'updated_at' => '2021-03-02 15:52:33'
            ],
            350 => [
                'id' => 351,
                'en_skill' => 'Roller skating ',
                'ar_skill' => 'Roller skating ',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:33',
                'updated_at' => '2021-03-02 15:52:33'
            ],
            351 => [
                'id' => 352,
                'en_skill' => 'Rugby',
                'ar_skill' => 'Rugby',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:33',
                'updated_at' => '2021-03-02 15:52:33'
            ],
            352 => [
                'id' => 353,
                'en_skill' => 'Running',
                'ar_skill' => 'Running',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:34',
                'updated_at' => '2021-03-02 15:52:34'
            ],
            353 => [
                'id' => 354,
                'en_skill' => 'Sailing',
                'ar_skill' => 'Sailing',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:34',
                'updated_at' => '2021-03-02 15:52:34'
            ],
            354 => [
                'id' => 355,
                'en_skill' => 'Sand art',
                'ar_skill' => 'Sand art',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:34',
                'updated_at' => '2021-03-02 15:52:34'
            ],
            355 => [
                'id' => 356,
                'en_skill' => 'Scouting',
                'ar_skill' => 'Scouting',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:34',
                'updated_at' => '2021-03-02 15:52:34'
            ],
            356 => [
                'id' => 357,
                'en_skill' => 'Scuba diving  ',
                'ar_skill' => 'Scuba diving  ',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:35',
                'updated_at' => '2021-03-02 15:52:35'
            ],
            357 => [
                'id' => 358,
                'en_skill' => 'Sculling or rowing ',
                'ar_skill' => 'Sculling or rowing ',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:35',
                'updated_at' => '2021-03-02 15:52:35'
            ],
            358 => [
                'id' => 359,
                'en_skill' => 'Shooting',
                'ar_skill' => 'Shooting',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:35',
                'updated_at' => '2021-03-02 15:52:35'
            ],
            359 => [
                'id' => 360,
                'en_skill' => 'Shopping',
                'ar_skill' => 'Shopping',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:35',
                'updated_at' => '2021-03-02 15:52:35'
            ],
            360 => [
                'id' => 361,
                'en_skill' => 'Shuffleboard',
                'ar_skill' => 'Shuffleboard',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:35',
                'updated_at' => '2021-03-02 15:52:35'
            ],
            361 => [
                'id' => 362,
                'en_skill' => 'Skateboarding',
                'ar_skill' => 'Skateboarding',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:35',
                'updated_at' => '2021-03-02 15:52:35'
            ],
            362 => [
                'id' => 363,
                'en_skill' => 'Skiing',
                'ar_skill' => 'Skiing',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:36',
                'updated_at' => '2021-03-02 15:52:36'
            ],
            363 => [
                'id' => 364,
                'en_skill' => 'Skimboarding',
                'ar_skill' => 'Skimboarding',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:36',
                'updated_at' => '2021-03-02 15:52:36'
            ],
            364 => [
                'id' => 365,
                'en_skill' => 'Skydiving',
                'ar_skill' => 'Skydiving',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:36',
                'updated_at' => '2021-03-02 15:52:36'
            ],
            365 => [
                'id' => 366,
                'en_skill' => 'Slacklining',
                'ar_skill' => 'Slacklining',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:36',
                'updated_at' => '2021-03-02 15:52:36'
            ],
            366 => [
                'id' => 367,
                'en_skill' => 'Sledding',
                'ar_skill' => 'Sledding',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:36',
                'updated_at' => '2021-03-02 15:52:36'
            ],
            367 => [
                'id' => 368,
                'en_skill' => 'Snorkeling',
                'ar_skill' => 'Snorkeling',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:36',
                'updated_at' => '2021-03-02 15:52:36'
            ],
            368 => [
                'id' => 369,
                'en_skill' => 'Snowboarding',
                'ar_skill' => 'Snowboarding',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:37',
                'updated_at' => '2021-03-02 15:52:37'
            ],
            369 => [
                'id' => 370,
                'en_skill' => 'Snowmobiling',
                'ar_skill' => 'Snowmobiling',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:37',
                'updated_at' => '2021-03-02 15:52:37'
            ],
            370 => [
                'id' => 371,
                'en_skill' => 'Snowshoeing',
                'ar_skill' => 'Snowshoeing',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:37',
                'updated_at' => '2021-03-02 15:52:37'
            ],
            371 => [
                'id' => 372,
                'en_skill' => 'Soccer',
                'ar_skill' => 'Soccer',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:37',
                'updated_at' => '2021-03-02 15:52:37'
            ],
            372 => [
                'id' => 373,
                'en_skill' => 'Stone skipping',
                'ar_skill' => 'Stone skipping',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:37',
                'updated_at' => '2021-03-02 15:52:37'
            ],
            373 => [
                'id' => 374,
                'en_skill' => 'Storm chasing',
                'ar_skill' => 'Storm chasing',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:38',
                'updated_at' => '2021-03-02 15:52:38'
            ],
            374 => [
                'id' => 375,
                'en_skill' => 'Sun bathing',
                'ar_skill' => 'Sun bathing',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:38',
                'updated_at' => '2021-03-02 15:52:38'
            ],
            375 => [
                'id' => 376,
                'en_skill' => 'Surfing',
                'ar_skill' => 'Surfing',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:38',
                'updated_at' => '2021-03-02 15:52:38'
            ],
            376 => [
                'id' => 377,
                'en_skill' => 'Survivalism',
                'ar_skill' => 'Survivalism',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:38',
                'updated_at' => '2021-03-02 15:52:38'
            ],
            377 => [
                'id' => 378,
                'en_skill' => 'Swimming',
                'ar_skill' => 'Swimming',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:38',
                'updated_at' => '2021-03-02 15:52:38'
            ],
            378 => [
                'id' => 379,
                'en_skill' => 'Taekwondo',
                'ar_skill' => 'Taekwondo',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:38',
                'updated_at' => '2021-03-02 15:52:38'
            ],
            379 => [
                'id' => 380,
                'en_skill' => 'Tai chi  ',
                'ar_skill' => 'Tai chi  ',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:39',
                'updated_at' => '2021-03-02 15:52:39'
            ],
            380 => [
                'id' => 381,
                'en_skill' => 'Tennis',
                'ar_skill' => 'Tennis',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:39',
                'updated_at' => '2021-03-02 15:52:39'
            ],
            381 => [
                'id' => 382,
                'en_skill' => 'Thru-hiking',
                'ar_skill' => 'Thru-hiking',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:39',
                'updated_at' => '2021-03-02 15:52:39'
            ],
            382 => [
                'id' => 383,
                'en_skill' => 'Topiary',
                'ar_skill' => 'Topiary',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:39',
                'updated_at' => '2021-03-02 15:52:39'
            ],
            383 => [
                'id' => 384,
                'en_skill' => 'Tourism',
                'ar_skill' => 'Tourism',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:39',
                'updated_at' => '2021-03-02 15:52:39'
            ],
            384 => [
                'id' => 385,
                'en_skill' => 'Trade fair visiting',
                'ar_skill' => 'Trade fair visiting',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:39',
                'updated_at' => '2021-03-02 15:52:39'
            ],
            385 => [
                'id' => 386,
                'en_skill' => 'Travel',
                'ar_skill' => 'Travel',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:40',
                'updated_at' => '2021-03-02 15:52:40'
            ],
            386 => [
                'id' => 387,
                'en_skill' => 'Urban exploration',
                'ar_skill' => 'Urban exploration',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:40',
                'updated_at' => '2021-03-02 15:52:40'
            ],
            387 => [
                'id' => 388,
                'en_skill' => 'Vacation',
                'ar_skill' => 'Vacation',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:40',
                'updated_at' => '2021-03-02 15:52:40'
            ],
            388 => [
                'id' => 389,
                'en_skill' => 'Vegetable farming',
                'ar_skill' => 'Vegetable farming',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:40',
                'updated_at' => '2021-03-02 15:52:40'
            ],
            389 => [
                'id' => 390,
                'en_skill' => 'Vehicle restoration ',
                'ar_skill' => 'Vehicle restoration ',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:40',
                'updated_at' => '2021-03-02 15:52:40'
            ],
            390 => [
                'id' => 391,
                'en_skill' => 'Videography',
                'ar_skill' => 'Videography',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:41',
                'updated_at' => '2021-03-02 15:52:41'
            ],
            391 => [
                'id' => 392,
                'en_skill' => 'Volunteering',
                'ar_skill' => 'Volunteering',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:41',
                'updated_at' => '2021-03-02 15:52:41'
            ],
            392 => [
                'id' => 393,
                'en_skill' => 'Walking',
                'ar_skill' => 'Walking',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:41',
                'updated_at' => '2021-03-02 15:52:41'
            ],
            393 => [
                'id' => 394,
                'en_skill' => 'Water sports  ',
                'ar_skill' => 'Water sports  ',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:41',
                'updated_at' => '2021-03-02 15:52:41'
            ],
            394 => [
                'id' => 395,
                'en_skill' => 'Zoo visiting',
                'ar_skill' => 'Zoo visiting',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:41',
                'updated_at' => '2021-03-02 15:52:41'
            ],
            395 => [
                'id' => 396,
                'en_skill' => 'Educational hobbies  edit ',
                'ar_skill' => 'Educational hobbies  edit ',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:42',
                'updated_at' => '2021-03-02 15:52:42'
            ],
            396 => [
                'id' => 397,
                'en_skill' => 'Archaeology',
                'ar_skill' => 'Archaeology',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:42',
                'updated_at' => '2021-03-02 15:52:42'
            ],
            397 => [
                'id' => 398,
                'en_skill' => 'Astronomy',
                'ar_skill' => 'Astronomy',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:42',
                'updated_at' => '2021-03-02 15:52:42'
            ],
            398 => [
                'id' => 399,
                'en_skill' => 'Biology',
                'ar_skill' => 'Biology',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:42',
                'updated_at' => '2021-03-02 15:52:42'
            ],
            399 => [
                'id' => 400,
                'en_skill' => 'Chemistry',
                'ar_skill' => 'Chemistry',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:42',
                'updated_at' => '2021-03-02 15:52:42'
            ],
            400 => [
                'id' => 401,
                'en_skill' => 'Electrochemistry',
                'ar_skill' => 'Electrochemistry',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:43',
                'updated_at' => '2021-03-02 15:52:43'
            ],
            401 => [
                'id' => 402,
                'en_skill' => 'Geography',
                'ar_skill' => 'Geography',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:43',
                'updated_at' => '2021-03-02 15:52:43'
            ],
            402 => [
                'id' => 403,
                'en_skill' => 'History',
                'ar_skill' => 'History',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:43',
                'updated_at' => '2021-03-02 15:52:43'
            ],
            403 => [
                'id' => 404,
                'en_skill' => 'Mathematics',
                'ar_skill' => 'Mathematics',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:43',
                'updated_at' => '2021-03-02 15:52:43'
            ],
            404 => [
                'id' => 405,
                'en_skill' => 'Medical science',
                'ar_skill' => 'Medical science',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:43',
                'updated_at' => '2021-03-02 15:52:43'
            ],
            405 => [
                'id' => 406,
                'en_skill' => 'Microbiology',
                'ar_skill' => 'Microbiology',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:43',
                'updated_at' => '2021-03-02 15:52:43'
            ],
            406 => [
                'id' => 407,
                'en_skill' => 'Philosophy',
                'ar_skill' => 'Philosophy',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:44',
                'updated_at' => '2021-03-02 15:52:44'
            ],
            407 => [
                'id' => 408,
                'en_skill' => 'Physics',
                'ar_skill' => 'Physics',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:44',
                'updated_at' => '2021-03-02 15:52:44'
            ],
            408 => [
                'id' => 409,
                'en_skill' => 'Psychology',
                'ar_skill' => 'Psychology',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:44',
                'updated_at' => '2021-03-02 15:52:44'
            ],
            409 => [
                'id' => 410,
                'en_skill' => 'Railway studies',
                'ar_skill' => 'Railway studies',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:44',
                'updated_at' => '2021-03-02 15:52:44'
            ],
            410 => [
                'id' => 411,
                'en_skill' => 'Research',
                'ar_skill' => 'Research',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:44',
                'updated_at' => '2021-03-02 15:52:44'
            ],
            411 => [
                'id' => 412,
                'en_skill' => 'Science and technology studies',
                'ar_skill' => 'Science and technology studies',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:45',
                'updated_at' => '2021-03-02 15:52:45'
            ],
            412 => [
                'id' => 413,
                'en_skill' => 'Social studies',
                'ar_skill' => 'Social studies',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:45',
                'updated_at' => '2021-03-02 15:52:45'
            ],
            413 => [
                'id' => 414,
                'en_skill' => 'Sports science',
                'ar_skill' => 'Sports science',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:45',
                'updated_at' => '2021-03-02 15:52:45'
            ],
            414 => [
                'id' => 415,
                'en_skill' => 'Teaching',
                'ar_skill' => 'Teaching',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:45',
                'updated_at' => '2021-03-02 15:52:45'
            ],
            415 => [
                'id' => 416,
                'en_skill' => 'Web design',
                'ar_skill' => 'Web design',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:46',
                'updated_at' => '2021-03-02 15:52:46'
            ],
            416 => [
                'id' => 417,
                'en_skill' => 'Collection hobbies  edit  ',
                'ar_skill' => 'Collection hobbies  edit  ',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:46',
                'updated_at' => '2021-03-02 15:52:46'
            ],
            417 => [
                'id' => 418,
                'en_skill' => 'Indoors  edit ',
                'ar_skill' => 'Indoors  edit ',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:46',
                'updated_at' => '2021-03-02 15:52:46'
            ],
            418 => [
                'id' => 419,
                'en_skill' => 'Action figure',
                'ar_skill' => 'Action figure',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:46',
                'updated_at' => '2021-03-02 15:52:46'
            ],
            419 => [
                'id' => 420,
                'en_skill' => 'Antiquing',
                'ar_skill' => 'Antiquing',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:46',
                'updated_at' => '2021-03-02 15:52:46'
            ],
            420 => [
                'id' => 421,
                'en_skill' => 'Ant-keeping',
                'ar_skill' => 'Ant-keeping',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:46',
                'updated_at' => '2021-03-02 15:52:46'
            ],
            421 => [
                'id' => 422,
                'en_skill' => 'Art collecting  ',
                'ar_skill' => 'Art collecting  ',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:47',
                'updated_at' => '2021-03-02 15:52:47'
            ],
            422 => [
                'id' => 423,
                'en_skill' => 'Book collecting ',
                'ar_skill' => 'Book collecting ',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:47',
                'updated_at' => '2021-03-02 15:52:47'
            ],
            423 => [
                'id' => 424,
                'en_skill' => 'Button collecting',
                'ar_skill' => 'Button collecting',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:47',
                'updated_at' => '2021-03-02 15:52:47'
            ],
            424 => [
                'id' => 425,
                'en_skill' => 'Cartophily (card collecting)  ',
                'ar_skill' => 'Cartophily (card collecting)  ',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:47',
                'updated_at' => '2021-03-02 15:52:47'
            ],
            425 => [
                'id' => 426,
                'en_skill' => 'Coin collecting  ',
                'ar_skill' => 'Coin collecting  ',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:48',
                'updated_at' => '2021-03-02 15:52:48'
            ],
            426 => [
                'id' => 427,
                'en_skill' => 'Comic book collecting ',
                'ar_skill' => 'Comic book collecting ',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:48',
                'updated_at' => '2021-03-02 15:52:48'
            ],
            427 => [
                'id' => 428,
                'en_skill' => 'Compact discs',
                'ar_skill' => 'Compact discs',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:48',
                'updated_at' => '2021-03-02 15:52:48'
            ],
            428 => [
                'id' => 429,
                'en_skill' => 'Credit card',
                'ar_skill' => 'Credit card',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:48',
                'updated_at' => '2021-03-02 15:52:48'
            ],
            429 => [
                'id' => 430,
                'en_skill' => 'Deltiology (postcard collecting) ',
                'ar_skill' => 'Deltiology (postcard collecting) ',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:48',
                'updated_at' => '2021-03-02 15:52:48'
            ],
            430 => [
                'id' => 431,
                'en_skill' => 'Die-cast toy',
                'ar_skill' => 'Die-cast toy',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:48',
                'updated_at' => '2021-03-02 15:52:48'
            ],
            431 => [
                'id' => 432,
                'en_skill' => 'Digital hoarding',
                'ar_skill' => 'Digital hoarding',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:49',
                'updated_at' => '2021-03-02 15:52:49'
            ],
            432 => [
                'id' => 433,
                'en_skill' => 'Dolls',
                'ar_skill' => 'Dolls',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:49',
                'updated_at' => '2021-03-02 15:52:49'
            ],
            433 => [
                'id' => 434,
                'en_skill' => 'Element collecting ',
                'ar_skill' => 'Element collecting ',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:49',
                'updated_at' => '2021-03-02 15:52:49'
            ],
            434 => [
                'id' => 435,
                'en_skill' => 'Ephemera collecting',
                'ar_skill' => 'Ephemera collecting',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:49',
                'updated_at' => '2021-03-02 15:52:49'
            ],
            435 => [
                'id' => 436,
                'en_skill' => 'Films',
                'ar_skill' => 'Films',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:50',
                'updated_at' => '2021-03-02 15:52:50'
            ],
            436 => [
                'id' => 437,
                'en_skill' => 'Fingerprint collecting',
                'ar_skill' => 'Fingerprint collecting',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:50',
                'updated_at' => '2021-03-02 15:52:50'
            ],
            437 => [
                'id' => 438,
                'en_skill' => 'Fusilately phonecard collecting',
                'ar_skill' => 'Fusilately phonecard collecting',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:50',
                'updated_at' => '2021-03-02 15:52:50'
            ],
            438 => [
                'id' => 439,
                'en_skill' => 'Knife collecting',
                'ar_skill' => 'Knife collecting',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:50',
                'updated_at' => '2021-03-02 15:52:50'
            ],
            439 => [
                'id' => 440,
                'en_skill' => 'Lotology lottery ticket collecting',
                'ar_skill' => 'Lotology lottery ticket collecting',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:50',
                'updated_at' => '2021-03-02 15:52:50'
            ],
            440 => [
                'id' => 441,
                'en_skill' => 'Movie memorabilia collecting   ',
                'ar_skill' => 'Movie memorabilia collecting   ',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:50',
                'updated_at' => '2021-03-02 15:52:50'
            ],
            441 => [
                'id' => 442,
                'en_skill' => 'Perfume',
                'ar_skill' => 'Perfume',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:51',
                'updated_at' => '2021-03-02 15:52:51'
            ],
            442 => [
                'id' => 443,
                'en_skill' => 'Philately',
                'ar_skill' => 'Philately',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:51',
                'updated_at' => '2021-03-02 15:52:51'
            ],
            443 => [
                'id' => 444,
                'en_skill' => 'Phillumeny',
                'ar_skill' => 'Phillumeny',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:51',
                'updated_at' => '2021-03-02 15:52:51'
            ],
            444 => [
                'id' => 445,
                'en_skill' => 'Pin lapel',
                'ar_skill' => 'Pin lapel',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:51',
                'updated_at' => '2021-03-02 15:52:51'
            ],
            445 => [
                'id' => 446,
                'en_skill' => 'Radio-controlled model collecting',
                'ar_skill' => 'Radio-controlled model collecting',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:52',
                'updated_at' => '2021-03-02 15:52:52'
            ],
            446 => [
                'id' => 447,
                'en_skill' => 'Rail transport modelling',
                'ar_skill' => 'Rail transport modelling',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:52',
                'updated_at' => '2021-03-02 15:52:52'
            ],
            447 => [
                'id' => 448,
                'en_skill' => 'Record collecting  ',
                'ar_skill' => 'Record collecting  ',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:52',
                'updated_at' => '2021-03-02 15:52:52'
            ],
            448 => [
                'id' => 449,
                'en_skill' => 'Rock tumbling',
                'ar_skill' => 'Rock tumbling',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:52',
                'updated_at' => '2021-03-02 15:52:52'
            ],
            449 => [
                'id' => 450,
                'en_skill' => 'Scutelliphily',
                'ar_skill' => 'Scutelliphily',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:52',
                'updated_at' => '2021-03-02 15:52:52'
            ],
            450 => [
                'id' => 451,
                'en_skill' => 'Shoes',
                'ar_skill' => 'Shoes',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:53',
                'updated_at' => '2021-03-02 15:52:53'
            ],
            451 => [
                'id' => 452,
                'en_skill' => 'Slot car',
                'ar_skill' => 'Slot car',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:53',
                'updated_at' => '2021-03-02 15:52:53'
            ],
            452 => [
                'id' => 453,
                'en_skill' => 'Sports memorabilia',
                'ar_skill' => 'Sports memorabilia',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:53',
                'updated_at' => '2021-03-02 15:52:53'
            ],
            453 => [
                'id' => 454,
                'en_skill' => 'Stamp collecting  ',
                'ar_skill' => 'Stamp collecting  ',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:53',
                'updated_at' => '2021-03-02 15:52:53'
            ],
            454 => [
                'id' => 455,
                'en_skill' => 'Stuffed toy collecting',
                'ar_skill' => 'Stuffed toy collecting',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:53',
                'updated_at' => '2021-03-02 15:52:53'
            ],
            455 => [
                'id' => 456,
                'en_skill' => 'Tea bag collecting',
                'ar_skill' => 'Tea bag collecting',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:54',
                'updated_at' => '2021-03-02 15:52:54'
            ],
            456 => [
                'id' => 457,
                'en_skill' => 'Ticket collecting',
                'ar_skill' => 'Ticket collecting',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:54',
                'updated_at' => '2021-03-02 15:52:54'
            ],
            457 => [
                'id' => 458,
                'en_skill' => 'Toys',
                'ar_skill' => 'Toys',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:54',
                'updated_at' => '2021-03-02 15:52:54'
            ],
            458 => [
                'id' => 459,
                'en_skill' => 'Transit map collecting',
                'ar_skill' => 'Transit map collecting',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:54',
                'updated_at' => '2021-03-02 15:52:54'
            ],
            459 => [
                'id' => 460,
                'en_skill' => 'Video game collecting ',
                'ar_skill' => 'Video game collecting ',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:54',
                'updated_at' => '2021-03-02 15:52:54'
            ],
            460 => [
                'id' => 461,
                'en_skill' => 'Vintage cars ',
                'ar_skill' => 'Vintage cars ',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:55',
                'updated_at' => '2021-03-02 15:52:55'
            ],
            461 => [
                'id' => 462,
                'en_skill' => 'Vintage clothing',
                'ar_skill' => 'Vintage clothing',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:55',
                'updated_at' => '2021-03-02 15:52:55'
            ],
            462 => [
                'id' => 463,
                'en_skill' => 'Vinyl Records',
                'ar_skill' => 'Vinyl Records',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:55',
                'updated_at' => '2021-03-02 15:52:55'
            ],
            463 => [
                'id' => 464,
                'en_skill' => 'Outdoors  edit ',
                'ar_skill' => 'Outdoors  edit ',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:55',
                'updated_at' => '2021-03-02 15:52:55'
            ],
            464 => [
                'id' => 465,
                'en_skill' => 'Antiquities',
                'ar_skill' => 'Antiquities',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:55',
                'updated_at' => '2021-03-02 15:52:55'
            ],
            465 => [
                'id' => 466,
                'en_skill' => 'Auto audiophilia ',
                'ar_skill' => 'Auto audiophilia ',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:56',
                'updated_at' => '2021-03-02 15:52:56'
            ],
            466 => [
                'id' => 467,
                'en_skill' => 'Flower collecting and pressing ',
                'ar_skill' => 'Flower collecting and pressing ',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:56',
                'updated_at' => '2021-03-02 15:52:56'
            ],
            467 => [
                'id' => 468,
                'en_skill' => 'Fossil hunting',
                'ar_skill' => 'Fossil hunting',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:56',
                'updated_at' => '2021-03-02 15:52:56'
            ],
            468 => [
                'id' => 469,
                'en_skill' => 'Insect collecting',
                'ar_skill' => 'Insect collecting',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:56',
                'updated_at' => '2021-03-02 15:52:56'
            ],
            469 => [
                'id' => 470,
                'en_skill' => 'Leaves',
                'ar_skill' => 'Leaves',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:56',
                'updated_at' => '2021-03-02 15:52:56'
            ],
            470 => [
                'id' => 471,
                'en_skill' => 'Magnet fishing',
                'ar_skill' => 'Magnet fishing',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:57',
                'updated_at' => '2021-03-02 15:52:57'
            ],
            471 => [
                'id' => 472,
                'en_skill' => 'Metal detecting ',
                'ar_skill' => 'Metal detecting ',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:57',
                'updated_at' => '2021-03-02 15:52:57'
            ],
            472 => [
                'id' => 473,
                'en_skill' => 'Mineral collecting  ',
                'ar_skill' => 'Mineral collecting  ',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:57',
                'updated_at' => '2021-03-02 15:52:57'
            ],
            473 => [
                'id' => 474,
                'en_skill' => 'Rock balancing',
                'ar_skill' => 'Rock balancing',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:57',
                'updated_at' => '2021-03-02 15:52:57'
            ],
            474 => [
                'id' => 475,
                'en_skill' => 'Sea glass collecting ',
                'ar_skill' => 'Sea glass collecting ',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:57',
                'updated_at' => '2021-03-02 15:52:57'
            ],
            475 => [
                'id' => 476,
                'en_skill' => 'Seashell collecting ',
                'ar_skill' => 'Seashell collecting ',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:58',
                'updated_at' => '2021-03-02 15:52:58'
            ],
            476 => [
                'id' => 477,
                'en_skill' => 'Stone collecting ',
                'ar_skill' => 'Stone collecting ',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:58',
                'updated_at' => '2021-03-02 15:52:58'
            ],
            477 => [
                'id' => 478,
                'en_skill' => 'Competitive hobbies  edit',
                'ar_skill' => 'Competitive hobbies  edit',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:58',
                'updated_at' => '2021-03-02 15:52:58'
            ],
            478 => [
                'id' => 479,
                'en_skill' => 'Indoors  edit',
                'ar_skill' => 'Indoors  edit',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:58',
                'updated_at' => '2021-03-02 15:52:58'
            ],
            479 => [
                'id' => 480,
                'en_skill' => 'Animal fancy  ',
                'ar_skill' => 'Animal fancy  ',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:58',
                'updated_at' => '2021-03-02 15:52:58'
            ],
            480 => [
                'id' => 481,
                'en_skill' => 'Axe throwing',
                'ar_skill' => 'Axe throwing',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:58',
                'updated_at' => '2021-03-02 15:52:58'
            ],
            481 => [
                'id' => 482,
                'en_skill' => 'Backgammon',
                'ar_skill' => 'Backgammon',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:59',
                'updated_at' => '2021-03-02 15:52:59'
            ],
            482 => [
                'id' => 483,
                'en_skill' => 'Badminton',
                'ar_skill' => 'Badminton',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:59',
                'updated_at' => '2021-03-02 15:52:59'
            ],
            483 => [
                'id' => 484,
                'en_skill' => 'Baton twirling',
                'ar_skill' => 'Baton twirling',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:59',
                'updated_at' => '2021-03-02 15:52:59'
            ],
            484 => [
                'id' => 485,
                'en_skill' => 'Beauty pageants',
                'ar_skill' => 'Beauty pageants',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:59',
                'updated_at' => '2021-03-02 15:52:59'
            ],
            485 => [
                'id' => 486,
                'en_skill' => 'Billiards',
                'ar_skill' => 'Billiards',
                'status' => 1,
                'created_at' => '2021-03-02 15:52:59',
                'updated_at' => '2021-03-02 15:52:59'
            ],
            486 => [
                'id' => 487,
                'en_skill' => 'Bowling',
                'ar_skill' => 'Bowling',
                'status' => 1,
                'created_at' => '2021-03-02 15:53:00',
                'updated_at' => '2021-03-02 15:53:00'
            ],
            487 => [
                'id' => 488,
                'en_skill' => 'Boxing',
                'ar_skill' => 'Boxing',
                'status' => 1,
                'created_at' => '2021-03-02 15:53:00',
                'updated_at' => '2021-03-02 15:53:00'
            ],
            488 => [
                'id' => 489,
                'en_skill' => 'Bridge',
                'ar_skill' => 'Bridge',
                'status' => 1,
                'created_at' => '2021-03-02 15:53:00',
                'updated_at' => '2021-03-02 15:53:00'
            ],
            489 => [
                'id' => 490,
                'en_skill' => 'Checkers draughts',
                'ar_skill' => 'Checkers draughts',
                'status' => 1,
                'created_at' => '2021-03-02 15:53:00',
                'updated_at' => '2021-03-02 15:53:00'
            ],
            490 => [
                'id' => 491,
                'en_skill' => 'Cheerleading',
                'ar_skill' => 'Cheerleading',
                'status' => 1,
                'created_at' => '2021-03-02 15:53:00',
                'updated_at' => '2021-03-02 15:53:00'
            ],
            491 => [
                'id' => 492,
                'en_skill' => 'Chess',
                'ar_skill' => 'Chess',
                'status' => 1,
                'created_at' => '2021-03-02 15:53:00',
                'updated_at' => '2021-03-02 15:53:00'
            ],
            492 => [
                'id' => 493,
                'en_skill' => 'Color guard',
                'ar_skill' => 'Color guard',
                'status' => 1,
                'created_at' => '2021-03-02 15:53:00',
                'updated_at' => '2021-03-02 15:53:00'
            ],
            493 => [
                'id' => 494,
                'en_skill' => 'Cribbage',
                'ar_skill' => 'Cribbage',
                'status' => 1,
                'created_at' => '2021-03-02 15:53:01',
                'updated_at' => '2021-03-02 15:53:01'
            ],
            494 => [
                'id' => 495,
                'en_skill' => 'Curling',
                'ar_skill' => 'Curling',
                'status' => 1,
                'created_at' => '2021-03-02 15:53:01',
                'updated_at' => '2021-03-02 15:53:01'
            ],
            495 => [
                'id' => 496,
                'en_skill' => 'Dancing',
                'ar_skill' => 'Dancing',
                'status' => 1,
                'created_at' => '2021-03-02 15:53:01',
                'updated_at' => '2021-03-02 15:53:01'
            ],
            496 => [
                'id' => 497,
                'en_skill' => 'Darts',
                'ar_skill' => 'Darts',
                'status' => 1,
                'created_at' => '2021-03-02 15:53:01',
                'updated_at' => '2021-03-02 15:53:01'
            ],
            497 => [
                'id' => 498,
                'en_skill' => 'Debate',
                'ar_skill' => 'Debate',
                'status' => 1,
                'created_at' => '2021-03-02 15:53:01',
                'updated_at' => '2021-03-02 15:53:01'
            ],
            498 => [
                'id' => 499,
                'en_skill' => 'Dominoes',
                'ar_skill' => 'Dominoes',
                'status' => 1,
                'created_at' => '2021-03-02 15:53:02',
                'updated_at' => '2021-03-02 15:53:02'
            ],
            499 => [
                'id' => 500,
                'en_skill' => 'Eating',
                'ar_skill' => 'Eating',
                'status' => 1,
                'created_at' => '2021-03-02 15:53:02',
                'updated_at' => '2021-03-02 15:53:02'
            ]
        ]);
        \DB::table('skills')->insert([
            0 => [
                'id' => 501,
                'en_skill' => 'Esports',
                'ar_skill' => 'Esports',
                'status' => 1,
                'created_at' => '2021-03-02 15:53:02',
                'updated_at' => '2021-03-02 15:53:02'
            ],
            1 => [
                'id' => 502,
                'en_skill' => 'Fencing',
                'ar_skill' => 'Fencing',
                'status' => 1,
                'created_at' => '2021-03-02 15:53:02',
                'updated_at' => '2021-03-02 15:53:02'
            ],
            2 => [
                'id' => 503,
                'en_skill' => 'Go',
                'ar_skill' => 'Go',
                'status' => 1,
                'created_at' => '2021-03-02 15:53:02',
                'updated_at' => '2021-03-02 15:53:02'
            ],
            3 => [
                'id' => 504,
                'en_skill' => 'Gymnastics',
                'ar_skill' => 'Gymnastics',
                'status' => 1,
                'created_at' => '2021-03-02 15:53:03',
                'updated_at' => '2021-03-02 15:53:03'
            ],
            4 => [
                'id' => 505,
                'en_skill' => 'Ice hockey',
                'ar_skill' => 'Ice hockey',
                'status' => 1,
                'created_at' => '2021-03-02 15:53:03',
                'updated_at' => '2021-03-02 15:53:03'
            ],
            5 => [
                'id' => 506,
                'en_skill' => 'Ice skating ',
                'ar_skill' => 'Ice skating ',
                'status' => 1,
                'created_at' => '2021-03-02 15:53:03',
                'updated_at' => '2021-03-02 15:53:03'
            ],
            6 => [
                'id' => 507,
                'en_skill' => 'Judo',
                'ar_skill' => 'Judo',
                'status' => 1,
                'created_at' => '2021-03-02 15:53:03',
                'updated_at' => '2021-03-02 15:53:03'
            ],
            7 => [
                'id' => 508,
                'en_skill' => 'Jujitsu',
                'ar_skill' => 'Jujitsu',
                'status' => 1,
                'created_at' => '2021-03-02 15:53:04',
                'updated_at' => '2021-03-02 15:53:04'
            ],
            8 => [
                'id' => 509,
                'en_skill' => 'Kabaddi',
                'ar_skill' => 'Kabaddi',
                'status' => 1,
                'created_at' => '2021-03-02 15:53:04',
                'updated_at' => '2021-03-02 15:53:04'
            ],
            9 => [
                'id' => 510,
                'en_skill' => 'Knowledge/word games',
                'ar_skill' => 'Knowledge/word games',
                'status' => 1,
                'created_at' => '2021-03-02 15:53:04',
                'updated_at' => '2021-03-02 15:53:04'
            ],
            10 => [
                'id' => 511,
                'en_skill' => 'Laser tag',
                'ar_skill' => 'Laser tag',
                'status' => 1,
                'created_at' => '2021-03-02 15:53:04',
                'updated_at' => '2021-03-02 15:53:04'
            ],
            11 => [
                'id' => 512,
                'en_skill' => 'Longboarding',
                'ar_skill' => 'Longboarding',
                'status' => 1,
                'created_at' => '2021-03-02 15:53:04',
                'updated_at' => '2021-03-02 15:53:04'
            ],
            12 => [
                'id' => 513,
                'en_skill' => 'Magic',
                'ar_skill' => 'Magic',
                'status' => 1,
                'created_at' => '2021-03-02 15:53:05',
                'updated_at' => '2021-03-02 15:53:05'
            ],
            13 => [
                'id' => 514,
                'en_skill' => 'Mahjong',
                'ar_skill' => 'Mahjong',
                'status' => 1,
                'created_at' => '2021-03-02 15:53:05',
                'updated_at' => '2021-03-02 15:53:05'
            ],
            14 => [
                'id' => 515,
                'en_skill' => 'Marbles',
                'ar_skill' => 'Marbles',
                'status' => 1,
                'created_at' => '2021-03-02 15:53:05',
                'updated_at' => '2021-03-02 15:53:05'
            ],
            15 => [
                'id' => 516,
                'en_skill' => 'Martial arts ',
                'ar_skill' => 'Martial arts ',
                'status' => 1,
                'created_at' => '2021-03-02 15:53:05',
                'updated_at' => '2021-03-02 15:53:05'
            ],
            16 => [
                'id' => 517,
                'en_skill' => 'Model racing',
                'ar_skill' => 'Model racing',
                'status' => 1,
                'created_at' => '2021-03-02 15:53:05',
                'updated_at' => '2021-03-02 15:53:05'
            ],
            17 => [
                'id' => 518,
                'en_skill' => 'Model United Nations',
                'ar_skill' => 'Model United Nations',
                'status' => 1,
                'created_at' => '2021-03-02 15:53:05',
                'updated_at' => '2021-03-02 15:53:05'
            ],
            18 => [
                'id' => 519,
                'en_skill' => 'Poker',
                'ar_skill' => 'Poker',
                'status' => 1,
                'created_at' => '2021-03-02 15:53:06',
                'updated_at' => '2021-03-02 15:53:06'
            ],
            19 => [
                'id' => 520,
                'en_skill' => 'Pole dancing',
                'ar_skill' => 'Pole dancing',
                'status' => 1,
                'created_at' => '2021-03-02 15:53:06',
                'updated_at' => '2021-03-02 15:53:06'
            ],
            20 => [
                'id' => 521,
                'en_skill' => 'Pool',
                'ar_skill' => 'Pool',
                'status' => 1,
                'created_at' => '2021-03-02 15:53:06',
                'updated_at' => '2021-03-02 15:53:06'
            ],
            21 => [
                'id' => 522,
                'en_skill' => 'Radio-controlled model playing',
                'ar_skill' => 'Radio-controlled model playing',
                'status' => 1,
                'created_at' => '2021-03-02 15:53:06',
                'updated_at' => '2021-03-02 15:53:06'
            ],
            22 => [
                'id' => 523,
                'en_skill' => 'Role-playing games',
                'ar_skill' => 'Role-playing games',
                'status' => 1,
                'created_at' => '2021-03-02 15:53:06',
                'updated_at' => '2021-03-02 15:53:06'
            ],
            23 => [
                'id' => 524,
                'en_skill' => 'Shogi',
                'ar_skill' => 'Shogi',
                'status' => 1,
                'created_at' => '2021-03-02 15:53:07',
                'updated_at' => '2021-03-02 15:53:07'
            ],
            24 => [
                'id' => 525,
                'en_skill' => 'Slot car racing  ',
                'ar_skill' => 'Slot car racing  ',
                'status' => 1,
                'created_at' => '2021-03-02 15:53:07',
                'updated_at' => '2021-03-02 15:53:07'
            ],
            25 => [
                'id' => 526,
                'en_skill' => 'Speedcubing',
                'ar_skill' => 'Speedcubing',
                'status' => 1,
                'created_at' => '2021-03-02 15:53:07',
                'updated_at' => '2021-03-02 15:53:07'
            ],
            26 => [
                'id' => 527,
                'en_skill' => 'Sport stacking',
                'ar_skill' => 'Sport stacking',
                'status' => 1,
                'created_at' => '2021-03-02 15:53:07',
                'updated_at' => '2021-03-02 15:53:07'
            ],
            27 => [
                'id' => 528,
                'en_skill' => 'Table football',
                'ar_skill' => 'Table football',
                'status' => 1,
                'created_at' => '2021-03-02 15:53:07',
                'updated_at' => '2021-03-02 15:53:07'
            ],
            28 => [
                'id' => 529,
                'en_skill' => 'Table tennis ',
                'ar_skill' => 'Table tennis ',
                'status' => 1,
                'created_at' => '2021-03-02 15:53:07',
                'updated_at' => '2021-03-02 15:53:07'
            ],
            29 => [
                'id' => 530,
                'en_skill' => 'Volleyball',
                'ar_skill' => 'Volleyball',
                'status' => 1,
                'created_at' => '2021-03-02 15:53:08',
                'updated_at' => '2021-03-02 15:53:08'
            ],
            30 => [
                'id' => 531,
                'en_skill' => 'VR Gaming',
                'ar_skill' => 'VR Gaming',
                'status' => 1,
                'created_at' => '2021-03-02 15:53:08',
                'updated_at' => '2021-03-02 15:53:08'
            ],
            31 => [
                'id' => 532,
                'en_skill' => 'Weightlifting',
                'ar_skill' => 'Weightlifting',
                'status' => 1,
                'created_at' => '2021-03-02 15:53:08',
                'updated_at' => '2021-03-02 15:53:08'
            ],
            32 => [
                'id' => 533,
                'en_skill' => 'Wrestling',
                'ar_skill' => 'Wrestling',
                'status' => 1,
                'created_at' => '2021-03-02 15:53:08',
                'updated_at' => '2021-03-02 15:53:08'
            ],
            33 => [
                'id' => 534,
                'en_skill' => 'Outdoors  edit  ',
                'ar_skill' => 'Outdoors  edit  ',
                'status' => 1,
                'created_at' => '2021-03-02 15:53:08',
                'updated_at' => '2021-03-02 15:53:08'
            ],
            34 => [
                'id' => 535,
                'en_skill' => 'Airsoft',
                'ar_skill' => 'Airsoft',
                'status' => 1,
                'created_at' => '2021-03-02 15:53:09',
                'updated_at' => '2021-03-02 15:53:09'
            ],
            35 => [
                'id' => 536,
                'en_skill' => 'Archery',
                'ar_skill' => 'Archery',
                'status' => 1,
                'created_at' => '2021-03-02 15:53:09',
                'updated_at' => '2021-03-02 15:53:09'
            ],
            36 => [
                'id' => 537,
                'en_skill' => 'Association football  ',
                'ar_skill' => 'Association football  ',
                'status' => 1,
                'created_at' => '2021-03-02 15:53:09',
                'updated_at' => '2021-03-02 15:53:09'
            ],
            37 => [
                'id' => 538,
                'en_skill' => 'Australian rules football ',
                'ar_skill' => 'Australian rules football ',
                'status' => 1,
                'created_at' => '2021-03-02 15:53:09',
                'updated_at' => '2021-03-02 15:53:09'
            ],
            38 => [
                'id' => 539,
                'en_skill' => 'Auto racing  ',
                'ar_skill' => 'Auto racing  ',
                'status' => 1,
                'created_at' => '2021-03-02 15:53:09',
                'updated_at' => '2021-03-02 15:53:09'
            ],
            39 => [
                'id' => 540,
                'en_skill' => 'Baseball',
                'ar_skill' => 'Baseball',
                'status' => 1,
                'created_at' => '2021-03-02 15:53:10',
                'updated_at' => '2021-03-02 15:53:10'
            ],
            40 => [
                'id' => 541,
                'en_skill' => 'Beach volleyball  ',
                'ar_skill' => 'Beach volleyball  ',
                'status' => 1,
                'created_at' => '2021-03-02 15:53:10',
                'updated_at' => '2021-03-02 15:53:10'
            ],
            41 => [
                'id' => 542,
                'en_skill' => 'Breakdancing',
                'ar_skill' => 'Breakdancing',
                'status' => 1,
                'created_at' => '2021-03-02 15:53:10',
                'updated_at' => '2021-03-02 15:53:10'
            ],
            42 => [
                'id' => 543,
                'en_skill' => 'Climbing',
                'ar_skill' => 'Climbing',
                'status' => 1,
                'created_at' => '2021-03-02 15:53:10',
                'updated_at' => '2021-03-02 15:53:10'
            ],
            43 => [
                'id' => 544,
                'en_skill' => 'Cornhole',
                'ar_skill' => 'Cornhole',
                'status' => 1,
                'created_at' => '2021-03-02 15:53:10',
                'updated_at' => '2021-03-02 15:53:10'
            ],
            44 => [
                'id' => 545,
                'en_skill' => 'Cricket',
                'ar_skill' => 'Cricket',
                'status' => 1,
                'created_at' => '2021-03-02 15:53:10',
                'updated_at' => '2021-03-02 15:53:10'
            ],
            45 => [
                'id' => 546,
                'en_skill' => 'Croquet',
                'ar_skill' => 'Croquet',
                'status' => 1,
                'created_at' => '2021-03-02 15:53:11',
                'updated_at' => '2021-03-02 15:53:11'
            ],
            46 => [
                'id' => 547,
                'en_skill' => 'Cycling',
                'ar_skill' => 'Cycling',
                'status' => 1,
                'created_at' => '2021-03-02 15:53:11',
                'updated_at' => '2021-03-02 15:53:11'
            ],
            47 => [
                'id' => 548,
                'en_skill' => 'Disc golf  ',
                'ar_skill' => 'Disc golf  ',
                'status' => 1,
                'created_at' => '2021-03-02 15:53:11',
                'updated_at' => '2021-03-02 15:53:11'
            ],
            48 => [
                'id' => 549,
                'en_skill' => 'Dog sport',
                'ar_skill' => 'Dog sport',
                'status' => 1,
                'created_at' => '2021-03-02 15:53:11',
                'updated_at' => '2021-03-02 15:53:11'
            ],
            49 => [
                'id' => 550,
                'en_skill' => 'Equestrianism',
                'ar_skill' => 'Equestrianism',
                'status' => 1,
                'created_at' => '2021-03-02 15:53:11',
                'updated_at' => '2021-03-02 15:53:11'
            ],
            50 => [
                'id' => 551,
                'en_skill' => 'Exhibition drill   ',
                'ar_skill' => 'Exhibition drill   ',
                'status' => 1,
                'created_at' => '2021-03-02 15:53:11',
                'updated_at' => '2021-03-02 15:53:11'
            ],
            51 => [
                'id' => 552,
                'en_skill' => 'Field hockey     ',
                'ar_skill' => 'Field hockey     ',
                'status' => 1,
                'created_at' => '2021-03-02 15:53:12',
                'updated_at' => '2021-03-02 15:53:12'
            ],
            52 => [
                'id' => 553,
                'en_skill' => 'Figure skating  ',
                'ar_skill' => 'Figure skating  ',
                'status' => 1,
                'created_at' => '2021-03-02 15:53:12',
                'updated_at' => '2021-03-02 15:53:12'
            ],
            53 => [
                'id' => 554,
                'en_skill' => 'Fishing',
                'ar_skill' => 'Fishing',
                'status' => 1,
                'created_at' => '2021-03-02 15:53:12',
                'updated_at' => '2021-03-02 15:53:12'
            ],
            54 => [
                'id' => 555,
                'en_skill' => 'Fitness',
                'ar_skill' => 'Fitness',
                'status' => 1,
                'created_at' => '2021-03-02 15:53:12',
                'updated_at' => '2021-03-02 15:53:12'
            ],
            55 => [
                'id' => 556,
                'en_skill' => 'Footbag',
                'ar_skill' => 'Footbag',
                'status' => 1,
                'created_at' => '2021-03-02 15:53:12',
                'updated_at' => '2021-03-02 15:53:12'
            ],
            56 => [
                'id' => 557,
                'en_skill' => 'Frisbee',
                'ar_skill' => 'Frisbee',
                'status' => 1,
                'created_at' => '2021-03-02 15:53:12',
                'updated_at' => '2021-03-02 15:53:12'
            ],
            57 => [
                'id' => 558,
                'en_skill' => 'Golfing',
                'ar_skill' => 'Golfing',
                'status' => 1,
                'created_at' => '2021-03-02 15:53:13',
                'updated_at' => '2021-03-02 15:53:13'
            ],
            58 => [
                'id' => 559,
                'en_skill' => 'Handball',
                'ar_skill' => 'Handball',
                'status' => 1,
                'created_at' => '2021-03-02 15:53:13',
                'updated_at' => '2021-03-02 15:53:13'
            ],
            59 => [
                'id' => 560,
                'en_skill' => 'Horseback riding',
                'ar_skill' => 'Horseback riding',
                'status' => 1,
                'created_at' => '2021-03-02 15:53:13',
                'updated_at' => '2021-03-02 15:53:13'
            ],
            60 => [
                'id' => 561,
                'en_skill' => 'Horsemanship',
                'ar_skill' => 'Horsemanship',
                'status' => 1,
                'created_at' => '2021-03-02 15:53:13',
                'updated_at' => '2021-03-02 15:53:13'
            ],
            61 => [
                'id' => 562,
                'en_skill' => 'Horseshoes',
                'ar_skill' => 'Horseshoes',
                'status' => 1,
                'created_at' => '2021-03-02 15:53:13',
                'updated_at' => '2021-03-02 15:53:13'
            ],
            62 => [
                'id' => 563,
                'en_skill' => 'Iceboat racing',
                'ar_skill' => 'Iceboat racing',
                'status' => 1,
                'created_at' => '2021-03-02 15:53:13',
                'updated_at' => '2021-03-02 15:53:13'
            ],
            63 => [
                'id' => 564,
                'en_skill' => 'Jukskei',
                'ar_skill' => 'Jukskei',
                'status' => 1,
                'created_at' => '2021-03-02 15:53:13',
                'updated_at' => '2021-03-02 15:53:13'
            ],
            64 => [
                'id' => 565,
                'en_skill' => 'Kart racing',
                'ar_skill' => 'Kart racing',
                'status' => 1,
                'created_at' => '2021-03-02 15:53:14',
                'updated_at' => '2021-03-02 15:53:14'
            ],
            65 => [
                'id' => 566,
                'en_skill' => 'Knife throwing',
                'ar_skill' => 'Knife throwing',
                'status' => 1,
                'created_at' => '2021-03-02 15:53:14',
                'updated_at' => '2021-03-02 15:53:14'
            ],
            66 => [
                'id' => 567,
                'en_skill' => 'Lacrosse',
                'ar_skill' => 'Lacrosse',
                'status' => 1,
                'created_at' => '2021-03-02 15:53:14',
                'updated_at' => '2021-03-02 15:53:14'
            ],
            67 => [
                'id' => 568,
                'en_skill' => 'Longboarding',
                'ar_skill' => 'Longboarding',
                'status' => 1,
                'created_at' => '2021-03-02 15:53:14',
                'updated_at' => '2021-03-02 15:53:14'
            ],
            68 => [
                'id' => 569,
                'en_skill' => 'Long-distance running',
                'ar_skill' => 'Long-distance running',
                'status' => 1,
                'created_at' => '2021-03-02 15:53:14',
                'updated_at' => '2021-03-02 15:53:14'
            ],
            69 => [
                'id' => 570,
                'en_skill' => 'Marching band',
                'ar_skill' => 'Marching band',
                'status' => 1,
                'created_at' => '2021-03-02 15:53:14',
                'updated_at' => '2021-03-02 15:53:14'
            ],
            70 => [
                'id' => 571,
                'en_skill' => 'Mini Golf',
                'ar_skill' => 'Mini Golf',
                'status' => 1,
                'created_at' => '2021-03-02 15:53:15',
                'updated_at' => '2021-03-02 15:53:15'
            ],
            71 => [
                'id' => 572,
                'en_skill' => 'Model aircraft  ',
                'ar_skill' => 'Model aircraft  ',
                'status' => 1,
                'created_at' => '2021-03-02 15:53:15',
                'updated_at' => '2021-03-02 15:53:15'
            ],
            72 => [
                'id' => 573,
                'en_skill' => 'Orienteering',
                'ar_skill' => 'Orienteering',
                'status' => 1,
                'created_at' => '2021-03-02 15:53:15',
                'updated_at' => '2021-03-02 15:53:15'
            ],
            73 => [
                'id' => 574,
                'en_skill' => 'Pickleball',
                'ar_skill' => 'Pickleball',
                'status' => 1,
                'created_at' => '2021-03-02 15:53:15',
                'updated_at' => '2021-03-02 15:53:15'
            ],
            74 => [
                'id' => 575,
                'en_skill' => 'Powerboat racing',
                'ar_skill' => 'Powerboat racing',
                'status' => 1,
                'created_at' => '2021-03-02 15:53:15',
                'updated_at' => '2021-03-02 15:53:15'
            ],
            75 => [
                'id' => 576,
                'en_skill' => 'Quidditch',
                'ar_skill' => 'Quidditch',
                'status' => 1,
                'created_at' => '2021-03-02 15:53:16',
                'updated_at' => '2021-03-02 15:53:16'
            ],
            76 => [
                'id' => 577,
                'en_skill' => 'Race walking',
                'ar_skill' => 'Race walking',
                'status' => 1,
                'created_at' => '2021-03-02 15:53:16',
                'updated_at' => '2021-03-02 15:53:16'
            ],
            77 => [
                'id' => 578,
                'en_skill' => 'Racquetball',
                'ar_skill' => 'Racquetball',
                'status' => 1,
                'created_at' => '2021-03-02 15:53:16',
                'updated_at' => '2021-03-02 15:53:16'
            ],
            78 => [
                'id' => 579,
                'en_skill' => 'Radio-controlled car racing ',
                'ar_skill' => 'Radio-controlled car racing ',
                'status' => 1,
                'created_at' => '2021-03-02 15:53:16',
                'updated_at' => '2021-03-02 15:53:16'
            ],
            79 => [
                'id' => 580,
                'en_skill' => 'Radio-controlled model playing',
                'ar_skill' => 'Radio-controlled model playing',
                'status' => 1,
                'created_at' => '2021-03-02 15:53:16',
                'updated_at' => '2021-03-02 15:53:16'
            ],
            80 => [
                'id' => 581,
                'en_skill' => 'Roller derby ',
                'ar_skill' => 'Roller derby ',
                'status' => 1,
                'created_at' => '2021-03-02 15:53:17',
                'updated_at' => '2021-03-02 15:53:17'
            ],
            81 => [
                'id' => 582,
                'en_skill' => 'Rugby league football  ',
                'ar_skill' => 'Rugby league football  ',
                'status' => 1,
                'created_at' => '2021-03-02 15:53:17',
                'updated_at' => '2021-03-02 15:53:17'
            ],
            82 => [
                'id' => 583,
                'en_skill' => 'Sculling or rowing',
                'ar_skill' => 'Sculling or rowing',
                'status' => 1,
                'created_at' => '2021-03-02 15:53:17',
                'updated_at' => '2021-03-02 15:53:17'
            ],
            83 => [
                'id' => 584,
                'en_skill' => 'Shooting sport ',
                'ar_skill' => 'Shooting sport ',
                'status' => 1,
                'created_at' => '2021-03-02 15:53:17',
                'updated_at' => '2021-03-02 15:53:17'
            ],
            84 => [
                'id' => 585,
                'en_skill' => 'Skateboarding',
                'ar_skill' => 'Skateboarding',
                'status' => 1,
                'created_at' => '2021-03-02 15:53:17',
                'updated_at' => '2021-03-02 15:53:17'
            ],
            85 => [
                'id' => 586,
                'en_skill' => 'Skiing',
                'ar_skill' => 'Skiing',
                'status' => 1,
                'created_at' => '2021-03-02 15:53:17',
                'updated_at' => '2021-03-02 15:53:17'
            ],
            86 => [
                'id' => 587,
                'en_skill' => 'Sled dog racing',
                'ar_skill' => 'Sled dog racing',
                'status' => 1,
                'created_at' => '2021-03-02 15:53:18',
                'updated_at' => '2021-03-02 15:53:18'
            ],
            87 => [
                'id' => 588,
                'en_skill' => 'Softball',
                'ar_skill' => 'Softball',
                'status' => 1,
                'created_at' => '2021-03-02 15:53:18',
                'updated_at' => '2021-03-02 15:53:18'
            ],
            88 => [
                'id' => 589,
                'en_skill' => 'Speed skating ',
                'ar_skill' => 'Speed skating ',
                'status' => 1,
                'created_at' => '2021-03-02 15:53:18',
                'updated_at' => '2021-03-02 15:53:18'
            ],
            89 => [
                'id' => 590,
                'en_skill' => 'Squash',
                'ar_skill' => 'Squash',
                'status' => 1,
                'created_at' => '2021-03-02 15:53:18',
                'updated_at' => '2021-03-02 15:53:18'
            ],
            90 => [
                'id' => 591,
                'en_skill' => 'Surfing',
                'ar_skill' => 'Surfing',
                'status' => 1,
                'created_at' => '2021-03-02 15:53:18',
                'updated_at' => '2021-03-02 15:53:18'
            ],
            91 => [
                'id' => 592,
                'en_skill' => 'Swimming',
                'ar_skill' => 'Swimming',
                'status' => 1,
                'created_at' => '2021-03-02 15:53:19',
                'updated_at' => '2021-03-02 15:53:19'
            ],
            92 => [
                'id' => 593,
                'en_skill' => 'Table tennis',
                'ar_skill' => 'Table tennis',
                'status' => 1,
                'created_at' => '2021-03-02 15:53:19',
                'updated_at' => '2021-03-02 15:53:19'
            ],
            93 => [
                'id' => 594,
                'en_skill' => 'Tennis',
                'ar_skill' => 'Tennis',
                'status' => 1,
                'created_at' => '2021-03-02 15:53:19',
                'updated_at' => '2021-03-02 15:53:19'
            ],
            94 => [
                'id' => 595,
                'en_skill' => 'Tennis polo',
                'ar_skill' => 'Tennis polo',
                'status' => 1,
                'created_at' => '2021-03-02 15:53:19',
                'updated_at' => '2021-03-02 15:53:19'
            ],
            95 => [
                'id' => 596,
                'en_skill' => 'Tether car',
                'ar_skill' => 'Tether car',
                'status' => 1,
                'created_at' => '2021-03-02 15:53:19',
                'updated_at' => '2021-03-02 15:53:19'
            ],
            96 => [
                'id' => 597,
                'en_skill' => 'Tour skating',
                'ar_skill' => 'Tour skating',
                'status' => 1,
                'created_at' => '2021-03-02 15:53:20',
                'updated_at' => '2021-03-02 15:53:20'
            ],
            97 => [
                'id' => 598,
                'en_skill' => 'Tourism',
                'ar_skill' => 'Tourism',
                'status' => 1,
                'created_at' => '2021-03-02 15:53:20',
                'updated_at' => '2021-03-02 15:53:20'
            ],
            98 => [
                'id' => 599,
                'en_skill' => 'Trapshooting',
                'ar_skill' => 'Trapshooting',
                'status' => 1,
                'created_at' => '2021-03-02 15:53:20',
                'updated_at' => '2021-03-02 15:53:20'
            ],
            99 => [
                'id' => 600,
                'en_skill' => 'Triathlon',
                'ar_skill' => 'Triathlon',
                'status' => 1,
                'created_at' => '2021-03-02 15:53:20',
                'updated_at' => '2021-03-02 15:53:20'
            ],
            100 => [
                'id' => 601,
                'en_skill' => 'Ultimate frisbee',
                'ar_skill' => 'Ultimate frisbee',
                'status' => 1,
                'created_at' => '2021-03-02 15:53:20',
                'updated_at' => '2021-03-02 15:53:20'
            ],
            101 => [
                'id' => 602,
                'en_skill' => 'Volleyball',
                'ar_skill' => 'Volleyball',
                'status' => 1,
                'created_at' => '2021-03-02 15:53:20',
                'updated_at' => '2021-03-02 15:53:20'
            ],
            102 => [
                'id' => 603,
                'en_skill' => 'Water polo',
                'ar_skill' => 'Water polo',
                'status' => 1,
                'created_at' => '2021-03-02 15:53:21',
                'updated_at' => '2021-03-02 15:53:21'
            ],
            103 => [
                'id' => 604,
                'en_skill' => 'Observation hobbies  edit',
                'ar_skill' => 'Observation hobbies  edit',
                'status' => 1,
                'created_at' => '2021-03-02 15:53:21',
                'updated_at' => '2021-03-02 15:53:21'
            ],
            104 => [
                'id' => 605,
                'en_skill' => 'Indoors  edit',
                'ar_skill' => 'Indoors  edit',
                'status' => 1,
                'created_at' => '2021-03-02 15:53:21',
                'updated_at' => '2021-03-02 15:53:21'
            ],
            105 => [
                'id' => 606,
                'en_skill' => 'Audiophile',
                'ar_skill' => 'Audiophile',
                'status' => 1,
                'created_at' => '2021-03-02 15:53:21',
                'updated_at' => '2021-03-02 15:53:21'
            ],
            106 => [
                'id' => 607,
                'en_skill' => 'Fishkeeping',
                'ar_skill' => 'Fishkeeping',
                'status' => 1,
                'created_at' => '2021-03-02 15:53:21',
                'updated_at' => '2021-03-02 15:53:21'
            ],
            107 => [
                'id' => 608,
                'en_skill' => 'Learning',
                'ar_skill' => 'Learning',
                'status' => 1,
                'created_at' => '2021-03-02 15:53:21',
                'updated_at' => '2021-03-02 15:53:21'
            ],
            108 => [
                'id' => 609,
                'en_skill' => 'Meditation',
                'ar_skill' => 'Meditation',
                'status' => 1,
                'created_at' => '2021-03-02 15:53:22',
                'updated_at' => '2021-03-02 15:53:22'
            ],
            109 => [
                'id' => 610,
                'en_skill' => 'Microscopy',
                'ar_skill' => 'Microscopy',
                'status' => 1,
                'created_at' => '2021-03-02 15:53:22',
                'updated_at' => '2021-03-02 15:53:22'
            ],
            110 => [
                'id' => 611,
                'en_skill' => 'Reading',
                'ar_skill' => 'Reading',
                'status' => 1,
                'created_at' => '2021-03-02 15:53:22',
                'updated_at' => '2021-03-02 15:53:22'
            ],
            111 => [
                'id' => 612,
                'en_skill' => 'Research',
                'ar_skill' => 'Research',
                'status' => 1,
                'created_at' => '2021-03-02 15:53:22',
                'updated_at' => '2021-03-02 15:53:22'
            ],
            112 => [
                'id' => 613,
                'en_skill' => 'Shortwave listening ',
                'ar_skill' => 'Shortwave listening ',
                'status' => 1,
                'created_at' => '2021-03-02 15:53:22',
                'updated_at' => '2021-03-02 15:53:22'
            ],
            113 => [
                'id' => 614,
                'en_skill' => 'Outdoors  edit',
                'ar_skill' => 'Outdoors  edit',
                'status' => 1,
                'created_at' => '2021-03-02 15:53:22',
                'updated_at' => '2021-03-02 15:53:22'
            ],
            114 => [
                'id' => 615,
                'en_skill' => 'Aircraft spotting ',
                'ar_skill' => 'Aircraft spotting ',
                'status' => 1,
                'created_at' => '2021-03-02 15:53:23',
                'updated_at' => '2021-03-02 15:53:23'
            ],
            115 => [
                'id' => 616,
                'en_skill' => 'Amateur astronomy',
                'ar_skill' => 'Amateur astronomy',
                'status' => 1,
                'created_at' => '2021-03-02 15:53:23',
                'updated_at' => '2021-03-02 15:53:23'
            ],
            116 => [
                'id' => 617,
                'en_skill' => 'Benchmarking',
                'ar_skill' => 'Benchmarking',
                'status' => 1,
                'created_at' => '2021-03-02 15:53:23',
                'updated_at' => '2021-03-02 15:53:23'
            ],
            117 => [
                'id' => 618,
                'en_skill' => 'Birdwatching',
                'ar_skill' => 'Birdwatching',
                'status' => 1,
                'created_at' => '2021-03-02 15:53:23',
                'updated_at' => '2021-03-02 15:53:23'
            ],
            118 => [
                'id' => 619,
                'en_skill' => 'Bus spotting ',
                'ar_skill' => 'Bus spotting ',
                'status' => 1,
                'created_at' => '2021-03-02 15:53:23',
                'updated_at' => '2021-03-02 15:53:23'
            ],
            119 => [
                'id' => 620,
                'en_skill' => 'Geocaching',
                'ar_skill' => 'Geocaching',
                'status' => 1,
                'created_at' => '2021-03-02 15:53:23',
                'updated_at' => '2021-03-02 15:53:23'
            ],
            120 => [
                'id' => 621,
                'en_skill' => 'Gongoozling',
                'ar_skill' => 'Gongoozling',
                'status' => 1,
                'created_at' => '2021-03-02 15:53:24',
                'updated_at' => '2021-03-02 15:53:24'
            ],
            121 => [
                'id' => 622,
                'en_skill' => 'Herping',
                'ar_skill' => 'Herping',
                'status' => 1,
                'created_at' => '2021-03-02 15:53:24',
                'updated_at' => '2021-03-02 15:53:24'
            ],
            122 => [
                'id' => 623,
                'en_skill' => 'Hiking/backpacking',
                'ar_skill' => 'Hiking/backpacking',
                'status' => 1,
                'created_at' => '2021-03-02 15:53:24',
                'updated_at' => '2021-03-02 15:53:24'
            ],
            123 => [
                'id' => 624,
                'en_skill' => 'Meteorology',
                'ar_skill' => 'Meteorology',
                'status' => 1,
                'created_at' => '2021-03-02 15:53:24',
                'updated_at' => '2021-03-02 15:53:24'
            ],
            124 => [
                'id' => 625,
                'en_skill' => 'People-watching',
                'ar_skill' => 'People-watching',
                'status' => 1,
                'created_at' => '2021-03-02 15:53:24',
                'updated_at' => '2021-03-02 15:53:24'
            ],
            125 => [
                'id' => 626,
                'en_skill' => 'Photography',
                'ar_skill' => 'Photography',
                'status' => 1,
                'created_at' => '2021-03-02 15:53:24',
                'updated_at' => '2021-03-02 15:53:24'
            ],
            126 => [
                'id' => 627,
                'en_skill' => 'Satellite watching',
                'ar_skill' => 'Satellite watching',
                'status' => 1,
                'created_at' => '2021-03-02 15:53:25',
                'updated_at' => '2021-03-02 15:53:25'
            ],
            127 => [
                'id' => 628,
                'en_skill' => 'Trainspotting',
                'ar_skill' => 'Trainspotting',
                'status' => 1,
                'created_at' => '2021-03-02 15:53:25',
                'updated_at' => '2021-03-02 15:53:25'
            ],
            128 => [
                'id' => 629,
                'en_skill' => 'Whale watching',
                'ar_skill' => 'Whale watching',
                'status' => 1,
                'created_at' => '2021-03-02 15:53:25',
                'updated_at' => '2021-03-02 15:53:25'
            ]
        ]);
    }
}
