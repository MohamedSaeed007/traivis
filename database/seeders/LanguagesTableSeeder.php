<?php

namespace Database\Seeders;

use App\Models\Language;
use Illuminate\Database\Seeder;

class LanguagesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        $languagesArray = [
            [
                'code' => 'aa',
                'name' => 'Afar',
                'display_name' => 'Afaraf'
            ],
            [
                'code' => 'ab',
                'name' => 'Abkhaz',
                'display_name' => 'аҧсуа бызшәа, аҧсшәа'
            ],
            [
                'code' => 'ae',
                'name' => 'Avestan',
                'display_name' => 'avesta'
            ],
            [
                'code' => 'af',
                'name' => 'Afrikaans',
                'display_name' => 'Afrikaans'
            ],
            [
                'code' => 'ak',
                'name' => 'Akan',
                'display_name' => 'Akan'
            ],
            [
                'code' => 'am',
                'name' => 'Amharic',
                'display_name' => 'አማርኛ'
            ],
            [
                'code' => 'an',
                'name' => 'Aragonese',
                'display_name' => 'aragonés'
            ],
            //            [
            //                'code' => 'ar',
            //
            //
            //                'name' => 'Arabic',
            //                'display_name' => 'العربية',
            //
            //            ],
            [
                'code' => 'as',
                'name' => 'Assamese',
                'display_name' => 'অসমীয়া'
            ],
            [
                'code' => 'av',
                'name' => 'Avaric',
                'display_name' => 'авар мацӀ, магӀарул мацӀ'
            ],
            [
                'code' => 'ay',
                'name' => 'Aymara',
                'display_name' => 'aymar aru'
            ],
            [
                'code' => 'az',
                'name' => 'Azerbaijani',
                'display_name' => 'azərbaycan dili'
            ],
            [
                'code' => 'ba',
                'name' => 'Bashkir',
                'display_name' => 'башҡорт теле'
            ],
            [
                'code' => 'be',
                'name' => 'Belarusian',
                'display_name' => 'беларуская мова'
            ],
            [
                'code' => 'bg',
                'name' => 'Bulgarian',
                'display_name' => 'български език'
            ],
            [
                'code' => 'bh',
                'name' => 'Bihari',
                'display_name' => 'भोजपुरी'
            ],
            [
                'code' => 'bi',
                'name' => 'Bislama',
                'display_name' => 'Bislama'
            ],
            [
                'code' => 'bm',
                'name' => 'Bambara',
                'display_name' => 'bamanankan'
            ],
            [
                'code' => 'bn',
                'name' => 'Bengali, Bangla',
                'display_name' => 'বাংলা'
            ],
            [
                'code' => 'bo',
                'name' => 'Tibetan Standard, Tibetan, Central',
                'display_name' => 'བོད་ཡིག'
            ],
            [
                'code' => 'br',
                'name' => 'Breton',
                'display_name' => 'brezhoneg'
            ],
            [
                'code' => 'bs',
                'name' => 'Bosnian',
                'display_name' => 'bosanski jezik'
            ],
            [
                'code' => 'ca',
                'name' => 'Catalan',
                'display_name' => 'català'
            ],
            [
                'code' => 'ce',
                'name' => 'Chechen',
                'display_name' => 'нохчийн мотт'
            ],
            [
                'code' => 'ch',
                'name' => 'Chamorro',
                'display_name' => 'Chamoru'
            ],
            [
                'code' => 'co',
                'name' => 'Corsican',
                'display_name' => 'corsu, lingua corsa'
            ],
            [
                'code' => 'cr',
                'name' => 'Cree',
                'display_name' => 'ᓀᐦᐃᔭᐍᐏᐣ'
            ],
            [
                'code' => 'cs',
                'name' => 'Czech',
                'display_name' => 'čeština, český jazyk'
            ],
            [
                'code' => 'cu',
                'name' => 'Old Church Slavonic, Church Slavonic, Old Bulgarian',
                'display_name' => 'ѩзыкъ словѣньскъ'
            ],
            [
                'code' => 'cv',
                'name' => 'Chuvash',
                'display_name' => 'чӑваш чӗлхи'
            ],
            [
                'code' => 'cy',
                'name' => 'Welsh',
                'display_name' => 'Cymraeg'
            ],
            [
                'code' => 'da',
                'name' => 'Danish',
                'display_name' => 'dansk'
            ],
            [
                'code' => 'de',
                'name' => 'German',
                'display_name' => 'Deutsch'
            ],
            [
                'code' => 'dv',
                'name' => 'Divehi, Dhivehi, Maldivian',
                'display_name' => 'ދިވެހި'
            ],
            [
                'code' => 'dz',
                'name' => 'Dzongkha',
                'display_name' => 'རྫོང་ཁ'
            ],
            [
                'code' => 'ee',
                'name' => 'Ewe',
                'display_name' => 'Eʋegbe'
            ],
            [
                'code' => 'el',
                'name' => 'Greek (modern)',
                'display_name' => 'ελληνικά'
            ],
            //            [
            //                'code' => 'en',
            //
            //
            //                'name' => 'English',
            //                'display_name' => 'English',
            //
            //            ],
            [
                'code' => 'eo',
                'name' => 'Esperanto',
                'display_name' => 'Esperanto'
            ],
            //            [
            //                'code' => 'es',
            //
            //
            //                'name' => 'Spanish',
            //                'display_name' => 'Español',
            //
            //            ],
            [
                'code' => 'et',
                'name' => 'Estonian',
                'display_name' => 'eesti, eesti keel'
            ],
            [
                'code' => 'eu',
                'name' => 'Basque',
                'display_name' => 'euskara, euskera'
            ],
            [
                'code' => 'fa',
                'name' => 'Persian (Farsi)',
                'display_name' => 'فارسی'
            ],
            [
                'code' => 'ff',
                'name' => 'Fula, Fulah, Pulaar, Pular',
                'display_name' => 'Fulfulde, Pulaar, Pular'
            ],
            [
                'code' => 'fi',
                'name' => 'Finnish',
                'display_name' => 'suomi, suomen kieli'
            ],
            [
                'code' => 'fj',
                'name' => 'Fijian',
                'display_name' => 'vosa Vakaviti'
            ],
            [
                'code' => 'fo',
                'name' => 'Faroese',
                'display_name' => 'føroyskt'
            ],
            [
                'code' => 'fr',
                'name' => 'French',
                'display_name' => 'français, langue française'
            ],
            [
                'code' => 'fy',
                'name' => 'Western Frisian',
                'display_name' => 'Frysk'
            ],
            [
                'code' => 'ga',
                'name' => 'Irish',
                'display_name' => 'Gaeilge'
            ],
            [
                'code' => 'gd',
                'name' => 'Scottish Gaelic, Gaelic',
                'display_name' => 'Gàidhlig'
            ],
            [
                'code' => 'gl',
                'name' => 'Galician',
                'display_name' => 'galego'
            ],
            [
                'code' => 'gn',
                'name' => 'Guaraní',
                'display_name' => "Avañe'ẽ"
            ],
            [
                'code' => 'gu',
                'name' => 'Gujarati',
                'display_name' => 'ગુજરાતી'
            ],
            [
                'code' => 'gv',
                'name' => 'Manx',
                'display_name' => 'Gaelg, Gailck'
            ],
            [
                'code' => 'ha',
                'name' => 'Hausa',
                'display_name' => '(Hausa) هَوُسَ'
            ],
            [
                'code' => 'he',
                'name' => 'Hebrew (modern)',
                'display_name' => 'עברית'
            ],
            [
                'code' => 'hi',
                'name' => 'Hindi',
                'display_name' => 'हिन्दी, हिंदी'
            ],
            [
                'code' => 'ho',
                'name' => 'Hiri Motu',
                'display_name' => 'Hiri Motu'
            ],
            [
                'code' => 'hr',
                'name' => 'Croatian',
                'display_name' => 'hrvatski jezik'
            ],
            [
                'code' => 'ht',
                'name' => 'Haitian, Haitian Creole',
                'display_name' => 'Kreyòl ayisyen'
            ],
            [
                'code' => 'hu',
                'name' => 'Hungarian',
                'display_name' => 'magyar'
            ],
            [
                'code' => 'hy',
                'name' => 'Armenian',
                'display_name' => 'Հայերեն'
            ],
            [
                'code' => 'hz',
                'name' => 'Herero',
                'display_name' => 'Otjiherero'
            ],
            [
                'code' => 'ia',
                'name' => 'Interlingua',
                'display_name' => 'Interlingua'
            ],
            [
                'code' => 'id',
                'name' => 'Indonesian',
                'display_name' => 'Bahasa Indonesia'
            ],
            [
                'code' => 'ie',
                'name' => 'Interlingue',
                'display_name' => 'Originally called Occidental; then Interlingue after WWII'
            ],
            [
                'code' => 'ig',
                'name' => 'Igbo',
                'display_name' => 'Asụsụ Igbo'
            ],
            [
                'code' => 'ii',
                'name' => 'Nuosu',
                'display_name' => 'ꆈꌠ꒿ Nuosuhxop'
            ],
            [
                'code' => 'ik',
                'name' => 'Inupiaq',
                'display_name' => 'Iñupiaq, Iñupiatun'
            ],
            [
                'code' => 'io',
                'name' => 'Ido',
                'display_name' => 'Ido'
            ],
            [
                'code' => 'is',
                'name' => 'Icelandic',
                'display_name' => 'Íslenska'
            ],
            [
                'code' => 'it',
                'name' => 'Italian',
                'display_name' => 'Italiano'
            ],
            [
                'code' => 'iu',
                'name' => 'Inuktitut',
                'display_name' => 'ᐃᓄᒃᑎᑐᑦ'
            ],
            [
                'code' => 'ja',
                'name' => 'Japanese',
                'display_name' => '日本語 (にほんご)'
            ],
            [
                'code' => 'jv',
                'name' => 'Javanese',
                'display_name' => 'ꦧꦱꦗꦮ, Basa Jawa'
            ],
            [
                'code' => 'ka',
                'name' => 'Georgian',
                'display_name' => 'ქართული'
            ],
            [
                'code' => 'kg',
                'name' => 'Kongo',
                'display_name' => 'Kikongo'
            ],
            [
                'code' => 'ki',
                'name' => 'Kikuyu, Gikuyu',
                'display_name' => 'Gĩkũyũ'
            ],
            [
                'code' => 'kj',
                'name' => 'Kwanyama, Kuanyama',
                'display_name' => 'Kuanyama'
            ],
            [
                'code' => 'kk',
                'name' => 'Kazakh',
                'display_name' => 'қазақ тілі'
            ],
            [
                'code' => 'kl',
                'name' => 'Kalaallisut, Greenlandic',
                'display_name' => 'kalaallisut, kalaallit oqaasii'
            ],
            [
                'code' => 'km',
                'name' => 'Khmer',
                'display_name' => 'ខ្មែរ, ខេមរភាសា, ភាសាខ្មែរ'
            ],
            [
                'code' => 'kn',
                'name' => 'Kannada',
                'display_name' => 'ಕನ್ನಡ'
            ],
            [
                'code' => 'ko',
                'name' => 'Korean',
                'display_name' => '한국어'
            ],
            [
                'code' => 'kr',
                'name' => 'Kanuri',
                'display_name' => 'Kanuri'
            ],
            [
                'code' => 'ks',
                'name' => 'Kashmiri',
                'display_name' => 'कश्मीरी, كشميري‎'
            ],
            [
                'code' => 'ku',
                'name' => 'Kurdish',
                'display_name' => 'Kurdî, كوردی‎'
            ],
            [
                'code' => 'kv',
                'name' => 'Komi',
                'display_name' => 'коми кыв'
            ],
            [
                'code' => 'kw',
                'name' => 'Cornish',
                'display_name' => 'Kernewek'
            ],
            [
                'code' => 'ky',
                'name' => 'Kyrgyz',
                'display_name' => 'Кыргызча, Кыргыз тили'
            ],
            [
                'code' => 'la',
                'name' => 'Latin',
                'display_name' => 'latine, lingua latina'
            ],
            [
                'code' => 'lb',
                'name' => 'Luxembourgish, Letzeburgesch',
                'display_name' => 'Lëtzebuergesch'
            ],
            [
                'code' => 'lg',
                'name' => 'Ganda',
                'display_name' => 'Luganda'
            ],
            [
                'code' => 'li',
                'name' => 'Limburgish, Limburgan, Limburger',
                'display_name' => 'Limburgs'
            ],
            [
                'code' => 'ln',
                'name' => 'Lingala',
                'display_name' => 'Lingála'
            ],
            [
                'code' => 'lo',
                'name' => 'Lao',
                'display_name' => 'ພາສາລາວ'
            ],
            [
                'code' => 'lt',
                'name' => 'Lithuanian',
                'display_name' => 'lietuvių kalba'
            ],
            [
                'code' => 'lu',
                'name' => 'Luba-Katanga',
                'display_name' => 'Tshiluba'
            ],
            [
                'code' => 'lv',
                'name' => 'Latvian',
                'display_name' => 'latviešu valoda'
            ],
            [
                'code' => 'mg',
                'name' => 'Malagasy',
                'display_name' => 'fiteny malagasy'
            ],
            [
                'code' => 'mh',
                'name' => 'Marshallese',
                'display_name' => 'Kajin M̧ajeļ'
            ],
            [
                'code' => 'mi',
                'name' => 'Māori',
                'display_name' => 'te reo Māori'
            ],
            [
                'code' => 'mk',
                'name' => 'Macedonian',
                'display_name' => 'македонски јазик'
            ],
            [
                'code' => 'ml',
                'name' => 'Malayalam',
                'display_name' => 'മലയാളം'
            ],
            [
                'code' => 'mn',
                'name' => 'Mongolian',
                'display_name' => 'Монгол хэл'
            ],
            [
                'code' => 'mr',
                'name' => 'Marathi (Marāṭhī)',
                'display_name' => 'मराठी'
            ],
            [
                'code' => 'ms',
                'name' => 'Malay',
                'display_name' => 'bahasa Melayu, بهاس ملايو‎'
            ],
            [
                'code' => 'mt',
                'name' => 'Maltese',
                'display_name' => 'Malti'
            ],
            [
                'code' => 'my',
                'name' => 'Burmese',
                'display_name' => 'ဗမာစာ'
            ],
            [
                'code' => 'na',
                'name' => 'Nauruan',
                'display_name' => 'Dorerin Naoero'
            ],
            [
                'code' => 'nb',
                'name' => 'Norwegian Bokmål',
                'display_name' => 'Norsk bokmål'
            ],
            [
                'code' => 'nd',
                'name' => 'Northern Ndebele',
                'display_name' => 'isiNdebele'
            ],
            [
                'code' => 'ne',
                'name' => 'Nepali',
                'display_name' => 'नेपाली'
            ],
            [
                'code' => 'ng',
                'name' => 'Ndonga',
                'display_name' => 'Owambo'
            ],
            [
                'code' => 'nl',
                'name' => 'Dutch',
                'display_name' => 'Nederlands, Vlaams'
            ],
            [
                'code' => 'nn',
                'name' => 'Norwegian Nynorsk',
                'display_name' => 'Norsk nynorsk'
            ],
            [
                'code' => 'no',
                'name' => 'Norwegian',
                'display_name' => 'Norsk'
            ],
            [
                'code' => 'nr',
                'name' => 'Southern Ndebele',
                'display_name' => 'isiNdebele'
            ],
            [
                'code' => 'nv',
                'name' => 'Navajo, Navaho',
                'display_name' => 'Diné bizaad'
            ],
            [
                'code' => 'ny',
                'name' => 'Chichewa, Chewa, Nyanja',
                'display_name' => 'chiCheŵa, chinyanja'
            ],
            [
                'code' => 'oc',
                'name' => 'Occitan',
                'display_name' => "occitan, lenga d'òc"
            ],
            [
                'code' => 'oj',
                'name' => 'Ojibwe, Ojibwa',
                'display_name' => 'ᐊᓂᔑᓈᐯᒧᐎᓐ'
            ],
            [
                'code' => 'om',
                'name' => 'Oromo',
                'display_name' => 'Afaan Oromoo'
            ],
            [
                'code' => 'or',
                'name' => 'Oriya',
                'display_name' => 'ଓଡ଼ିଆ'
            ],
            [
                'code' => 'os',
                'name' => 'Ossetian, Ossetic',
                'display_name' => 'ирон æвзаг'
            ],
            [
                'code' => 'pa',
                'name' => '(Eastern) Punjabi',
                'display_name' => 'ਪੰਜਾਬੀ'
            ],
            [
                'code' => 'pi',
                'name' => 'Pāli',
                'display_name' => 'पाऴि'
            ],
            [
                'code' => 'pl',
                'name' => 'Polish',
                'display_name' => 'język polski, polszczyzna'
            ],
            [
                'code' => 'ps',
                'name' => 'Pashto, Pushto',
                'display_name' => 'پښتو'
            ],
            [
                'code' => 'pt',
                'name' => 'Portuguese',
                'display_name' => 'Português'
            ],
            [
                'code' => 'qu',
                'name' => 'Quechua',
                'display_name' => 'Runa Simi, Kichwa'
            ],
            [
                'code' => 'rm',
                'name' => 'Romansh',
                'display_name' => 'rumantsch grischun'
            ],
            [
                'code' => 'rn',
                'name' => 'Kirundi',
                'display_name' => 'Ikirundi'
            ],
            [
                'code' => 'ro',
                'name' => 'Romanian',
                'display_name' => 'Română'
            ],
            [
                'code' => 'ru',
                'name' => 'Russian',
                'display_name' => 'Русский'
            ],
            [
                'code' => 'rw',
                'name' => 'Kinyarwanda',
                'display_name' => 'Ikinyarwanda'
            ],
            [
                'code' => 'sa',
                'name' => 'Sanskrit (Saṁskṛta)',
                'display_name' => 'संस्कृतम्'
            ],
            [
                'code' => 'sc',
                'name' => 'Sardinian',
                'display_name' => 'sardu'
            ],
            [
                'code' => 'sd',
                'name' => 'Sindhi',
                'display_name' => 'सिन्धी, سنڌي، سندھی‎'
            ],
            [
                'code' => 'se',
                'name' => 'Northern Sami',
                'display_name' => 'Davvisámegiella'
            ],
            [
                'code' => 'sg',
                'name' => 'Sango',
                'display_name' => 'yângâ tî sängö'
            ],
            [
                'code' => 'si',
                'name' => 'Sinhalese, Sinhala',
                'display_name' => 'සිංහල'
            ],
            [
                'code' => 'sk',
                'name' => 'Slovak',
                'display_name' => 'slovenčina, slovenský jazyk'
            ],
            [
                'code' => 'sl',
                'name' => 'Slovene',
                'display_name' => 'slovenski jezik, slovenščina'
            ],
            [
                'code' => 'sm',
                'name' => 'Samoan',
                'display_name' => "gagana fa'a Samoa"
            ],
            [
                'code' => 'sn',
                'name' => 'Shona',
                'display_name' => 'chiShona'
            ],
            [
                'code' => 'so',
                'name' => 'Somali',
                'display_name' => 'Soomaaliga, af Soomaali'
            ],
            [
                'code' => 'sq',
                'name' => 'Albanian',
                'display_name' => 'Shqip'
            ],
            [
                'code' => 'sr',
                'name' => 'Serbian',
                'display_name' => 'српски језик'
            ],
            [
                'code' => 'ss',
                'name' => 'Swati',
                'display_name' => 'SiSwati'
            ],
            [
                'code' => 'st',
                'name' => 'Southern Sotho',
                'display_name' => 'Sesotho'
            ],
            [
                'code' => 'su',
                'name' => 'Sundanese',
                'display_name' => 'Basa Sunda'
            ],
            [
                'code' => 'sv',
                'name' => 'Swedish',
                'display_name' => 'svenska'
            ],
            [
                'code' => 'sw',
                'name' => 'Swahili',
                'display_name' => 'Kiswahili'
            ],
            [
                'code' => 'ta',
                'name' => 'Tamil',
                'display_name' => 'தமிழ்'
            ],
            [
                'code' => 'te',
                'name' => 'Telugu',
                'display_name' => 'తెలుగు'
            ],
            [
                'code' => 'tg',
                'name' => 'Tajik',
                'display_name' => 'тоҷикӣ, toçikī, تاجیکی‎'
            ],
            [
                'code' => 'th',
                'name' => 'Thai',
                'display_name' => 'ไทย'
            ],
            [
                'code' => 'ti',
                'name' => 'Tigrinya',
                'display_name' => 'ትግርኛ'
            ],
            [
                'code' => 'tk',
                'name' => 'Turkmen',
                'display_name' => 'Türkmen, Түркмен'
            ],
            [
                'code' => 'tl',
                'name' => 'Tagalog',
                'display_name' => 'Wikang Tagalog'
            ],
            [
                'code' => 'tn',
                'name' => 'Tswana',
                'display_name' => 'Setswana'
            ],
            [
                'code' => 'to',
                'name' => 'Tonga (Tonga Islands)',
                'display_name' => 'faka Tonga'
            ],
            [
                'code' => 'tr',
                'name' => 'Turkish',
                'display_name' => 'Türkçe'
            ],
            [
                'code' => 'ts',
                'name' => 'Tsonga',
                'display_name' => 'Xitsonga'
            ],
            [
                'code' => 'tt',
                'name' => 'Tatar',
                'display_name' => 'татар теле, tatar tele'
            ],
            [
                'code' => 'tw',
                'name' => 'Twi',
                'display_name' => 'Twi'
            ],
            [
                'code' => 'ty',
                'name' => 'Tahitian',
                'display_name' => 'Reo Tahiti'
            ],
            [
                'code' => 'ug',
                'name' => 'Uyghur',
                'display_name' => 'ئۇيغۇرچە‎, Uyghurche'
            ],
            [
                'code' => 'uk',
                'name' => 'Ukrainian',
                'display_name' => 'Українська'
            ],
            [
                'code' => 'ur',
                'name' => 'Urdu',
                'display_name' => 'اردو'
            ],
            [
                'code' => 'uz',
                'name' => 'Uzbek',
                'display_name' => 'Oʻzbek, Ўзбек, أۇزبېك‎'
            ],
            [
                'code' => 've',
                'name' => 'Venda',
                'display_name' => 'Tshivenḓa'
            ],
            [
                'code' => 'vi',
                'name' => 'Vietnamese',
                'display_name' => 'Tiếng Việt'
            ],
            [
                'code' => 'vo',
                'name' => 'Volapük',
                'display_name' => 'Volapük'
            ],
            [
                'code' => 'wa',
                'name' => 'Walloon',
                'display_name' => 'walon'
            ],
            [
                'code' => 'wo',
                'name' => 'Wolof',
                'display_name' => 'Wollof'
            ],
            [
                'code' => 'xh',
                'name' => 'Xhosa',
                'display_name' => 'isiXhosa'
            ],
            [
                'code' => 'yi',
                'name' => 'Yiddish',
                'display_name' => 'ייִדיש'
            ],
            [
                'code' => 'yo',
                'name' => 'Yoruba',
                'display_name' => 'Yorùbá'
            ],
            [
                'code' => 'za',
                'name' => 'Zhuang, Chuang',
                'display_name' => 'Saɯ cueŋƅ, Saw cuengh'
            ],
            [
                'code' => 'zh',
                'name' => 'Chinese',
                'display_name' => '中文 (Zhōngwén), 汉语, 漢語'
            ],
            [
                'code' => 'zu',
                'name' => 'Zulu',
                'display_name' => 'isiZulu'
            ]
        ];

        \DB::table('languages')->truncate();

        \DB::table('languages')->insert([
            0 => [
                'id' => 1,
                'name' => 'English',
                'display_name' => 'English',
                'code' => 'en',
                'active' => true,
                'created_at' => '2021-02-08 07:50:58',
                'updated_at' => '2021-02-08 08:50:58'
            ],
            1 => [
                'id' => 2,
                'name' => 'Spanish',
                'display_name' => 'Español',
                'code' => 'es',
                'active' => false,
                'created_at' => '2021-02-08 07:50:58',
                'updated_at' => '2021-02-08 08:50:58'
            ],
            2 => [
                'id' => 3,
                'name' => 'Arabic',
                'display_name' => 'عربى',
                'code' => 'ar',
                'active' => true,
                'created_at' => '2021-02-08 07:50:58',
                'updated_at' => '2021-02-08 08:50:58'
            ]
        ]);

        foreach ($languagesArray as $language) {
            Language::create([
                'name' => $language['name'],
                'display_name' => $language['display_name'],
                'code' => $language['code'],
                'active' => false,
                'created_at' => '2021-02-08 07:50:58',
                'updated_at' => '2021-02-08 08:50:58'
            ]);
        }
    }
}
