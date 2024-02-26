<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class OccupationTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('occupation')->truncate();

        \DB::table('occupation')->insert([
            0 => [
                'id' => 1,
                'en_occupation' => 'Able Seamen',
                'ar_occupation' => 'Able Seamen',
                'slug' => 'able-seamen',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:37',
                'updated_at' => '2021-02-16 06:34:37'
            ],
            1 => [
                'id' => 2,
                'en_occupation' => 'Accountants',
                'ar_occupation' => 'Accountants',
                'slug' => 'accountants',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:37',
                'updated_at' => '2021-02-16 06:34:37'
            ],
            2 => [
                'id' => 3,
                'en_occupation' => 'Accountants and Auditors',
                'ar_occupation' => 'Accountants and Auditors',
                'slug' => 'accountants-and-auditors',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:37',
                'updated_at' => '2021-02-16 06:34:37'
            ],
            3 => [
                'id' => 4,
                'en_occupation' => 'Actors',
                'ar_occupation' => 'Actors',
                'slug' => 'actors',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:37',
                'updated_at' => '2021-02-16 06:34:37'
            ],
            4 => [
                'id' => 5,
                'en_occupation' => 'Actuaries',
                'ar_occupation' => 'Actuaries',
                'slug' => 'actuaries',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:37',
                'updated_at' => '2021-02-16 06:34:37'
            ],
            5 => [
                'id' => 6,
                'en_occupation' => 'Acupuncturists',
                'ar_occupation' => 'Acupuncturists',
                'slug' => 'acupuncturists',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:37',
                'updated_at' => '2021-02-16 06:34:37'
            ],
            6 => [
                'id' => 7,
                'en_occupation' => 'Acute Care Nurses',
                'ar_occupation' => 'Acute Care Nurses',
                'slug' => 'acute-care-nurses',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:37',
                'updated_at' => '2021-02-16 06:34:37'
            ],
            7 => [
                'id' => 8,
                'en_occupation' => 'Adapted Physical Education Specialists',
                'ar_occupation' => 'Adapted Physical Education Specialists',
                'slug' => 'adapted-physical-education-specialists',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:37',
                'updated_at' => '2021-02-16 06:34:37'
            ],
            8 => [
                'id' => 9,
                'en_occupation' => 'Adjustment Clerks',
                'ar_occupation' => 'Adjustment Clerks',
                'slug' => 'adjustment-clerks',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:37',
                'updated_at' => '2021-02-16 06:34:37'
            ],
            9 => [
                'id' => 10,
                'en_occupation' => 'Administrative Law Judges, Adjudicators, and Hearing Officers',
                'ar_occupation' => 'Administrative Law Judges, Adjudicators, and Hearing Officers',
                'slug' => 'administrative-law-judges-adjudicators-and-hearing-officers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:37',
                'updated_at' => '2021-02-16 06:34:37'
            ],
            10 => [
                'id' => 11,
                'en_occupation' => 'Administrative Services Managers',
                'ar_occupation' => 'Administrative Services Managers',
                'slug' => 'administrative-services-managers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:37',
                'updated_at' => '2021-02-16 06:34:37'
            ],
            11 => [
                'id' => 12,
                'en_occupation' =>
                    'Adult Literacy, Remedial Education, and GED Teachers and Instructors',
                'ar_occupation' =>
                    'Adult Literacy, Remedial Education, and GED Teachers and Instructors',
                'slug' => 'adult-literacy-remedial-education-and-ged-teachers-and-instructors',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:37',
                'updated_at' => '2021-02-16 06:34:37'
            ],
            12 => [
                'id' => 13,
                'en_occupation' => 'Advanced Practice Psychiatric Nurses',
                'ar_occupation' => 'Advanced Practice Psychiatric Nurses',
                'slug' => 'advanced-practice-psychiatric-nurses',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:37',
                'updated_at' => '2021-02-16 06:34:37'
            ],
            13 => [
                'id' => 14,
                'en_occupation' => 'Advertising and Promotions Managers',
                'ar_occupation' => 'Advertising and Promotions Managers',
                'slug' => 'advertising-and-promotions-managers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:37',
                'updated_at' => '2021-02-16 06:34:37'
            ],
            14 => [
                'id' => 15,
                'en_occupation' => 'Advertising Sales Agents',
                'ar_occupation' => 'Advertising Sales Agents',
                'slug' => 'advertising-sales-agents',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:37',
                'updated_at' => '2021-02-16 06:34:37'
            ],
            15 => [
                'id' => 16,
                'en_occupation' => 'Aerospace Engineering and Operations Technicians',
                'ar_occupation' => 'Aerospace Engineering and Operations Technicians',
                'slug' => 'aerospace-engineering-and-operations-technicians',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:37',
                'updated_at' => '2021-02-16 06:34:37'
            ],
            16 => [
                'id' => 17,
                'en_occupation' => 'Aerospace Engineers',
                'ar_occupation' => 'Aerospace Engineers',
                'slug' => 'aerospace-engineers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:37',
                'updated_at' => '2021-02-16 06:34:37'
            ],
            17 => [
                'id' => 18,
                'en_occupation' => 'Agents and Business Managers of Artists, Performers, and Athletes',
                'ar_occupation' => 'Agents and Business Managers of Artists, Performers, and Athletes',
                'slug' => 'agents-and-business-managers-of-artists-performers-and-athletes',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:37',
                'updated_at' => '2021-02-16 06:34:37'
            ],
            18 => [
                'id' => 19,
                'en_occupation' => 'Agricultural and Food Science Technicians',
                'ar_occupation' => 'Agricultural and Food Science Technicians',
                'slug' => 'agricultural-and-food-science-technicians',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:37',
                'updated_at' => '2021-02-16 06:34:37'
            ],
            19 => [
                'id' => 20,
                'en_occupation' => 'Agricultural Crop Farm Managers',
                'ar_occupation' => 'Agricultural Crop Farm Managers',
                'slug' => 'agricultural-crop-farm-managers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:37',
                'updated_at' => '2021-02-16 06:34:37'
            ],
            20 => [
                'id' => 21,
                'en_occupation' => 'Agricultural Engineers',
                'ar_occupation' => 'Agricultural Engineers',
                'slug' => 'agricultural-engineers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:37',
                'updated_at' => '2021-02-16 06:34:37'
            ],
            21 => [
                'id' => 22,
                'en_occupation' => 'Agricultural Equipment Operators',
                'ar_occupation' => 'Agricultural Equipment Operators',
                'slug' => 'agricultural-equipment-operators',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:37',
                'updated_at' => '2021-02-16 06:34:37'
            ],
            22 => [
                'id' => 23,
                'en_occupation' => 'Agricultural Inspectors',
                'ar_occupation' => 'Agricultural Inspectors',
                'slug' => 'agricultural-inspectors',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:37',
                'updated_at' => '2021-02-16 06:34:37'
            ],
            23 => [
                'id' => 24,
                'en_occupation' => 'Agricultural Sciences Teachers, Postsecondary',
                'ar_occupation' => 'Agricultural Sciences Teachers, Postsecondary',
                'slug' => 'agricultural-sciences-teachers-postsecondary',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:37',
                'updated_at' => '2021-02-16 06:34:37'
            ],
            24 => [
                'id' => 25,
                'en_occupation' => 'Agricultural Technicians',
                'ar_occupation' => 'Agricultural Technicians',
                'slug' => 'agricultural-technicians',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:37',
                'updated_at' => '2021-02-16 06:34:37'
            ],
            25 => [
                'id' => 26,
                'en_occupation' => 'Agricultural Workers, All Other',
                'ar_occupation' => 'Agricultural Workers, All Other',
                'slug' => 'agricultural-workers-all-other',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:37',
                'updated_at' => '2021-02-16 06:34:37'
            ],
            26 => [
                'id' => 27,
                'en_occupation' => 'Air Crew Members',
                'ar_occupation' => 'Air Crew Members',
                'slug' => 'air-crew-members',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:37',
                'updated_at' => '2021-02-16 06:34:37'
            ],
            27 => [
                'id' => 28,
                'en_occupation' => 'Air Crew Officers',
                'ar_occupation' => 'Air Crew Officers',
                'slug' => 'air-crew-officers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:37',
                'updated_at' => '2021-02-16 06:34:37'
            ],
            28 => [
                'id' => 29,
                'en_occupation' => 'Air Traffic Controllers',
                'ar_occupation' => 'Air Traffic Controllers',
                'slug' => 'air-traffic-controllers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:37',
                'updated_at' => '2021-02-16 06:34:37'
            ],
            29 => [
                'id' => 30,
                'en_occupation' => 'Aircraft Body and Bonded Structure Repairers',
                'ar_occupation' => 'Aircraft Body and Bonded Structure Repairers',
                'slug' => 'aircraft-body-and-bonded-structure-repairers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:37',
                'updated_at' => '2021-02-16 06:34:37'
            ],
            30 => [
                'id' => 31,
                'en_occupation' => 'Aircraft Cargo Handling Supervisors',
                'ar_occupation' => 'Aircraft Cargo Handling Supervisors',
                'slug' => 'aircraft-cargo-handling-supervisors',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:37',
                'updated_at' => '2021-02-16 06:34:37'
            ],
            31 => [
                'id' => 32,
                'en_occupation' => 'Aircraft Engine Specialists',
                'ar_occupation' => 'Aircraft Engine Specialists',
                'slug' => 'aircraft-engine-specialists',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:37',
                'updated_at' => '2021-02-16 06:34:37'
            ],
            32 => [
                'id' => 33,
                'en_occupation' => 'Aircraft Launch and Recovery Officers',
                'ar_occupation' => 'Aircraft Launch and Recovery Officers',
                'slug' => 'aircraft-launch-and-recovery-officers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:37',
                'updated_at' => '2021-02-16 06:34:37'
            ],
            33 => [
                'id' => 34,
                'en_occupation' => 'Aircraft Launch and Recovery Specialists',
                'ar_occupation' => 'Aircraft Launch and Recovery Specialists',
                'slug' => 'aircraft-launch-and-recovery-specialists',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:37',
                'updated_at' => '2021-02-16 06:34:37'
            ],
            34 => [
                'id' => 35,
                'en_occupation' => 'Aircraft Mechanics and Service Technicians',
                'ar_occupation' => 'Aircraft Mechanics and Service Technicians',
                'slug' => 'aircraft-mechanics-and-service-technicians',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:37',
                'updated_at' => '2021-02-16 06:34:37'
            ],
            35 => [
                'id' => 36,
                'en_occupation' => 'Aircraft Rigging Assemblers',
                'ar_occupation' => 'Aircraft Rigging Assemblers',
                'slug' => 'aircraft-rigging-assemblers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:37',
                'updated_at' => '2021-02-16 06:34:37'
            ],
            36 => [
                'id' => 37,
                'en_occupation' => 'Aircraft Structure Assemblers, Precision',
                'ar_occupation' => 'Aircraft Structure Assemblers, Precision',
                'slug' => 'aircraft-structure-assemblers-precision',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:37',
                'updated_at' => '2021-02-16 06:34:37'
            ],
            37 => [
                'id' => 38,
                'en_occupation' => 'Aircraft Structure, Surfaces, Rigging, and Systems Assemblers',
                'ar_occupation' => 'Aircraft Structure, Surfaces, Rigging, and Systems Assemblers',
                'slug' => 'aircraft-structure-surfaces-rigging-and-systems-assemblers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:37',
                'updated_at' => '2021-02-16 06:34:37'
            ],
            38 => [
                'id' => 39,
                'en_occupation' => 'Aircraft Systems Assemblers, Precision',
                'ar_occupation' => 'Aircraft Systems Assemblers, Precision',
                'slug' => 'aircraft-systems-assemblers-precision',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:37',
                'updated_at' => '2021-02-16 06:34:37'
            ],
            39 => [
                'id' => 40,
                'en_occupation' => 'Airfield Operations Specialists',
                'ar_occupation' => 'Airfield Operations Specialists',
                'slug' => 'airfield-operations-specialists',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:37',
                'updated_at' => '2021-02-16 06:34:37'
            ],
            40 => [
                'id' => 41,
                'en_occupation' => 'Airframe-and-Power-Plant Mechanics',
                'ar_occupation' => 'Airframe-and-Power-Plant Mechanics',
                'slug' => 'airframe-and-power-plant-mechanics',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:37',
                'updated_at' => '2021-02-16 06:34:37'
            ],
            41 => [
                'id' => 42,
                'en_occupation' => 'Airline Pilots, Copilots, and Flight Engineers',
                'ar_occupation' => 'Airline Pilots, Copilots, and Flight Engineers',
                'slug' => 'airline-pilots-copilots-and-flight-engineers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:37',
                'updated_at' => '2021-02-16 06:34:37'
            ],
            42 => [
                'id' => 43,
                'en_occupation' => 'Allergists and Immunologists',
                'ar_occupation' => 'Allergists and Immunologists',
                'slug' => 'allergists-and-immunologists',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:37',
                'updated_at' => '2021-02-16 06:34:37'
            ],
            43 => [
                'id' => 44,
                'en_occupation' =>
                    'Ambulance Drivers and Attendants, Except Emergency Medical Technicians',
                'ar_occupation' =>
                    'Ambulance Drivers and Attendants, Except Emergency Medical Technicians',
                'slug' => 'ambulance-drivers-and-attendants-except-emergency-medical-technicians',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:37',
                'updated_at' => '2021-02-16 06:34:37'
            ],
            44 => [
                'id' => 45,
                'en_occupation' => 'Amusement and Recreation Attendants',
                'ar_occupation' => 'Amusement and Recreation Attendants',
                'slug' => 'amusement-and-recreation-attendants',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:37',
                'updated_at' => '2021-02-16 06:34:37'
            ],
            45 => [
                'id' => 46,
                'en_occupation' => 'Anesthesiologist Assistants',
                'ar_occupation' => 'Anesthesiologist Assistants',
                'slug' => 'anesthesiologist-assistants',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:37',
                'updated_at' => '2021-02-16 06:34:37'
            ],
            46 => [
                'id' => 47,
                'en_occupation' => 'Anesthesiologists',
                'ar_occupation' => 'Anesthesiologists',
                'slug' => 'anesthesiologists',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:37',
                'updated_at' => '2021-02-16 06:34:37'
            ],
            47 => [
                'id' => 48,
                'en_occupation' => 'Animal Breeders',
                'ar_occupation' => 'Animal Breeders',
                'slug' => 'animal-breeders',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:37',
                'updated_at' => '2021-02-16 06:34:37'
            ],
            48 => [
                'id' => 49,
                'en_occupation' => 'Animal Control Workers',
                'ar_occupation' => 'Animal Control Workers',
                'slug' => 'animal-control-workers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:37',
                'updated_at' => '2021-02-16 06:34:37'
            ],
            49 => [
                'id' => 50,
                'en_occupation' => 'Animal Scientists',
                'ar_occupation' => 'Animal Scientists',
                'slug' => 'animal-scientists',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:37',
                'updated_at' => '2021-02-16 06:34:37'
            ],
            50 => [
                'id' => 51,
                'en_occupation' => 'Animal Trainers',
                'ar_occupation' => 'Animal Trainers',
                'slug' => 'animal-trainers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:37',
                'updated_at' => '2021-02-16 06:34:37'
            ],
            51 => [
                'id' => 52,
                'en_occupation' => 'Anthropologists',
                'ar_occupation' => 'Anthropologists',
                'slug' => 'anthropologists',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:37',
                'updated_at' => '2021-02-16 06:34:37'
            ],
            52 => [
                'id' => 53,
                'en_occupation' => 'Anthropologists and Archeologists',
                'ar_occupation' => 'Anthropologists and Archeologists',
                'slug' => 'anthropologists-and-archeologists',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:37',
                'updated_at' => '2021-02-16 06:34:37'
            ],
            53 => [
                'id' => 54,
                'en_occupation' => 'Anthropology and Archeology Teachers, Postsecondary',
                'ar_occupation' => 'Anthropology and Archeology Teachers, Postsecondary',
                'slug' => 'anthropology-and-archeology-teachers-postsecondary',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:37',
                'updated_at' => '2021-02-16 06:34:37'
            ],
            54 => [
                'id' => 55,
                'en_occupation' => 'Appraisers and Assessors of Real Estate',
                'ar_occupation' => 'Appraisers and Assessors of Real Estate',
                'slug' => 'appraisers-and-assessors-of-real-estate',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:37',
                'updated_at' => '2021-02-16 06:34:37'
            ],
            55 => [
                'id' => 56,
                'en_occupation' => 'Appraisers, Real Estate',
                'ar_occupation' => 'Appraisers, Real Estate',
                'slug' => 'appraisers-real-estate',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:37',
                'updated_at' => '2021-02-16 06:34:37'
            ],
            56 => [
                'id' => 57,
                'en_occupation' => 'Aquacultural Managers',
                'ar_occupation' => 'Aquacultural Managers',
                'slug' => 'aquacultural-managers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:37',
                'updated_at' => '2021-02-16 06:34:37'
            ],
            57 => [
                'id' => 58,
                'en_occupation' => 'Arbitrators, Mediators, and Conciliators',
                'ar_occupation' => 'Arbitrators, Mediators, and Conciliators',
                'slug' => 'arbitrators-mediators-and-conciliators',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:37',
                'updated_at' => '2021-02-16 06:34:37'
            ],
            58 => [
                'id' => 59,
                'en_occupation' => 'Archeologists',
                'ar_occupation' => 'Archeologists',
                'slug' => 'archeologists',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:37',
                'updated_at' => '2021-02-16 06:34:37'
            ],
            59 => [
                'id' => 60,
                'en_occupation' => 'Architects, Except Landscape and Naval',
                'ar_occupation' => 'Architects, Except Landscape and Naval',
                'slug' => 'architects-except-landscape-and-naval',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:37',
                'updated_at' => '2021-02-16 06:34:37'
            ],
            60 => [
                'id' => 61,
                'en_occupation' => 'Architectural and Civil Drafters',
                'ar_occupation' => 'Architectural and Civil Drafters',
                'slug' => 'architectural-and-civil-drafters',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:37',
                'updated_at' => '2021-02-16 06:34:37'
            ],
            61 => [
                'id' => 62,
                'en_occupation' => 'Architectural Drafters',
                'ar_occupation' => 'Architectural Drafters',
                'slug' => 'architectural-drafters',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:37',
                'updated_at' => '2021-02-16 06:34:37'
            ],
            62 => [
                'id' => 63,
                'en_occupation' => 'Architecture Teachers, Postsecondary',
                'ar_occupation' => 'Architecture Teachers, Postsecondary',
                'slug' => 'architecture-teachers-postsecondary',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:37',
                'updated_at' => '2021-02-16 06:34:37'
            ],
            63 => [
                'id' => 64,
                'en_occupation' => 'Archivists',
                'ar_occupation' => 'Archivists',
                'slug' => 'archivists',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:37',
                'updated_at' => '2021-02-16 06:34:37'
            ],
            64 => [
                'id' => 65,
                'en_occupation' => 'Area, Ethnic, and Cultural Studies Teachers, Postsecondary',
                'ar_occupation' => 'Area, Ethnic, and Cultural Studies Teachers, Postsecondary',
                'slug' => 'area-ethnic-and-cultural-studies-teachers-postsecondary',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:37',
                'updated_at' => '2021-02-16 06:34:37'
            ],
            65 => [
                'id' => 66,
                'en_occupation' => 'Armored Assault Vehicle Crew Members',
                'ar_occupation' => 'Armored Assault Vehicle Crew Members',
                'slug' => 'armored-assault-vehicle-crew-members',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:37',
                'updated_at' => '2021-02-16 06:34:37'
            ],
            66 => [
                'id' => 67,
                'en_occupation' => 'Armored Assault Vehicle Officers',
                'ar_occupation' => 'Armored Assault Vehicle Officers',
                'slug' => 'armored-assault-vehicle-officers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:37',
                'updated_at' => '2021-02-16 06:34:37'
            ],
            67 => [
                'id' => 68,
                'en_occupation' => 'Art Directors',
                'ar_occupation' => 'Art Directors',
                'slug' => 'art-directors',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:37',
                'updated_at' => '2021-02-16 06:34:37'
            ],
            68 => [
                'id' => 69,
                'en_occupation' => 'Art Therapists',
                'ar_occupation' => 'Art Therapists',
                'slug' => 'art-therapists',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:37',
                'updated_at' => '2021-02-16 06:34:37'
            ],
            69 => [
                'id' => 70,
                'en_occupation' => 'Art, Drama, and Music Teachers, Postsecondary',
                'ar_occupation' => 'Art, Drama, and Music Teachers, Postsecondary',
                'slug' => 'art-drama-and-music-teachers-postsecondary',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:37',
                'updated_at' => '2021-02-16 06:34:37'
            ],
            70 => [
                'id' => 71,
                'en_occupation' => 'Artillery and Missile Crew Members',
                'ar_occupation' => 'Artillery and Missile Crew Members',
                'slug' => 'artillery-and-missile-crew-members',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:37',
                'updated_at' => '2021-02-16 06:34:37'
            ],
            71 => [
                'id' => 72,
                'en_occupation' => 'Artillery and Missile Officers',
                'ar_occupation' => 'Artillery and Missile Officers',
                'slug' => 'artillery-and-missile-officers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:37',
                'updated_at' => '2021-02-16 06:34:37'
            ],
            72 => [
                'id' => 73,
                'en_occupation' => 'Artists and Related Workers, All Other',
                'ar_occupation' => 'Artists and Related Workers, All Other',
                'slug' => 'artists-and-related-workers-all-other',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:37',
                'updated_at' => '2021-02-16 06:34:37'
            ],
            73 => [
                'id' => 74,
                'en_occupation' => 'Assemblers and Fabricators, All Other',
                'ar_occupation' => 'Assemblers and Fabricators, All Other',
                'slug' => 'assemblers-and-fabricators-all-other',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:37',
                'updated_at' => '2021-02-16 06:34:37'
            ],
            74 => [
                'id' => 75,
                'en_occupation' => 'Assessors',
                'ar_occupation' => 'Assessors',
                'slug' => 'assessors',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:37',
                'updated_at' => '2021-02-16 06:34:37'
            ],
            75 => [
                'id' => 76,
                'en_occupation' => 'Astronomers',
                'ar_occupation' => 'Astronomers',
                'slug' => 'astronomers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:37',
                'updated_at' => '2021-02-16 06:34:37'
            ],
            76 => [
                'id' => 77,
                'en_occupation' => 'Athletes and Sports Competitors',
                'ar_occupation' => 'Athletes and Sports Competitors',
                'slug' => 'athletes-and-sports-competitors',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:37',
                'updated_at' => '2021-02-16 06:34:37'
            ],
            77 => [
                'id' => 78,
                'en_occupation' => 'Athletic Trainers',
                'ar_occupation' => 'Athletic Trainers',
                'slug' => 'athletic-trainers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:37',
                'updated_at' => '2021-02-16 06:34:37'
            ],
            78 => [
                'id' => 79,
                'en_occupation' => 'Atmospheric and Space Scientists',
                'ar_occupation' => 'Atmospheric and Space Scientists',
                'slug' => 'atmospheric-and-space-scientists',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:37',
                'updated_at' => '2021-02-16 06:34:37'
            ],
            79 => [
                'id' => 80,
                'en_occupation' =>
                    'Atmospheric, Earth, Marine, and Space Sciences Teachers, Postsecondary',
                'ar_occupation' =>
                    'Atmospheric, Earth, Marine, and Space Sciences Teachers, Postsecondary',
                'slug' => 'atmospheric-earth-marine-and-space-sciences-teachers-postsecondary',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:37',
                'updated_at' => '2021-02-16 06:34:37'
            ],
            80 => [
                'id' => 81,
                'en_occupation' => 'Audio and Video Equipment Technicians',
                'ar_occupation' => 'Audio and Video Equipment Technicians',
                'slug' => 'audio-and-video-equipment-technicians',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:37',
                'updated_at' => '2021-02-16 06:34:37'
            ],
            81 => [
                'id' => 82,
                'en_occupation' => 'Audiologist',
                'ar_occupation' => 'Audiologist',
                'slug' => 'audiologist',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:37',
                'updated_at' => '2021-02-16 06:34:37'
            ],
            82 => [
                'id' => 83,
                'en_occupation' => 'Audiologists',
                'ar_occupation' => 'Audiologists',
                'slug' => 'audiologists',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:37',
                'updated_at' => '2021-02-16 06:34:37'
            ],
            83 => [
                'id' => 84,
                'en_occupation' => 'Audio-Visual Collections Specialists',
                'ar_occupation' => 'Audio-Visual Collections Specialists',
                'slug' => 'audio-visual-collections-specialists',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:37',
                'updated_at' => '2021-02-16 06:34:37'
            ],
            84 => [
                'id' => 85,
                'en_occupation' => 'Auditors',
                'ar_occupation' => 'Auditors',
                'slug' => 'auditors',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:37',
                'updated_at' => '2021-02-16 06:34:37'
            ],
            85 => [
                'id' => 86,
                'en_occupation' => 'Automatic Teller Machine Servicers',
                'ar_occupation' => 'Automatic Teller Machine Servicers',
                'slug' => 'automatic-teller-machine-servicers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:37',
                'updated_at' => '2021-02-16 06:34:37'
            ],
            86 => [
                'id' => 87,
                'en_occupation' => 'Automotive Body and Related Repairers',
                'ar_occupation' => 'Automotive Body and Related Repairers',
                'slug' => 'automotive-body-and-related-repairers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:37',
                'updated_at' => '2021-02-16 06:34:37'
            ],
            87 => [
                'id' => 88,
                'en_occupation' => 'Automotive Engineering Technicians',
                'ar_occupation' => 'Automotive Engineering Technicians',
                'slug' => 'automotive-engineering-technicians',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:37',
                'updated_at' => '2021-02-16 06:34:37'
            ],
            88 => [
                'id' => 89,
                'en_occupation' => 'Automotive Engineers',
                'ar_occupation' => 'Automotive Engineers',
                'slug' => 'automotive-engineers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:37',
                'updated_at' => '2021-02-16 06:34:37'
            ],
            89 => [
                'id' => 90,
                'en_occupation' => 'Automotive Glass Installers and Repairers',
                'ar_occupation' => 'Automotive Glass Installers and Repairers',
                'slug' => 'automotive-glass-installers-and-repairers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:37',
                'updated_at' => '2021-02-16 06:34:37'
            ],
            90 => [
                'id' => 91,
                'en_occupation' => 'Automotive Master Mechanics',
                'ar_occupation' => 'Automotive Master Mechanics',
                'slug' => 'automotive-master-mechanics',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:37',
                'updated_at' => '2021-02-16 06:34:37'
            ],
            91 => [
                'id' => 92,
                'en_occupation' => 'Automotive Service Technicians and Mechanics',
                'ar_occupation' => 'Automotive Service Technicians and Mechanics',
                'slug' => 'automotive-service-technicians-and-mechanics',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:37',
                'updated_at' => '2021-02-16 06:34:37'
            ],
            92 => [
                'id' => 93,
                'en_occupation' => 'Automotive Specialty Technicians',
                'ar_occupation' => 'Automotive Specialty Technicians',
                'slug' => 'automotive-specialty-technicians',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:37',
                'updated_at' => '2021-02-16 06:34:37'
            ],
            93 => [
                'id' => 94,
                'en_occupation' => 'Auxiliary Equipment Operators, Power',
                'ar_occupation' => 'Auxiliary Equipment Operators, Power',
                'slug' => 'auxiliary-equipment-operators-power',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:37',
                'updated_at' => '2021-02-16 06:34:37'
            ],
            94 => [
                'id' => 95,
                'en_occupation' => 'Aviation Inspectors',
                'ar_occupation' => 'Aviation Inspectors',
                'slug' => 'aviation-inspectors',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:37',
                'updated_at' => '2021-02-16 06:34:37'
            ],
            95 => [
                'id' => 96,
                'en_occupation' => 'Avionics Technicians',
                'ar_occupation' => 'Avionics Technicians',
                'slug' => 'avionics-technicians',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:37',
                'updated_at' => '2021-02-16 06:34:37'
            ],
            96 => [
                'id' => 97,
                'en_occupation' => 'Baggage Porters and Bellhops',
                'ar_occupation' => 'Baggage Porters and Bellhops',
                'slug' => 'baggage-porters-and-bellhops',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:37',
                'updated_at' => '2021-02-16 06:34:37'
            ],
            97 => [
                'id' => 98,
                'en_occupation' => 'Bailiffs',
                'ar_occupation' => 'Bailiffs',
                'slug' => 'bailiffs',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:37',
                'updated_at' => '2021-02-16 06:34:37'
            ],
            98 => [
                'id' => 99,
                'en_occupation' => 'Bakers',
                'ar_occupation' => 'Bakers',
                'slug' => 'bakers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:37',
                'updated_at' => '2021-02-16 06:34:37'
            ],
            99 => [
                'id' => 100,
                'en_occupation' => 'Bakers, Bread and Pastry',
                'ar_occupation' => 'Bakers, Bread and Pastry',
                'slug' => 'bakers-bread-and-pastry',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:37',
                'updated_at' => '2021-02-16 06:34:37'
            ],
            100 => [
                'id' => 101,
                'en_occupation' => 'Bakers, Manufacturing',
                'ar_occupation' => 'Bakers, Manufacturing',
                'slug' => 'bakers-manufacturing',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:37',
                'updated_at' => '2021-02-16 06:34:37'
            ],
            101 => [
                'id' => 102,
                'en_occupation' => 'Barbers',
                'ar_occupation' => 'Barbers',
                'slug' => 'barbers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:37',
                'updated_at' => '2021-02-16 06:34:37'
            ],
            102 => [
                'id' => 103,
                'en_occupation' => 'Baristas',
                'ar_occupation' => 'Baristas',
                'slug' => 'baristas',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:37',
                'updated_at' => '2021-02-16 06:34:37'
            ],
            103 => [
                'id' => 104,
                'en_occupation' => 'Bartenders',
                'ar_occupation' => 'Bartenders',
                'slug' => 'bartenders',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:37',
                'updated_at' => '2021-02-16 06:34:37'
            ],
            104 => [
                'id' => 105,
                'en_occupation' => 'Battery Repairers',
                'ar_occupation' => 'Battery Repairers',
                'slug' => 'battery-repairers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:37',
                'updated_at' => '2021-02-16 06:34:37'
            ],
            105 => [
                'id' => 106,
                'en_occupation' => 'Bench Workers, Jewelry',
                'ar_occupation' => 'Bench Workers, Jewelry',
                'slug' => 'bench-workers-jewelry',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:37',
                'updated_at' => '2021-02-16 06:34:37'
            ],
            106 => [
                'id' => 107,
                'en_occupation' => 'Bicycle Repairers',
                'ar_occupation' => 'Bicycle Repairers',
                'slug' => 'bicycle-repairers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:37',
                'updated_at' => '2021-02-16 06:34:37'
            ],
            107 => [
                'id' => 108,
                'en_occupation' => 'Bill and Account Collectors',
                'ar_occupation' => 'Bill and Account Collectors',
                'slug' => 'bill-and-account-collectors',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:37',
                'updated_at' => '2021-02-16 06:34:37'
            ],
            108 => [
                'id' => 109,
                'en_occupation' => 'Billing and Posting Clerks and Machine Operators',
                'ar_occupation' => 'Billing and Posting Clerks and Machine Operators',
                'slug' => 'billing-and-posting-clerks-and-machine-operators',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:37',
                'updated_at' => '2021-02-16 06:34:37'
            ],
            109 => [
                'id' => 110,
                'en_occupation' => 'Billing, Cost, and Rate Clerks',
                'ar_occupation' => 'Billing, Cost, and Rate Clerks',
                'slug' => 'billing-cost-and-rate-clerks',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:37',
                'updated_at' => '2021-02-16 06:34:37'
            ],
            110 => [
                'id' => 111,
                'en_occupation' => 'Billing, Posting, and Calculating Machine Operators',
                'ar_occupation' => 'Billing, Posting, and Calculating Machine Operators',
                'slug' => 'billing-posting-and-calculating-machine-operators',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:37',
                'updated_at' => '2021-02-16 06:34:37'
            ],
            111 => [
                'id' => 112,
                'en_occupation' => 'Bindery Machine Operators and Tenders',
                'ar_occupation' => 'Bindery Machine Operators and Tenders',
                'slug' => 'bindery-machine-operators-and-tenders',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:37',
                'updated_at' => '2021-02-16 06:34:37'
            ],
            112 => [
                'id' => 113,
                'en_occupation' => 'Bindery Machine Setters and Set-Up Operators',
                'ar_occupation' => 'Bindery Machine Setters and Set-Up Operators',
                'slug' => 'bindery-machine-setters-and-set-up-operators',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:37',
                'updated_at' => '2021-02-16 06:34:37'
            ],
            113 => [
                'id' => 114,
                'en_occupation' => 'Bindery Workers',
                'ar_occupation' => 'Bindery Workers',
                'slug' => 'bindery-workers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:37',
                'updated_at' => '2021-02-16 06:34:37'
            ],
            114 => [
                'id' => 115,
                'en_occupation' => 'Biochemical Engineers',
                'ar_occupation' => 'Biochemical Engineers',
                'slug' => 'biochemical-engineers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:37',
                'updated_at' => '2021-02-16 06:34:37'
            ],
            115 => [
                'id' => 116,
                'en_occupation' => 'Biochemists',
                'ar_occupation' => 'Biochemists',
                'slug' => 'biochemists',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:37',
                'updated_at' => '2021-02-16 06:34:37'
            ],
            116 => [
                'id' => 117,
                'en_occupation' => 'Biochemists and Biophysicists',
                'ar_occupation' => 'Biochemists and Biophysicists',
                'slug' => 'biochemists-and-biophysicists',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:37',
                'updated_at' => '2021-02-16 06:34:37'
            ],
            117 => [
                'id' => 118,
                'en_occupation' => 'Biofuels Processing Technicians',
                'ar_occupation' => 'Biofuels Processing Technicians',
                'slug' => 'biofuels-processing-technicians',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:37',
                'updated_at' => '2021-02-16 06:34:37'
            ],
            118 => [
                'id' => 119,
                'en_occupation' => 'Biofuels Production Managers',
                'ar_occupation' => 'Biofuels Production Managers',
                'slug' => 'biofuels-production-managers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:37',
                'updated_at' => '2021-02-16 06:34:37'
            ],
            119 => [
                'id' => 120,
                'en_occupation' => 'Biofuels/Biodiesel Technology and Product Development Managers',
                'ar_occupation' => 'Biofuels/Biodiesel Technology and Product Development Managers',
                'slug' => 'biofuelsbiodiesel-technology-and-product-development-managers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:37',
                'updated_at' => '2021-02-16 06:34:37'
            ],
            120 => [
                'id' => 121,
                'en_occupation' => 'Bioinformatics Scientists',
                'ar_occupation' => 'Bioinformatics Scientists',
                'slug' => 'bioinformatics-scientists',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:37',
                'updated_at' => '2021-02-16 06:34:37'
            ],
            121 => [
                'id' => 122,
                'en_occupation' => 'Bioinformatics Technicians',
                'ar_occupation' => 'Bioinformatics Technicians',
                'slug' => 'bioinformatics-technicians',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:37',
                'updated_at' => '2021-02-16 06:34:37'
            ],
            122 => [
                'id' => 123,
                'en_occupation' => 'Biological Science Teachers, Postsecondary',
                'ar_occupation' => 'Biological Science Teachers, Postsecondary',
                'slug' => 'biological-science-teachers-postsecondary',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:37',
                'updated_at' => '2021-02-16 06:34:37'
            ],
            123 => [
                'id' => 124,
                'en_occupation' => 'Biological Scientists, All Other',
                'ar_occupation' => 'Biological Scientists, All Other',
                'slug' => 'biological-scientists-all-other',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:37',
                'updated_at' => '2021-02-16 06:34:37'
            ],
            124 => [
                'id' => 125,
                'en_occupation' => 'Biological Technicians',
                'ar_occupation' => 'Biological Technicians',
                'slug' => 'biological-technicians',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:37',
                'updated_at' => '2021-02-16 06:34:37'
            ],
            125 => [
                'id' => 126,
                'en_occupation' => 'Biologists',
                'ar_occupation' => 'Biologists',
                'slug' => 'biologists',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            126 => [
                'id' => 127,
                'en_occupation' => 'Biomass Plant Technicians',
                'ar_occupation' => 'Biomass Plant Technicians',
                'slug' => 'biomass-plant-technicians',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            127 => [
                'id' => 128,
                'en_occupation' => 'Biomass Power Plant Managers',
                'ar_occupation' => 'Biomass Power Plant Managers',
                'slug' => 'biomass-power-plant-managers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            128 => [
                'id' => 129,
                'en_occupation' => 'Biomedical Engineers',
                'ar_occupation' => 'Biomedical Engineers',
                'slug' => 'biomedical-engineers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            129 => [
                'id' => 130,
                'en_occupation' => 'Biophysicists',
                'ar_occupation' => 'Biophysicists',
                'slug' => 'biophysicists',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            130 => [
                'id' => 131,
                'en_occupation' => 'Biostatisticians',
                'ar_occupation' => 'Biostatisticians',
                'slug' => 'biostatisticians',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            131 => [
                'id' => 132,
                'en_occupation' => 'Boat Builders and Shipwrights',
                'ar_occupation' => 'Boat Builders and Shipwrights',
                'slug' => 'boat-builders-and-shipwrights',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            132 => [
                'id' => 133,
                'en_occupation' => 'Boiler Operators and Tenders, Low Pressure',
                'ar_occupation' => 'Boiler Operators and Tenders, Low Pressure',
                'slug' => 'boiler-operators-and-tenders-low-pressure',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            133 => [
                'id' => 134,
                'en_occupation' => 'Boilermakers',
                'ar_occupation' => 'Boilermakers',
                'slug' => 'boilermakers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            134 => [
                'id' => 135,
                'en_occupation' => 'Bookbinders',
                'ar_occupation' => 'Bookbinders',
                'slug' => 'bookbinders',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            135 => [
                'id' => 136,
                'en_occupation' => 'Bookkeeping, Accounting, and Auditing Clerks',
                'ar_occupation' => 'Bookkeeping, Accounting, and Auditing Clerks',
                'slug' => 'bookkeeping-accounting-and-auditing-clerks',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            136 => [
                'id' => 137,
                'en_occupation' => 'Brattice Builders',
                'ar_occupation' => 'Brattice Builders',
                'slug' => 'brattice-builders',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            137 => [
                'id' => 138,
                'en_occupation' => 'Brazers',
                'ar_occupation' => 'Brazers',
                'slug' => 'brazers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            138 => [
                'id' => 139,
                'en_occupation' => 'Brickmasons and Blockmasons',
                'ar_occupation' => 'Brickmasons and Blockmasons',
                'slug' => 'brickmasons-and-blockmasons',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            139 => [
                'id' => 140,
                'en_occupation' => 'Bridge and Lock Tenders',
                'ar_occupation' => 'Bridge and Lock Tenders',
                'slug' => 'bridge-and-lock-tenders',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            140 => [
                'id' => 141,
                'en_occupation' => 'Broadcast News Analysts',
                'ar_occupation' => 'Broadcast News Analysts',
                'slug' => 'broadcast-news-analysts',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            141 => [
                'id' => 142,
                'en_occupation' => 'Broadcast Technicians',
                'ar_occupation' => 'Broadcast Technicians',
                'slug' => 'broadcast-technicians',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            142 => [
                'id' => 143,
                'en_occupation' => 'Brokerage Clerks',
                'ar_occupation' => 'Brokerage Clerks',
                'slug' => 'brokerage-clerks',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            143 => [
                'id' => 144,
                'en_occupation' => 'Brownfield Redevelopment Specialists and Site Managers',
                'ar_occupation' => 'Brownfield Redevelopment Specialists and Site Managers',
                'slug' => 'brownfield-redevelopment-specialists-and-site-managers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            144 => [
                'id' => 145,
                'en_occupation' => 'Budget Analysts',
                'ar_occupation' => 'Budget Analysts',
                'slug' => 'budget-analysts',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            145 => [
                'id' => 146,
                'en_occupation' => 'Buffing and Polishing Set-Up Operators',
                'ar_occupation' => 'Buffing and Polishing Set-Up Operators',
                'slug' => 'buffing-and-polishing-set-up-operators',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            146 => [
                'id' => 147,
                'en_occupation' => 'Building Cleaning Workers, All Other',
                'ar_occupation' => 'Building Cleaning Workers, All Other',
                'slug' => 'building-cleaning-workers-all-other',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            147 => [
                'id' => 148,
                'en_occupation' => 'Bus and Truck Mechanics and Diesel Engine Specialists',
                'ar_occupation' => 'Bus and Truck Mechanics and Diesel Engine Specialists',
                'slug' => 'bus-and-truck-mechanics-and-diesel-engine-specialists',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            148 => [
                'id' => 149,
                'en_occupation' => 'Bus Drivers, School',
                'ar_occupation' => 'Bus Drivers, School',
                'slug' => 'bus-drivers-school',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            149 => [
                'id' => 150,
                'en_occupation' => 'Bus Drivers, Transit and Intercity',
                'ar_occupation' => 'Bus Drivers, Transit and Intercity',
                'slug' => 'bus-drivers-transit-and-intercity',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            150 => [
                'id' => 151,
                'en_occupation' => 'Business Continuity Planners',
                'ar_occupation' => 'Business Continuity Planners',
                'slug' => 'business-continuity-planners',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            151 => [
                'id' => 152,
                'en_occupation' => 'Business Intelligence Analysts',
                'ar_occupation' => 'Business Intelligence Analysts',
                'slug' => 'business-intelligence-analysts',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            152 => [
                'id' => 153,
                'en_occupation' => 'Business Operations Specialists, All Other',
                'ar_occupation' => 'Business Operations Specialists, All Other',
                'slug' => 'business-operations-specialists-all-other',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            153 => [
                'id' => 154,
                'en_occupation' => 'Business Teachers, Postsecondary',
                'ar_occupation' => 'Business Teachers, Postsecondary',
                'slug' => 'business-teachers-postsecondary',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            154 => [
                'id' => 155,
                'en_occupation' => 'Butchers and Meat Cutters',
                'ar_occupation' => 'Butchers and Meat Cutters',
                'slug' => 'butchers-and-meat-cutters',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            155 => [
                'id' => 156,
                'en_occupation' => 'Cabinetmakers and Bench Carpenters',
                'ar_occupation' => 'Cabinetmakers and Bench Carpenters',
                'slug' => 'cabinetmakers-and-bench-carpenters',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            156 => [
                'id' => 157,
                'en_occupation' => 'Calibration and Instrumentation Technicians',
                'ar_occupation' => 'Calibration and Instrumentation Technicians',
                'slug' => 'calibration-and-instrumentation-technicians',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            157 => [
                'id' => 158,
                'en_occupation' => 'Camera and Photographic Equipment Repairers',
                'ar_occupation' => 'Camera and Photographic Equipment Repairers',
                'slug' => 'camera-and-photographic-equipment-repairers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            158 => [
                'id' => 159,
                'en_occupation' => 'Camera Operators',
                'ar_occupation' => 'Camera Operators',
                'slug' => 'camera-operators',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            159 => [
                'id' => 160,
                'en_occupation' => 'Camera Operators, Television, Video, and Motion Picture',
                'ar_occupation' => 'Camera Operators, Television, Video, and Motion Picture',
                'slug' => 'camera-operators-television-video-and-motion-picture',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            160 => [
                'id' => 161,
                'en_occupation' => 'Captains, Mates, and Pilots of Water Vessels',
                'ar_occupation' => 'Captains, Mates, and Pilots of Water Vessels',
                'slug' => 'captains-mates-and-pilots-of-water-vessels',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            161 => [
                'id' => 162,
                'en_occupation' => 'Caption Writers',
                'ar_occupation' => 'Caption Writers',
                'slug' => 'caption-writers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            162 => [
                'id' => 163,
                'en_occupation' => 'Cardiovascular Technologists and Technicians',
                'ar_occupation' => 'Cardiovascular Technologists and Technicians',
                'slug' => 'cardiovascular-technologists-and-technicians',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            163 => [
                'id' => 164,
                'en_occupation' => 'Cargo and Freight Agents',
                'ar_occupation' => 'Cargo and Freight Agents',
                'slug' => 'cargo-and-freight-agents',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            164 => [
                'id' => 165,
                'en_occupation' => 'Carpenter Assemblers and Repairers',
                'ar_occupation' => 'Carpenter Assemblers and Repairers',
                'slug' => 'carpenter-assemblers-and-repairers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            165 => [
                'id' => 166,
                'en_occupation' => 'Carpenters',
                'ar_occupation' => 'Carpenters',
                'slug' => 'carpenters',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            166 => [
                'id' => 167,
                'en_occupation' => 'Carpet Installers',
                'ar_occupation' => 'Carpet Installers',
                'slug' => 'carpet-installers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            167 => [
                'id' => 168,
                'en_occupation' => 'Cartographers and Photogrammetrists',
                'ar_occupation' => 'Cartographers and Photogrammetrists',
                'slug' => 'cartographers-and-photogrammetrists',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            168 => [
                'id' => 169,
                'en_occupation' => 'Cartoonists',
                'ar_occupation' => 'Cartoonists',
                'slug' => 'cartoonists',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            169 => [
                'id' => 170,
                'en_occupation' => 'Cashiers',
                'ar_occupation' => 'Cashiers',
                'slug' => 'cashiers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            170 => [
                'id' => 171,
                'en_occupation' => 'Casting Machine Set-Up Operators',
                'ar_occupation' => 'Casting Machine Set-Up Operators',
                'slug' => 'casting-machine-set-up-operators',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            171 => [
                'id' => 172,
                'en_occupation' => 'Ceiling Tile Installers',
                'ar_occupation' => 'Ceiling Tile Installers',
                'slug' => 'ceiling-tile-installers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            172 => [
                'id' => 173,
                'en_occupation' => 'Cement Masons and Concrete Finishers',
                'ar_occupation' => 'Cement Masons and Concrete Finishers',
                'slug' => 'cement-masons-and-concrete-finishers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            173 => [
                'id' => 174,
                'en_occupation' => 'Cementing and Gluing Machine Operators and Tenders',
                'ar_occupation' => 'Cementing and Gluing Machine Operators and Tenders',
                'slug' => 'cementing-and-gluing-machine-operators-and-tenders',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            174 => [
                'id' => 175,
                'en_occupation' => 'Central Office and PBX Installers and Repairers',
                'ar_occupation' => 'Central Office and PBX Installers and Repairers',
                'slug' => 'central-office-and-pbx-installers-and-repairers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            175 => [
                'id' => 176,
                'en_occupation' => 'Central Office Operators',
                'ar_occupation' => 'Central Office Operators',
                'slug' => 'central-office-operators',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            176 => [
                'id' => 177,
                'en_occupation' => 'Chefs and Head Cooks',
                'ar_occupation' => 'Chefs and Head Cooks',
                'slug' => 'chefs-and-head-cooks',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            177 => [
                'id' => 178,
                'en_occupation' => 'Chemical Engineers',
                'ar_occupation' => 'Chemical Engineers',
                'slug' => 'chemical-engineers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            178 => [
                'id' => 179,
                'en_occupation' => 'Chemical Equipment Controllers and Operators',
                'ar_occupation' => 'Chemical Equipment Controllers and Operators',
                'slug' => 'chemical-equipment-controllers-and-operators',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            179 => [
                'id' => 180,
                'en_occupation' => 'Chemical Equipment Operators and Tenders',
                'ar_occupation' => 'Chemical Equipment Operators and Tenders',
                'slug' => 'chemical-equipment-operators-and-tenders',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            180 => [
                'id' => 181,
                'en_occupation' => 'Chemical Equipment Tenders',
                'ar_occupation' => 'Chemical Equipment Tenders',
                'slug' => 'chemical-equipment-tenders',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            181 => [
                'id' => 182,
                'en_occupation' => 'Chemical Plant and System Operators',
                'ar_occupation' => 'Chemical Plant and System Operators',
                'slug' => 'chemical-plant-and-system-operators',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            182 => [
                'id' => 183,
                'en_occupation' => 'Chemical Technicians',
                'ar_occupation' => 'Chemical Technicians',
                'slug' => 'chemical-technicians',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            183 => [
                'id' => 184,
                'en_occupation' => 'Chemistry Teachers, Postsecondary',
                'ar_occupation' => 'Chemistry Teachers, Postsecondary',
                'slug' => 'chemistry-teachers-postsecondary',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            184 => [
                'id' => 185,
                'en_occupation' => 'Chemists',
                'ar_occupation' => 'Chemists',
                'slug' => 'chemists',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            185 => [
                'id' => 186,
                'en_occupation' => 'Chief Executives',
                'ar_occupation' => 'Chief Executives',
                'slug' => 'chief-executives',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            186 => [
                'id' => 187,
                'en_occupation' => 'Chief Sustainability Officers',
                'ar_occupation' => 'Chief Sustainability Officers',
                'slug' => 'chief-sustainability-officers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            187 => [
                'id' => 188,
                'en_occupation' => 'Child Care Workers',
                'ar_occupation' => 'Child Care Workers',
                'slug' => 'child-care-workers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            188 => [
                'id' => 189,
                'en_occupation' =>
                    'Child Support, Missing Persons, and Unemployment Insurance Fraud Investigators',
                'ar_occupation' =>
                    'Child Support, Missing Persons, and Unemployment Insurance Fraud Investigators',
                'slug' => 'child-support-missing-persons-and-unemployment-insurance-fraud-investigators',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            189 => [
                'id' => 190,
                'en_occupation' => 'Child, Family, and School Social Workers',
                'ar_occupation' => 'Child, Family, and School Social Workers',
                'slug' => 'child-family-and-school-social-workers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            190 => [
                'id' => 191,
                'en_occupation' => 'Chiropractors',
                'ar_occupation' => 'Chiropractors',
                'slug' => 'chiropractors',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            191 => [
                'id' => 192,
                'en_occupation' => 'Choreographers',
                'ar_occupation' => 'Choreographers',
                'slug' => 'choreographers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            192 => [
                'id' => 193,
                'en_occupation' => 'City Planning Aides',
                'ar_occupation' => 'City Planning Aides',
                'slug' => 'city-planning-aides',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            193 => [
                'id' => 194,
                'en_occupation' => 'Civil Drafters',
                'ar_occupation' => 'Civil Drafters',
                'slug' => 'civil-drafters',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            194 => [
                'id' => 195,
                'en_occupation' => 'Civil Engineering Technicians',
                'ar_occupation' => 'Civil Engineering Technicians',
                'slug' => 'civil-engineering-technicians',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            195 => [
                'id' => 196,
                'en_occupation' => 'Civil Engineers',
                'ar_occupation' => 'Civil Engineers',
                'slug' => 'civil-engineers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            196 => [
                'id' => 197,
                'en_occupation' => 'Claims Adjusters, Examiners, and Investigators',
                'ar_occupation' => 'Claims Adjusters, Examiners, and Investigators',
                'slug' => 'claims-adjusters-examiners-and-investigators',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            197 => [
                'id' => 198,
                'en_occupation' => 'Claims Examiners, Property and Casualty Insurance',
                'ar_occupation' => 'Claims Examiners, Property and Casualty Insurance',
                'slug' => 'claims-examiners-property-and-casualty-insurance',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            198 => [
                'id' => 199,
                'en_occupation' => 'Claims Takers, Unemployment Benefits',
                'ar_occupation' => 'Claims Takers, Unemployment Benefits',
                'slug' => 'claims-takers-unemployment-benefits',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            199 => [
                'id' => 200,
                'en_occupation' => 'Cleaners of Vehicles and Equipment',
                'ar_occupation' => 'Cleaners of Vehicles and Equipment',
                'slug' => 'cleaners-of-vehicles-and-equipment',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            200 => [
                'id' => 201,
                'en_occupation' =>
                    'Cleaning, Washing, and Metal Pickling Equipment Operators and Tenders',
                'ar_occupation' =>
                    'Cleaning, Washing, and Metal Pickling Equipment Operators and Tenders',
                'slug' => 'cleaning-washing-and-metal-pickling-equipment-operators-and-tenders',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            201 => [
                'id' => 202,
                'en_occupation' => 'Clergy',
                'ar_occupation' => 'Clergy',
                'slug' => 'clergy',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            202 => [
                'id' => 203,
                'en_occupation' => 'Climate Change Analysts',
                'ar_occupation' => 'Climate Change Analysts',
                'slug' => 'climate-change-analysts',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            203 => [
                'id' => 204,
                'en_occupation' => 'Clinical Data Managers',
                'ar_occupation' => 'Clinical Data Managers',
                'slug' => 'clinical-data-managers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            204 => [
                'id' => 205,
                'en_occupation' => 'Clinical Nurse Specialists',
                'ar_occupation' => 'Clinical Nurse Specialists',
                'slug' => 'clinical-nurse-specialists',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            205 => [
                'id' => 206,
                'en_occupation' => 'Clinical Psychologists',
                'ar_occupation' => 'Clinical Psychologists',
                'slug' => 'clinical-psychologists',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            206 => [
                'id' => 207,
                'en_occupation' => 'Clinical Research Coordinators',
                'ar_occupation' => 'Clinical Research Coordinators',
                'slug' => 'clinical-research-coordinators',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            207 => [
                'id' => 208,
                'en_occupation' => 'Clinical, Counseling, and School Psychologists',
                'ar_occupation' => 'Clinical, Counseling, and School Psychologists',
                'slug' => 'clinical-counseling-and-school-psychologists',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            208 => [
                'id' => 209,
                'en_occupation' => 'Coaches and Scouts',
                'ar_occupation' => 'Coaches and Scouts',
                'slug' => 'coaches-and-scouts',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            209 => [
                'id' => 210,
                'en_occupation' => 'Coating, Painting, and Spraying Machine Operators and Tenders',
                'ar_occupation' => 'Coating, Painting, and Spraying Machine Operators and Tenders',
                'slug' => 'coating-painting-and-spraying-machine-operators-and-tenders',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            210 => [
                'id' => 211,
                'en_occupation' =>
                    'Coating, Painting, and Spraying Machine Setters and Set-Up Operators',
                'ar_occupation' =>
                    'Coating, Painting, and Spraying Machine Setters and Set-Up Operators',
                'slug' => 'coating-painting-and-spraying-machine-setters-and-set-up-operators',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            211 => [
                'id' => 212,
                'en_occupation' =>
                    'Coating, Painting, and Spraying Machine Setters, Operators, and Tenders',
                'ar_occupation' =>
                    'Coating, Painting, and Spraying Machine Setters, Operators, and Tenders',
                'slug' => 'coating-painting-and-spraying-machine-setters-operators-and-tenders',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            212 => [
                'id' => 213,
                'en_occupation' => 'Coil Winders, Tapers, and Finishers',
                'ar_occupation' => 'Coil Winders, Tapers, and Finishers',
                'slug' => 'coil-winders-tapers-and-finishers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            213 => [
                'id' => 214,
                'en_occupation' => 'Coin, Vending, and Amusement Machine Servicers and Repairers',
                'ar_occupation' => 'Coin, Vending, and Amusement Machine Servicers and Repairers',
                'slug' => 'coin-vending-and-amusement-machine-servicers-and-repairers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            214 => [
                'id' => 215,
                'en_occupation' => 'Combination Machine Tool Operators and Tenders, Metal and Plastic',
                'ar_occupation' => 'Combination Machine Tool Operators and Tenders, Metal and Plastic',
                'slug' => 'combination-machine-tool-operators-and-tenders-metal-and-plastic',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            215 => [
                'id' => 216,
                'en_occupation' =>
                    'Combination Machine Tool Setters and Set-Up Operators, Metal and Plastic',
                'ar_occupation' =>
                    'Combination Machine Tool Setters and Set-Up Operators, Metal and Plastic',
                'slug' => 'combination-machine-tool-setters-and-set-up-operators-metal-and-plastic',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            216 => [
                'id' => 217,
                'en_occupation' => 'Combined Food Preparation and Serving Workers, Including Fast Food',
                'ar_occupation' => 'Combined Food Preparation and Serving Workers, Including Fast Food',
                'slug' => 'combined-food-preparation-and-serving-workers-including-fast-food',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            217 => [
                'id' => 218,
                'en_occupation' => 'Command and Control Center Officers',
                'ar_occupation' => 'Command and Control Center Officers',
                'slug' => 'command-and-control-center-officers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            218 => [
                'id' => 219,
                'en_occupation' => 'Command and Control Center Specialists',
                'ar_occupation' => 'Command and Control Center Specialists',
                'slug' => 'command-and-control-center-specialists',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            219 => [
                'id' => 220,
                'en_occupation' => 'Commercial and Industrial Designers',
                'ar_occupation' => 'Commercial and Industrial Designers',
                'slug' => 'commercial-and-industrial-designers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            220 => [
                'id' => 221,
                'en_occupation' => 'Commercial Divers',
                'ar_occupation' => 'Commercial Divers',
                'slug' => 'commercial-divers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            221 => [
                'id' => 222,
                'en_occupation' => 'Commercial Pilots',
                'ar_occupation' => 'Commercial Pilots',
                'slug' => 'commercial-pilots',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            222 => [
                'id' => 223,
                'en_occupation' => 'Communication Equipment Mechanics, Installers, and Repairers',
                'ar_occupation' => 'Communication Equipment Mechanics, Installers, and Repairers',
                'slug' => 'communication-equipment-mechanics-installers-and-repairers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            223 => [
                'id' => 224,
                'en_occupation' => 'Communications Equipment Operators, All Other',
                'ar_occupation' => 'Communications Equipment Operators, All Other',
                'slug' => 'communications-equipment-operators-all-other',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            224 => [
                'id' => 225,
                'en_occupation' => 'Communications Teachers, Postsecondary',
                'ar_occupation' => 'Communications Teachers, Postsecondary',
                'slug' => 'communications-teachers-postsecondary',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            225 => [
                'id' => 226,
                'en_occupation' => 'Community and Social Service Specialists, All Other',
                'ar_occupation' => 'Community and Social Service Specialists, All Other',
                'slug' => 'community-and-social-service-specialists-all-other',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            226 => [
                'id' => 227,
                'en_occupation' => 'Community Health Workers',
                'ar_occupation' => 'Community Health Workers',
                'slug' => 'community-health-workers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            227 => [
                'id' => 228,
                'en_occupation' =>
                    'Compensation and Benefits Managers 229) Compensation and Benefits Managers',
                'ar_occupation' =>
                    'Compensation and Benefits Managers 229) Compensation and Benefits Managers',
                'slug' => 'compensation-and-benefits-managers-229-compensation-and-benefits-managers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            228 => [
                'id' => 229,
                'en_occupation' => 'Compensation, Benefits, and Job Analysis Specialist',
                'ar_occupation' => 'Compensation, Benefits, and Job Analysis Specialist',
                'slug' => 'compensation-benefits-and-job-analysis-specialist',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            229 => [
                'id' => 230,
                'en_occupation' => 'Compensation, Benefits, and Job Analysis Specialists',
                'ar_occupation' => 'Compensation, Benefits, and Job Analysis Specialists',
                'slug' => 'compensation-benefits-and-job-analysis-specialists',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            230 => [
                'id' => 231,
                'en_occupation' => 'Compliance Managers',
                'ar_occupation' => 'Compliance Managers',
                'slug' => 'compliance-managers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            231 => [
                'id' => 232,
                'en_occupation' =>
                    'Compliance Officers, Except Agriculture, Construction, Health and Safety, and Transportation',
                'ar_occupation' =>
                    'Compliance Officers, Except Agriculture, Construction, Health and Safety, and Transportation',
                'slug' =>
                    'compliance-officers-except-agriculture-construction-health-and-safety-and-transportation',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            232 => [
                'id' => 233,
                'en_occupation' => 'Composers',
                'ar_occupation' => 'Composers',
                'slug' => 'composers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            233 => [
                'id' => 234,
                'en_occupation' => 'Computer and Information Research Scientists',
                'ar_occupation' => 'Computer and Information Research Scientists',
                'slug' => 'computer-and-information-research-scientists',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            234 => [
                'id' => 235,
                'en_occupation' => 'Computer and Information Scientists, Research',
                'ar_occupation' => 'Computer and Information Scientists, Research',
                'slug' => 'computer-and-information-scientists-research',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            235 => [
                'id' => 236,
                'en_occupation' => 'Computer and Information Systems Managers',
                'ar_occupation' => 'Computer and Information Systems Managers',
                'slug' => 'computer-and-information-systems-managers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            236 => [
                'id' => 237,
                'en_occupation' => 'Computer Hardware Engineers',
                'ar_occupation' => 'Computer Hardware Engineers',
                'slug' => 'computer-hardware-engineers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            237 => [
                'id' => 238,
                'en_occupation' => 'Computer Network Architects',
                'ar_occupation' => 'Computer Network Architects',
                'slug' => 'computer-network-architects',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            238 => [
                'id' => 239,
                'en_occupation' => 'Computer Network Support Specialists',
                'ar_occupation' => 'Computer Network Support Specialists',
                'slug' => 'computer-network-support-specialists',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            239 => [
                'id' => 240,
                'en_occupation' => 'Computer Operators',
                'ar_occupation' => 'Computer Operators',
                'slug' => 'computer-operators',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            240 => [
                'id' => 241,
                'en_occupation' => 'Computer Programmer',
                'ar_occupation' => 'Computer Programmer',
                'slug' => 'computer-programmer',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            241 => [
                'id' => 242,
                'en_occupation' => 'Computer Programmers',
                'ar_occupation' => 'Computer Programmers',
                'slug' => 'computer-programmers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            242 => [
                'id' => 243,
                'en_occupation' => 'Computer Science Teachers, Postsecondary',
                'ar_occupation' => 'Computer Science Teachers, Postsecondary',
                'slug' => 'computer-science-teachers-postsecondary',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            243 => [
                'id' => 244,
                'en_occupation' => 'Computer Security Specialists',
                'ar_occupation' => 'Computer Security Specialists',
                'slug' => 'computer-security-specialists',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            244 => [
                'id' => 245,
                'en_occupation' => 'Computer Software Engineers, Applications',
                'ar_occupation' => 'Computer Software Engineers, Applications',
                'slug' => 'computer-software-engineers-applications',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            245 => [
                'id' => 246,
                'en_occupation' => 'Computer Software Engineers, Systems Software',
                'ar_occupation' => 'Computer Software Engineers, Systems Software',
                'slug' => 'computer-software-engineers-systems-software',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            246 => [
                'id' => 247,
                'en_occupation' => 'Computer Specialists, All Other',
                'ar_occupation' => 'Computer Specialists, All Other',
                'slug' => 'computer-specialists-all-other',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            247 => [
                'id' => 248,
                'en_occupation' => 'Computer Support Specialists',
                'ar_occupation' => 'Computer Support Specialists',
                'slug' => 'computer-support-specialists',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            248 => [
                'id' => 249,
                'en_occupation' => 'Computer Systems Analyst',
                'ar_occupation' => 'Computer Systems Analyst',
                'slug' => 'computer-systems-analyst',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            249 => [
                'id' => 250,
                'en_occupation' => 'Computer Systems Analysts',
                'ar_occupation' => 'Computer Systems Analysts',
                'slug' => 'computer-systems-analysts',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            250 => [
                'id' => 251,
                'en_occupation' => 'Computer Systems Engineers/Architects',
                'ar_occupation' => 'Computer Systems Engineers/Architects',
                'slug' => 'computer-systems-engineersarchitects',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            251 => [
                'id' => 252,
                'en_occupation' => 'Computer User Support Specialists',
                'ar_occupation' => 'Computer User Support Specialists',
                'slug' => 'computer-user-support-specialists',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            252 => [
                'id' => 253,
                'en_occupation' => 'Computer, Automated Teller, and Office Machine Repairers',
                'ar_occupation' => 'Computer, Automated Teller, and Office Machine Repairers',
                'slug' => 'computer-automated-teller-and-office-machine-repairers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            253 => [
                'id' => 254,
                'en_occupation' => 'Computer-Controlled Machine Tool Operators, Metal and Plastic',
                'ar_occupation' => 'Computer-Controlled Machine Tool Operators, Metal and Plastic',
                'slug' => 'computer-controlled-machine-tool-operators-metal-and-plastic',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            254 => [
                'id' => 255,
                'en_occupation' => 'Concierges',
                'ar_occupation' => 'Concierges',
                'slug' => 'concierges',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            255 => [
                'id' => 256,
                'en_occupation' => 'Conservation Scientists',
                'ar_occupation' => 'Conservation Scientists',
                'slug' => 'conservation-scientists',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            256 => [
                'id' => 257,
                'en_occupation' => 'Construction and Building Inspectors',
                'ar_occupation' => 'Construction and Building Inspectors',
                'slug' => 'construction-and-building-inspectors',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            257 => [
                'id' => 258,
                'en_occupation' => 'Construction and Related Workers, All Other',
                'ar_occupation' => 'Construction and Related Workers, All Other',
                'slug' => 'construction-and-related-workers-all-other',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            258 => [
                'id' => 259,
                'en_occupation' => 'Construction Carpenters',
                'ar_occupation' => 'Construction Carpenters',
                'slug' => 'construction-carpenters',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            259 => [
                'id' => 260,
                'en_occupation' => 'Construction Drillers',
                'ar_occupation' => 'Construction Drillers',
                'slug' => 'construction-drillers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            260 => [
                'id' => 261,
                'en_occupation' => 'Construction Laborers',
                'ar_occupation' => 'Construction Laborers',
                'slug' => 'construction-laborers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            261 => [
                'id' => 262,
                'en_occupation' => 'Construction Managers',
                'ar_occupation' => 'Construction Managers',
                'slug' => 'construction-managers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            262 => [
                'id' => 263,
                'en_occupation' => 'Continuous Mining Machine Operators',
                'ar_occupation' => 'Continuous Mining Machine Operators',
                'slug' => 'continuous-mining-machine-operators',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            263 => [
                'id' => 264,
                'en_occupation' => 'Control and Valve Installers and Repairers, Except Mechanical Door',
                'ar_occupation' => 'Control and Valve Installers and Repairers, Except Mechanical Door',
                'slug' => 'control-and-valve-installers-and-repairers-except-mechanical-door',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            264 => [
                'id' => 265,
                'en_occupation' => 'Conveyor Operators and Tenders',
                'ar_occupation' => 'Conveyor Operators and Tenders',
                'slug' => 'conveyor-operators-and-tenders',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            265 => [
                'id' => 266,
                'en_occupation' => 'Cooks, All Other',
                'ar_occupation' => 'Cooks, All Other',
                'slug' => 'cooks-all-other',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            266 => [
                'id' => 267,
                'en_occupation' => 'Cooks, Fast Food',
                'ar_occupation' => 'Cooks, Fast Food',
                'slug' => 'cooks-fast-food',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            267 => [
                'id' => 268,
                'en_occupation' => 'Cooks, Institution and Cafeteria',
                'ar_occupation' => 'Cooks, Institution and Cafeteria',
                'slug' => 'cooks-institution-and-cafeteria',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            268 => [
                'id' => 269,
                'en_occupation' => 'Cooks, Private Household',
                'ar_occupation' => 'Cooks, Private Household',
                'slug' => 'cooks-private-household',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            269 => [
                'id' => 270,
                'en_occupation' => 'Cooks, Restaurant',
                'ar_occupation' => 'Cooks, Restaurant',
                'slug' => 'cooks-restaurant',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            270 => [
                'id' => 271,
                'en_occupation' => 'Cooks, Short Order',
                'ar_occupation' => 'Cooks, Short Order',
                'slug' => 'cooks-short-order',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            271 => [
                'id' => 272,
                'en_occupation' => 'Cooling and Freezing Equipment Operators and Tenders',
                'ar_occupation' => 'Cooling and Freezing Equipment Operators and Tenders',
                'slug' => 'cooling-and-freezing-equipment-operators-and-tenders',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            272 => [
                'id' => 273,
                'en_occupation' => 'Copy Writers',
                'ar_occupation' => 'Copy Writers',
                'slug' => 'copy-writers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            273 => [
                'id' => 274,
                'en_occupation' => 'Coroners',
                'ar_occupation' => 'Coroners',
                'slug' => 'coroners',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            274 => [
                'id' => 275,
                'en_occupation' => 'Correctional Officers and Jailers',
                'ar_occupation' => 'Correctional Officers and Jailers',
                'slug' => 'correctional-officers-and-jailers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            275 => [
                'id' => 276,
                'en_occupation' => 'Correspondence Clerks',
                'ar_occupation' => 'Correspondence Clerks',
                'slug' => 'correspondence-clerks',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            276 => [
                'id' => 277,
                'en_occupation' => 'Cost Estimators',
                'ar_occupation' => 'Cost Estimators',
                'slug' => 'cost-estimators',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            277 => [
                'id' => 278,
                'en_occupation' => 'Costume Attendants',
                'ar_occupation' => 'Costume Attendants',
                'slug' => 'costume-attendants',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            278 => [
                'id' => 279,
                'en_occupation' => 'Counseling Psychologists',
                'ar_occupation' => 'Counseling Psychologists',
                'slug' => 'counseling-psychologists',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            279 => [
                'id' => 280,
                'en_occupation' => 'Counselors, All Other',
                'ar_occupation' => 'Counselors, All Other',
                'slug' => 'counselors-all-other',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            280 => [
                'id' => 281,
                'en_occupation' => 'Counter and Rental Clerks',
                'ar_occupation' => 'Counter and Rental Clerks',
                'slug' => 'counter-and-rental-clerks',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            281 => [
                'id' => 282,
                'en_occupation' => 'Counter Attendants, Cafeteria, Food Concession, and Coffee Shop',
                'ar_occupation' => 'Counter Attendants, Cafeteria, Food Concession, and Coffee Shop',
                'slug' => 'counter-attendants-cafeteria-food-concession-and-coffee-shop',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            282 => [
                'id' => 283,
                'en_occupation' => 'Couriers and Messengers',
                'ar_occupation' => 'Couriers and Messengers',
                'slug' => 'couriers-and-messengers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            283 => [
                'id' => 284,
                'en_occupation' => 'Court Clerks',
                'ar_occupation' => 'Court Clerks',
                'slug' => 'court-clerks',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            284 => [
                'id' => 285,
                'en_occupation' => 'Court Reporters',
                'ar_occupation' => 'Court Reporters',
                'slug' => 'court-reporters',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            285 => [
                'id' => 286,
                'en_occupation' => 'Court, Municipal, and License Clerks',
                'ar_occupation' => 'Court, Municipal, and License Clerks',
                'slug' => 'court-municipal-and-license-clerks',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            286 => [
                'id' => 287,
                'en_occupation' => 'Craft Artists',
                'ar_occupation' => 'Craft Artists',
                'slug' => 'craft-artists',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            287 => [
                'id' => 288,
                'en_occupation' => 'Crane and Tower Operators',
                'ar_occupation' => 'Crane and Tower Operators',
                'slug' => 'crane-and-tower-operators',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            288 => [
                'id' => 289,
                'en_occupation' => 'Creative Writers',
                'ar_occupation' => 'Creative Writers',
                'slug' => 'creative-writers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            289 => [
                'id' => 290,
                'en_occupation' => 'Credit Analysts',
                'ar_occupation' => 'Credit Analysts',
                'slug' => 'credit-analysts',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            290 => [
                'id' => 291,
                'en_occupation' => 'Credit Authorizers',
                'ar_occupation' => 'Credit Authorizers',
                'slug' => 'credit-authorizers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            291 => [
                'id' => 292,
                'en_occupation' => 'Credit Authorizers, Checkers, and Clerks',
                'ar_occupation' => 'Credit Authorizers, Checkers, and Clerks',
                'slug' => 'credit-authorizers-checkers-and-clerks',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            292 => [
                'id' => 293,
                'en_occupation' => 'Credit Checkers',
                'ar_occupation' => 'Credit Checkers',
                'slug' => 'credit-checkers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            293 => [
                'id' => 294,
                'en_occupation' => 'Criminal Investigators and Special Agents',
                'ar_occupation' => 'Criminal Investigators and Special Agents',
                'slug' => 'criminal-investigators-and-special-agents',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            294 => [
                'id' => 295,
                'en_occupation' => 'Criminal Justice and Law Enforcement Teachers, Postsecondary',
                'ar_occupation' => 'Criminal Justice and Law Enforcement Teachers, Postsecondary',
                'slug' => 'criminal-justice-and-law-enforcement-teachers-postsecondary',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            295 => [
                'id' => 296,
                'en_occupation' => 'Critical Care Nurses',
                'ar_occupation' => 'Critical Care Nurses',
                'slug' => 'critical-care-nurses',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            296 => [
                'id' => 297,
                'en_occupation' => 'Crossing Guards',
                'ar_occupation' => 'Crossing Guards',
                'slug' => 'crossing-guards',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            297 => [
                'id' => 298,
                'en_occupation' =>
                    'Crushing, Grinding, and Polishing Machine Setters, Operators, and Tenders',
                'ar_occupation' =>
                    'Crushing, Grinding, and Polishing Machine Setters, Operators, and Tenders',
                'slug' => 'crushing-grinding-and-polishing-machine-setters-operators-and-tenders',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            298 => [
                'id' => 299,
                'en_occupation' => 'Curators',
                'ar_occupation' => 'Curators',
                'slug' => 'curators',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            299 => [
                'id' => 300,
                'en_occupation' => 'Custom Tailors',
                'ar_occupation' => 'Custom Tailors',
                'slug' => 'custom-tailors',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            300 => [
                'id' => 301,
                'en_occupation' => 'Customer Service Representatives',
                'ar_occupation' => 'Customer Service Representatives',
                'slug' => 'customer-service-representatives',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            301 => [
                'id' => 302,
                'en_occupation' => 'Customer Service Representatives, Utilities',
                'ar_occupation' => 'Customer Service Representatives, Utilities',
                'slug' => 'customer-service-representatives-utilities',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            302 => [
                'id' => 303,
                'en_occupation' => 'Customs Brokers',
                'ar_occupation' => 'Customs Brokers',
                'slug' => 'customs-brokers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            303 => [
                'id' => 304,
                'en_occupation' => 'Cutters and Trimmers, Hand',
                'ar_occupation' => 'Cutters and Trimmers, Hand',
                'slug' => 'cutters-and-trimmers-hand',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            304 => [
                'id' => 305,
                'en_occupation' => 'Cutting and Slicing Machine Operators and Tenders',
                'ar_occupation' => 'Cutting and Slicing Machine Operators and Tenders',
                'slug' => 'cutting-and-slicing-machine-operators-and-tenders',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            305 => [
                'id' => 306,
                'en_occupation' => 'Cutting and Slicing Machine Setters, Operators, and Tenders',
                'ar_occupation' => 'Cutting and Slicing Machine Setters, Operators, and Tenders',
                'slug' => 'cutting-and-slicing-machine-setters-operators-and-tenders',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            306 => [
                'id' => 307,
                'en_occupation' =>
                    'Cutting, Punching, and Press Machine Setters, Operators, and Tenders, Metal and Plastic',
                'ar_occupation' =>
                    'Cutting, Punching, and Press Machine Setters, Operators, and Tenders, Metal and Plastic',
                'slug' =>
                    'cutting-punching-and-press-machine-setters-operators-and-tenders-metal-and-plastic',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            307 => [
                'id' => 308,
                'en_occupation' => 'Cytogenetic Technologists',
                'ar_occupation' => 'Cytogenetic Technologists',
                'slug' => 'cytogenetic-technologists',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            308 => [
                'id' => 309,
                'en_occupation' => 'Cytotechnologists',
                'ar_occupation' => 'Cytotechnologists',
                'slug' => 'cytotechnologists',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            309 => [
                'id' => 310,
                'en_occupation' => 'Dancers',
                'ar_occupation' => 'Dancers',
                'slug' => 'dancers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            310 => [
                'id' => 311,
                'en_occupation' => 'Data Entry Keyers',
                'ar_occupation' => 'Data Entry Keyers',
                'slug' => 'data-entry-keyers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            311 => [
                'id' => 312,
                'en_occupation' => 'Data Processing Equipment Repairers',
                'ar_occupation' => 'Data Processing Equipment Repairers',
                'slug' => 'data-processing-equipment-repairers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            312 => [
                'id' => 313,
                'en_occupation' => 'Data Warehousing Specialists',
                'ar_occupation' => 'Data Warehousing Specialists',
                'slug' => 'data-warehousing-specialists',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            313 => [
                'id' => 314,
                'en_occupation' => 'Database Administrator',
                'ar_occupation' => 'Database Administrator',
                'slug' => 'database-administrator',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            314 => [
                'id' => 315,
                'en_occupation' => 'Database Administrators',
                'ar_occupation' => 'Database Administrators',
                'slug' => 'database-administrators',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            315 => [
                'id' => 316,
                'en_occupation' => 'Database Architects',
                'ar_occupation' => 'Database Architects',
                'slug' => 'database-architects',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            316 => [
                'id' => 317,
                'en_occupation' => 'Demonstrators and Product Promoters',
                'ar_occupation' => 'Demonstrators and Product Promoters',
                'slug' => 'demonstrators-and-product-promoters',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            317 => [
                'id' => 318,
                'en_occupation' => 'Dental Assistants',
                'ar_occupation' => 'Dental Assistants',
                'slug' => 'dental-assistants',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            318 => [
                'id' => 319,
                'en_occupation' => 'Dental Hygienists',
                'ar_occupation' => 'Dental Hygienists',
                'slug' => 'dental-hygienists',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            319 => [
                'id' => 320,
                'en_occupation' => 'Dental Laboratory Technicians',
                'ar_occupation' => 'Dental Laboratory Technicians',
                'slug' => 'dental-laboratory-technicians',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            320 => [
                'id' => 321,
                'en_occupation' => 'Dentists, All Other Specialists',
                'ar_occupation' => 'Dentists, All Other Specialists',
                'slug' => 'dentists-all-other-specialists',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            321 => [
                'id' => 322,
                'en_occupation' => 'Dentists, General',
                'ar_occupation' => 'Dentists, General',
                'slug' => 'dentists-general',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            322 => [
                'id' => 323,
                'en_occupation' => 'Dermatologists',
                'ar_occupation' => 'Dermatologists',
                'slug' => 'dermatologists',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            323 => [
                'id' => 324,
                'en_occupation' => 'Derrick Operators, Oil and Gas',
                'ar_occupation' => 'Derrick Operators, Oil and Gas',
                'slug' => 'derrick-operators-oil-and-gas',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            324 => [
                'id' => 325,
                'en_occupation' => 'Design Printing Machine Setters and Set-Up Operators',
                'ar_occupation' => 'Design Printing Machine Setters and Set-Up Operators',
                'slug' => 'design-printing-machine-setters-and-set-up-operators',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            325 => [
                'id' => 326,
                'en_occupation' => 'Designers, All Other',
                'ar_occupation' => 'Designers, All Other',
                'slug' => 'designers-all-other',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            326 => [
                'id' => 327,
                'en_occupation' => 'Desktop Publishers',
                'ar_occupation' => 'Desktop Publishers',
                'slug' => 'desktop-publishers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            327 => [
                'id' => 328,
                'en_occupation' => 'Detectives and Criminal Investigators',
                'ar_occupation' => 'Detectives and Criminal Investigators',
                'slug' => 'detectives-and-criminal-investigators',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            328 => [
                'id' => 329,
                'en_occupation' => 'Diagnostic Medical Sonographers',
                'ar_occupation' => 'Diagnostic Medical Sonographers',
                'slug' => 'diagnostic-medical-sonographers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            329 => [
                'id' => 330,
                'en_occupation' => 'Dietetic Technicians',
                'ar_occupation' => 'Dietetic Technicians',
                'slug' => 'dietetic-technicians',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            330 => [
                'id' => 331,
                'en_occupation' => 'Dietitians and Nutritionists',
                'ar_occupation' => 'Dietitians and Nutritionists',
                'slug' => 'dietitians-and-nutritionists',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            331 => [
                'id' => 332,
                'en_occupation' => 'Dining Room and Cafeteria Attendants and Bartender Helpers',
                'ar_occupation' => 'Dining Room and Cafeteria Attendants and Bartender Helpers',
                'slug' => 'dining-room-and-cafeteria-attendants-and-bartender-helpers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            332 => [
                'id' => 333,
                'en_occupation' => 'Directors- Stage, Motion Pictures, Television, and Radio',
                'ar_occupation' => 'Directors- Stage, Motion Pictures, Television, and Radio',
                'slug' => 'directors-stage-motion-pictures-television-and-radio',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            333 => [
                'id' => 334,
                'en_occupation' => 'Directors, Religious Activities and Education',
                'ar_occupation' => 'Directors, Religious Activities and Education',
                'slug' => 'directors-religious-activities-and-education',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            334 => [
                'id' => 335,
                'en_occupation' => 'Directory Assistance Operators',
                'ar_occupation' => 'Directory Assistance Operators',
                'slug' => 'directory-assistance-operators',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            335 => [
                'id' => 336,
                'en_occupation' => 'Dishwashers',
                'ar_occupation' => 'Dishwashers',
                'slug' => 'dishwashers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            336 => [
                'id' => 337,
                'en_occupation' => 'Dispatchers, Except Police, Fire, and Ambulance',
                'ar_occupation' => 'Dispatchers, Except Police, Fire, and Ambulance',
                'slug' => 'dispatchers-except-police-fire-and-ambulance',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            337 => [
                'id' => 338,
                'en_occupation' => 'Distance Learning Coordinators',
                'ar_occupation' => 'Distance Learning Coordinators',
                'slug' => 'distance-learning-coordinators',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            338 => [
                'id' => 339,
                'en_occupation' =>
                    'Document Management Specialists 341) Door-To-Door Sales Workers, News and Street Vendors, and Related Workers',
                'ar_occupation' =>
                    'Document Management Specialists 341) Door-To-Door Sales Workers, News and Street Vendors, and Related Workers',
                'slug' =>
                    'document-management-specialists-341-door-to-door-sales-workers-news-and-street-vendors-and-related-workers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            339 => [
                'id' => 340,
                'en_occupation' => 'Dot Etchers',
                'ar_occupation' => 'Dot Etchers',
                'slug' => 'dot-etchers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            340 => [
                'id' => 341,
                'en_occupation' => 'Drafters, All Other',
                'ar_occupation' => 'Drafters, All Other',
                'slug' => 'drafters-all-other',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            341 => [
                'id' => 342,
                'en_occupation' => 'Dragline Operators',
                'ar_occupation' => 'Dragline Operators',
                'slug' => 'dragline-operators',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            342 => [
                'id' => 343,
                'en_occupation' => 'Dredge Operators',
                'ar_occupation' => 'Dredge Operators',
                'slug' => 'dredge-operators',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            343 => [
                'id' => 344,
                'en_occupation' =>
                    'Drilling and Boring Machine Tool Setters, Operators, and Tenders, Metal and Plastic',
                'ar_occupation' =>
                    'Drilling and Boring Machine Tool Setters, Operators, and Tenders, Metal and Plastic',
                'slug' =>
                    'drilling-and-boring-machine-tool-setters-operators-and-tenders-metal-and-plastic',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            344 => [
                'id' => 345,
                'en_occupation' => 'Driver-Sales Workers',
                'ar_occupation' => 'Driver-Sales Workers',
                'slug' => 'driver-sales-workers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            345 => [
                'id' => 346,
                'en_occupation' => 'Drywall and Ceiling Tile Installers',
                'ar_occupation' => 'Drywall and Ceiling Tile Installers',
                'slug' => 'drywall-and-ceiling-tile-installers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            346 => [
                'id' => 347,
                'en_occupation' => 'Drywall Installers',
                'ar_occupation' => 'Drywall Installers',
                'slug' => 'drywall-installers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            347 => [
                'id' => 348,
                'en_occupation' => 'Duplicating Machine Operators',
                'ar_occupation' => 'Duplicating Machine Operators',
                'slug' => 'duplicating-machine-operators',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            348 => [
                'id' => 349,
                'en_occupation' => 'Earth Drillers, Except Oil and Gas',
                'ar_occupation' => 'Earth Drillers, Except Oil and Gas',
                'slug' => 'earth-drillers-except-oil-and-gas',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            349 => [
                'id' => 350,
                'en_occupation' => 'Economics Teachers, Postsecondary',
                'ar_occupation' => 'Economics Teachers, Postsecondary',
                'slug' => 'economics-teachers-postsecondary',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            350 => [
                'id' => 351,
                'en_occupation' => 'Economists',
                'ar_occupation' => 'Economists',
                'slug' => 'economists',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            351 => [
                'id' => 352,
                'en_occupation' => 'Editors',
                'ar_occupation' => 'Editors',
                'slug' => 'editors',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            352 => [
                'id' => 353,
                'en_occupation' => 'Education Administrators, All Other',
                'ar_occupation' => 'Education Administrators, All Other',
                'slug' => 'education-administrators-all-other',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            353 => [
                'id' => 354,
                'en_occupation' => 'Education Administrators, Elementary and Secondary School',
                'ar_occupation' => 'Education Administrators, Elementary and Secondary School',
                'slug' => 'education-administrators-elementary-and-secondary-school',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            354 => [
                'id' => 355,
                'en_occupation' => 'Education Administrators, Postsecondary',
                'ar_occupation' => 'Education Administrators, Postsecondary',
                'slug' => 'education-administrators-postsecondary',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            355 => [
                'id' => 356,
                'en_occupation' => 'Education Administrators, Preschool and Child Care Center--Program',
                'ar_occupation' => 'Education Administrators, Preschool and Child Care Center--Program',
                'slug' => 'education-administrators-preschool-and-child-care-center-program',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            356 => [
                'id' => 357,
                'en_occupation' => 'Education Teachers, Postsecondary',
                'ar_occupation' => 'Education Teachers, Postsecondary',
                'slug' => 'education-teachers-postsecondary',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            357 => [
                'id' => 358,
                'en_occupation' => 'Education, Training, and Library Workers, All Other',
                'ar_occupation' => 'Education, Training, and Library Workers, All Other',
                'slug' => 'education-training-and-library-workers-all-other',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            358 => [
                'id' => 359,
                'en_occupation' => 'Educational Psychologists',
                'ar_occupation' => 'Educational Psychologists',
                'slug' => 'educational-psychologists',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            359 => [
                'id' => 360,
                'en_occupation' => 'Educational, Vocational, and School Counselors',
                'ar_occupation' => 'Educational, Vocational, and School Counselors',
                'slug' => 'educational-vocational-and-school-counselors',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            360 => [
                'id' => 361,
                'en_occupation' => 'Electric Home Appliance and Power Tool Repairers',
                'ar_occupation' => 'Electric Home Appliance and Power Tool Repairers',
                'slug' => 'electric-home-appliance-and-power-tool-repairers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            361 => [
                'id' => 362,
                'en_occupation' => 'Electric Meter Installers and Repairers',
                'ar_occupation' => 'Electric Meter Installers and Repairers',
                'slug' => 'electric-meter-installers-and-repairers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            362 => [
                'id' => 363,
                'en_occupation' => 'Electric Motor and Switch Assemblers and Repairers',
                'ar_occupation' => 'Electric Motor and Switch Assemblers and Repairers',
                'slug' => 'electric-motor-and-switch-assemblers-and-repairers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            363 => [
                'id' => 364,
                'en_occupation' => 'Electric Motor, Power Tool, and Related Repairers',
                'ar_occupation' => 'Electric Motor, Power Tool, and Related Repairers',
                'slug' => 'electric-motor-power-tool-and-related-repairers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            364 => [
                'id' => 365,
                'en_occupation' => 'Electrical and Electronic Engineering Technicians',
                'ar_occupation' => 'Electrical and Electronic Engineering Technicians',
                'slug' => 'electrical-and-electronic-engineering-technicians',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            365 => [
                'id' => 366,
                'en_occupation' => 'Electrical and Electronic Equipment Assemblers',
                'ar_occupation' => 'Electrical and Electronic Equipment Assemblers',
                'slug' => 'electrical-and-electronic-equipment-assemblers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            366 => [
                'id' => 367,
                'en_occupation' => 'Electrical and Electronic Inspectors and Testers',
                'ar_occupation' => 'Electrical and Electronic Inspectors and Testers',
                'slug' => 'electrical-and-electronic-inspectors-and-testers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            367 => [
                'id' => 368,
                'en_occupation' => 'Electrical and Electronics Drafters',
                'ar_occupation' => 'Electrical and Electronics Drafters',
                'slug' => 'electrical-and-electronics-drafters',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            368 => [
                'id' => 369,
                'en_occupation' =>
                    'Electrical and Electronics Installers and Repairers, Transportation Equipment',
                'ar_occupation' =>
                    'Electrical and Electronics Installers and Repairers, Transportation Equipment',
                'slug' => 'electrical-and-electronics-installers-and-repairers-transportation-equipment',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            369 => [
                'id' => 370,
                'en_occupation' =>
                    'Electrical and Electronics Repairers, Commercial and Industrial Equipment',
                'ar_occupation' =>
                    'Electrical and Electronics Repairers, Commercial and Industrial Equipment',
                'slug' => 'electrical-and-electronics-repairers-commercial-and-industrial-equipment',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            370 => [
                'id' => 371,
                'en_occupation' =>
                    'Electrical and Electronics Repairers, Powerhouse, Substation, and Relay',
                'ar_occupation' =>
                    'Electrical and Electronics Repairers, Powerhouse, Substation, and Relay',
                'slug' => 'electrical-and-electronics-repairers-powerhouse-substation-and-relay',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            371 => [
                'id' => 372,
                'en_occupation' => 'Electrical Drafters',
                'ar_occupation' => 'Electrical Drafters',
                'slug' => 'electrical-drafters',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            372 => [
                'id' => 373,
                'en_occupation' => 'Electrical Engineering Technicians',
                'ar_occupation' => 'Electrical Engineering Technicians',
                'slug' => 'electrical-engineering-technicians',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:38',
                'updated_at' => '2021-02-16 06:34:38'
            ],
            373 => [
                'id' => 374,
                'en_occupation' => 'Electrical Engineering Technologists',
                'ar_occupation' => 'Electrical Engineering Technologists',
                'slug' => 'electrical-engineering-technologists',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            374 => [
                'id' => 375,
                'en_occupation' => 'Electrical Engineers',
                'ar_occupation' => 'Electrical Engineers',
                'slug' => 'electrical-engineers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            375 => [
                'id' => 376,
                'en_occupation' => 'Electrical Parts Reconditioners',
                'ar_occupation' => 'Electrical Parts Reconditioners',
                'slug' => 'electrical-parts-reconditioners',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            376 => [
                'id' => 377,
                'en_occupation' => 'Electrical Power-Line Installers and Repairers',
                'ar_occupation' => 'Electrical Power-Line Installers and Repairers',
                'slug' => 'electrical-power-line-installers-and-repairers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            377 => [
                'id' => 378,
                'en_occupation' => 'Electricians',
                'ar_occupation' => 'Electricians',
                'slug' => 'electricians',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            378 => [
                'id' => 379,
                'en_occupation' =>
                    'Electrolytic Plating and Coating Machine Operators and Tenders, Metal and Plastic',
                'ar_occupation' =>
                    'Electrolytic Plating and Coating Machine Operators and Tenders, Metal and Plastic',
                'slug' =>
                    'electrolytic-plating-and-coating-machine-operators-and-tenders-metal-and-plastic',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            379 => [
                'id' => 380,
                'en_occupation' =>
                    'Electrolytic Plating and Coating Machine Setters and Set-Up Operators, Metal and Plastic',
                'ar_occupation' =>
                    'Electrolytic Plating and Coating Machine Setters and Set-Up Operators, Metal and Plastic',
                'slug' =>
                    'electrolytic-plating-and-coating-machine-setters-and-set-up-operators-metal-and-plastic',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            380 => [
                'id' => 381,
                'en_occupation' => 'Electromechanical Engineering Technologists',
                'ar_occupation' => 'Electromechanical Engineering Technologists',
                'slug' => 'electromechanical-engineering-technologists',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            381 => [
                'id' => 382,
                'en_occupation' => 'Electromechanical Equipment Assemblers',
                'ar_occupation' => 'Electromechanical Equipment Assemblers',
                'slug' => 'electromechanical-equipment-assemblers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            382 => [
                'id' => 383,
                'en_occupation' => 'Electro-Mechanical Technicians',
                'ar_occupation' => 'Electro-Mechanical Technicians',
                'slug' => 'electro-mechanical-technicians',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            383 => [
                'id' => 384,
                'en_occupation' => 'Electronic Drafters',
                'ar_occupation' => 'Electronic Drafters',
                'slug' => 'electronic-drafters',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            384 => [
                'id' => 385,
                'en_occupation' => 'Electronic Equipment Installers and Repairers, Motor Vehicles',
                'ar_occupation' => 'Electronic Equipment Installers and Repairers, Motor Vehicles',
                'slug' => 'electronic-equipment-installers-and-repairers-motor-vehicles',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            385 => [
                'id' => 386,
                'en_occupation' => 'Electronic Home Entertainment Equipment Installers and Repairers',
                'ar_occupation' => 'Electronic Home Entertainment Equipment Installers and Repairers',
                'slug' => 'electronic-home-entertainment-equipment-installers-and-repairers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            386 => [
                'id' => 387,
                'en_occupation' => 'Electronic Masking System Operators',
                'ar_occupation' => 'Electronic Masking System Operators',
                'slug' => 'electronic-masking-system-operators',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            387 => [
                'id' => 388,
                'en_occupation' => 'Electronics Engineering Technicians',
                'ar_occupation' => 'Electronics Engineering Technicians',
                'slug' => 'electronics-engineering-technicians',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            388 => [
                'id' => 389,
                'en_occupation' => 'Electronics Engineering Technologists',
                'ar_occupation' => 'Electronics Engineering Technologists',
                'slug' => 'electronics-engineering-technologists',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            389 => [
                'id' => 390,
                'en_occupation' => 'Electronics Engineers, Except Computer',
                'ar_occupation' => 'Electronics Engineers, Except Computer',
                'slug' => 'electronics-engineers-except-computer',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            390 => [
                'id' => 391,
                'en_occupation' => 'Electrotypers and Stereotypers',
                'ar_occupation' => 'Electrotypers and Stereotypers',
                'slug' => 'electrotypers-and-stereotypers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            391 => [
                'id' => 392,
                'en_occupation' => 'Elementary School Teachers, Except Special Education',
                'ar_occupation' => 'Elementary School Teachers, Except Special Education',
                'slug' => 'elementary-school-teachers-except-special-education',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            392 => [
                'id' => 393,
                'en_occupation' => 'Elevator Installers and Repairers',
                'ar_occupation' => 'Elevator Installers and Repairers',
                'slug' => 'elevator-installers-and-repairers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            393 => [
                'id' => 394,
                'en_occupation' => 'Eligibility Interviewers, Government Programs',
                'ar_occupation' => 'Eligibility Interviewers, Government Programs',
                'slug' => 'eligibility-interviewers-government-programs',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            394 => [
                'id' => 395,
                'en_occupation' => 'Embalmers',
                'ar_occupation' => 'Embalmers',
                'slug' => 'embalmers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            395 => [
                'id' => 396,
                'en_occupation' => 'Embossing Machine Set-Up Operators',
                'ar_occupation' => 'Embossing Machine Set-Up Operators',
                'slug' => 'embossing-machine-set-up-operators',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            396 => [
                'id' => 397,
                'en_occupation' => 'Emergency Management Directors',
                'ar_occupation' => 'Emergency Management Directors',
                'slug' => 'emergency-management-directors',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            397 => [
                'id' => 398,
                'en_occupation' => 'Emergency Management Specialists',
                'ar_occupation' => 'Emergency Management Specialists',
                'slug' => 'emergency-management-specialists',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            398 => [
                'id' => 399,
                'en_occupation' => 'Emergency Medical Technicians and Paramedics',
                'ar_occupation' => 'Emergency Medical Technicians and Paramedics',
                'slug' => 'emergency-medical-technicians-and-paramedics',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            399 => [
                'id' => 400,
                'en_occupation' => 'Employment Interviewers, Private or Public Employment Service',
                'ar_occupation' => 'Employment Interviewers, Private or Public Employment Service',
                'slug' => 'employment-interviewers-private-or-public-employment-service',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            400 => [
                'id' => 401,
                'en_occupation' => 'Employment, Recruitment, and Placement Specialists',
                'ar_occupation' => 'Employment, Recruitment, and Placement Specialists',
                'slug' => 'employment-recruitment-and-placement-specialists',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            401 => [
                'id' => 402,
                'en_occupation' => 'Endoscopy Technicians',
                'ar_occupation' => 'Endoscopy Technicians',
                'slug' => 'endoscopy-technicians',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            402 => [
                'id' => 403,
                'en_occupation' => 'Energy Auditors',
                'ar_occupation' => 'Energy Auditors',
                'slug' => 'energy-auditors',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            403 => [
                'id' => 404,
                'en_occupation' => 'Energy Brokers',
                'ar_occupation' => 'Energy Brokers',
                'slug' => 'energy-brokers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            404 => [
                'id' => 405,
                'en_occupation' => 'Energy Engineers',
                'ar_occupation' => 'Energy Engineers',
                'slug' => 'energy-engineers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            405 => [
                'id' => 406,
                'en_occupation' => 'Engine and Other Machine Assemblers',
                'ar_occupation' => 'Engine and Other Machine Assemblers',
                'slug' => 'engine-and-other-machine-assemblers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            406 => [
                'id' => 407,
                'en_occupation' => 'Engineering Managers',
                'ar_occupation' => 'Engineering Managers',
                'slug' => 'engineering-managers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            407 => [
                'id' => 408,
                'en_occupation' => 'Engineering Teachers, Postsecondary',
                'ar_occupation' => 'Engineering Teachers, Postsecondary',
                'slug' => 'engineering-teachers-postsecondary',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            408 => [
                'id' => 409,
                'en_occupation' => 'Engineering Technicians, Except Drafters, All Other',
                'ar_occupation' => 'Engineering Technicians, Except Drafters, All Other',
                'slug' => 'engineering-technicians-except-drafters-all-other',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            409 => [
                'id' => 410,
                'en_occupation' => 'Engineers, All Other',
                'ar_occupation' => 'Engineers, All Other',
                'slug' => 'engineers-all-other',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            410 => [
                'id' => 411,
                'en_occupation' => 'English Language and Literature Teachers, Postsecondary',
                'ar_occupation' => 'English Language and Literature Teachers, Postsecondary',
                'slug' => 'english-language-and-literature-teachers-postsecondary',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            411 => [
                'id' => 412,
                'en_occupation' => 'Engraver Set-Up Operators',
                'ar_occupation' => 'Engraver Set-Up Operators',
                'slug' => 'engraver-set-up-operators',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            412 => [
                'id' => 413,
                'en_occupation' => 'Engravers, Hand',
                'ar_occupation' => 'Engravers, Hand',
                'slug' => 'engravers-hand',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            413 => [
                'id' => 414,
                'en_occupation' => 'Engravers--Carvers',
                'ar_occupation' => 'Engravers--Carvers',
                'slug' => 'engravers-carvers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            414 => [
                'id' => 415,
                'en_occupation' => 'Entertainers and Performers, Sports and Related Workers, All Other',
                'ar_occupation' => 'Entertainers and Performers, Sports and Related Workers, All Other',
                'slug' => 'entertainers-and-performers-sports-and-related-workers-all-other',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            415 => [
                'id' => 416,
                'en_occupation' => 'Entertainment Attendants and Related Workers, All Other',
                'ar_occupation' => 'Entertainment Attendants and Related Workers, All Other',
                'slug' => 'entertainment-attendants-and-related-workers-all-other',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            416 => [
                'id' => 417,
                'en_occupation' => 'Environmental Compliance Inspectors',
                'ar_occupation' => 'Environmental Compliance Inspectors',
                'slug' => 'environmental-compliance-inspectors',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            417 => [
                'id' => 418,
                'en_occupation' => 'Environmental Economists',
                'ar_occupation' => 'Environmental Economists',
                'slug' => 'environmental-economists',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            418 => [
                'id' => 419,
                'en_occupation' => 'Environmental Engineering Technicians',
                'ar_occupation' => 'Environmental Engineering Technicians',
                'slug' => 'environmental-engineering-technicians',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            419 => [
                'id' => 420,
                'en_occupation' => 'Environmental Engineers',
                'ar_occupation' => 'Environmental Engineers',
                'slug' => 'environmental-engineers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            420 => [
                'id' => 421,
                'en_occupation' => 'Environmental Restoration Planners',
                'ar_occupation' => 'Environmental Restoration Planners',
                'slug' => 'environmental-restoration-planners',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            421 => [
                'id' => 422,
                'en_occupation' => 'Environmental Science and Protection Technicians, Including Health',
                'ar_occupation' => 'Environmental Science and Protection Technicians, Including Health',
                'slug' => 'environmental-science-and-protection-technicians-including-health',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            422 => [
                'id' => 423,
                'en_occupation' => 'Environmental Science Teachers, Postsecondary',
                'ar_occupation' => 'Environmental Science Teachers, Postsecondary',
                'slug' => 'environmental-science-teachers-postsecondary',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            423 => [
                'id' => 424,
                'en_occupation' => 'Environmental Scientists and Specialists, Including Health',
                'ar_occupation' => 'Environmental Scientists and Specialists, Including Health',
                'slug' => 'environmental-scientists-and-specialists-including-health',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            424 => [
                'id' => 425,
                'en_occupation' => 'Epidemiologists',
                'ar_occupation' => 'Epidemiologists',
                'slug' => 'epidemiologists',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            425 => [
                'id' => 426,
                'en_occupation' => 'Equal Opportunity Representatives and Officers',
                'ar_occupation' => 'Equal Opportunity Representatives and Officers',
                'slug' => 'equal-opportunity-representatives-and-officers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            426 => [
                'id' => 427,
                'en_occupation' => 'Etchers',
                'ar_occupation' => 'Etchers',
                'slug' => 'etchers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            427 => [
                'id' => 428,
                'en_occupation' => 'Etchers and Engravers',
                'ar_occupation' => 'Etchers and Engravers',
                'slug' => 'etchers-and-engravers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            428 => [
                'id' => 429,
                'en_occupation' => 'Etchers, Hand',
                'ar_occupation' => 'Etchers, Hand',
                'slug' => 'etchers-hand',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            429 => [
                'id' => 430,
                'en_occupation' => 'Excavating and Loading Machine and Dragline Operators',
                'ar_occupation' => 'Excavating and Loading Machine and Dragline Operators',
                'slug' => 'excavating-and-loading-machine-and-dragline-operators',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            430 => [
                'id' => 431,
                'en_occupation' => 'Excavating and Loading Machine Operators',
                'ar_occupation' => 'Excavating and Loading Machine Operators',
                'slug' => 'excavating-and-loading-machine-operators',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            431 => [
                'id' => 432,
                'en_occupation' => 'Executive Secretaries and Administrative Assistants',
                'ar_occupation' => 'Executive Secretaries and Administrative Assistants',
                'slug' => 'executive-secretaries-and-administrative-assistants',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            432 => [
                'id' => 433,
                'en_occupation' => 'Exercise Physiologists',
                'ar_occupation' => 'Exercise Physiologists',
                'slug' => 'exercise-physiologists',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            433 => [
                'id' => 434,
                'en_occupation' => 'Exhibit Designers',
                'ar_occupation' => 'Exhibit Designers',
                'slug' => 'exhibit-designers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            434 => [
                'id' => 435,
                'en_occupation' => 'Explosives Workers, Ordnance Handling Experts, and Blasters',
                'ar_occupation' => 'Explosives Workers, Ordnance Handling Experts, and Blasters',
                'slug' => 'explosives-workers-ordnance-handling-experts-and-blasters',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            435 => [
                'id' => 436,
                'en_occupation' => 'Extraction Workers, All Other',
                'ar_occupation' => 'Extraction Workers, All Other',
                'slug' => 'extraction-workers-all-other',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            436 => [
                'id' => 437,
                'en_occupation' =>
                    'Extruding and Drawing Machine Setters, Operators, and Tenders, Metal and Plastic',
                'ar_occupation' =>
                    'Extruding and Drawing Machine Setters, Operators, and Tenders, Metal and Plastic',
                'slug' =>
                    'extruding-and-drawing-machine-setters-operators-and-tenders-metal-and-plastic',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            437 => [
                'id' => 438,
                'en_occupation' =>
                    'Extruding and Forming Machine Operators and Tenders, Synthetic or Glass Fibers',
                'ar_occupation' =>
                    'Extruding and Forming Machine Operators and Tenders, Synthetic or Glass Fibers',
                'slug' =>
                    'extruding-and-forming-machine-operators-and-tenders-synthetic-or-glass-fibers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            438 => [
                'id' => 439,
                'en_occupation' =>
                    'Extruding and Forming Machine Setters, Operators, and Tenders, Synthetic and Glass Fibers',
                'ar_occupation' =>
                    'Extruding and Forming Machine Setters, Operators, and Tenders, Synthetic and Glass Fibers',
                'slug' =>
                    'extruding-and-forming-machine-setters-operators-and-tenders-synthetic-and-glass-fibers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            439 => [
                'id' => 440,
                'en_occupation' =>
                    'Extruding, Forming, Pressing, and Compacting Machine Operators and Tenders',
                'ar_occupation' =>
                    'Extruding, Forming, Pressing, and Compacting Machine Operators and Tenders',
                'slug' => 'extruding-forming-pressing-and-compacting-machine-operators-and-tenders',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            440 => [
                'id' => 441,
                'en_occupation' =>
                    'Extruding, Forming, Pressing, and Compacting Machine Setters and Set-Up Operators',
                'ar_occupation' =>
                    'Extruding, Forming, Pressing, and Compacting Machine Setters and Set-Up Operators',
                'slug' =>
                    'extruding-forming-pressing-and-compacting-machine-setters-and-set-up-operators',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            441 => [
                'id' => 442,
                'en_occupation' =>
                    'Extruding, Forming, Pressing, and Compacting Machine Setters, Operators, and Tenders',
                'ar_occupation' =>
                    'Extruding, Forming, Pressing, and Compacting Machine Setters, Operators, and Tenders',
                'slug' =>
                    'extruding-forming-pressing-and-compacting-machine-setters-operators-and-tenders',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            442 => [
                'id' => 443,
                'en_occupation' => 'Fabric and Apparel Patternmakers',
                'ar_occupation' => 'Fabric and Apparel Patternmakers',
                'slug' => 'fabric-and-apparel-patternmakers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            443 => [
                'id' => 444,
                'en_occupation' => 'Fabric Menders, Except Garment',
                'ar_occupation' => 'Fabric Menders, Except Garment',
                'slug' => 'fabric-menders-except-garment',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            444 => [
                'id' => 445,
                'en_occupation' => 'Fallers',
                'ar_occupation' => 'Fallers',
                'slug' => 'fallers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            445 => [
                'id' => 446,
                'en_occupation' => 'Family and General Practitioners',
                'ar_occupation' => 'Family and General Practitioners',
                'slug' => 'family-and-general-practitioners',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            446 => [
                'id' => 447,
                'en_occupation' => 'Farm and Home Management Advisors',
                'ar_occupation' => 'Farm and Home Management Advisors',
                'slug' => 'farm-and-home-management-advisors',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            447 => [
                'id' => 448,
                'en_occupation' => 'Farm and Ranch Managers',
                'ar_occupation' => 'Farm and Ranch Managers',
                'slug' => 'farm-and-ranch-managers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            448 => [
                'id' => 449,
                'en_occupation' => 'Farm Equipment Mechanics',
                'ar_occupation' => 'Farm Equipment Mechanics',
                'slug' => 'farm-equipment-mechanics',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            449 => [
                'id' => 450,
                'en_occupation' => 'Farm Labor Contractor',
                'ar_occupation' => 'Farm Labor Contractor',
                'slug' => 'farm-labor-contractor',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            450 => [
                'id' => 451,
                'en_occupation' => 'Farm Labor Contractors',
                'ar_occupation' => 'Farm Labor Contractors',
                'slug' => 'farm-labor-contractors',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            451 => [
                'id' => 452,
                'en_occupation' => 'Farm, Ranch, and Other Agricultural Managers',
                'ar_occupation' => 'Farm, Ranch, and Other Agricultural Managers',
                'slug' => 'farm-ranch-and-other-agricultural-managers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            452 => [
                'id' => 453,
                'en_occupation' => 'Farmers and Ranchers',
                'ar_occupation' => 'Farmers and Ranchers',
                'slug' => 'farmers-and-ranchers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            453 => [
                'id' => 454,
                'en_occupation' => 'Farmworkers and Laborers, Crop, Nursery, and Greenhouse',
                'ar_occupation' => 'Farmworkers and Laborers, Crop, Nursery, and Greenhouse',
                'slug' => 'farmworkers-and-laborers-crop-nursery-and-greenhouse',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            454 => [
                'id' => 455,
                'en_occupation' => 'Farmworkers, Farm and Ranch Animals',
                'ar_occupation' => 'Farmworkers, Farm and Ranch Animals',
                'slug' => 'farmworkers-farm-and-ranch-animals',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            455 => [
                'id' => 456,
                'en_occupation' => 'Fashion Designers',
                'ar_occupation' => 'Fashion Designers',
                'slug' => 'fashion-designers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            456 => [
                'id' => 457,
                'en_occupation' => 'Fence Erectors',
                'ar_occupation' => 'Fence Erectors',
                'slug' => 'fence-erectors',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            457 => [
                'id' => 458,
                'en_occupation' => 'Fiber Product Cutting Machine Setters and Set-Up Operators',
                'ar_occupation' => 'Fiber Product Cutting Machine Setters and Set-Up Operators',
                'slug' => 'fiber-product-cutting-machine-setters-and-set-up-operators',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            458 => [
                'id' => 459,
                'en_occupation' => 'Fiberglass Laminators and Fabricators',
                'ar_occupation' => 'Fiberglass Laminators and Fabricators',
                'slug' => 'fiberglass-laminators-and-fabricators',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            459 => [
                'id' => 460,
                'en_occupation' => 'File Clerks',
                'ar_occupation' => 'File Clerks',
                'slug' => 'file-clerks',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            460 => [
                'id' => 461,
                'en_occupation' => 'Film and Video Editors',
                'ar_occupation' => 'Film and Video Editors',
                'slug' => 'film-and-video-editors',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            461 => [
                'id' => 462,
                'en_occupation' => 'Film Laboratory Technicians',
                'ar_occupation' => 'Film Laboratory Technicians',
                'slug' => 'film-laboratory-technicians',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            462 => [
                'id' => 463,
                'en_occupation' => 'Financial Analysts',
                'ar_occupation' => 'Financial Analysts',
                'slug' => 'financial-analysts',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            463 => [
                'id' => 464,
                'en_occupation' => 'Financial Examiners',
                'ar_occupation' => 'Financial Examiners',
                'slug' => 'financial-examiners',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            464 => [
                'id' => 465,
                'en_occupation' => 'Financial Managers',
                'ar_occupation' => 'Financial Managers',
                'slug' => 'financial-managers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            465 => [
                'id' => 466,
                'en_occupation' => 'Financial Managers, Branch or Department',
                'ar_occupation' => 'Financial Managers, Branch or Department',
                'slug' => 'financial-managers-branch-or-department',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            466 => [
                'id' => 467,
                'en_occupation' => 'Financial Quantitative Analysts',
                'ar_occupation' => 'Financial Quantitative Analysts',
                'slug' => 'financial-quantitative-analysts',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            467 => [
                'id' => 468,
                'en_occupation' => 'Financial Specialists, All Other',
                'ar_occupation' => 'Financial Specialists, All Other',
                'slug' => 'financial-specialists-all-other',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            468 => [
                'id' => 469,
                'en_occupation' => 'Fine Artists, Including Painters, Sculptors, and Illustrators',
                'ar_occupation' => 'Fine Artists, Including Painters, Sculptors, and Illustrators',
                'slug' => 'fine-artists-including-painters-sculptors-and-illustrators',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            469 => [
                'id' => 470,
                'en_occupation' => 'Fire Fighters',
                'ar_occupation' => 'Fire Fighters',
                'slug' => 'fire-fighters',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            470 => [
                'id' => 471,
                'en_occupation' => 'Fire Inspectors',
                'ar_occupation' => 'Fire Inspectors',
                'slug' => 'fire-inspectors',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            471 => [
                'id' => 472,
                'en_occupation' => 'Fire Inspectors and Investigators',
                'ar_occupation' => 'Fire Inspectors and Investigators',
                'slug' => 'fire-inspectors-and-investigators',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            472 => [
                'id' => 473,
                'en_occupation' => 'Fire Investigators',
                'ar_occupation' => 'Fire Investigators',
                'slug' => 'fire-investigators',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            473 => [
                'id' => 474,
                'en_occupation' => 'Fire-Prevention and Protection Engineers',
                'ar_occupation' => 'Fire-Prevention and Protection Engineers',
                'slug' => 'fire-prevention-and-protection-engineers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            474 => [
                'id' => 475,
                'en_occupation' =>
                    'First-Line Supervisors and Manager-Supervisors - Agricultural Crop Workers',
                'ar_occupation' =>
                    'First-Line Supervisors and Manager-Supervisors - Agricultural Crop Workers',
                'slug' => 'first-line-supervisors-and-manager-supervisors-agricultural-crop-workers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            475 => [
                'id' => 476,
                'en_occupation' =>
                    'First-Line Supervisors and Manager-Supervisors - Animal Care Workers, Except Livestock',
                'ar_occupation' =>
                    'First-Line Supervisors and Manager-Supervisors - Animal Care Workers, Except Livestock',
                'slug' =>
                    'first-line-supervisors-and-manager-supervisors-animal-care-workers-except-livestock',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            476 => [
                'id' => 477,
                'en_occupation' =>
                    'First-Line Supervisors and Manager-Supervisors - Animal Husbandry Workers',
                'ar_occupation' =>
                    'First-Line Supervisors and Manager-Supervisors - Animal Husbandry Workers',
                'slug' => 'first-line-supervisors-and-manager-supervisors-animal-husbandry-workers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            477 => [
                'id' => 478,
                'en_occupation' => 'First-Line Supervisors and Manager-Supervisors - Fishery Workers',
                'ar_occupation' => 'First-Line Supervisors and Manager-Supervisors - Fishery Workers',
                'slug' => 'first-line-supervisors-and-manager-supervisors-fishery-workers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            478 => [
                'id' => 479,
                'en_occupation' =>
                    'First-Line Supervisors and Manager-Supervisors - Horticultural Workers',
                'ar_occupation' =>
                    'First-Line Supervisors and Manager-Supervisors - Horticultural Workers',
                'slug' => 'first-line-supervisors-and-manager-supervisors-horticultural-workers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            479 => [
                'id' => 480,
                'en_occupation' =>
                    'First-Line Supervisors and Manager-Supervisors - Landscaping Workers',
                'ar_occupation' =>
                    'First-Line Supervisors and Manager-Supervisors - Landscaping Workers',
                'slug' => 'first-line-supervisors-and-manager-supervisors-landscaping-workers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            480 => [
                'id' => 481,
                'en_occupation' => 'First-Line Supervisors and Manager-Supervisors - Logging Workers',
                'ar_occupation' => 'First-Line Supervisors and Manager-Supervisors - Logging Workers',
                'slug' => 'first-line-supervisors-and-manager-supervisors-logging-workers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            481 => [
                'id' => 482,
                'en_occupation' =>
                    'First-Line Supervisors and Manager-Supervisors- Construction Trades Workers',
                'ar_occupation' =>
                    'First-Line Supervisors and Manager-Supervisors- Construction Trades Workers',
                'slug' => 'first-line-supervisors-and-manager-supervisors-construction-trades-workers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            482 => [
                'id' => 483,
                'en_occupation' => 'First-Line Supervisors and Manager-Supervisors- Extractive Workers',
                'ar_occupation' => 'First-Line Supervisors and Manager-Supervisors- Extractive Workers',
                'slug' => 'first-line-supervisors-and-manager-supervisors-extractive-workers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            483 => [
                'id' => 484,
                'en_occupation' =>
                    'First-Line Supervisors of Agricultural Crop and Horticultural Workers',
                'ar_occupation' =>
                    'First-Line Supervisors of Agricultural Crop and Horticultural Workers',
                'slug' => 'first-line-supervisors-of-agricultural-crop-and-horticultural-workers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            484 => [
                'id' => 485,
                'en_occupation' => 'First-Line Supervisors of Animal Husbandry and Animal Care Workers',
                'ar_occupation' => 'First-Line Supervisors of Animal Husbandry and Animal Care Workers',
                'slug' => 'first-line-supervisors-of-animal-husbandry-and-animal-care-workers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            485 => [
                'id' => 486,
                'en_occupation' => 'First-Line Supervisors, Administrative Support',
                'ar_occupation' => 'First-Line Supervisors, Administrative Support',
                'slug' => 'first-line-supervisors-administrative-support',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            486 => [
                'id' => 487,
                'en_occupation' => 'First-Line Supervisors, Customer Service',
                'ar_occupation' => 'First-Line Supervisors, Customer Service',
                'slug' => 'first-line-supervisors-customer-service',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            487 => [
                'id' => 488,
                'en_occupation' => 'First-Line Supervisors-Managers of Air Crew Members',
                'ar_occupation' => 'First-Line Supervisors-Managers of Air Crew Members',
                'slug' => 'first-line-supervisors-managers-of-air-crew-members',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            488 => [
                'id' => 489,
                'en_occupation' =>
                    'First-Line Supervisors-Managers of All Other Tactical Operations Specialists',
                'ar_occupation' =>
                    'First-Line Supervisors-Managers of All Other Tactical Operations Specialists',
                'slug' => 'first-line-supervisors-managers-of-all-other-tactical-operations-specialists',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            489 => [
                'id' => 490,
                'en_occupation' =>
                    'First-Line Supervisors-Managers of Construction Trades and Extraction Workers',
                'ar_occupation' =>
                    'First-Line Supervisors-Managers of Construction Trades and Extraction Workers',
                'slug' =>
                    'first-line-supervisors-managers-of-construction-trades-and-extraction-workers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            490 => [
                'id' => 491,
                'en_occupation' => 'First-Line Supervisors-Managers of Correctional Officers',
                'ar_occupation' => 'First-Line Supervisors-Managers of Correctional Officers',
                'slug' => 'first-line-supervisors-managers-of-correctional-officers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            491 => [
                'id' => 492,
                'en_occupation' =>
                    'First-Line Supervisors-Managers of Farming, Fishing, and Forestry Workers',
                'ar_occupation' =>
                    'First-Line Supervisors-Managers of Farming, Fishing, and Forestry Workers',
                'slug' => 'first-line-supervisors-managers-of-farming-fishing-and-forestry-workers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            492 => [
                'id' => 493,
                'en_occupation' =>
                    'First-Line Supervisors-Managers of Fire Fighting and Prevention Workers',
                'ar_occupation' =>
                    'First-Line Supervisors-Managers of Fire Fighting and Prevention Workers',
                'slug' => 'first-line-supervisors-managers-of-fire-fighting-and-prevention-workers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            493 => [
                'id' => 494,
                'en_occupation' =>
                    'First-Line Supervisors-Managers of Food Preparation and Serving Workers',
                'ar_occupation' =>
                    'First-Line Supervisors-Managers of Food Preparation and Serving Workers',
                'slug' => 'first-line-supervisors-managers-of-food-preparation-and-serving-workers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            494 => [
                'id' => 495,
                'en_occupation' =>
                    'First-Line Supervisors-Managers of Helpers, Laborers, and Material Movers, Hand',
                'ar_occupation' =>
                    'First-Line Supervisors-Managers of Helpers, Laborers, and Material Movers, Hand',
                'slug' => 'first-line-supervisors-managers-of-helpers-laborers-and-material-movers-hand',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            495 => [
                'id' => 496,
                'en_occupation' =>
                    'First-Line Supervisors-Managers of Housekeeping and Janitorial Workers',
                'ar_occupation' =>
                    'First-Line Supervisors-Managers of Housekeeping and Janitorial Workers',
                'slug' => 'first-line-supervisors-managers-of-housekeeping-and-janitorial-workers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            496 => [
                'id' => 497,
                'en_occupation' =>
                    'First-Line Supervisors-Managers of Landscaping, Lawn Service, and Groundskeeping Workers',
                'ar_occupation' =>
                    'First-Line Supervisors-Managers of Landscaping, Lawn Service, and Groundskeeping Workers',
                'slug' =>
                    'first-line-supervisors-managers-of-landscaping-lawn-service-and-groundskeeping-workers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            497 => [
                'id' => 498,
                'en_occupation' =>
                    'First-Line Supervisors-Managers of Mechanics, Installers, and Repairers',
                'ar_occupation' =>
                    'First-Line Supervisors-Managers of Mechanics, Installers, and Repairers',
                'slug' => 'first-line-supervisors-managers-of-mechanics-installers-and-repairers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            498 => [
                'id' => 499,
                'en_occupation' => 'First-Line Supervisors-Managers of Non-Retail Sales Workers',
                'ar_occupation' => 'First-Line Supervisors-Managers of Non-Retail Sales Workers',
                'slug' => 'first-line-supervisors-managers-of-non-retail-sales-workers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            499 => [
                'id' => 500,
                'en_occupation' =>
                    'First-Line Supervisors-Managers of Office and Administrative Support Workers',
                'ar_occupation' =>
                    'First-Line Supervisors-Managers of Office and Administrative Support Workers',
                'slug' => 'first-line-supervisors-managers-of-office-and-administrative-support-workers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ]
        ]);
        \DB::table('occupation')->insert([
            0 => [
                'id' => 501,
                'en_occupation' => 'First-Line Supervisors-Managers of Personal Service Workers',
                'ar_occupation' => 'First-Line Supervisors-Managers of Personal Service Workers',
                'slug' => 'first-line-supervisors-managers-of-personal-service-workers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            1 => [
                'id' => 502,
                'en_occupation' => 'First-Line Supervisors-Managers of Police and Detectives',
                'ar_occupation' => 'First-Line Supervisors-Managers of Police and Detectives',
                'slug' => 'first-line-supervisors-managers-of-police-and-detectives',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            2 => [
                'id' => 503,
                'en_occupation' => 'First-Line Supervisors-Managers of Production and Operating Workers',
                'ar_occupation' => 'First-Line Supervisors-Managers of Production and Operating Workers',
                'slug' => 'first-line-supervisors-managers-of-production-and-operating-workers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            3 => [
                'id' => 504,
                'en_occupation' => 'First-Line Supervisors-Managers of Retail Sales Workers',
                'ar_occupation' => 'First-Line Supervisors-Managers of Retail Sales Workers',
                'slug' => 'first-line-supervisors-managers-of-retail-sales-workers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            4 => [
                'id' => 505,
                'en_occupation' =>
                    'First-Line Supervisors-Managers of Transportation and Material-Moving Machine and Vehicle Operators',
                'ar_occupation' =>
                    'First-Line Supervisors-Managers of Transportation and Material-Moving Machine and Vehicle Operators',
                'slug' =>
                    'first-line-supervisors-managers-of-transportation-and-material-moving-machine-and-vehicle-operators',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            5 => [
                'id' => 506,
                'en_occupation' =>
                    'First-Line Supervisors-Managers of Weapons Specialists--Crew Members',
                'ar_occupation' =>
                    'First-Line Supervisors-Managers of Weapons Specialists--Crew Members',
                'slug' => 'first-line-supervisors-managers-of-weapons-specialists-crew-members',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            6 => [
                'id' => 507,
                'en_occupation' =>
                    'First-Line Supervisors-Managers, Protective Service Workers, All Other',
                'ar_occupation' =>
                    'First-Line Supervisors-Managers, Protective Service Workers, All Other',
                'slug' => 'first-line-supervisors-managers-protective-service-workers-all-other',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            7 => [
                'id' => 508,
                'en_occupation' => 'Fish and Game Wardens',
                'ar_occupation' => 'Fish and Game Wardens',
                'slug' => 'fish-and-game-wardens',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            8 => [
                'id' => 509,
                'en_occupation' => 'Fish Hatchery Managers',
                'ar_occupation' => 'Fish Hatchery Managers',
                'slug' => 'fish-hatchery-managers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            9 => [
                'id' => 510,
                'en_occupation' => 'Fishers and Related Fishing Workers',
                'ar_occupation' => 'Fishers and Related Fishing Workers',
                'slug' => 'fishers-and-related-fishing-workers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            10 => [
                'id' => 511,
                'en_occupation' => 'Fitness and Wellness Coordinators',
                'ar_occupation' => 'Fitness and Wellness Coordinators',
                'slug' => 'fitness-and-wellness-coordinators',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            11 => [
                'id' => 512,
                'en_occupation' => 'Fitness Trainers and Aerobics Instructors',
                'ar_occupation' => 'Fitness Trainers and Aerobics Instructors',
                'slug' => 'fitness-trainers-and-aerobics-instructors',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            12 => [
                'id' => 513,
                'en_occupation' => 'Fitters, Structural Metal- Precision',
                'ar_occupation' => 'Fitters, Structural Metal- Precision',
                'slug' => 'fitters-structural-metal-precision',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            13 => [
                'id' => 514,
                'en_occupation' => 'Flight Attendant',
                'ar_occupation' => 'Flight Attendant',
                'slug' => 'flight-attendant',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            14 => [
                'id' => 515,
                'en_occupation' => 'Flight Attendants',
                'ar_occupation' => 'Flight Attendants',
                'slug' => 'flight-attendants',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            15 => [
                'id' => 516,
                'en_occupation' => 'Floor Layers, Except Carpet, Wood, and Hard Tiles',
                'ar_occupation' => 'Floor Layers, Except Carpet, Wood, and Hard Tiles',
                'slug' => 'floor-layers-except-carpet-wood-and-hard-tiles',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            16 => [
                'id' => 517,
                'en_occupation' => 'Floor Sanders and Finishers',
                'ar_occupation' => 'Floor Sanders and Finishers',
                'slug' => 'floor-sanders-and-finishers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            17 => [
                'id' => 518,
                'en_occupation' => 'Floral Designers',
                'ar_occupation' => 'Floral Designers',
                'slug' => 'floral-designers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            18 => [
                'id' => 519,
                'en_occupation' =>
                    'Food and Tobacco Roasting, Baking, and Drying Machine Operators and Tenders',
                'ar_occupation' =>
                    'Food and Tobacco Roasting, Baking, and Drying Machine Operators and Tenders',
                'slug' => 'food-and-tobacco-roasting-baking-and-drying-machine-operators-and-tenders',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            19 => [
                'id' => 520,
                'en_occupation' => 'Food Batchmakers',
                'ar_occupation' => 'Food Batchmakers',
                'slug' => 'food-batchmakers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            20 => [
                'id' => 521,
                'en_occupation' => 'Food Cooking Machine Operators and Tenders',
                'ar_occupation' => 'Food Cooking Machine Operators and Tenders',
                'slug' => 'food-cooking-machine-operators-and-tenders',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            21 => [
                'id' => 522,
                'en_occupation' => 'Food Preparation and Serving Related Workers, All Other',
                'ar_occupation' => 'Food Preparation and Serving Related Workers, All Other',
                'slug' => 'food-preparation-and-serving-related-workers-all-other',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            22 => [
                'id' => 523,
                'en_occupation' => 'Food Preparation Workers',
                'ar_occupation' => 'Food Preparation Workers',
                'slug' => 'food-preparation-workers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            23 => [
                'id' => 524,
                'en_occupation' => 'Food Science Technicians',
                'ar_occupation' => 'Food Science Technicians',
                'slug' => 'food-science-technicians',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            24 => [
                'id' => 525,
                'en_occupation' => 'Food Scientists and Technologists',
                'ar_occupation' => 'Food Scientists and Technologists',
                'slug' => 'food-scientists-and-technologists',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            25 => [
                'id' => 526,
                'en_occupation' => 'Food Servers, Nonrestaurant',
                'ar_occupation' => 'Food Servers, Nonrestaurant',
                'slug' => 'food-servers-nonrestaurant',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            26 => [
                'id' => 527,
                'en_occupation' => 'Food Service Managers',
                'ar_occupation' => 'Food Service Managers',
                'slug' => 'food-service-managers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            27 => [
                'id' => 528,
                'en_occupation' => 'Foreign Language and Literature Teachers, Postsecondary',
                'ar_occupation' => 'Foreign Language and Literature Teachers, Postsecondary',
                'slug' => 'foreign-language-and-literature-teachers-postsecondary',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            28 => [
                'id' => 529,
                'en_occupation' => 'Forensic Science Technicians',
                'ar_occupation' => 'Forensic Science Technicians',
                'slug' => 'forensic-science-technicians',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            29 => [
                'id' => 530,
                'en_occupation' => 'Forest and Conservation Technicians',
                'ar_occupation' => 'Forest and Conservation Technicians',
                'slug' => 'forest-and-conservation-technicians',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            30 => [
                'id' => 531,
                'en_occupation' => 'Forest and Conservation Workers',
                'ar_occupation' => 'Forest and Conservation Workers',
                'slug' => 'forest-and-conservation-workers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            31 => [
                'id' => 532,
                'en_occupation' => 'Forest Fire Fighters',
                'ar_occupation' => 'Forest Fire Fighters',
                'slug' => 'forest-fire-fighters',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            32 => [
                'id' => 533,
                'en_occupation' => 'Forest Fire Fighting and Prevention Supervisors',
                'ar_occupation' => 'Forest Fire Fighting and Prevention Supervisors',
                'slug' => 'forest-fire-fighting-and-prevention-supervisors',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            33 => [
                'id' => 534,
                'en_occupation' => 'Forest Fire Inspectors and Prevention Specialists',
                'ar_occupation' => 'Forest Fire Inspectors and Prevention Specialists',
                'slug' => 'forest-fire-inspectors-and-prevention-specialists',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            34 => [
                'id' => 535,
                'en_occupation' => 'Foresters',
                'ar_occupation' => 'Foresters',
                'slug' => 'foresters',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            35 => [
                'id' => 536,
                'en_occupation' => 'Forestry and Conservation Science Teachers, Postsecondary',
                'ar_occupation' => 'Forestry and Conservation Science Teachers, Postsecondary',
                'slug' => 'forestry-and-conservation-science-teachers-postsecondary',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            36 => [
                'id' => 537,
                'en_occupation' => 'Forging Machine Setters, Operators, and Tenders, Metal and Plastic',
                'ar_occupation' => 'Forging Machine Setters, Operators, and Tenders, Metal and Plastic',
                'slug' => 'forging-machine-setters-operators-and-tenders-metal-and-plastic',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            37 => [
                'id' => 538,
                'en_occupation' => 'Foundry Mold and Coremakers',
                'ar_occupation' => 'Foundry Mold and Coremakers',
                'slug' => 'foundry-mold-and-coremakers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            38 => [
                'id' => 539,
                'en_occupation' => 'Frame Wirers, Central Office',
                'ar_occupation' => 'Frame Wirers, Central Office',
                'slug' => 'frame-wirers-central-office',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            39 => [
                'id' => 540,
                'en_occupation' => 'Fraud Examiners, Investigators and Analysts',
                'ar_occupation' => 'Fraud Examiners, Investigators and Analysts',
                'slug' => 'fraud-examiners-investigators-and-analysts',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            40 => [
                'id' => 541,
                'en_occupation' => 'Freight and Cargo Inspectors',
                'ar_occupation' => 'Freight and Cargo Inspectors',
                'slug' => 'freight-and-cargo-inspectors',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            41 => [
                'id' => 542,
                'en_occupation' => 'Freight Forwarders',
                'ar_occupation' => 'Freight Forwarders',
                'slug' => 'freight-forwarders',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            42 => [
                'id' => 543,
                'en_occupation' => 'Freight Inspectors',
                'ar_occupation' => 'Freight Inspectors',
                'slug' => 'freight-inspectors',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            43 => [
                'id' => 544,
                'en_occupation' => 'Freight, Stock, and Material Movers, Hand',
                'ar_occupation' => 'Freight, Stock, and Material Movers, Hand',
                'slug' => 'freight-stock-and-material-movers-hand',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            44 => [
                'id' => 545,
                'en_occupation' => 'Fuel Cell Engineers',
                'ar_occupation' => 'Fuel Cell Engineers',
                'slug' => 'fuel-cell-engineers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            45 => [
                'id' => 546,
                'en_occupation' => 'Fuel Cell Technicians',
                'ar_occupation' => 'Fuel Cell Technicians',
                'slug' => 'fuel-cell-technicians',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            46 => [
                'id' => 547,
                'en_occupation' => 'Fundraisers',
                'ar_occupation' => 'Fundraisers',
                'slug' => 'fundraisers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            47 => [
                'id' => 548,
                'en_occupation' => 'Funeral Attendants',
                'ar_occupation' => 'Funeral Attendants',
                'slug' => 'funeral-attendants',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            48 => [
                'id' => 549,
                'en_occupation' => 'Funeral Directors',
                'ar_occupation' => 'Funeral Directors',
                'slug' => 'funeral-directors',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            49 => [
                'id' => 550,
                'en_occupation' => 'Furnace, Kiln, Oven, Drier, and Kettle Operators and Tenders',
                'ar_occupation' => 'Furnace, Kiln, Oven, Drier, and Kettle Operators and Tenders',
                'slug' => 'furnace-kiln-oven-drier-and-kettle-operators-and-tenders',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            50 => [
                'id' => 551,
                'en_occupation' => 'Furniture Finishers',
                'ar_occupation' => 'Furniture Finishers',
                'slug' => 'furniture-finishers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            51 => [
                'id' => 552,
                'en_occupation' => 'Gaming and Sports Book Writers and Runners',
                'ar_occupation' => 'Gaming and Sports Book Writers and Runners',
                'slug' => 'gaming-and-sports-book-writers-and-runners',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            52 => [
                'id' => 553,
                'en_occupation' => 'Gaming Cage Workers',
                'ar_occupation' => 'Gaming Cage Workers',
                'slug' => 'gaming-cage-workers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            53 => [
                'id' => 554,
                'en_occupation' => 'Gaming Change Persons and Booth Cashiers',
                'ar_occupation' => 'Gaming Change Persons and Booth Cashiers',
                'slug' => 'gaming-change-persons-and-booth-cashiers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            54 => [
                'id' => 555,
                'en_occupation' => 'Gaming Dealers',
                'ar_occupation' => 'Gaming Dealers',
                'slug' => 'gaming-dealers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            55 => [
                'id' => 556,
                'en_occupation' => 'Gaming Managers',
                'ar_occupation' => 'Gaming Managers',
                'slug' => 'gaming-managers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            56 => [
                'id' => 557,
                'en_occupation' => 'Gaming Service Workers, All Other',
                'ar_occupation' => 'Gaming Service Workers, All Other',
                'slug' => 'gaming-service-workers-all-other',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            57 => [
                'id' => 558,
                'en_occupation' => 'Gaming Supervisors',
                'ar_occupation' => 'Gaming Supervisors',
                'slug' => 'gaming-supervisors',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            58 => [
                'id' => 559,
                'en_occupation' => 'Gaming Surveillance Officers and Gaming Investigators',
                'ar_occupation' => 'Gaming Surveillance Officers and Gaming Investigators',
                'slug' => 'gaming-surveillance-officers-and-gaming-investigators',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            59 => [
                'id' => 560,
                'en_occupation' => 'Gas Appliance Repairers',
                'ar_occupation' => 'Gas Appliance Repairers',
                'slug' => 'gas-appliance-repairers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            60 => [
                'id' => 561,
                'en_occupation' => 'Gas Compressor and Gas Pumping Station Operators',
                'ar_occupation' => 'Gas Compressor and Gas Pumping Station Operators',
                'slug' => 'gas-compressor-and-gas-pumping-station-operators',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            61 => [
                'id' => 562,
                'en_occupation' => 'Gas Compressor Operators',
                'ar_occupation' => 'Gas Compressor Operators',
                'slug' => 'gas-compressor-operators',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            62 => [
                'id' => 563,
                'en_occupation' => 'Gas Distribution Plant Operators',
                'ar_occupation' => 'Gas Distribution Plant Operators',
                'slug' => 'gas-distribution-plant-operators',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            63 => [
                'id' => 564,
                'en_occupation' => 'Gas Plant Operators',
                'ar_occupation' => 'Gas Plant Operators',
                'slug' => 'gas-plant-operators',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            64 => [
                'id' => 565,
                'en_occupation' => 'Gas Processing Plant Operators',
                'ar_occupation' => 'Gas Processing Plant Operators',
                'slug' => 'gas-processing-plant-operators',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            65 => [
                'id' => 566,
                'en_occupation' => 'Gas Pumping Station Operators',
                'ar_occupation' => 'Gas Pumping Station Operators',
                'slug' => 'gas-pumping-station-operators',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            66 => [
                'id' => 567,
                'en_occupation' => 'Gaugers',
                'ar_occupation' => 'Gaugers',
                'slug' => 'gaugers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            67 => [
                'id' => 568,
                'en_occupation' => 'Gem and Diamond Workers',
                'ar_occupation' => 'Gem and Diamond Workers',
                'slug' => 'gem-and-diamond-workers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            68 => [
                'id' => 569,
                'en_occupation' => 'General and Operations Managers',
                'ar_occupation' => 'General and Operations Managers',
                'slug' => 'general-and-operations-managers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            69 => [
                'id' => 570,
                'en_occupation' => 'General Farmworkers',
                'ar_occupation' => 'General Farmworkers',
                'slug' => 'general-farmworkers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            70 => [
                'id' => 571,
                'en_occupation' => 'Genetic Counselors',
                'ar_occupation' => 'Genetic Counselors',
                'slug' => 'genetic-counselors',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            71 => [
                'id' => 572,
                'en_occupation' => 'Geneticists',
                'ar_occupation' => 'Geneticists',
                'slug' => 'geneticists',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            72 => [
                'id' => 573,
                'en_occupation' => 'Geodetic Surveyors',
                'ar_occupation' => 'Geodetic Surveyors',
                'slug' => 'geodetic-surveyors',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            73 => [
                'id' => 574,
                'en_occupation' => 'Geographers',
                'ar_occupation' => 'Geographers',
                'slug' => 'geographers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            74 => [
                'id' => 575,
                'en_occupation' => 'Geographic Information Systems Technicians',
                'ar_occupation' => 'Geographic Information Systems Technicians',
                'slug' => 'geographic-information-systems-technicians',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            75 => [
                'id' => 576,
                'en_occupation' => 'Geography Teachers, Postsecondary',
                'ar_occupation' => 'Geography Teachers, Postsecondary',
                'slug' => 'geography-teachers-postsecondary',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            76 => [
                'id' => 577,
                'en_occupation' => 'Geological and Petroleum Technicians',
                'ar_occupation' => 'Geological and Petroleum Technicians',
                'slug' => 'geological-and-petroleum-technicians',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            77 => [
                'id' => 578,
                'en_occupation' => 'Geological Data Technicians',
                'ar_occupation' => 'Geological Data Technicians',
                'slug' => 'geological-data-technicians',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            78 => [
                'id' => 579,
                'en_occupation' => 'Geological Sample Test Technicians',
                'ar_occupation' => 'Geological Sample Test Technicians',
                'slug' => 'geological-sample-test-technicians',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            79 => [
                'id' => 580,
                'en_occupation' => 'Geologists',
                'ar_occupation' => 'Geologists',
                'slug' => 'geologists',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            80 => [
                'id' => 581,
                'en_occupation' => 'Geoscientists, Except Hydrologists and Geographers',
                'ar_occupation' => 'Geoscientists, Except Hydrologists and Geographers',
                'slug' => 'geoscientists-except-hydrologists-and-geographers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            81 => [
                'id' => 582,
                'en_occupation' => 'Geospatial Information Scientists and Technologists',
                'ar_occupation' => 'Geospatial Information Scientists and Technologists',
                'slug' => 'geospatial-information-scientists-and-technologists',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            82 => [
                'id' => 583,
                'en_occupation' => 'Geothermal Production Managers',
                'ar_occupation' => 'Geothermal Production Managers',
                'slug' => 'geothermal-production-managers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            83 => [
                'id' => 584,
                'en_occupation' => 'Geothermal Technicians',
                'ar_occupation' => 'Geothermal Technicians',
                'slug' => 'geothermal-technicians',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            84 => [
                'id' => 585,
                'en_occupation' => 'Glass Blowers, Molders, Benders, and Finishers',
                'ar_occupation' => 'Glass Blowers, Molders, Benders, and Finishers',
                'slug' => 'glass-blowers-molders-benders-and-finishers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            85 => [
                'id' => 586,
                'en_occupation' => 'Glass Cutting Machine Setters and Set-Up Operators',
                'ar_occupation' => 'Glass Cutting Machine Setters and Set-Up Operators',
                'slug' => 'glass-cutting-machine-setters-and-set-up-operators',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            86 => [
                'id' => 587,
                'en_occupation' => 'Glaziers',
                'ar_occupation' => 'Glaziers',
                'slug' => 'glaziers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            87 => [
                'id' => 588,
                'en_occupation' => 'Government Property Inspectors and Investigators',
                'ar_occupation' => 'Government Property Inspectors and Investigators',
                'slug' => 'government-property-inspectors-and-investigators',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            88 => [
                'id' => 589,
                'en_occupation' => 'Government Service Executives',
                'ar_occupation' => 'Government Service Executives',
                'slug' => 'government-service-executives',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            89 => [
                'id' => 590,
                'en_occupation' => 'Grader, Bulldozer, and Scraper Operators',
                'ar_occupation' => 'Grader, Bulldozer, and Scraper Operators',
                'slug' => 'grader-bulldozer-and-scraper-operators',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            90 => [
                'id' => 591,
                'en_occupation' => 'Graders and Sorters, Agricultural Products',
                'ar_occupation' => 'Graders and Sorters, Agricultural Products',
                'slug' => 'graders-and-sorters-agricultural-products',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            91 => [
                'id' => 592,
                'en_occupation' => 'Graduate Teaching Assistants',
                'ar_occupation' => 'Graduate Teaching Assistants',
                'slug' => 'graduate-teaching-assistants',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            92 => [
                'id' => 593,
                'en_occupation' => 'Graphic Designers',
                'ar_occupation' => 'Graphic Designers',
                'slug' => 'graphic-designers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            93 => [
                'id' => 594,
                'en_occupation' => 'Green Marketers',
                'ar_occupation' => 'Green Marketers',
                'slug' => 'green-marketers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            94 => [
                'id' => 595,
                'en_occupation' => 'Grinding and Polishing Workers, Hand',
                'ar_occupation' => 'Grinding and Polishing Workers, Hand',
                'slug' => 'grinding-and-polishing-workers-hand',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            95 => [
                'id' => 596,
                'en_occupation' => 'Grinding, Honing, Lapping, and Deburring Machine Set-Up Operators',
                'ar_occupation' => 'Grinding, Honing, Lapping, and Deburring Machine Set-Up Operators',
                'slug' => 'grinding-honing-lapping-and-deburring-machine-set-up-operators',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            96 => [
                'id' => 597,
                'en_occupation' =>
                    'Grinding, Lapping, Polishing, and Buffing Machine Tool Setters, Operators, and Tenders, Metal and Plastic',
                'ar_occupation' =>
                    'Grinding, Lapping, Polishing, and Buffing Machine Tool Setters, Operators, and Tenders, Metal and Plastic',
                'slug' =>
                    'grinding-lapping-polishing-and-buffing-machine-tool-setters-operators-and-tenders-metal-and-plastic',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            97 => [
                'id' => 598,
                'en_occupation' => 'Grips and Set-Up Workers, Motion Picture Sets, Studios, and Stages',
                'ar_occupation' => 'Grips and Set-Up Workers, Motion Picture Sets, Studios, and Stages',
                'slug' => 'grips-and-set-up-workers-motion-picture-sets-studios-and-stages',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            98 => [
                'id' => 599,
                'en_occupation' => 'Grounds Maintenance Workers, All Other',
                'ar_occupation' => 'Grounds Maintenance Workers, All Other',
                'slug' => 'grounds-maintenance-workers-all-other',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            99 => [
                'id' => 600,
                'en_occupation' => 'Hairdressers, Hairstylists, and Cosmetologists',
                'ar_occupation' => 'Hairdressers, Hairstylists, and Cosmetologists',
                'slug' => 'hairdressers-hairstylists-and-cosmetologists',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            100 => [
                'id' => 601,
                'en_occupation' => 'Hand and Portable Power Tool Repairers',
                'ar_occupation' => 'Hand and Portable Power Tool Repairers',
                'slug' => 'hand-and-portable-power-tool-repairers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            101 => [
                'id' => 602,
                'en_occupation' => 'Hand Compositors and Typesetters',
                'ar_occupation' => 'Hand Compositors and Typesetters',
                'slug' => 'hand-compositors-and-typesetters',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            102 => [
                'id' => 603,
                'en_occupation' => 'Hazardous Materials Removal Workers',
                'ar_occupation' => 'Hazardous Materials Removal Workers',
                'slug' => 'hazardous-materials-removal-workers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            103 => [
                'id' => 604,
                'en_occupation' =>
                    'Health and Safety Engineers, Except Mining Safety Engineers and Inspectors',
                'ar_occupation' =>
                    'Health and Safety Engineers, Except Mining Safety Engineers and Inspectors',
                'slug' => 'health-and-safety-engineers-except-mining-safety-engineers-and-inspectors',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            104 => [
                'id' => 605,
                'en_occupation' => 'Health Diagnosing and Treating Practitioners, All Other',
                'ar_occupation' => 'Health Diagnosing and Treating Practitioners, All Other',
                'slug' => 'health-diagnosing-and-treating-practitioners-all-other',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            105 => [
                'id' => 606,
                'en_occupation' => 'Health Educators',
                'ar_occupation' => 'Health Educators',
                'slug' => 'health-educators',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            106 => [
                'id' => 607,
                'en_occupation' => 'Health Specialties Teachers, Postsecondary',
                'ar_occupation' => 'Health Specialties Teachers, Postsecondary',
                'slug' => 'health-specialties-teachers-postsecondary',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            107 => [
                'id' => 608,
                'en_occupation' => 'Health Technologists and Technicians, All Other',
                'ar_occupation' => 'Health Technologists and Technicians, All Other',
                'slug' => 'health-technologists-and-technicians-all-other',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            108 => [
                'id' => 609,
                'en_occupation' => 'Healthcare Practitioners and Technical Workers, All Other',
                'ar_occupation' => 'Healthcare Practitioners and Technical Workers, All Other',
                'slug' => 'healthcare-practitioners-and-technical-workers-all-other',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            109 => [
                'id' => 610,
                'en_occupation' => 'Healthcare Support Workers, All Other',
                'ar_occupation' => 'Healthcare Support Workers, All Other',
                'slug' => 'healthcare-support-workers-all-other',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            110 => [
                'id' => 611,
                'en_occupation' => 'Hearing Aid Specialists',
                'ar_occupation' => 'Hearing Aid Specialists',
                'slug' => 'hearing-aid-specialists',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            111 => [
                'id' => 612,
                'en_occupation' =>
                    'Heat Treating Equipment Setters, Operators, and Tenders, Metal and Plastic',
                'ar_occupation' =>
                    'Heat Treating Equipment Setters, Operators, and Tenders, Metal and Plastic',
                'slug' => 'heat-treating-equipment-setters-operators-and-tenders-metal-and-plastic',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            112 => [
                'id' => 613,
                'en_occupation' =>
                    'Heat Treating, Annealing, and Tempering Machine Operators and Tenders, Metal and Plastic',
                'ar_occupation' =>
                    'Heat Treating, Annealing, and Tempering Machine Operators and Tenders, Metal and Plastic',
                'slug' =>
                    'heat-treating-annealing-and-tempering-machine-operators-and-tenders-metal-and-plastic',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            113 => [
                'id' => 614,
                'en_occupation' => 'Heaters, Metal and Plastic',
                'ar_occupation' => 'Heaters, Metal and Plastic',
                'slug' => 'heaters-metal-and-plastic',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            114 => [
                'id' => 615,
                'en_occupation' => 'Heating and Air Conditioning Mechanics',
                'ar_occupation' => 'Heating and Air Conditioning Mechanics',
                'slug' => 'heating-and-air-conditioning-mechanics',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            115 => [
                'id' => 616,
                'en_occupation' => 'Heating Equipment Setters and Set-Up Operators, Metal and Plastic',
                'ar_occupation' => 'Heating Equipment Setters and Set-Up Operators, Metal and Plastic',
                'slug' => 'heating-equipment-setters-and-set-up-operators-metal-and-plastic',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            116 => [
                'id' => 617,
                'en_occupation' =>
                    'Heating, Air Conditioning, and Refrigeration Mechanics and Installers',
                'ar_occupation' =>
                    'Heating, Air Conditioning, and Refrigeration Mechanics and Installers',
                'slug' => 'heating-air-conditioning-and-refrigeration-mechanics-and-installers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            117 => [
                'id' => 618,
                'en_occupation' => 'Helpers, Construction Trades, All Other',
                'ar_occupation' => 'Helpers, Construction Trades, All Other',
                'slug' => 'helpers-construction-trades-all-other',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            118 => [
                'id' => 619,
                'en_occupation' =>
                    'Helpers--Brickmasons, Blockmasons, Stonemasons, and Tile and Marble Setters',
                'ar_occupation' =>
                    'Helpers--Brickmasons, Blockmasons, Stonemasons, and Tile and Marble Setters',
                'slug' => 'helpers-brickmasons-blockmasons-stonemasons-and-tile-and-marble-setters',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            119 => [
                'id' => 620,
                'en_occupation' => 'Helpers--Carpenters',
                'ar_occupation' => 'Helpers--Carpenters',
                'slug' => 'helpers-carpenters',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            120 => [
                'id' => 621,
                'en_occupation' => 'Helpers--Electricians',
                'ar_occupation' => 'Helpers--Electricians',
                'slug' => 'helpers-electricians',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            121 => [
                'id' => 622,
                'en_occupation' => 'Helpers--Extraction Workers',
                'ar_occupation' => 'Helpers--Extraction Workers',
                'slug' => 'helpers-extraction-workers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:39',
                'updated_at' => '2021-02-16 06:34:39'
            ],
            122 => [
                'id' => 623,
                'en_occupation' => 'Helpers--Installation, Maintenance, and Repair Workers',
                'ar_occupation' => 'Helpers--Installation, Maintenance, and Repair Workers',
                'slug' => 'helpers-installation-maintenance-and-repair-workers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            123 => [
                'id' => 624,
                'en_occupation' => 'Helpers--Painters, Paperhangers, Plasterers, and Stucco Masons',
                'ar_occupation' => 'Helpers--Painters, Paperhangers, Plasterers, and Stucco Masons',
                'slug' => 'helpers-painters-paperhangers-plasterers-and-stucco-masons',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            124 => [
                'id' => 625,
                'en_occupation' => 'Helpers--Pipelayers, Plumbers, Pipefitters, and Steamfitters',
                'ar_occupation' => 'Helpers--Pipelayers, Plumbers, Pipefitters, and Steamfitters',
                'slug' => 'helpers-pipelayers-plumbers-pipefitters-and-steamfitters',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            125 => [
                'id' => 626,
                'en_occupation' => 'Helpers--Production Workers',
                'ar_occupation' => 'Helpers--Production Workers',
                'slug' => 'helpers-production-workers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            126 => [
                'id' => 627,
                'en_occupation' => 'Helpers--Roofers',
                'ar_occupation' => 'Helpers--Roofers',
                'slug' => 'helpers-roofers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            127 => [
                'id' => 628,
                'en_occupation' => 'Highway Maintenance Workers',
                'ar_occupation' => 'Highway Maintenance Workers',
                'slug' => 'highway-maintenance-workers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            128 => [
                'id' => 629,
                'en_occupation' => 'Highway Patrol Pilots',
                'ar_occupation' => 'Highway Patrol Pilots',
                'slug' => 'highway-patrol-pilots',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            129 => [
                'id' => 630,
                'en_occupation' => 'Historians',
                'ar_occupation' => 'Historians',
                'slug' => 'historians',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            130 => [
                'id' => 631,
                'en_occupation' => 'History Teachers, Postsecondary',
                'ar_occupation' => 'History Teachers, Postsecondary',
                'slug' => 'history-teachers-postsecondary',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            131 => [
                'id' => 632,
                'en_occupation' => 'Histotechnologists and Histologic Technicians',
                'ar_occupation' => 'Histotechnologists and Histologic Technicians',
                'slug' => 'histotechnologists-and-histologic-technicians',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            132 => [
                'id' => 633,
                'en_occupation' => 'Hoist and Winch Operators',
                'ar_occupation' => 'Hoist and Winch Operators',
                'slug' => 'hoist-and-winch-operators',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            133 => [
                'id' => 634,
                'en_occupation' => 'Home Appliance Installers',
                'ar_occupation' => 'Home Appliance Installers',
                'slug' => 'home-appliance-installers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            134 => [
                'id' => 635,
                'en_occupation' => 'Home Appliance Repairers',
                'ar_occupation' => 'Home Appliance Repairers',
                'slug' => 'home-appliance-repairers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            135 => [
                'id' => 636,
                'en_occupation' => 'Home Economics Teachers, Postsecondary',
                'ar_occupation' => 'Home Economics Teachers, Postsecondary',
                'slug' => 'home-economics-teachers-postsecondary',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            136 => [
                'id' => 637,
                'en_occupation' => 'Home Health Aides',
                'ar_occupation' => 'Home Health Aides',
                'slug' => 'home-health-aides',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            137 => [
                'id' => 638,
                'en_occupation' => 'Hospitalists',
                'ar_occupation' => 'Hospitalists',
                'slug' => 'hospitalists',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            138 => [
                'id' => 639,
                'en_occupation' => 'Hosts and Hostesses, Restaurant, Lounge, and Coffee Shop',
                'ar_occupation' => 'Hosts and Hostesses, Restaurant, Lounge, and Coffee Shop',
                'slug' => 'hosts-and-hostesses-restaurant-lounge-and-coffee-shop',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            139 => [
                'id' => 640,
                'en_occupation' => 'Hotel, Motel, and Resort Desk Clerks',
                'ar_occupation' => 'Hotel, Motel, and Resort Desk Clerks',
                'slug' => 'hotel-motel-and-resort-desk-clerks',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            140 => [
                'id' => 641,
                'en_occupation' => 'Housekeeping Supervisors',
                'ar_occupation' => 'Housekeeping Supervisors',
                'slug' => 'housekeeping-supervisors',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            141 => [
                'id' => 642,
                'en_occupation' => 'Human Factors Engineers and Ergonomists',
                'ar_occupation' => 'Human Factors Engineers and Ergonomists',
                'slug' => 'human-factors-engineers-and-ergonomists',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            142 => [
                'id' => 643,
                'en_occupation' => 'Human Resources Assistants, Except Payroll and Timekeeping',
                'ar_occupation' => 'Human Resources Assistants, Except Payroll and Timekeeping',
                'slug' => 'human-resources-assistants-except-payroll-and-timekeeping',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            143 => [
                'id' => 644,
                'en_occupation' => 'Human Resources Manager',
                'ar_occupation' => 'Human Resources Manager',
                'slug' => 'human-resources-manager',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            144 => [
                'id' => 645,
                'en_occupation' => 'Human Resources Managers',
                'ar_occupation' => 'Human Resources Managers',
                'slug' => 'human-resources-managers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            145 => [
                'id' => 646,
                'en_occupation' => 'Human Resources Managers, All Other',
                'ar_occupation' => 'Human Resources Managers, All Other',
                'slug' => 'human-resources-managers-all-other',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            146 => [
                'id' => 647,
                'en_occupation' =>
                    'Human Resources, Training, and Labor Relations Specialists, All Other',
                'ar_occupation' =>
                    'Human Resources, Training, and Labor Relations Specialists, All Other',
                'slug' => 'human-resources-training-and-labor-relations-specialists-all-other',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            147 => [
                'id' => 648,
                'en_occupation' => 'Hunters and Trappers',
                'ar_occupation' => 'Hunters and Trappers',
                'slug' => 'hunters-and-trappers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            148 => [
                'id' => 649,
                'en_occupation' => 'Hydroelectric Plant Technicians',
                'ar_occupation' => 'Hydroelectric Plant Technicians',
                'slug' => 'hydroelectric-plant-technicians',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            149 => [
                'id' => 650,
                'en_occupation' => 'Hydroelectric Production Managers',
                'ar_occupation' => 'Hydroelectric Production Managers',
                'slug' => 'hydroelectric-production-managers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            150 => [
                'id' => 651,
                'en_occupation' => 'Hydrologists',
                'ar_occupation' => 'Hydrologists',
                'slug' => 'hydrologists',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            151 => [
                'id' => 652,
                'en_occupation' => 'Immigration and Customs Inspectors',
                'ar_occupation' => 'Immigration and Customs Inspectors',
                'slug' => 'immigration-and-customs-inspectors',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            152 => [
                'id' => 653,
                'en_occupation' => 'Industrial Ecologists',
                'ar_occupation' => 'Industrial Ecologists',
                'slug' => 'industrial-ecologists',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            153 => [
                'id' => 654,
                'en_occupation' => 'Industrial Engineering Technicians',
                'ar_occupation' => 'Industrial Engineering Technicians',
                'slug' => 'industrial-engineering-technicians',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            154 => [
                'id' => 655,
                'en_occupation' => 'Industrial Engineering Technologists',
                'ar_occupation' => 'Industrial Engineering Technologists',
                'slug' => 'industrial-engineering-technologists',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            155 => [
                'id' => 656,
                'en_occupation' => 'Industrial Engineers',
                'ar_occupation' => 'Industrial Engineers',
                'slug' => 'industrial-engineers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            156 => [
                'id' => 657,
                'en_occupation' => 'Industrial Machinery Mechanics',
                'ar_occupation' => 'Industrial Machinery Mechanics',
                'slug' => 'industrial-machinery-mechanics',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            157 => [
                'id' => 658,
                'en_occupation' => 'Industrial Production Managers',
                'ar_occupation' => 'Industrial Production Managers',
                'slug' => 'industrial-production-managers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            158 => [
                'id' => 659,
                'en_occupation' => 'Industrial Safety and Health Engineers',
                'ar_occupation' => 'Industrial Safety and Health Engineers',
                'slug' => 'industrial-safety-and-health-engineers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            159 => [
                'id' => 660,
                'en_occupation' => 'Industrial Truck and Tractor Operators',
                'ar_occupation' => 'Industrial Truck and Tractor Operators',
                'slug' => 'industrial-truck-and-tractor-operators',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            160 => [
                'id' => 661,
                'en_occupation' => 'Industrial-Organizational Psychologists',
                'ar_occupation' => 'Industrial-Organizational Psychologists',
                'slug' => 'industrial-organizational-psychologists',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            161 => [
                'id' => 662,
                'en_occupation' => 'Infantry',
                'ar_occupation' => 'Infantry',
                'slug' => 'infantry',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            162 => [
                'id' => 663,
                'en_occupation' => 'Infantry Officers',
                'ar_occupation' => 'Infantry Officers',
                'slug' => 'infantry-officers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            163 => [
                'id' => 664,
                'en_occupation' => 'Informatics Nurse Specialists',
                'ar_occupation' => 'Informatics Nurse Specialists',
                'slug' => 'informatics-nurse-specialists',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            164 => [
                'id' => 665,
                'en_occupation' => 'Information and Record Clerks, All Other',
                'ar_occupation' => 'Information and Record Clerks, All Other',
                'slug' => 'information-and-record-clerks-all-other',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            165 => [
                'id' => 666,
                'en_occupation' => 'Information Security Analysts',
                'ar_occupation' => 'Information Security Analysts',
                'slug' => 'information-security-analysts',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            166 => [
                'id' => 667,
                'en_occupation' => 'Information Technology Project Managers',
                'ar_occupation' => 'Information Technology Project Managers',
                'slug' => 'information-technology-project-managers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            167 => [
                'id' => 668,
                'en_occupation' => 'Inspectors, Testers, Sorters, Samplers, and Weighers',
                'ar_occupation' => 'Inspectors, Testers, Sorters, Samplers, and Weighers',
                'slug' => 'inspectors-testers-sorters-samplers-and-weighers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            168 => [
                'id' => 669,
                'en_occupation' => 'Installation, Maintenance, and Repair Workers, All Other',
                'ar_occupation' => 'Installation, Maintenance, and Repair Workers, All Other',
                'slug' => 'installation-maintenance-and-repair-workers-all-other',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            169 => [
                'id' => 670,
                'en_occupation' => 'Instructional Coordinators',
                'ar_occupation' => 'Instructional Coordinators',
                'slug' => 'instructional-coordinators',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            170 => [
                'id' => 671,
                'en_occupation' => 'Instructional Designers and Technologists',
                'ar_occupation' => 'Instructional Designers and Technologists',
                'slug' => 'instructional-designers-and-technologists',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            171 => [
                'id' => 672,
                'en_occupation' => 'Insulation Workers, Floor, Ceiling, and Wall',
                'ar_occupation' => 'Insulation Workers, Floor, Ceiling, and Wall',
                'slug' => 'insulation-workers-floor-ceiling-and-wall',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            172 => [
                'id' => 673,
                'en_occupation' => 'Insulation Workers, Mechanical',
                'ar_occupation' => 'Insulation Workers, Mechanical',
                'slug' => 'insulation-workers-mechanical',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            173 => [
                'id' => 674,
                'en_occupation' => 'Insurance Adjusters, Examiners, and Investigators',
                'ar_occupation' => 'Insurance Adjusters, Examiners, and Investigators',
                'slug' => 'insurance-adjusters-examiners-and-investigators',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            174 => [
                'id' => 675,
                'en_occupation' => 'Insurance Appraisers, Auto Damage',
                'ar_occupation' => 'Insurance Appraisers, Auto Damage',
                'slug' => 'insurance-appraisers-auto-damage',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            175 => [
                'id' => 676,
                'en_occupation' => 'Insurance Claims and Policy Processing Clerks',
                'ar_occupation' => 'Insurance Claims and Policy Processing Clerks',
                'slug' => 'insurance-claims-and-policy-processing-clerks',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            176 => [
                'id' => 677,
                'en_occupation' => 'Insurance Claims Clerks',
                'ar_occupation' => 'Insurance Claims Clerks',
                'slug' => 'insurance-claims-clerks',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            177 => [
                'id' => 678,
                'en_occupation' => 'Insurance Policy Processing Clerks',
                'ar_occupation' => 'Insurance Policy Processing Clerks',
                'slug' => 'insurance-policy-processing-clerks',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            178 => [
                'id' => 679,
                'en_occupation' => 'Insurance Sales Agents',
                'ar_occupation' => 'Insurance Sales Agents',
                'slug' => 'insurance-sales-agents',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            179 => [
                'id' => 680,
                'en_occupation' => 'Insurance Underwriters',
                'ar_occupation' => 'Insurance Underwriters',
                'slug' => 'insurance-underwriters',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            180 => [
                'id' => 681,
                'en_occupation' => 'Intelligence Analysts',
                'ar_occupation' => 'Intelligence Analysts',
                'slug' => 'intelligence-analysts',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            181 => [
                'id' => 682,
                'en_occupation' => 'Interior Designers',
                'ar_occupation' => 'Interior Designers',
                'slug' => 'interior-designers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            182 => [
                'id' => 683,
                'en_occupation' => 'Internists, General',
                'ar_occupation' => 'Internists, General',
                'slug' => 'internists-general',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            183 => [
                'id' => 684,
                'en_occupation' => 'Interpreters and Translators',
                'ar_occupation' => 'Interpreters and Translators',
                'slug' => 'interpreters-and-translators',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            184 => [
                'id' => 685,
                'en_occupation' => 'Interviewers, Except Eligibility and Loan',
                'ar_occupation' => 'Interviewers, Except Eligibility and Loan',
                'slug' => 'interviewers-except-eligibility-and-loan',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            185 => [
                'id' => 686,
                'en_occupation' => 'Investment Fund Managers',
                'ar_occupation' => 'Investment Fund Managers',
                'slug' => 'investment-fund-managers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            186 => [
                'id' => 687,
                'en_occupation' => 'Investment Underwriters',
                'ar_occupation' => 'Investment Underwriters',
                'slug' => 'investment-underwriters',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            187 => [
                'id' => 688,
                'en_occupation' => 'Irradiated-Fuel Handlers',
                'ar_occupation' => 'Irradiated-Fuel Handlers',
                'slug' => 'irradiated-fuel-handlers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            188 => [
                'id' => 689,
                'en_occupation' => 'Janitorial Supervisors',
                'ar_occupation' => 'Janitorial Supervisors',
                'slug' => 'janitorial-supervisors',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            189 => [
                'id' => 690,
                'en_occupation' => 'Janitors and Cleaners, Except Maids and Housekeeping Cleaners',
                'ar_occupation' => 'Janitors and Cleaners, Except Maids and Housekeeping Cleaners',
                'slug' => 'janitors-and-cleaners-except-maids-and-housekeeping-cleaners',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            190 => [
                'id' => 691,
                'en_occupation' => 'Jewelers',
                'ar_occupation' => 'Jewelers',
                'slug' => 'jewelers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            191 => [
                'id' => 692,
                'en_occupation' => 'Jewelers and Precious Stone and Metal Workers',
                'ar_occupation' => 'Jewelers and Precious Stone and Metal Workers',
                'slug' => 'jewelers-and-precious-stone-and-metal-workers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            192 => [
                'id' => 693,
                'en_occupation' => 'Job Printers',
                'ar_occupation' => 'Job Printers',
                'slug' => 'job-printers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            193 => [
                'id' => 694,
                'en_occupation' => 'Judges, Magistrate Judges, and Magistrates',
                'ar_occupation' => 'Judges, Magistrate Judges, and Magistrates',
                'slug' => 'judges-magistrate-judges-and-magistrates',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            194 => [
                'id' => 695,
                'en_occupation' => 'Judicial Law Clerks',
                'ar_occupation' => 'Judicial Law Clerks',
                'slug' => 'judicial-law-clerks',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            195 => [
                'id' => 696,
                'en_occupation' => 'Keyboard Instrument Repairers and Tuners',
                'ar_occupation' => 'Keyboard Instrument Repairers and Tuners',
                'slug' => 'keyboard-instrument-repairers-and-tuners',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            196 => [
                'id' => 697,
                'en_occupation' => 'Kindergarten Teachers, Except Special Education',
                'ar_occupation' => 'Kindergarten Teachers, Except Special Education',
                'slug' => 'kindergarten-teachers-except-special-education',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            197 => [
                'id' => 698,
                'en_occupation' => 'Labor Relations Specialists',
                'ar_occupation' => 'Labor Relations Specialists',
                'slug' => 'labor-relations-specialists',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            198 => [
                'id' => 699,
                'en_occupation' => 'Laborers and Freight, Stock, and Material Movers, Hand',
                'ar_occupation' => 'Laborers and Freight, Stock, and Material Movers, Hand',
                'slug' => 'laborers-and-freight-stock-and-material-movers-hand',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            199 => [
                'id' => 700,
                'en_occupation' => 'Landscape Architects',
                'ar_occupation' => 'Landscape Architects',
                'slug' => 'landscape-architects',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            200 => [
                'id' => 701,
                'en_occupation' => 'Landscaping and Groundskeeping Workers',
                'ar_occupation' => 'Landscaping and Groundskeeping Workers',
                'slug' => 'landscaping-and-groundskeeping-workers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            201 => [
                'id' => 702,
                'en_occupation' =>
                    'Lathe and Turning Machine Tool Setters, Operators, and Tenders, Metal and Plastic',
                'ar_occupation' =>
                    'Lathe and Turning Machine Tool Setters, Operators, and Tenders, Metal and Plastic',
                'slug' =>
                    'lathe-and-turning-machine-tool-setters-operators-and-tenders-metal-and-plastic',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            202 => [
                'id' => 703,
                'en_occupation' =>
                    'Laundry and Drycleaning Machine Operators and Tenders, Except Pressing',
                'ar_occupation' =>
                    'Laundry and Drycleaning Machine Operators and Tenders, Except Pressing',
                'slug' => 'laundry-and-drycleaning-machine-operators-and-tenders-except-pressing',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            203 => [
                'id' => 704,
                'en_occupation' => 'Laundry and Dry-Cleaning Workers',
                'ar_occupation' => 'Laundry and Dry-Cleaning Workers',
                'slug' => 'laundry-and-dry-cleaning-workers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            204 => [
                'id' => 705,
                'en_occupation' => 'Law Clerks',
                'ar_occupation' => 'Law Clerks',
                'slug' => 'law-clerks',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            205 => [
                'id' => 706,
                'en_occupation' => 'Law Teachers, Postsecondary',
                'ar_occupation' => 'Law Teachers, Postsecondary',
                'slug' => 'law-teachers-postsecondary',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            206 => [
                'id' => 707,
                'en_occupation' => 'Lawn Service Managers',
                'ar_occupation' => 'Lawn Service Managers',
                'slug' => 'lawn-service-managers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            207 => [
                'id' => 708,
                'en_occupation' => 'Lawyers',
                'ar_occupation' => 'Lawyers',
                'slug' => 'lawyers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            208 => [
                'id' => 709,
                'en_occupation' => 'Lay-Out Workers, Metal and Plastic',
                'ar_occupation' => 'Lay-Out Workers, Metal and Plastic',
                'slug' => 'lay-out-workers-metal-and-plastic',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            209 => [
                'id' => 710,
                'en_occupation' => 'Legal Secretaries',
                'ar_occupation' => 'Legal Secretaries',
                'slug' => 'legal-secretaries',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            210 => [
                'id' => 711,
                'en_occupation' => 'Legal Support Workers, All Other',
                'ar_occupation' => 'Legal Support Workers, All Other',
                'slug' => 'legal-support-workers-all-other',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            211 => [
                'id' => 712,
                'en_occupation' => 'Legislators',
                'ar_occupation' => 'Legislators',
                'slug' => 'legislators',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            212 => [
                'id' => 713,
                'en_occupation' => 'Letterpress Setters and Set-Up Operators',
                'ar_occupation' => 'Letterpress Setters and Set-Up Operators',
                'slug' => 'letterpress-setters-and-set-up-operators',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            213 => [
                'id' => 714,
                'en_occupation' => 'Librarians',
                'ar_occupation' => 'Librarians',
                'slug' => 'librarians',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            214 => [
                'id' => 715,
                'en_occupation' => 'Library Assistants, Clerical',
                'ar_occupation' => 'Library Assistants, Clerical',
                'slug' => 'library-assistants-clerical',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            215 => [
                'id' => 716,
                'en_occupation' => 'Library Science Teachers, Postsecondary',
                'ar_occupation' => 'Library Science Teachers, Postsecondary',
                'slug' => 'library-science-teachers-postsecondary',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            216 => [
                'id' => 717,
                'en_occupation' => 'Library Technicians',
                'ar_occupation' => 'Library Technicians',
                'slug' => 'library-technicians',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            217 => [
                'id' => 718,
                'en_occupation' => 'License Clerks',
                'ar_occupation' => 'License Clerks',
                'slug' => 'license-clerks',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            218 => [
                'id' => 719,
                'en_occupation' => 'Licensed Practical and Licensed Vocational Nurses',
                'ar_occupation' => 'Licensed Practical and Licensed Vocational Nurses',
                'slug' => 'licensed-practical-and-licensed-vocational-nurses',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            219 => [
                'id' => 720,
                'en_occupation' => 'Licensing Examiners and Inspectors',
                'ar_occupation' => 'Licensing Examiners and Inspectors',
                'slug' => 'licensing-examiners-and-inspectors',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            220 => [
                'id' => 721,
                'en_occupation' => 'Life Scientists, All Other',
                'ar_occupation' => 'Life Scientists, All Other',
                'slug' => 'life-scientists-all-other',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            221 => [
                'id' => 722,
                'en_occupation' => 'Life, Physical, and Social Science Technicians, All Other',
                'ar_occupation' => 'Life, Physical, and Social Science Technicians, All Other',
                'slug' => 'life-physical-and-social-science-technicians-all-other',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            222 => [
                'id' => 723,
                'en_occupation' =>
                    'Lifeguards, Ski Patrol, and Other Recreational Protective Service Workers',
                'ar_occupation' =>
                    'Lifeguards, Ski Patrol, and Other Recreational Protective Service Workers',
                'slug' => 'lifeguards-ski-patrol-and-other-recreational-protective-service-workers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            223 => [
                'id' => 724,
                'en_occupation' => 'Loading Machine Operators, Underground Mining',
                'ar_occupation' => 'Loading Machine Operators, Underground Mining',
                'slug' => 'loading-machine-operators-underground-mining',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            224 => [
                'id' => 725,
                'en_occupation' => 'Loan Counselor',
                'ar_occupation' => 'Loan Counselor',
                'slug' => 'loan-counselor',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            225 => [
                'id' => 726,
                'en_occupation' => 'Loan Counselors',
                'ar_occupation' => 'Loan Counselors',
                'slug' => 'loan-counselors',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            226 => [
                'id' => 727,
                'en_occupation' => 'Loan Interviewers and Clerks',
                'ar_occupation' => 'Loan Interviewers and Clerks',
                'slug' => 'loan-interviewers-and-clerks',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            227 => [
                'id' => 728,
                'en_occupation' => 'Loan Officers',
                'ar_occupation' => 'Loan Officers',
                'slug' => 'loan-officers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            228 => [
                'id' => 729,
                'en_occupation' => 'Locker Room, Coatroom, and Dressing Room Attendants',
                'ar_occupation' => 'Locker Room, Coatroom, and Dressing Room Attendants',
                'slug' => 'locker-room-coatroom-and-dressing-room-attendants',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            229 => [
                'id' => 730,
                'en_occupation' => 'Locksmiths and Safe Repairers',
                'ar_occupation' => 'Locksmiths and Safe Repairers',
                'slug' => 'locksmiths-and-safe-repairers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            230 => [
                'id' => 731,
                'en_occupation' => 'Locomotive Engineers',
                'ar_occupation' => 'Locomotive Engineers',
                'slug' => 'locomotive-engineers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            231 => [
                'id' => 732,
                'en_occupation' => 'Locomotive Firers',
                'ar_occupation' => 'Locomotive Firers',
                'slug' => 'locomotive-firers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            232 => [
                'id' => 733,
                'en_occupation' => 'Lodging Managers',
                'ar_occupation' => 'Lodging Managers',
                'slug' => 'lodging-managers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            233 => [
                'id' => 734,
                'en_occupation' => 'Log Graders and Scalers',
                'ar_occupation' => 'Log Graders and Scalers',
                'slug' => 'log-graders-and-scalers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            234 => [
                'id' => 735,
                'en_occupation' => 'Logging Equipment Operators',
                'ar_occupation' => 'Logging Equipment Operators',
                'slug' => 'logging-equipment-operators',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            235 => [
                'id' => 736,
                'en_occupation' => 'Logging Tractor Operators',
                'ar_occupation' => 'Logging Tractor Operators',
                'slug' => 'logging-tractor-operators',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            236 => [
                'id' => 737,
                'en_occupation' => 'Logging Workers, All Other',
                'ar_occupation' => 'Logging Workers, All Other',
                'slug' => 'logging-workers-all-other',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            237 => [
                'id' => 738,
                'en_occupation' => 'Logisticians',
                'ar_occupation' => 'Logisticians',
                'slug' => 'logisticians',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            238 => [
                'id' => 739,
                'en_occupation' => 'Logistics Analysts',
                'ar_occupation' => 'Logistics Analysts',
                'slug' => 'logistics-analysts',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            239 => [
                'id' => 740,
                'en_occupation' => 'Logistics Engineers',
                'ar_occupation' => 'Logistics Engineers',
                'slug' => 'logistics-engineers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            240 => [
                'id' => 741,
                'en_occupation' => 'Logistics Managers',
                'ar_occupation' => 'Logistics Managers',
                'slug' => 'logistics-managers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            241 => [
                'id' => 742,
                'en_occupation' => 'Loss Prevention Managers',
                'ar_occupation' => 'Loss Prevention Managers',
                'slug' => 'loss-prevention-managers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            242 => [
                'id' => 743,
                'en_occupation' =>
                    'Low Vision Therapists, Orientation and Mobility Specialists, and Vision Rehabilitation Therapists',
                'ar_occupation' =>
                    'Low Vision Therapists, Orientation and Mobility Specialists, and Vision Rehabilitation Therapists',
                'slug' =>
                    'low-vision-therapists-orientation-and-mobility-specialists-and-vision-rehabilitation-therapists',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            243 => [
                'id' => 744,
                'en_occupation' => 'Machine Feeders and Offbearers',
                'ar_occupation' => 'Machine Feeders and Offbearers',
                'slug' => 'machine-feeders-and-offbearers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            244 => [
                'id' => 745,
                'en_occupation' => 'Machinists',
                'ar_occupation' => 'Machinists',
                'slug' => 'machinists',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            245 => [
                'id' => 746,
                'en_occupation' => 'Magnetic Resonance Imaging Technologists',
                'ar_occupation' => 'Magnetic Resonance Imaging Technologists',
                'slug' => 'magnetic-resonance-imaging-technologists',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            246 => [
                'id' => 747,
                'en_occupation' => 'Maids and Housekeeping Cleaners',
                'ar_occupation' => 'Maids and Housekeeping Cleaners',
                'slug' => 'maids-and-housekeeping-cleaners',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            247 => [
                'id' => 748,
                'en_occupation' => 'Mail Clerks and Mail Machine Operators, Except Postal Service',
                'ar_occupation' => 'Mail Clerks and Mail Machine Operators, Except Postal Service',
                'slug' => 'mail-clerks-and-mail-machine-operators-except-postal-service',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            248 => [
                'id' => 749,
                'en_occupation' => 'Mail Clerks, Except Mail Machine Operators and Postal Service',
                'ar_occupation' => 'Mail Clerks, Except Mail Machine Operators and Postal Service',
                'slug' => 'mail-clerks-except-mail-machine-operators-and-postal-service',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            249 => [
                'id' => 750,
                'en_occupation' => 'Mail Machine Operators, Preparation and Handling',
                'ar_occupation' => 'Mail Machine Operators, Preparation and Handling',
                'slug' => 'mail-machine-operators-preparation-and-handling',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            250 => [
                'id' => 751,
                'en_occupation' => 'Maintenance and Repair Worker',
                'ar_occupation' => 'Maintenance and Repair Worker',
                'slug' => 'maintenance-and-repair-worker',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            251 => [
                'id' => 752,
                'en_occupation' => 'Maintenance and Repair Workers, General',
                'ar_occupation' => 'Maintenance and Repair Workers, General',
                'slug' => 'maintenance-and-repair-workers-general',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            252 => [
                'id' => 753,
                'en_occupation' => 'Maintenance Workers, Machinery',
                'ar_occupation' => 'Maintenance Workers, Machinery',
                'slug' => 'maintenance-workers-machinery',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            253 => [
                'id' => 754,
                'en_occupation' => 'Makeup Artists, Theatrical and Performance',
                'ar_occupation' => 'Makeup Artists, Theatrical and Performance',
                'slug' => 'makeup-artists-theatrical-and-performance',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            254 => [
                'id' => 755,
                'en_occupation' => 'Management Analysts',
                'ar_occupation' => 'Management Analysts',
                'slug' => 'management-analysts',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            255 => [
                'id' => 756,
                'en_occupation' => 'Managers, All Other',
                'ar_occupation' => 'Managers, All Other',
                'slug' => 'managers-all-other',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            256 => [
                'id' => 757,
                'en_occupation' => 'Manicurists and Pedicurists',
                'ar_occupation' => 'Manicurists and Pedicurists',
                'slug' => 'manicurists-and-pedicurists',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            257 => [
                'id' => 758,
                'en_occupation' => 'Manufactured Building and Mobile Home Installers',
                'ar_occupation' => 'Manufactured Building and Mobile Home Installers',
                'slug' => 'manufactured-building-and-mobile-home-installers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            258 => [
                'id' => 759,
                'en_occupation' => 'Manufacturing Engineering Technologists',
                'ar_occupation' => 'Manufacturing Engineering Technologists',
                'slug' => 'manufacturing-engineering-technologists',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            259 => [
                'id' => 760,
                'en_occupation' => 'Manufacturing Engineers',
                'ar_occupation' => 'Manufacturing Engineers',
                'slug' => 'manufacturing-engineers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            260 => [
                'id' => 761,
                'en_occupation' => 'Manufacturing Production Technicians',
                'ar_occupation' => 'Manufacturing Production Technicians',
                'slug' => 'manufacturing-production-technicians',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            261 => [
                'id' => 762,
                'en_occupation' => 'Mapping Technicians',
                'ar_occupation' => 'Mapping Technicians',
                'slug' => 'mapping-technicians',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            262 => [
                'id' => 763,
                'en_occupation' => 'Marine Architects',
                'ar_occupation' => 'Marine Architects',
                'slug' => 'marine-architects',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            263 => [
                'id' => 764,
                'en_occupation' => 'Marine Cargo Inspectors',
                'ar_occupation' => 'Marine Cargo Inspectors',
                'slug' => 'marine-cargo-inspectors',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            264 => [
                'id' => 765,
                'en_occupation' => 'Marine Engineers',
                'ar_occupation' => 'Marine Engineers',
                'slug' => 'marine-engineers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            265 => [
                'id' => 766,
                'en_occupation' => 'Marine Engineers and Naval Architects',
                'ar_occupation' => 'Marine Engineers and Naval Architects',
                'slug' => 'marine-engineers-and-naval-architects',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            266 => [
                'id' => 767,
                'en_occupation' => 'Market Research Analysts',
                'ar_occupation' => 'Market Research Analysts',
                'slug' => 'market-research-analysts',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            267 => [
                'id' => 768,
                'en_occupation' => 'Market Research Analysts and Marketing Specialists',
                'ar_occupation' => 'Market Research Analysts and Marketing Specialists',
                'slug' => 'market-research-analysts-and-marketing-specialists',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            268 => [
                'id' => 769,
                'en_occupation' => 'Marketing Managers',
                'ar_occupation' => 'Marketing Managers',
                'slug' => 'marketing-managers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            269 => [
                'id' => 770,
                'en_occupation' =>
                    'Marking and Identification Printing Machine Setters and Set-Up Operators',
                'ar_occupation' =>
                    'Marking and Identification Printing Machine Setters and Set-Up Operators',
                'slug' => 'marking-and-identification-printing-machine-setters-and-set-up-operators',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            270 => [
                'id' => 771,
                'en_occupation' => 'Marking Clerks',
                'ar_occupation' => 'Marking Clerks',
                'slug' => 'marking-clerks',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            271 => [
                'id' => 772,
                'en_occupation' => 'Marriage and Family Therapists',
                'ar_occupation' => 'Marriage and Family Therapists',
                'slug' => 'marriage-and-family-therapists',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            272 => [
                'id' => 773,
                'en_occupation' => 'Massage Therapists',
                'ar_occupation' => 'Massage Therapists',
                'slug' => 'massage-therapists',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            273 => [
                'id' => 774,
                'en_occupation' => 'Material Moving Workers, All Other',
                'ar_occupation' => 'Material Moving Workers, All Other',
                'slug' => 'material-moving-workers-all-other',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            274 => [
                'id' => 775,
                'en_occupation' => 'Materials Engineers',
                'ar_occupation' => 'Materials Engineers',
                'slug' => 'materials-engineers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            275 => [
                'id' => 776,
                'en_occupation' => 'Materials Inspectors',
                'ar_occupation' => 'Materials Inspectors',
                'slug' => 'materials-inspectors',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            276 => [
                'id' => 777,
                'en_occupation' => 'Materials Scientists',
                'ar_occupation' => 'Materials Scientists',
                'slug' => 'materials-scientists',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            277 => [
                'id' => 778,
                'en_occupation' => 'Mates- Ship, Boat, and Barge',
                'ar_occupation' => 'Mates- Ship, Boat, and Barge',
                'slug' => 'mates-ship-boat-and-barge',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            278 => [
                'id' => 779,
                'en_occupation' => 'Mathematical Science Occupations, All Other',
                'ar_occupation' => 'Mathematical Science Occupations, All Other',
                'slug' => 'mathematical-science-occupations-all-other',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            279 => [
                'id' => 780,
                'en_occupation' => 'Mathematical Science Teachers, Postsecondary',
                'ar_occupation' => 'Mathematical Science Teachers, Postsecondary',
                'slug' => 'mathematical-science-teachers-postsecondary',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            280 => [
                'id' => 781,
                'en_occupation' => 'Mathematical Technicians',
                'ar_occupation' => 'Mathematical Technicians',
                'slug' => 'mathematical-technicians',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            281 => [
                'id' => 782,
                'en_occupation' => 'Mathematicians',
                'ar_occupation' => 'Mathematicians',
                'slug' => 'mathematicians',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            282 => [
                'id' => 783,
                'en_occupation' => 'Meat, Poultry, and Fish Cutters and Trimmers',
                'ar_occupation' => 'Meat, Poultry, and Fish Cutters and Trimmers',
                'slug' => 'meat-poultry-and-fish-cutters-and-trimmers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            283 => [
                'id' => 784,
                'en_occupation' => 'Mechanical Door Repairers',
                'ar_occupation' => 'Mechanical Door Repairers',
                'slug' => 'mechanical-door-repairers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            284 => [
                'id' => 785,
                'en_occupation' => 'Mechanical Drafters',
                'ar_occupation' => 'Mechanical Drafters',
                'slug' => 'mechanical-drafters',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            285 => [
                'id' => 786,
                'en_occupation' => 'Mechanical Engineering Technicians',
                'ar_occupation' => 'Mechanical Engineering Technicians',
                'slug' => 'mechanical-engineering-technicians',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            286 => [
                'id' => 787,
                'en_occupation' => 'Mechanical Engineering Technologists',
                'ar_occupation' => 'Mechanical Engineering Technologists',
                'slug' => 'mechanical-engineering-technologists',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            287 => [
                'id' => 788,
                'en_occupation' => 'Mechanical Engineers',
                'ar_occupation' => 'Mechanical Engineers',
                'slug' => 'mechanical-engineers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            288 => [
                'id' => 789,
                'en_occupation' => 'Mechanical Inspectors',
                'ar_occupation' => 'Mechanical Inspectors',
                'slug' => 'mechanical-inspectors',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            289 => [
                'id' => 790,
                'en_occupation' => 'Mechatronics Engineers',
                'ar_occupation' => 'Mechatronics Engineers',
                'slug' => 'mechatronics-engineers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            290 => [
                'id' => 791,
                'en_occupation' => 'Media and Communication Equipment Workers, All Other',
                'ar_occupation' => 'Media and Communication Equipment Workers, All Other',
                'slug' => 'media-and-communication-equipment-workers-all-other',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            291 => [
                'id' => 792,
                'en_occupation' => 'Media and Communication Workers, All Other',
                'ar_occupation' => 'Media and Communication Workers, All Other',
                'slug' => 'media-and-communication-workers-all-other',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            292 => [
                'id' => 793,
                'en_occupation' => 'Medical and Clinical Laboratory Technicians',
                'ar_occupation' => 'Medical and Clinical Laboratory Technicians',
                'slug' => 'medical-and-clinical-laboratory-technicians',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            293 => [
                'id' => 794,
                'en_occupation' => 'Medical and Clinical Laboratory Technologists',
                'ar_occupation' => 'Medical and Clinical Laboratory Technologists',
                'slug' => 'medical-and-clinical-laboratory-technologists',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            294 => [
                'id' => 795,
                'en_occupation' => 'Medical and Health Services Managers',
                'ar_occupation' => 'Medical and Health Services Managers',
                'slug' => 'medical-and-health-services-managers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            295 => [
                'id' => 796,
                'en_occupation' => 'Medical and Public Health Social Workers',
                'ar_occupation' => 'Medical and Public Health Social Workers',
                'slug' => 'medical-and-public-health-social-workers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            296 => [
                'id' => 797,
                'en_occupation' => 'Medical Appliance Technicians',
                'ar_occupation' => 'Medical Appliance Technicians',
                'slug' => 'medical-appliance-technicians',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            297 => [
                'id' => 798,
                'en_occupation' => 'Medical Assistants',
                'ar_occupation' => 'Medical Assistants',
                'slug' => 'medical-assistants',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            298 => [
                'id' => 799,
                'en_occupation' => 'Medical Equipment Preparers',
                'ar_occupation' => 'Medical Equipment Preparers',
                'slug' => 'medical-equipment-preparers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            299 => [
                'id' => 800,
                'en_occupation' => 'Medical Equipment Repairers',
                'ar_occupation' => 'Medical Equipment Repairers',
                'slug' => 'medical-equipment-repairers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            300 => [
                'id' => 801,
                'en_occupation' => 'Medical Records and Health Information Technicians',
                'ar_occupation' => 'Medical Records and Health Information Technicians',
                'slug' => 'medical-records-and-health-information-technicians',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            301 => [
                'id' => 802,
                'en_occupation' => 'Medical Scientists, Except Epidemiologists',
                'ar_occupation' => 'Medical Scientists, Except Epidemiologists',
                'slug' => 'medical-scientists-except-epidemiologists',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            302 => [
                'id' => 803,
                'en_occupation' => 'Medical Secretaries',
                'ar_occupation' => 'Medical Secretaries',
                'slug' => 'medical-secretaries',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            303 => [
                'id' => 804,
                'en_occupation' => 'Medical Transcriptionists',
                'ar_occupation' => 'Medical Transcriptionists',
                'slug' => 'medical-transcriptionists',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            304 => [
                'id' => 805,
                'en_occupation' => 'Meeting and Convention Planners',
                'ar_occupation' => 'Meeting and Convention Planners',
                'slug' => 'meeting-and-convention-planners',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            305 => [
                'id' => 806,
                'en_occupation' => 'Mental Health and Substance Abuse Social Workers',
                'ar_occupation' => 'Mental Health and Substance Abuse Social Workers',
                'slug' => 'mental-health-and-substance-abuse-social-workers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            306 => [
                'id' => 807,
                'en_occupation' => 'Mental Health Counselors',
                'ar_occupation' => 'Mental Health Counselors',
                'slug' => 'mental-health-counselors',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            307 => [
                'id' => 808,
                'en_occupation' => 'Merchandise Displayers and Window Trimmers',
                'ar_occupation' => 'Merchandise Displayers and Window Trimmers',
                'slug' => 'merchandise-displayers-and-window-trimmers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            308 => [
                'id' => 809,
                'en_occupation' => 'Metal Fabricators, Structural Metal Products',
                'ar_occupation' => 'Metal Fabricators, Structural Metal Products',
                'slug' => 'metal-fabricators-structural-metal-products',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            309 => [
                'id' => 810,
                'en_occupation' =>
                    'Metal Molding, Coremaking, and Casting Machine Operators and Tenders',
                'ar_occupation' =>
                    'Metal Molding, Coremaking, and Casting Machine Operators and Tenders',
                'slug' => 'metal-molding-coremaking-and-casting-machine-operators-and-tenders',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            310 => [
                'id' => 811,
                'en_occupation' =>
                    'Metal Molding, Coremaking, and Casting Machine Setters and Set-Up Operators',
                'ar_occupation' =>
                    'Metal Molding, Coremaking, and Casting Machine Setters and Set-Up Operators',
                'slug' => 'metal-molding-coremaking-and-casting-machine-setters-and-set-up-operators',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            311 => [
                'id' => 812,
                'en_occupation' => 'Metal Workers and Plastic Workers, All Other',
                'ar_occupation' => 'Metal Workers and Plastic Workers, All Other',
                'slug' => 'metal-workers-and-plastic-workers-all-other',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            312 => [
                'id' => 813,
                'en_occupation' => 'Metal-Refining Furnace Operators and Tenders',
                'ar_occupation' => 'Metal-Refining Furnace Operators and Tenders',
                'slug' => 'metal-refining-furnace-operators-and-tenders',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            313 => [
                'id' => 814,
                'en_occupation' => 'Meter Mechanics',
                'ar_occupation' => 'Meter Mechanics',
                'slug' => 'meter-mechanics',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            314 => [
                'id' => 815,
                'en_occupation' => 'Meter Readers, Utilities',
                'ar_occupation' => 'Meter Readers, Utilities',
                'slug' => 'meter-readers-utilities',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            315 => [
                'id' => 816,
                'en_occupation' => 'Methane Landfill Gas Generation System Technicians',
                'ar_occupation' => 'Methane Landfill Gas Generation System Technicians',
                'slug' => 'methane-landfill-gas-generation-system-technicians',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            316 => [
                'id' => 817,
                'en_occupation' => 'Methane/Landfill Gas Collection System Operators',
                'ar_occupation' => 'Methane/Landfill Gas Collection System Operators',
                'slug' => 'methanelandfill-gas-collection-system-operators',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            317 => [
                'id' => 818,
                'en_occupation' => 'Microbiologists',
                'ar_occupation' => 'Microbiologists',
                'slug' => 'microbiologists',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            318 => [
                'id' => 819,
                'en_occupation' => 'Microsystems Engineers',
                'ar_occupation' => 'Microsystems Engineers',
                'slug' => 'microsystems-engineers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            319 => [
                'id' => 820,
                'en_occupation' => 'Middle School Teachers, Except Special and Vocational Education',
                'ar_occupation' => 'Middle School Teachers, Except Special and Vocational Education',
                'slug' => 'middle-school-teachers-except-special-and-vocational-education',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            320 => [
                'id' => 821,
                'en_occupation' => 'Midwives',
                'ar_occupation' => 'Midwives',
                'slug' => 'midwives',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            321 => [
                'id' => 822,
                'en_occupation' =>
                    'Military Enlisted Tactical Operations and Air--Weapons Specialists and Crew Members, All Other',
                'ar_occupation' =>
                    'Military Enlisted Tactical Operations and Air--Weapons Specialists and Crew Members, All Other',
                'slug' =>
                    'military-enlisted-tactical-operations-and-air-weapons-specialists-and-crew-members-all-other',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            322 => [
                'id' => 823,
                'en_occupation' =>
                    'Military Officer Special and Tactical Operations Leaders--Managers, All Other',
                'ar_occupation' =>
                    'Military Officer Special and Tactical Operations Leaders--Managers, All Other',
                'slug' => 'military-officer-special-and-tactical-operations-leaders-managers-all-other',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            323 => [
                'id' => 824,
                'en_occupation' =>
                    'Milling and Planing Machine Setters, Operators, and Tenders, Metal and Plastic',
                'ar_occupation' =>
                    'Milling and Planing Machine Setters, Operators, and Tenders, Metal and Plastic',
                'slug' => 'milling-and-planing-machine-setters-operators-and-tenders-metal-and-plastic',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            324 => [
                'id' => 825,
                'en_occupation' => 'Millwrights',
                'ar_occupation' => 'Millwrights',
                'slug' => 'millwrights',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            325 => [
                'id' => 826,
                'en_occupation' => 'Mine Cutting and Channeling Machine Operators',
                'ar_occupation' => 'Mine Cutting and Channeling Machine Operators',
                'slug' => 'mine-cutting-and-channeling-machine-operators',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            326 => [
                'id' => 827,
                'en_occupation' => 'Mining and Geological Engineers, Including Mining Safety Engineers',
                'ar_occupation' => 'Mining and Geological Engineers, Including Mining Safety Engineers',
                'slug' => 'mining-and-geological-engineers-including-mining-safety-engineers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            327 => [
                'id' => 828,
                'en_occupation' => 'Mining Machine Operators, All Other',
                'ar_occupation' => 'Mining Machine Operators, All Other',
                'slug' => 'mining-machine-operators-all-other',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            328 => [
                'id' => 829,
                'en_occupation' => 'Mixing and Blending Machine Setters, Operators, and Tenders',
                'ar_occupation' => 'Mixing and Blending Machine Setters, Operators, and Tenders',
                'slug' => 'mixing-and-blending-machine-setters-operators-and-tenders',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            329 => [
                'id' => 830,
                'en_occupation' => 'Mobile Heavy Equipment Mechanics, Except Engines',
                'ar_occupation' => 'Mobile Heavy Equipment Mechanics, Except Engines',
                'slug' => 'mobile-heavy-equipment-mechanics-except-engines',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            330 => [
                'id' => 831,
                'en_occupation' => 'Model and Mold Makers, Jewelry',
                'ar_occupation' => 'Model and Mold Makers, Jewelry',
                'slug' => 'model-and-mold-makers-jewelry',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            331 => [
                'id' => 832,
                'en_occupation' => 'Model Makers, Metal and Plastic',
                'ar_occupation' => 'Model Makers, Metal and Plastic',
                'slug' => 'model-makers-metal-and-plastic',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            332 => [
                'id' => 833,
                'en_occupation' => 'Model Makers, Wood',
                'ar_occupation' => 'Model Makers, Wood',
                'slug' => 'model-makers-wood',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            333 => [
                'id' => 834,
                'en_occupation' => 'Models',
                'ar_occupation' => 'Models',
                'slug' => 'models',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            334 => [
                'id' => 835,
                'en_occupation' => 'Mold Makers, Hand',
                'ar_occupation' => 'Mold Makers, Hand',
                'slug' => 'mold-makers-hand',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            335 => [
                'id' => 836,
                'en_occupation' => 'Molders, Shapers, and Casters, Except Metal and Plastic',
                'ar_occupation' => 'Molders, Shapers, and Casters, Except Metal and Plastic',
                'slug' => 'molders-shapers-and-casters-except-metal-and-plastic',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            336 => [
                'id' => 837,
                'en_occupation' => 'Molding and Casting Workers',
                'ar_occupation' => 'Molding and Casting Workers',
                'slug' => 'molding-and-casting-workers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            337 => [
                'id' => 838,
                'en_occupation' =>
                    'Molding, Coremaking, and Casting Machine Setters, Operators, and Tenders, Metal and Plastic',
                'ar_occupation' =>
                    'Molding, Coremaking, and Casting Machine Setters, Operators, and Tenders, Metal and Plastic',
                'slug' =>
                    'molding-coremaking-and-casting-machine-setters-operators-and-tenders-metal-and-plastic',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            338 => [
                'id' => 839,
                'en_occupation' => 'Molecular and Cellular Biologists',
                'ar_occupation' => 'Molecular and Cellular Biologists',
                'slug' => 'molecular-and-cellular-biologists',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            339 => [
                'id' => 840,
                'en_occupation' => 'Morticians, Undertakers, and Funeral Directors',
                'ar_occupation' => 'Morticians, Undertakers, and Funeral Directors',
                'slug' => 'morticians-undertakers-and-funeral-directors',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            340 => [
                'id' => 841,
                'en_occupation' => 'Motion Picture Projectionists',
                'ar_occupation' => 'Motion Picture Projectionists',
                'slug' => 'motion-picture-projectionists',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            341 => [
                'id' => 842,
                'en_occupation' => 'Motor Vehicle Inspectors',
                'ar_occupation' => 'Motor Vehicle Inspectors',
                'slug' => 'motor-vehicle-inspectors',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            342 => [
                'id' => 843,
                'en_occupation' => 'Motor Vehicle Operators, All Other',
                'ar_occupation' => 'Motor Vehicle Operators, All Other',
                'slug' => 'motor-vehicle-operators-all-other',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            343 => [
                'id' => 844,
                'en_occupation' => 'Motorboat Mechanics',
                'ar_occupation' => 'Motorboat Mechanics',
                'slug' => 'motorboat-mechanics',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            344 => [
                'id' => 845,
                'en_occupation' => 'Motorboat Operators',
                'ar_occupation' => 'Motorboat Operators',
                'slug' => 'motorboat-operators',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            345 => [
                'id' => 846,
                'en_occupation' => 'Motorcycle Mechanics',
                'ar_occupation' => 'Motorcycle Mechanics',
                'slug' => 'motorcycle-mechanics',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            346 => [
                'id' => 847,
                'en_occupation' => 'Multi-Media Artists and Animators',
                'ar_occupation' => 'Multi-Media Artists and Animators',
                'slug' => 'multi-media-artists-and-animators',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            347 => [
                'id' => 848,
                'en_occupation' =>
                    'Multiple Machine Tool Setters, Operators, and Tenders, Metal and Plastic',
                'ar_occupation' =>
                    'Multiple Machine Tool Setters, Operators, and Tenders, Metal and Plastic',
                'slug' => 'multiple-machine-tool-setters-operators-and-tenders-metal-and-plastic',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            348 => [
                'id' => 849,
                'en_occupation' => 'Municipal Clerks',
                'ar_occupation' => 'Municipal Clerks',
                'slug' => 'municipal-clerks',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            349 => [
                'id' => 850,
                'en_occupation' => 'Municipal Fire Fighters',
                'ar_occupation' => 'Municipal Fire Fighters',
                'slug' => 'municipal-fire-fighters',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            350 => [
                'id' => 851,
                'en_occupation' => 'Municipal Fire Fighting and Prevention Supervisors',
                'ar_occupation' => 'Municipal Fire Fighting and Prevention Supervisors',
                'slug' => 'municipal-fire-fighting-and-prevention-supervisors',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            351 => [
                'id' => 852,
                'en_occupation' => 'Museum Technicians and Conservators',
                'ar_occupation' => 'Museum Technicians and Conservators',
                'slug' => 'museum-technicians-and-conservators',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            352 => [
                'id' => 853,
                'en_occupation' => 'Music Arrangers and Orchestrators',
                'ar_occupation' => 'Music Arrangers and Orchestrators',
                'slug' => 'music-arrangers-and-orchestrators',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            353 => [
                'id' => 854,
                'en_occupation' => 'Music Composers and Arrangers',
                'ar_occupation' => 'Music Composers and Arrangers',
                'slug' => 'music-composers-and-arrangers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            354 => [
                'id' => 855,
                'en_occupation' => 'Music Directors',
                'ar_occupation' => 'Music Directors',
                'slug' => 'music-directors',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            355 => [
                'id' => 856,
                'en_occupation' => 'Music Directors and Composers',
                'ar_occupation' => 'Music Directors and Composers',
                'slug' => 'music-directors-and-composers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            356 => [
                'id' => 857,
                'en_occupation' => 'Music Therapists',
                'ar_occupation' => 'Music Therapists',
                'slug' => 'music-therapists',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            357 => [
                'id' => 858,
                'en_occupation' => 'Musical Instrument Repairers and Tuners',
                'ar_occupation' => 'Musical Instrument Repairers and Tuners',
                'slug' => 'musical-instrument-repairers-and-tuners',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            358 => [
                'id' => 859,
                'en_occupation' => 'Musicians and Singers',
                'ar_occupation' => 'Musicians and Singers',
                'slug' => 'musicians-and-singers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            359 => [
                'id' => 860,
                'en_occupation' => 'Musicians, Instrumental',
                'ar_occupation' => 'Musicians, Instrumental',
                'slug' => 'musicians-instrumental',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            360 => [
                'id' => 861,
                'en_occupation' => 'Nannies',
                'ar_occupation' => 'Nannies',
                'slug' => 'nannies',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            361 => [
                'id' => 862,
                'en_occupation' => 'Nanosystems Engineers',
                'ar_occupation' => 'Nanosystems Engineers',
                'slug' => 'nanosystems-engineers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            362 => [
                'id' => 863,
                'en_occupation' => 'Nanotechnology Engineering Technicians',
                'ar_occupation' => 'Nanotechnology Engineering Technicians',
                'slug' => 'nanotechnology-engineering-technicians',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            363 => [
                'id' => 864,
                'en_occupation' => 'Nanotechnology Engineering Technologists',
                'ar_occupation' => 'Nanotechnology Engineering Technologists',
                'slug' => 'nanotechnology-engineering-technologists',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            364 => [
                'id' => 865,
                'en_occupation' => 'Natural Sciences Managers',
                'ar_occupation' => 'Natural Sciences Managers',
                'slug' => 'natural-sciences-managers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            365 => [
                'id' => 866,
                'en_occupation' => 'Naturopathic Physicians',
                'ar_occupation' => 'Naturopathic Physicians',
                'slug' => 'naturopathic-physicians',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            366 => [
                'id' => 867,
                'en_occupation' => 'Network and Computer Systems Administrator',
                'ar_occupation' => 'Network and Computer Systems Administrator',
                'slug' => 'network-and-computer-systems-administrator',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            367 => [
                'id' => 868,
                'en_occupation' => 'Network and Computer Systems Administrators',
                'ar_occupation' => 'Network and Computer Systems Administrators',
                'slug' => 'network-and-computer-systems-administrators',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            368 => [
                'id' => 869,
                'en_occupation' => 'Network Systems and Data Communications Analysts',
                'ar_occupation' => 'Network Systems and Data Communications Analysts',
                'slug' => 'network-systems-and-data-communications-analysts',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            369 => [
                'id' => 870,
                'en_occupation' => 'Neurodiagnostic Technologists',
                'ar_occupation' => 'Neurodiagnostic Technologists',
                'slug' => 'neurodiagnostic-technologists',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            370 => [
                'id' => 871,
                'en_occupation' => 'Neurologists',
                'ar_occupation' => 'Neurologists',
                'slug' => 'neurologists',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            371 => [
                'id' => 872,
                'en_occupation' => 'Neuropsychologists and Clinical Neuropsychologists',
                'ar_occupation' => 'Neuropsychologists and Clinical Neuropsychologists',
                'slug' => 'neuropsychologists-and-clinical-neuropsychologists',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            372 => [
                'id' => 873,
                'en_occupation' => 'New Accounts Clerks',
                'ar_occupation' => 'New Accounts Clerks',
                'slug' => 'new-accounts-clerks',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:40',
                'updated_at' => '2021-02-16 06:34:40'
            ],
            373 => [
                'id' => 874,
                'en_occupation' => 'Non-Destructive Testing Specialists',
                'ar_occupation' => 'Non-Destructive Testing Specialists',
                'slug' => 'non-destructive-testing-specialists',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            374 => [
                'id' => 875,
                'en_occupation' =>
                    'Nonelectrolytic Plating and Coating Machine Operators and Tenders, Metal and Plastic',
                'ar_occupation' =>
                    'Nonelectrolytic Plating and Coating Machine Operators and Tenders, Metal and Plastic',
                'slug' =>
                    'nonelectrolytic-plating-and-coating-machine-operators-and-tenders-metal-and-plastic',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            375 => [
                'id' => 876,
                'en_occupation' =>
                    'Nonelectrolytic Plating and Coating Machine Setters and Set-Up Operators, Metal and Plastic',
                'ar_occupation' =>
                    'Nonelectrolytic Plating and Coating Machine Setters and Set-Up Operators, Metal and Plastic',
                'slug' =>
                    'nonelectrolytic-plating-and-coating-machine-setters-and-set-up-operators-metal-and-plastic',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            376 => [
                'id' => 877,
                'en_occupation' => 'Nonfarm Animal Caretakers',
                'ar_occupation' => 'Nonfarm Animal Caretakers',
                'slug' => 'nonfarm-animal-caretakers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            377 => [
                'id' => 878,
                'en_occupation' => 'Nuclear Engineers',
                'ar_occupation' => 'Nuclear Engineers',
                'slug' => 'nuclear-engineers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            378 => [
                'id' => 879,
                'en_occupation' => 'Nuclear Equipment Operation Technicians',
                'ar_occupation' => 'Nuclear Equipment Operation Technicians',
                'slug' => 'nuclear-equipment-operation-technicians',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            379 => [
                'id' => 880,
                'en_occupation' => 'Nuclear Medicine Physicians',
                'ar_occupation' => 'Nuclear Medicine Physicians',
                'slug' => 'nuclear-medicine-physicians',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            380 => [
                'id' => 881,
                'en_occupation' => 'Nuclear Medicine Technologists',
                'ar_occupation' => 'Nuclear Medicine Technologists',
                'slug' => 'nuclear-medicine-technologists',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            381 => [
                'id' => 882,
                'en_occupation' => 'Nuclear Monitoring Technicians',
                'ar_occupation' => 'Nuclear Monitoring Technicians',
                'slug' => 'nuclear-monitoring-technicians',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            382 => [
                'id' => 883,
                'en_occupation' => 'Nuclear Power Reactor Operators',
                'ar_occupation' => 'Nuclear Power Reactor Operators',
                'slug' => 'nuclear-power-reactor-operators',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            383 => [
                'id' => 884,
                'en_occupation' => 'Nuclear Technicians',
                'ar_occupation' => 'Nuclear Technicians',
                'slug' => 'nuclear-technicians',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            384 => [
                'id' => 885,
                'en_occupation' =>
                    'Numerical Control Machine Tool Operators and Tenders, Metal and Plastic',
                'ar_occupation' =>
                    'Numerical Control Machine Tool Operators and Tenders, Metal and Plastic',
                'slug' => 'numerical-control-machine-tool-operators-and-tenders-metal-and-plastic',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            385 => [
                'id' => 886,
                'en_occupation' => 'Numerical Tool and Process Control Programmers',
                'ar_occupation' => 'Numerical Tool and Process Control Programmers',
                'slug' => 'numerical-tool-and-process-control-programmers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            386 => [
                'id' => 887,
                'en_occupation' => 'Nurse Anesthetists',
                'ar_occupation' => 'Nurse Anesthetists',
                'slug' => 'nurse-anesthetists',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            387 => [
                'id' => 888,
                'en_occupation' => 'Nurse Midwives',
                'ar_occupation' => 'Nurse Midwives',
                'slug' => 'nurse-midwives',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            388 => [
                'id' => 889,
                'en_occupation' => 'Nurse Practitioners',
                'ar_occupation' => 'Nurse Practitioners',
                'slug' => 'nurse-practitioners',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            389 => [
                'id' => 890,
                'en_occupation' => 'Nursery and Greenhouse Manager',
                'ar_occupation' => 'Nursery and Greenhouse Manager',
                'slug' => 'nursery-and-greenhouse-manager',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            390 => [
                'id' => 891,
                'en_occupation' => 'Nursery and Greenhouse Managers',
                'ar_occupation' => 'Nursery and Greenhouse Managers',
                'slug' => 'nursery-and-greenhouse-managers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            391 => [
                'id' => 892,
                'en_occupation' => 'Nursery Workers',
                'ar_occupation' => 'Nursery Workers',
                'slug' => 'nursery-workers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            392 => [
                'id' => 893,
                'en_occupation' => 'Nursing Aides, Orderlies, and Attendants',
                'ar_occupation' => 'Nursing Aides, Orderlies, and Attendants',
                'slug' => 'nursing-aides-orderlies-and-attendants',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            393 => [
                'id' => 894,
                'en_occupation' => 'Nursing Assistants',
                'ar_occupation' => 'Nursing Assistants',
                'slug' => 'nursing-assistants',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            394 => [
                'id' => 895,
                'en_occupation' => 'Nursing Instructors and Teachers, Postsecondary',
                'ar_occupation' => 'Nursing Instructors and Teachers, Postsecondary',
                'slug' => 'nursing-instructors-and-teachers-postsecondary',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            395 => [
                'id' => 896,
                'en_occupation' => 'Obstetricians and Gynecologists',
                'ar_occupation' => 'Obstetricians and Gynecologists',
                'slug' => 'obstetricians-and-gynecologists',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            396 => [
                'id' => 897,
                'en_occupation' => 'Occupational Health and Safety Specialists',
                'ar_occupation' => 'Occupational Health and Safety Specialists',
                'slug' => 'occupational-health-and-safety-specialists',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            397 => [
                'id' => 898,
                'en_occupation' => 'Occupational Health and Safety Technicians',
                'ar_occupation' => 'Occupational Health and Safety Technicians',
                'slug' => 'occupational-health-and-safety-technicians',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            398 => [
                'id' => 899,
                'en_occupation' => 'Occupational Therapist Aides',
                'ar_occupation' => 'Occupational Therapist Aides',
                'slug' => 'occupational-therapist-aides',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            399 => [
                'id' => 900,
                'en_occupation' => 'Occupational Therapist Assistants',
                'ar_occupation' => 'Occupational Therapist Assistants',
                'slug' => 'occupational-therapist-assistants',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            400 => [
                'id' => 901,
                'en_occupation' => 'Occupational Therapists',
                'ar_occupation' => 'Occupational Therapists',
                'slug' => 'occupational-therapists',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            401 => [
                'id' => 902,
                'en_occupation' => 'Office and Administrative Support Workers, All Other',
                'ar_occupation' => 'Office and Administrative Support Workers, All Other',
                'slug' => 'office-and-administrative-support-workers-all-other',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            402 => [
                'id' => 903,
                'en_occupation' => 'Office Clerks, General',
                'ar_occupation' => 'Office Clerks, General',
                'slug' => 'office-clerks-general',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            403 => [
                'id' => 904,
                'en_occupation' => 'Office Machine and Cash Register Servicers',
                'ar_occupation' => 'Office Machine and Cash Register Servicers',
                'slug' => 'office-machine-and-cash-register-servicers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            404 => [
                'id' => 905,
                'en_occupation' => 'Office Machine Operators, Except Computer',
                'ar_occupation' => 'Office Machine Operators, Except Computer',
                'slug' => 'office-machine-operators-except-computer',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            405 => [
                'id' => 906,
                'en_occupation' => 'Offset Lithographic Press Setters and Set-Up Operators',
                'ar_occupation' => 'Offset Lithographic Press Setters and Set-Up Operators',
                'slug' => 'offset-lithographic-press-setters-and-set-up-operators',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            406 => [
                'id' => 907,
                'en_occupation' => 'Online Merchants',
                'ar_occupation' => 'Online Merchants',
                'slug' => 'online-merchants',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            407 => [
                'id' => 908,
                'en_occupation' => 'Operating Engineers',
                'ar_occupation' => 'Operating Engineers',
                'slug' => 'operating-engineers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            408 => [
                'id' => 909,
                'en_occupation' => 'Operating Engineers and Other Construction Equipment Operators',
                'ar_occupation' => 'Operating Engineers and Other Construction Equipment Operators',
                'slug' => 'operating-engineers-and-other-construction-equipment-operators',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            409 => [
                'id' => 910,
                'en_occupation' => 'Operations Research Analysts',
                'ar_occupation' => 'Operations Research Analysts',
                'slug' => 'operations-research-analysts',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            410 => [
                'id' => 911,
                'en_occupation' => 'Ophthalmic Laboratory Technicians',
                'ar_occupation' => 'Ophthalmic Laboratory Technicians',
                'slug' => 'ophthalmic-laboratory-technicians',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            411 => [
                'id' => 912,
                'en_occupation' => 'Ophthalmic Medical Technicians',
                'ar_occupation' => 'Ophthalmic Medical Technicians',
                'slug' => 'ophthalmic-medical-technicians',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            412 => [
                'id' => 913,
                'en_occupation' => 'Ophthalmic Medical Technologists',
                'ar_occupation' => 'Ophthalmic Medical Technologists',
                'slug' => 'ophthalmic-medical-technologists',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            413 => [
                'id' => 914,
                'en_occupation' => 'Ophthalmologists',
                'ar_occupation' => 'Ophthalmologists',
                'slug' => 'ophthalmologists',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            414 => [
                'id' => 915,
                'en_occupation' => 'Optical Instrument Assemblers',
                'ar_occupation' => 'Optical Instrument Assemblers',
                'slug' => 'optical-instrument-assemblers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            415 => [
                'id' => 916,
                'en_occupation' => 'Opticians, Dispensing',
                'ar_occupation' => 'Opticians, Dispensing',
                'slug' => 'opticians-dispensing',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            416 => [
                'id' => 917,
                'en_occupation' => 'Optometrists',
                'ar_occupation' => 'Optometrists',
                'slug' => 'optometrists',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            417 => [
                'id' => 918,
                'en_occupation' => 'Oral and Maxillofacial Surgeons',
                'ar_occupation' => 'Oral and Maxillofacial Surgeons',
                'slug' => 'oral-and-maxillofacial-surgeons',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            418 => [
                'id' => 919,
                'en_occupation' => 'Order Clerks',
                'ar_occupation' => 'Order Clerks',
                'slug' => 'order-clerks',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            419 => [
                'id' => 920,
                'en_occupation' => 'Order Fillers, Wholesale and Retail Sales',
                'ar_occupation' => 'Order Fillers, Wholesale and Retail Sales',
                'slug' => 'order-fillers-wholesale-and-retail-sales',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            420 => [
                'id' => 921,
                'en_occupation' => 'Orderlies',
                'ar_occupation' => 'Orderlies',
                'slug' => 'orderlies',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            421 => [
                'id' => 922,
                'en_occupation' => 'Ordinary Seamen and Marine Oilers',
                'ar_occupation' => 'Ordinary Seamen and Marine Oilers',
                'slug' => 'ordinary-seamen-and-marine-oilers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            422 => [
                'id' => 923,
                'en_occupation' => 'Orthodontists',
                'ar_occupation' => 'Orthodontists',
                'slug' => 'orthodontists',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            423 => [
                'id' => 924,
                'en_occupation' => 'Orthoptists',
                'ar_occupation' => 'Orthoptists',
                'slug' => 'orthoptists',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            424 => [
                'id' => 925,
                'en_occupation' => 'Orthotists and Prosthetists',
                'ar_occupation' => 'Orthotists and Prosthetists',
                'slug' => 'orthotists-and-prosthetists',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            425 => [
                'id' => 926,
                'en_occupation' => 'Outdoor Power Equipment and Other Small Engine Mechanics',
                'ar_occupation' => 'Outdoor Power Equipment and Other Small Engine Mechanics',
                'slug' => 'outdoor-power-equipment-and-other-small-engine-mechanics',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            426 => [
                'id' => 927,
                'en_occupation' => 'Packaging and Filling Machine Operators and Tenders',
                'ar_occupation' => 'Packaging and Filling Machine Operators and Tenders',
                'slug' => 'packaging-and-filling-machine-operators-and-tenders',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            427 => [
                'id' => 928,
                'en_occupation' => 'Packers and Packagers, Hand',
                'ar_occupation' => 'Packers and Packagers, Hand',
                'slug' => 'packers-and-packagers-hand',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            428 => [
                'id' => 929,
                'en_occupation' => 'Painters and Illustrators',
                'ar_occupation' => 'Painters and Illustrators',
                'slug' => 'painters-and-illustrators',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            429 => [
                'id' => 930,
                'en_occupation' => 'Painters, Construction and Maintenance',
                'ar_occupation' => 'Painters, Construction and Maintenance',
                'slug' => 'painters-construction-and-maintenance',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            430 => [
                'id' => 931,
                'en_occupation' => 'Painters, Transportation Equipment',
                'ar_occupation' => 'Painters, Transportation Equipment',
                'slug' => 'painters-transportation-equipment',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            431 => [
                'id' => 932,
                'en_occupation' => 'Painting, Coating, and Decorating Workers',
                'ar_occupation' => 'Painting, Coating, and Decorating Workers',
                'slug' => 'painting-coating-and-decorating-workers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            432 => [
                'id' => 933,
                'en_occupation' => 'Pantograph Engravers',
                'ar_occupation' => 'Pantograph Engravers',
                'slug' => 'pantograph-engravers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            433 => [
                'id' => 934,
                'en_occupation' => 'Paper Goods Machine Setters, Operators, and Tenders',
                'ar_occupation' => 'Paper Goods Machine Setters, Operators, and Tenders',
                'slug' => 'paper-goods-machine-setters-operators-and-tenders',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            434 => [
                'id' => 935,
                'en_occupation' => 'Paperhangers',
                'ar_occupation' => 'Paperhangers',
                'slug' => 'paperhangers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            435 => [
                'id' => 936,
                'en_occupation' => 'Paralegals and Legal Assistants',
                'ar_occupation' => 'Paralegals and Legal Assistants',
                'slug' => 'paralegals-and-legal-assistants',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            436 => [
                'id' => 937,
                'en_occupation' => 'Park Naturalists',
                'ar_occupation' => 'Park Naturalists',
                'slug' => 'park-naturalists',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            437 => [
                'id' => 938,
                'en_occupation' => 'Parking Enforcement Workers',
                'ar_occupation' => 'Parking Enforcement Workers',
                'slug' => 'parking-enforcement-workers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            438 => [
                'id' => 939,
                'en_occupation' => 'Parking Lot Attendants',
                'ar_occupation' => 'Parking Lot Attendants',
                'slug' => 'parking-lot-attendants',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            439 => [
                'id' => 940,
                'en_occupation' => 'Parts Salespersons',
                'ar_occupation' => 'Parts Salespersons',
                'slug' => 'parts-salespersons',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            440 => [
                'id' => 941,
                'en_occupation' => 'Paste-Up Workers',
                'ar_occupation' => 'Paste-Up Workers',
                'slug' => 'paste-up-workers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            441 => [
                'id' => 942,
                'en_occupation' => 'Pathologists',
                'ar_occupation' => 'Pathologists',
                'slug' => 'pathologists',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            442 => [
                'id' => 943,
                'en_occupation' => 'Patient Representatives',
                'ar_occupation' => 'Patient Representatives',
                'slug' => 'patient-representatives',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            443 => [
                'id' => 944,
                'en_occupation' => 'Patternmakers, Metal and Plastic',
                'ar_occupation' => 'Patternmakers, Metal and Plastic',
                'slug' => 'patternmakers-metal-and-plastic',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            444 => [
                'id' => 945,
                'en_occupation' => 'Patternmakers, Wood',
                'ar_occupation' => 'Patternmakers, Wood',
                'slug' => 'patternmakers-wood',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            445 => [
                'id' => 946,
                'en_occupation' => 'Paving, Surfacing, and Tamping Equipment Operators',
                'ar_occupation' => 'Paving, Surfacing, and Tamping Equipment Operators',
                'slug' => 'paving-surfacing-and-tamping-equipment-operators',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            446 => [
                'id' => 947,
                'en_occupation' => 'Payroll and Timekeeping Clerks',
                'ar_occupation' => 'Payroll and Timekeeping Clerks',
                'slug' => 'payroll-and-timekeeping-clerks',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            447 => [
                'id' => 948,
                'en_occupation' => 'Pediatricians, General',
                'ar_occupation' => 'Pediatricians, General',
                'slug' => 'pediatricians-general',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            448 => [
                'id' => 949,
                'en_occupation' => 'Percussion Instrument Repairers and Tuners',
                'ar_occupation' => 'Percussion Instrument Repairers and Tuners',
                'slug' => 'percussion-instrument-repairers-and-tuners',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            449 => [
                'id' => 950,
                'en_occupation' => 'Personal and Home Care Aides',
                'ar_occupation' => 'Personal and Home Care Aides',
                'slug' => 'personal-and-home-care-aides',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            450 => [
                'id' => 951,
                'en_occupation' => 'Personal Care and Service Workers, All Other',
                'ar_occupation' => 'Personal Care and Service Workers, All Other',
                'slug' => 'personal-care-and-service-workers-all-other',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            451 => [
                'id' => 952,
                'en_occupation' => 'Personal Financial Advisors',
                'ar_occupation' => 'Personal Financial Advisors',
                'slug' => 'personal-financial-advisors',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            452 => [
                'id' => 953,
                'en_occupation' => 'Personnel Recruiters',
                'ar_occupation' => 'Personnel Recruiters',
                'slug' => 'personnel-recruiters',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            453 => [
                'id' => 954,
                'en_occupation' => 'Pest Control Workers',
                'ar_occupation' => 'Pest Control Workers',
                'slug' => 'pest-control-workers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            454 => [
                'id' => 955,
                'en_occupation' => 'Pesticide Handlers, Sprayers, and Applicators, Vegetation',
                'ar_occupation' => 'Pesticide Handlers, Sprayers, and Applicators, Vegetation',
                'slug' => 'pesticide-handlers-sprayers-and-applicators-vegetation',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            455 => [
                'id' => 956,
                'en_occupation' => 'Petroleum Engineers',
                'ar_occupation' => 'Petroleum Engineers',
                'slug' => 'petroleum-engineers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            456 => [
                'id' => 957,
                'en_occupation' => 'Petroleum Pump System Operators',
                'ar_occupation' => 'Petroleum Pump System Operators',
                'slug' => 'petroleum-pump-system-operators',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            457 => [
                'id' => 958,
                'en_occupation' => 'Petroleum Pump System Operators, Refinery Operators, and Gaugers',
                'ar_occupation' => 'Petroleum Pump System Operators, Refinery Operators, and Gaugers',
                'slug' => 'petroleum-pump-system-operators-refinery-operators-and-gaugers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            458 => [
                'id' => 959,
                'en_occupation' => 'Petroleum Refinery and Control Panel Operators',
                'ar_occupation' => 'Petroleum Refinery and Control Panel Operators',
                'slug' => 'petroleum-refinery-and-control-panel-operators',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            459 => [
                'id' => 960,
                'en_occupation' => 'Pewter Casters and Finishers',
                'ar_occupation' => 'Pewter Casters and Finishers',
                'slug' => 'pewter-casters-and-finishers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            460 => [
                'id' => 961,
                'en_occupation' => 'Pharmacists',
                'ar_occupation' => 'Pharmacists',
                'slug' => 'pharmacists',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            461 => [
                'id' => 962,
                'en_occupation' => 'Pharmacy Aides',
                'ar_occupation' => 'Pharmacy Aides',
                'slug' => 'pharmacy-aides',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            462 => [
                'id' => 963,
                'en_occupation' => 'Pharmacy Technicians',
                'ar_occupation' => 'Pharmacy Technicians',
                'slug' => 'pharmacy-technicians',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            463 => [
                'id' => 964,
                'en_occupation' => 'Philosophy and Religion Teachers, Postsecondary',
                'ar_occupation' => 'Philosophy and Religion Teachers, Postsecondary',
                'slug' => 'philosophy-and-religion-teachers-postsecondary',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            464 => [
                'id' => 965,
                'en_occupation' => 'Phlebotomists',
                'ar_occupation' => 'Phlebotomists',
                'slug' => 'phlebotomists',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            465 => [
                'id' => 966,
                'en_occupation' => 'Photoengravers',
                'ar_occupation' => 'Photoengravers',
                'slug' => 'photoengravers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            466 => [
                'id' => 967,
                'en_occupation' => 'Photoengraving and Lithographing Machine Operators and Tenders',
                'ar_occupation' => 'Photoengraving and Lithographing Machine Operators and Tenders',
                'slug' => 'photoengraving-and-lithographing-machine-operators-and-tenders',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            467 => [
                'id' => 968,
                'en_occupation' => 'Photographers',
                'ar_occupation' => 'Photographers',
                'slug' => 'photographers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            468 => [
                'id' => 969,
                'en_occupation' => 'Photographers, Scientific',
                'ar_occupation' => 'Photographers, Scientific',
                'slug' => 'photographers-scientific',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            469 => [
                'id' => 970,
                'en_occupation' => 'Photographic Hand Developers',
                'ar_occupation' => 'Photographic Hand Developers',
                'slug' => 'photographic-hand-developers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            470 => [
                'id' => 971,
                'en_occupation' => 'Photographic Process Workers',
                'ar_occupation' => 'Photographic Process Workers',
                'slug' => 'photographic-process-workers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            471 => [
                'id' => 972,
                'en_occupation' => 'Photographic Process Workers and Processing Machine Operators',
                'ar_occupation' => 'Photographic Process Workers and Processing Machine Operators',
                'slug' => 'photographic-process-workers-and-processing-machine-operators',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            472 => [
                'id' => 973,
                'en_occupation' => 'Photographic Processing Machine Operators',
                'ar_occupation' => 'Photographic Processing Machine Operators',
                'slug' => 'photographic-processing-machine-operators',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            473 => [
                'id' => 974,
                'en_occupation' => 'Photographic Reproduction Technicians',
                'ar_occupation' => 'Photographic Reproduction Technicians',
                'slug' => 'photographic-reproduction-technicians',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            474 => [
                'id' => 975,
                'en_occupation' => 'Photographic Retouchers and Restorers',
                'ar_occupation' => 'Photographic Retouchers and Restorers',
                'slug' => 'photographic-retouchers-and-restorers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            475 => [
                'id' => 976,
                'en_occupation' => 'Photonics Engineers',
                'ar_occupation' => 'Photonics Engineers',
                'slug' => 'photonics-engineers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            476 => [
                'id' => 977,
                'en_occupation' => 'Photonics Technicians',
                'ar_occupation' => 'Photonics Technicians',
                'slug' => 'photonics-technicians',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            477 => [
                'id' => 978,
                'en_occupation' => 'Physical Medicine and Rehabilitation Physicians',
                'ar_occupation' => 'Physical Medicine and Rehabilitation Physicians',
                'slug' => 'physical-medicine-and-rehabilitation-physicians',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            478 => [
                'id' => 979,
                'en_occupation' => 'Physical Scientists, All Other',
                'ar_occupation' => 'Physical Scientists, All Other',
                'slug' => 'physical-scientists-all-other',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            479 => [
                'id' => 980,
                'en_occupation' => 'Physical Therapist Aides',
                'ar_occupation' => 'Physical Therapist Aides',
                'slug' => 'physical-therapist-aides',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            480 => [
                'id' => 981,
                'en_occupation' => 'Physical Therapist Assistants',
                'ar_occupation' => 'Physical Therapist Assistants',
                'slug' => 'physical-therapist-assistants',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            481 => [
                'id' => 982,
                'en_occupation' => 'Physical Therapists',
                'ar_occupation' => 'Physical Therapists',
                'slug' => 'physical-therapists',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            482 => [
                'id' => 983,
                'en_occupation' => 'Physician Assistants',
                'ar_occupation' => 'Physician Assistants',
                'slug' => 'physician-assistants',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            483 => [
                'id' => 984,
                'en_occupation' => 'Physicians and Surgeons, All Other',
                'ar_occupation' => 'Physicians and Surgeons, All Other',
                'slug' => 'physicians-and-surgeons-all-other',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            484 => [
                'id' => 985,
                'en_occupation' => 'Physicists',
                'ar_occupation' => 'Physicists',
                'slug' => 'physicists',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            485 => [
                'id' => 986,
                'en_occupation' => 'Physics Teachers, Postsecondary',
                'ar_occupation' => 'Physics Teachers, Postsecondary',
                'slug' => 'physics-teachers-postsecondary',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            486 => [
                'id' => 987,
                'en_occupation' => 'Pile-Driver Operators',
                'ar_occupation' => 'Pile-Driver Operators',
                'slug' => 'pile-driver-operators',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            487 => [
                'id' => 988,
                'en_occupation' => 'Pilots, Ship',
                'ar_occupation' => 'Pilots, Ship',
                'slug' => 'pilots-ship',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            488 => [
                'id' => 989,
                'en_occupation' => 'Pipe Fitters',
                'ar_occupation' => 'Pipe Fitters',
                'slug' => 'pipe-fitters',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            489 => [
                'id' => 990,
                'en_occupation' => 'Pipelayers',
                'ar_occupation' => 'Pipelayers',
                'slug' => 'pipelayers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            490 => [
                'id' => 991,
                'en_occupation' => 'Pipelaying Fitters',
                'ar_occupation' => 'Pipelaying Fitters',
                'slug' => 'pipelaying-fitters',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            491 => [
                'id' => 992,
                'en_occupation' => 'Plant and System Operators, All Other',
                'ar_occupation' => 'Plant and System Operators, All Other',
                'slug' => 'plant-and-system-operators-all-other',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            492 => [
                'id' => 993,
                'en_occupation' => 'Plant Scientists',
                'ar_occupation' => 'Plant Scientists',
                'slug' => 'plant-scientists',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            493 => [
                'id' => 994,
                'en_occupation' => 'Plasterers and Stucco Masons',
                'ar_occupation' => 'Plasterers and Stucco Masons',
                'slug' => 'plasterers-and-stucco-masons',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            494 => [
                'id' => 995,
                'en_occupation' => 'Plastic Molding and Casting Machine Operators and Tenders',
                'ar_occupation' => 'Plastic Molding and Casting Machine Operators and Tenders',
                'slug' => 'plastic-molding-and-casting-machine-operators-and-tenders',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            495 => [
                'id' => 996,
                'en_occupation' => 'Plastic Molding and Casting Machine Setters and Set-Up Operators',
                'ar_occupation' => 'Plastic Molding and Casting Machine Setters and Set-Up Operators',
                'slug' => 'plastic-molding-and-casting-machine-setters-and-set-up-operators',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            496 => [
                'id' => 997,
                'en_occupation' => 'Plate Finishers',
                'ar_occupation' => 'Plate Finishers',
                'slug' => 'plate-finishers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            497 => [
                'id' => 998,
                'en_occupation' => 'Platemakers',
                'ar_occupation' => 'Platemakers',
                'slug' => 'platemakers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            498 => [
                'id' => 999,
                'en_occupation' =>
                    'Plating and Coating Machine Setters, Operators, and Tenders, Metal and Plastic',
                'ar_occupation' =>
                    'Plating and Coating Machine Setters, Operators, and Tenders, Metal and Plastic',
                'slug' => 'plating-and-coating-machine-setters-operators-and-tenders-metal-and-plastic',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            499 => [
                'id' => 1000,
                'en_occupation' => 'Plumbers',
                'ar_occupation' => 'Plumbers',
                'slug' => 'plumbers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ]
        ]);
        \DB::table('occupation')->insert([
            0 => [
                'id' => 1001,
                'en_occupation' => 'Plumbers, Pipefitters, and Steamfitters',
                'ar_occupation' => 'Plumbers, Pipefitters, and Steamfitters',
                'slug' => 'plumbers-pipefitters-and-steamfitters',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            1 => [
                'id' => 1002,
                'en_occupation' => 'Podiatrists',
                'ar_occupation' => 'Podiatrists',
                'slug' => 'podiatrists',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            2 => [
                'id' => 1003,
                'en_occupation' => 'Poets and Lyricists',
                'ar_occupation' => 'Poets and Lyricists',
                'slug' => 'poets-and-lyricists',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            3 => [
                'id' => 1004,
                'en_occupation' => 'Poets, Lyricists and Creative Writers',
                'ar_occupation' => 'Poets, Lyricists and Creative Writers',
                'slug' => 'poets-lyricists-and-creative-writers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            4 => [
                'id' => 1005,
                'en_occupation' => 'Police and Sheriffs Patrol Officers',
                'ar_occupation' => 'Police and Sheriffs Patrol Officers',
                'slug' => 'police-and-sheriffs-patrol-officers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            5 => [
                'id' => 1006,
                'en_occupation' => 'Police Detectives',
                'ar_occupation' => 'Police Detectives',
                'slug' => 'police-detectives',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            6 => [
                'id' => 1007,
                'en_occupation' => 'Police Identification and Records Officers',
                'ar_occupation' => 'Police Identification and Records Officers',
                'slug' => 'police-identification-and-records-officers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            7 => [
                'id' => 1008,
                'en_occupation' => 'Police Patrol Officers',
                'ar_occupation' => 'Police Patrol Officers',
                'slug' => 'police-patrol-officers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            8 => [
                'id' => 1009,
                'en_occupation' => 'Police, Fire, and Ambulance Dispatchers',
                'ar_occupation' => 'Police, Fire, and Ambulance Dispatchers',
                'slug' => 'police-fire-and-ambulance-dispatchers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            9 => [
                'id' => 1010,
                'en_occupation' => 'Political Science Teachers, Postsecondary',
                'ar_occupation' => 'Political Science Teachers, Postsecondary',
                'slug' => 'political-science-teachers-postsecondary',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            10 => [
                'id' => 1011,
                'en_occupation' => 'Political Scientists',
                'ar_occupation' => 'Political Scientists',
                'slug' => 'political-scientists',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            11 => [
                'id' => 1012,
                'en_occupation' => 'Postal Service Clerks',
                'ar_occupation' => 'Postal Service Clerks',
                'slug' => 'postal-service-clerks',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            12 => [
                'id' => 1013,
                'en_occupation' => 'Postal Service Mail Carriers',
                'ar_occupation' => 'Postal Service Mail Carriers',
                'slug' => 'postal-service-mail-carriers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            13 => [
                'id' => 1014,
                'en_occupation' =>
                    'Postal Service Mail Sorters, Processors, and Processing Machine Operators',
                'ar_occupation' =>
                    'Postal Service Mail Sorters, Processors, and Processing Machine Operators',
                'slug' => 'postal-service-mail-sorters-processors-and-processing-machine-operators',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            14 => [
                'id' => 1015,
                'en_occupation' => 'Postmasters and Mail Superintendents',
                'ar_occupation' => 'Postmasters and Mail Superintendents',
                'slug' => 'postmasters-and-mail-superintendents',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            15 => [
                'id' => 1016,
                'en_occupation' => 'Postsecondary Teachers, All Other',
                'ar_occupation' => 'Postsecondary Teachers, All Other',
                'slug' => 'postsecondary-teachers-all-other',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            16 => [
                'id' => 1017,
                'en_occupation' => 'Potters',
                'ar_occupation' => 'Potters',
                'slug' => 'potters',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            17 => [
                'id' => 1018,
                'en_occupation' => 'Pourers and Casters, Metal',
                'ar_occupation' => 'Pourers and Casters, Metal',
                'slug' => 'pourers-and-casters-metal',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            18 => [
                'id' => 1019,
                'en_occupation' => 'Power Distributors and Dispatchers',
                'ar_occupation' => 'Power Distributors and Dispatchers',
                'slug' => 'power-distributors-and-dispatchers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            19 => [
                'id' => 1020,
                'en_occupation' =>
                    'Power Generating Plant Operators, Except Auxiliary Equipment Operators',
                'ar_occupation' =>
                    'Power Generating Plant Operators, Except Auxiliary Equipment Operators',
                'slug' => 'power-generating-plant-operators-except-auxiliary-equipment-operators',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            20 => [
                'id' => 1021,
                'en_occupation' => 'Power Plant Operators',
                'ar_occupation' => 'Power Plant Operators',
                'slug' => 'power-plant-operators',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            21 => [
                'id' => 1022,
                'en_occupation' => 'Precious Metal Workers',
                'ar_occupation' => 'Precious Metal Workers',
                'slug' => 'precious-metal-workers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            22 => [
                'id' => 1023,
                'en_occupation' => 'Precision Agriculture Technicians',
                'ar_occupation' => 'Precision Agriculture Technicians',
                'slug' => 'precision-agriculture-technicians',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            23 => [
                'id' => 1024,
                'en_occupation' => 'Precision Devices Inspectors and Testers',
                'ar_occupation' => 'Precision Devices Inspectors and Testers',
                'slug' => 'precision-devices-inspectors-and-testers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            24 => [
                'id' => 1025,
                'en_occupation' => 'Precision Dyers',
                'ar_occupation' => 'Precision Dyers',
                'slug' => 'precision-dyers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            25 => [
                'id' => 1026,
                'en_occupation' => 'Precision Etchers and Engravers, Hand or Machine',
                'ar_occupation' => 'Precision Etchers and Engravers, Hand or Machine',
                'slug' => 'precision-etchers-and-engravers-hand-or-machine',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            26 => [
                'id' => 1027,
                'en_occupation' => 'Precision Instrument and Equipment Repairers, All Other',
                'ar_occupation' => 'Precision Instrument and Equipment Repairers, All Other',
                'slug' => 'precision-instrument-and-equipment-repairers-all-other',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            27 => [
                'id' => 1028,
                'en_occupation' => 'Precision Lens Grinders and Polishers',
                'ar_occupation' => 'Precision Lens Grinders and Polishers',
                'slug' => 'precision-lens-grinders-and-polishers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            28 => [
                'id' => 1029,
                'en_occupation' => 'Precision Mold and Pattern Casters, except Nonferrous Metals',
                'ar_occupation' => 'Precision Mold and Pattern Casters, except Nonferrous Metals',
                'slug' => 'precision-mold-and-pattern-casters-except-nonferrous-metals',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            29 => [
                'id' => 1030,
                'en_occupation' => 'Precision Pattern and Die Casters, Nonferrous Metals',
                'ar_occupation' => 'Precision Pattern and Die Casters, Nonferrous Metals',
                'slug' => 'precision-pattern-and-die-casters-nonferrous-metals',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            30 => [
                'id' => 1031,
                'en_occupation' => 'Precision Printing Workers',
                'ar_occupation' => 'Precision Printing Workers',
                'slug' => 'precision-printing-workers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            31 => [
                'id' => 1032,
                'en_occupation' => 'Prepress Technician',
                'ar_occupation' => 'Prepress Technician',
                'slug' => 'prepress-technician',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            32 => [
                'id' => 1033,
                'en_occupation' => 'Prepress Technicians and Workers',
                'ar_occupation' => 'Prepress Technicians and Workers',
                'slug' => 'prepress-technicians-and-workers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            33 => [
                'id' => 1034,
                'en_occupation' => 'Preschool Teachers, Except Special Education',
                'ar_occupation' => 'Preschool Teachers, Except Special Education',
                'slug' => 'preschool-teachers-except-special-education',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            34 => [
                'id' => 1035,
                'en_occupation' =>
                    'Press and Press Brake Machine Setters and Set-Up Operators, Metal and Plastic',
                'ar_occupation' =>
                    'Press and Press Brake Machine Setters and Set-Up Operators, Metal and Plastic',
                'slug' => 'press-and-press-brake-machine-setters-and-set-up-operators-metal-and-plastic',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            35 => [
                'id' => 1036,
                'en_occupation' => 'Pressers, Delicate Fabrics',
                'ar_occupation' => 'Pressers, Delicate Fabrics',
                'slug' => 'pressers-delicate-fabrics',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            36 => [
                'id' => 1037,
                'en_occupation' => 'Pressers, Hand',
                'ar_occupation' => 'Pressers, Hand',
                'slug' => 'pressers-hand',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            37 => [
                'id' => 1038,
                'en_occupation' => 'Pressers, Textile, Garment, and Related Materials',
                'ar_occupation' => 'Pressers, Textile, Garment, and Related Materials',
                'slug' => 'pressers-textile-garment-and-related-materials',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            38 => [
                'id' => 1039,
                'en_occupation' =>
                    'Pressing Machine Operators and Tenders- Textile, Garment, and Related Materials',
                'ar_occupation' =>
                    'Pressing Machine Operators and Tenders- Textile, Garment, and Related Materials',
                'slug' => 'pressing-machine-operators-and-tenders-textile-garment-and-related-materials',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            39 => [
                'id' => 1040,
                'en_occupation' => 'Pressure Vessel Inspectors',
                'ar_occupation' => 'Pressure Vessel Inspectors',
                'slug' => 'pressure-vessel-inspectors',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            40 => [
                'id' => 1041,
                'en_occupation' => 'Preventive Medicine Physicians',
                'ar_occupation' => 'Preventive Medicine Physicians',
                'slug' => 'preventive-medicine-physicians',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            41 => [
                'id' => 1042,
                'en_occupation' => 'Print Binding and Finishing Workers',
                'ar_occupation' => 'Print Binding and Finishing Workers',
                'slug' => 'print-binding-and-finishing-workers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            42 => [
                'id' => 1043,
                'en_occupation' => 'Printing Machine Operators',
                'ar_occupation' => 'Printing Machine Operators',
                'slug' => 'printing-machine-operators',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            43 => [
                'id' => 1044,
                'en_occupation' => 'Printing Press Machine Operators and Tenders',
                'ar_occupation' => 'Printing Press Machine Operators and Tenders',
                'slug' => 'printing-press-machine-operators-and-tenders',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            44 => [
                'id' => 1045,
                'en_occupation' => 'Printing Press Operators',
                'ar_occupation' => 'Printing Press Operators',
                'slug' => 'printing-press-operators',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            45 => [
                'id' => 1046,
                'en_occupation' => 'Private Detectives and Investigators',
                'ar_occupation' => 'Private Detectives and Investigators',
                'slug' => 'private-detectives-and-investigators',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            46 => [
                'id' => 1047,
                'en_occupation' => 'Private Sector Executives',
                'ar_occupation' => 'Private Sector Executives',
                'slug' => 'private-sector-executives',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            47 => [
                'id' => 1048,
                'en_occupation' => 'Probation Officers and Correctional Treatment Specialists',
                'ar_occupation' => 'Probation Officers and Correctional Treatment Specialists',
                'slug' => 'probation-officers-and-correctional-treatment-specialists',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            48 => [
                'id' => 1049,
                'en_occupation' => 'Procurement Clerks',
                'ar_occupation' => 'Procurement Clerks',
                'slug' => 'procurement-clerks',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            49 => [
                'id' => 1050,
                'en_occupation' => 'Producers',
                'ar_occupation' => 'Producers',
                'slug' => 'producers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            50 => [
                'id' => 1051,
                'en_occupation' => 'Producers and Directors',
                'ar_occupation' => 'Producers and Directors',
                'slug' => 'producers-and-directors',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            51 => [
                'id' => 1052,
                'en_occupation' => 'Product Safety Engineers',
                'ar_occupation' => 'Product Safety Engineers',
                'slug' => 'product-safety-engineers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            52 => [
                'id' => 1053,
                'en_occupation' => 'Production Helpers',
                'ar_occupation' => 'Production Helpers',
                'slug' => 'production-helpers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            53 => [
                'id' => 1054,
                'en_occupation' =>
                    'Production Inspectors, Testers, Graders, Sorters, Samplers, Weighers',
                'ar_occupation' =>
                    'Production Inspectors, Testers, Graders, Sorters, Samplers, Weighers',
                'slug' => 'production-inspectors-testers-graders-sorters-samplers-weighers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            54 => [
                'id' => 1055,
                'en_occupation' => 'Production Laborers',
                'ar_occupation' => 'Production Laborers',
                'slug' => 'production-laborers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            55 => [
                'id' => 1056,
                'en_occupation' => 'Production Workers, All Other',
                'ar_occupation' => 'Production Workers, All Other',
                'slug' => 'production-workers-all-other',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            56 => [
                'id' => 1057,
                'en_occupation' => 'Production, Planning, and Expediting Clerks',
                'ar_occupation' => 'Production, Planning, and Expediting Clerks',
                'slug' => 'production-planning-and-expediting-clerks',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            57 => [
                'id' => 1058,
                'en_occupation' => 'Professional Photographers',
                'ar_occupation' => 'Professional Photographers',
                'slug' => 'professional-photographers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            58 => [
                'id' => 1059,
                'en_occupation' => 'Program Directors',
                'ar_occupation' => 'Program Directors',
                'slug' => 'program-directors',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            59 => [
                'id' => 1060,
                'en_occupation' => 'Proofreaders and Copy Markers',
                'ar_occupation' => 'Proofreaders and Copy Markers',
                'slug' => 'proofreaders-and-copy-markers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            60 => [
                'id' => 1061,
                'en_occupation' => 'Property, Real Estate, and Community Association Managers',
                'ar_occupation' => 'Property, Real Estate, and Community Association Managers',
                'slug' => 'property-real-estate-and-community-association-managers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            61 => [
                'id' => 1062,
                'en_occupation' => 'Prosthodontists',
                'ar_occupation' => 'Prosthodontists',
                'slug' => 'prosthodontists',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            62 => [
                'id' => 1063,
                'en_occupation' => 'Protective Service Workers, All Other',
                'ar_occupation' => 'Protective Service Workers, All Other',
                'slug' => 'protective-service-workers-all-other',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            63 => [
                'id' => 1064,
                'en_occupation' => 'Psychiatric Aides',
                'ar_occupation' => 'Psychiatric Aides',
                'slug' => 'psychiatric-aides',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            64 => [
                'id' => 1065,
                'en_occupation' => 'Psychiatric Technicians',
                'ar_occupation' => 'Psychiatric Technicians',
                'slug' => 'psychiatric-technicians',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            65 => [
                'id' => 1066,
                'en_occupation' => 'Psychiatrists',
                'ar_occupation' => 'Psychiatrists',
                'slug' => 'psychiatrists',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            66 => [
                'id' => 1067,
                'en_occupation' => 'Psychologists, All Other',
                'ar_occupation' => 'Psychologists, All Other',
                'slug' => 'psychologists-all-other',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            67 => [
                'id' => 1068,
                'en_occupation' => 'Psychology Teachers, Postsecondary',
                'ar_occupation' => 'Psychology Teachers, Postsecondary',
                'slug' => 'psychology-teachers-postsecondary',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            68 => [
                'id' => 1069,
                'en_occupation' => 'Public Address System and Other Announcers',
                'ar_occupation' => 'Public Address System and Other Announcers',
                'slug' => 'public-address-system-and-other-announcers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            69 => [
                'id' => 1070,
                'en_occupation' => 'Public Relations Managers',
                'ar_occupation' => 'Public Relations Managers',
                'slug' => 'public-relations-managers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            70 => [
                'id' => 1071,
                'en_occupation' => 'Public Relations Specialists',
                'ar_occupation' => 'Public Relations Specialists',
                'slug' => 'public-relations-specialists',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            71 => [
                'id' => 1072,
                'en_occupation' => 'Public Transportation Inspectors',
                'ar_occupation' => 'Public Transportation Inspectors',
                'slug' => 'public-transportation-inspectors',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            72 => [
                'id' => 1073,
                'en_occupation' => 'Pump Operators, Except Wellhead Pumpers',
                'ar_occupation' => 'Pump Operators, Except Wellhead Pumpers',
                'slug' => 'pump-operators-except-wellhead-pumpers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            73 => [
                'id' => 1074,
                'en_occupation' => 'Punching Machine Setters and Set-Up Operators, Metal and Plastic',
                'ar_occupation' => 'Punching Machine Setters and Set-Up Operators, Metal and Plastic',
                'slug' => 'punching-machine-setters-and-set-up-operators-metal-and-plastic',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            74 => [
                'id' => 1075,
                'en_occupation' => 'Purchasing Agents and Buyers, Farm Products',
                'ar_occupation' => 'Purchasing Agents and Buyers, Farm Products',
                'slug' => 'purchasing-agents-and-buyers-farm-products',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            75 => [
                'id' => 1076,
                'en_occupation' => 'Purchasing Agents, Except Wholesale, Retail, and Farm Products',
                'ar_occupation' => 'Purchasing Agents, Except Wholesale, Retail, and Farm Products',
                'slug' => 'purchasing-agents-except-wholesale-retail-and-farm-products',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            76 => [
                'id' => 1077,
                'en_occupation' => 'Purchasing Managers',
                'ar_occupation' => 'Purchasing Managers',
                'slug' => 'purchasing-managers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            77 => [
                'id' => 1078,
                'en_occupation' => 'Quality Control Analysts',
                'ar_occupation' => 'Quality Control Analysts',
                'slug' => 'quality-control-analysts',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            78 => [
                'id' => 1079,
                'en_occupation' => 'Quality Control Systems Managers',
                'ar_occupation' => 'Quality Control Systems Managers',
                'slug' => 'quality-control-systems-managers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            79 => [
                'id' => 1080,
                'en_occupation' => 'Radar and Sonar Technicians',
                'ar_occupation' => 'Radar and Sonar Technicians',
                'slug' => 'radar-and-sonar-technicians',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            80 => [
                'id' => 1081,
                'en_occupation' => 'Radiation Therapists',
                'ar_occupation' => 'Radiation Therapists',
                'slug' => 'radiation-therapists',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            81 => [
                'id' => 1082,
                'en_occupation' => 'Radio and Television Announcers',
                'ar_occupation' => 'Radio and Television Announcers',
                'slug' => 'radio-and-television-announcers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            82 => [
                'id' => 1083,
                'en_occupation' => 'Radio Frequency Identification Device Specialists',
                'ar_occupation' => 'Radio Frequency Identification Device Specialists',
                'slug' => 'radio-frequency-identification-device-specialists',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            83 => [
                'id' => 1084,
                'en_occupation' => 'Radio Mechanic',
                'ar_occupation' => 'Radio Mechanic',
                'slug' => 'radio-mechanic',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            84 => [
                'id' => 1085,
                'en_occupation' => 'Radio Mechanics',
                'ar_occupation' => 'Radio Mechanics',
                'slug' => 'radio-mechanics',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            85 => [
                'id' => 1086,
                'en_occupation' => 'Radio Operators',
                'ar_occupation' => 'Radio Operators',
                'slug' => 'radio-operators',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            86 => [
                'id' => 1087,
                'en_occupation' => 'Radiologic Technician',
                'ar_occupation' => 'Radiologic Technician',
                'slug' => 'radiologic-technician',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            87 => [
                'id' => 1088,
                'en_occupation' => 'Radiologic Technicians',
                'ar_occupation' => 'Radiologic Technicians',
                'slug' => 'radiologic-technicians',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            88 => [
                'id' => 1089,
                'en_occupation' => 'Radiologic Technologists',
                'ar_occupation' => 'Radiologic Technologists',
                'slug' => 'radiologic-technologists',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            89 => [
                'id' => 1090,
                'en_occupation' => 'Radiologic Technologists and Technicians',
                'ar_occupation' => 'Radiologic Technologists and Technicians',
                'slug' => 'radiologic-technologists-and-technicians',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            90 => [
                'id' => 1091,
                'en_occupation' => 'Radiologists',
                'ar_occupation' => 'Radiologists',
                'slug' => 'radiologists',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            91 => [
                'id' => 1092,
                'en_occupation' => 'Rail Car Repairers',
                'ar_occupation' => 'Rail Car Repairers',
                'slug' => 'rail-car-repairers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            92 => [
                'id' => 1093,
                'en_occupation' => 'Rail Transportation Workers, All Other',
                'ar_occupation' => 'Rail Transportation Workers, All Other',
                'slug' => 'rail-transportation-workers-all-other',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            93 => [
                'id' => 1094,
                'en_occupation' => 'Rail Yard Engineers, Dinkey Operators, and Hostlers',
                'ar_occupation' => 'Rail Yard Engineers, Dinkey Operators, and Hostlers',
                'slug' => 'rail-yard-engineers-dinkey-operators-and-hostlers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            94 => [
                'id' => 1095,
                'en_occupation' => 'Railroad Brake, Signal, and Switch Operators',
                'ar_occupation' => 'Railroad Brake, Signal, and Switch Operators',
                'slug' => 'railroad-brake-signal-and-switch-operators',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            95 => [
                'id' => 1096,
                'en_occupation' => 'Railroad Conductors and Yardmasters',
                'ar_occupation' => 'Railroad Conductors and Yardmasters',
                'slug' => 'railroad-conductors-and-yardmasters',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            96 => [
                'id' => 1097,
                'en_occupation' => 'Railroad Inspectors',
                'ar_occupation' => 'Railroad Inspectors',
                'slug' => 'railroad-inspectors',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            97 => [
                'id' => 1098,
                'en_occupation' => 'Railroad Yard Workers',
                'ar_occupation' => 'Railroad Yard Workers',
                'slug' => 'railroad-yard-workers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            98 => [
                'id' => 1099,
                'en_occupation' => 'Rail-Track Laying and Maintenance Equipment Operators',
                'ar_occupation' => 'Rail-Track Laying and Maintenance Equipment Operators',
                'slug' => 'rail-track-laying-and-maintenance-equipment-operators',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            99 => [
                'id' => 1100,
                'en_occupation' => 'Range Managers',
                'ar_occupation' => 'Range Managers',
                'slug' => 'range-managers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            100 => [
                'id' => 1101,
                'en_occupation' => 'Real Estate Brokers',
                'ar_occupation' => 'Real Estate Brokers',
                'slug' => 'real-estate-brokers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            101 => [
                'id' => 1102,
                'en_occupation' => 'Real Estate Sales Agents',
                'ar_occupation' => 'Real Estate Sales Agents',
                'slug' => 'real-estate-sales-agents',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            102 => [
                'id' => 1103,
                'en_occupation' => 'Receptionists and Information Clerks',
                'ar_occupation' => 'Receptionists and Information Clerks',
                'slug' => 'receptionists-and-information-clerks',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            103 => [
                'id' => 1104,
                'en_occupation' => 'Recreation and Fitness Studies Teachers, Postsecondary',
                'ar_occupation' => 'Recreation and Fitness Studies Teachers, Postsecondary',
                'slug' => 'recreation-and-fitness-studies-teachers-postsecondary',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            104 => [
                'id' => 1105,
                'en_occupation' => 'Recreation Workers',
                'ar_occupation' => 'Recreation Workers',
                'slug' => 'recreation-workers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            105 => [
                'id' => 1106,
                'en_occupation' => 'Recreational Therapists',
                'ar_occupation' => 'Recreational Therapists',
                'slug' => 'recreational-therapists',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            106 => [
                'id' => 1107,
                'en_occupation' => 'Recreational Vehicle Service Technicians',
                'ar_occupation' => 'Recreational Vehicle Service Technicians',
                'slug' => 'recreational-vehicle-service-technicians',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            107 => [
                'id' => 1108,
                'en_occupation' => 'Recycling and Reclamation Workers',
                'ar_occupation' => 'Recycling and Reclamation Workers',
                'slug' => 'recycling-and-reclamation-workers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            108 => [
                'id' => 1109,
                'en_occupation' => 'Recycling Coordinators',
                'ar_occupation' => 'Recycling Coordinators',
                'slug' => 'recycling-coordinators',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            109 => [
                'id' => 1110,
                'en_occupation' => 'Reed or Wind Instrument Repairers and Tuners',
                'ar_occupation' => 'Reed or Wind Instrument Repairers and Tuners',
                'slug' => 'reed-or-wind-instrument-repairers-and-tuners',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            110 => [
                'id' => 1111,
                'en_occupation' => 'Refractory Materials Repairers, Except Brickmasons',
                'ar_occupation' => 'Refractory Materials Repairers, Except Brickmasons',
                'slug' => 'refractory-materials-repairers-except-brickmasons',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            111 => [
                'id' => 1112,
                'en_occupation' => 'Refrigeration Mechanics',
                'ar_occupation' => 'Refrigeration Mechanics',
                'slug' => 'refrigeration-mechanics',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            112 => [
                'id' => 1113,
                'en_occupation' => 'Refuse and Recyclable Material Collectors',
                'ar_occupation' => 'Refuse and Recyclable Material Collectors',
                'slug' => 'refuse-and-recyclable-material-collectors',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            113 => [
                'id' => 1114,
                'en_occupation' => 'Registered Nurses',
                'ar_occupation' => 'Registered Nurses',
                'slug' => 'registered-nurses',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            114 => [
                'id' => 1115,
                'en_occupation' => 'Registered Nurses',
                'ar_occupation' => 'Registered Nurses',
                'slug' => 'registered-nurses',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            115 => [
                'id' => 1116,
                'en_occupation' => 'Regulatory Affairs Managers',
                'ar_occupation' => 'Regulatory Affairs Managers',
                'slug' => 'regulatory-affairs-managers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            116 => [
                'id' => 1117,
                'en_occupation' => 'Regulatory Affairs Specialists',
                'ar_occupation' => 'Regulatory Affairs Specialists',
                'slug' => 'regulatory-affairs-specialists',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            117 => [
                'id' => 1118,
                'en_occupation' => 'Rehabilitation Counselors',
                'ar_occupation' => 'Rehabilitation Counselors',
                'slug' => 'rehabilitation-counselors',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            118 => [
                'id' => 1119,
                'en_occupation' => 'Reinforcing Iron and Rebar Workers',
                'ar_occupation' => 'Reinforcing Iron and Rebar Workers',
                'slug' => 'reinforcing-iron-and-rebar-workers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            119 => [
                'id' => 1120,
                'en_occupation' => 'Religious Workers, All Other',
                'ar_occupation' => 'Religious Workers, All Other',
                'slug' => 'religious-workers-all-other',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            120 => [
                'id' => 1121,
                'en_occupation' => 'Remote Sensing Scientists and Technologists',
                'ar_occupation' => 'Remote Sensing Scientists and Technologists',
                'slug' => 'remote-sensing-scientists-and-technologists',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            121 => [
                'id' => 1122,
                'en_occupation' => 'Sensing Technicians',
                'ar_occupation' => 'Sensing Technicians',
                'slug' => 'sensing-technicians',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            122 => [
                'id' => 1123,
                'en_occupation' => 'Reporters and Correspondents',
                'ar_occupation' => 'Reporters and Correspondents',
                'slug' => 'reporters-and-correspondents',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            123 => [
                'id' => 1124,
                'en_occupation' => 'Reservation and Transportation Ticket Agents',
                'ar_occupation' => 'Reservation and Transportation Ticket Agents',
                'slug' => 'reservation-and-transportation-ticket-agents',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            124 => [
                'id' => 1125,
                'en_occupation' => 'Reservation and Transportation Ticket Agents and Travel Clerks',
                'ar_occupation' => 'Reservation and Transportation Ticket Agents and Travel Clerks',
                'slug' => 'reservation-and-transportation-ticket-agents-and-travel-clerks',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            125 => [
                'id' => 1126,
                'en_occupation' => 'Residential Advisors',
                'ar_occupation' => 'Residential Advisors',
                'slug' => 'residential-advisors',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            126 => [
                'id' => 1127,
                'en_occupation' => 'Respiratory Therapists',
                'ar_occupation' => 'Respiratory Therapists',
                'slug' => 'respiratory-therapists',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            127 => [
                'id' => 1128,
                'en_occupation' => 'Respiratory Therapy Technicians',
                'ar_occupation' => 'Respiratory Therapy Technicians',
                'slug' => 'respiratory-therapy-technicians',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:41',
                'updated_at' => '2021-02-16 06:34:41'
            ],
            128 => [
                'id' => 1129,
                'en_occupation' => 'Retail Loss Prevention Specialists',
                'ar_occupation' => 'Retail Loss Prevention Specialists',
                'slug' => 'retail-loss-prevention-specialists',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            129 => [
                'id' => 1130,
                'en_occupation' => 'Retail Salespersons',
                'ar_occupation' => 'Retail Salespersons',
                'slug' => 'retail-salespersons',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            130 => [
                'id' => 1131,
                'en_occupation' => 'Riggers',
                'ar_occupation' => 'Riggers',
                'slug' => 'riggers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            131 => [
                'id' => 1132,
                'en_occupation' => 'Risk Management Specialists',
                'ar_occupation' => 'Risk Management Specialists',
                'slug' => 'risk-management-specialists',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            132 => [
                'id' => 1133,
                'en_occupation' => 'Robotics Engineers',
                'ar_occupation' => 'Robotics Engineers',
                'slug' => 'robotics-engineers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            133 => [
                'id' => 1134,
                'en_occupation' => 'Robotics Technicians',
                'ar_occupation' => 'Robotics Technicians',
                'slug' => 'robotics-technicians',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            134 => [
                'id' => 1135,
                'en_occupation' => 'Rock Splitters, Quarry',
                'ar_occupation' => 'Rock Splitters, Quarry',
                'slug' => 'rock-splitters-quarry',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            135 => [
                'id' => 1136,
                'en_occupation' => 'Rolling Machine Setters, Operators, and Tenders, Metal and Plastic',
                'ar_occupation' => 'Rolling Machine Setters, Operators, and Tenders, Metal and Plastic',
                'slug' => 'rolling-machine-setters-operators-and-tenders-metal-and-plastic',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            136 => [
                'id' => 1137,
                'en_occupation' => 'Roof Bolters, Mining',
                'ar_occupation' => 'Roof Bolters, Mining',
                'slug' => 'roof-bolters-mining',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            137 => [
                'id' => 1138,
                'en_occupation' => 'Roofers',
                'ar_occupation' => 'Roofers',
                'slug' => 'roofers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            138 => [
                'id' => 1139,
                'en_occupation' => 'Rotary Drill Operators, Oil and Gas',
                'ar_occupation' => 'Rotary Drill Operators, Oil and Gas',
                'slug' => 'rotary-drill-operators-oil-and-gas',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            139 => [
                'id' => 1140,
                'en_occupation' => 'Rough Carpenters',
                'ar_occupation' => 'Rough Carpenters',
                'slug' => 'rough-carpenters',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            140 => [
                'id' => 1141,
                'en_occupation' => 'Roustabouts, Oil and Gas',
                'ar_occupation' => 'Roustabouts, Oil and Gas',
                'slug' => 'roustabouts-oil-and-gas',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            141 => [
                'id' => 1142,
                'en_occupation' => 'Sailors and Marine Oilers',
                'ar_occupation' => 'Sailors and Marine Oilers',
                'slug' => 'sailors-and-marine-oilers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            142 => [
                'id' => 1143,
                'en_occupation' => 'Sales Agents, Financial Services',
                'ar_occupation' => 'Sales Agents, Financial Services',
                'slug' => 'sales-agents-financial-services',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            143 => [
                'id' => 1144,
                'en_occupation' => 'Sales Agents, Securities and Commodities',
                'ar_occupation' => 'Sales Agents, Securities and Commodities',
                'slug' => 'sales-agents-securities-and-commodities',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            144 => [
                'id' => 1145,
                'en_occupation' => 'Sales and Related Workers, All Other',
                'ar_occupation' => 'Sales and Related Workers, All Other',
                'slug' => 'sales-and-related-workers-all-other',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            145 => [
                'id' => 1146,
                'en_occupation' => 'Sales Engineers',
                'ar_occupation' => 'Sales Engineers',
                'slug' => 'sales-engineers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            146 => [
                'id' => 1147,
                'en_occupation' => 'Sales Managers',
                'ar_occupation' => 'Sales Managers',
                'slug' => 'sales-managers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            147 => [
                'id' => 1148,
                'en_occupation' => 'Sales Representatives, Agricultural',
                'ar_occupation' => 'Sales Representatives, Agricultural',
                'slug' => 'sales-representatives-agricultural',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            148 => [
                'id' => 1149,
                'en_occupation' => 'Sales Representatives, Chemical and Pharmaceutical',
                'ar_occupation' => 'Sales Representatives, Chemical and Pharmaceutical',
                'slug' => 'sales-representatives-chemical-and-pharmaceutical',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            149 => [
                'id' => 1150,
                'en_occupation' => 'Sales Representatives, Electrical--Electronic',
                'ar_occupation' => 'Sales Representatives, Electrical--Electronic',
                'slug' => 'sales-representatives-electrical-electronic',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            150 => [
                'id' => 1151,
                'en_occupation' => 'Sales Representatives, Instruments',
                'ar_occupation' => 'Sales Representatives, Instruments',
                'slug' => 'sales-representatives-instruments',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            151 => [
                'id' => 1152,
                'en_occupation' => 'Sales Representatives, Mechanical Equipment and Supplies',
                'ar_occupation' => 'Sales Representatives, Mechanical Equipment and Supplies',
                'slug' => 'sales-representatives-mechanical-equipment-and-supplies',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            152 => [
                'id' => 1153,
                'en_occupation' => 'Sales Representatives, Medical',
                'ar_occupation' => 'Sales Representatives, Medical',
                'slug' => 'sales-representatives-medical',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            153 => [
                'id' => 1154,
                'en_occupation' => 'Sales Representatives, Services, All Other',
                'ar_occupation' => 'Sales Representatives, Services, All Other',
                'slug' => 'sales-representatives-services-all-other',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            154 => [
                'id' => 1155,
                'en_occupation' =>
                    'Sales Representatives, Wholesale and Manufacturing, Except Technical and Scientific Products',
                'ar_occupation' =>
                    'Sales Representatives, Wholesale and Manufacturing, Except Technical and Scientific Products',
                'slug' =>
                    'sales-representatives-wholesale-and-manufacturing-except-technical-and-scientific-products',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            155 => [
                'id' => 1156,
                'en_occupation' =>
                    'Sales Representatives, Wholesale and Manufacturing, Technical and Scientific Products',
                'ar_occupation' =>
                    'Sales Representatives, Wholesale and Manufacturing, Technical and Scientific Products',
                'slug' =>
                    'sales-representatives-wholesale-and-manufacturing-technical-and-scientific-products',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            156 => [
                'id' => 1157,
                'en_occupation' => 'Sawing Machine Operators and Tenders',
                'ar_occupation' => 'Sawing Machine Operators and Tenders',
                'slug' => 'sawing-machine-operators-and-tenders',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            157 => [
                'id' => 1158,
                'en_occupation' => 'Sawing Machine Setters and Set-Up Operators',
                'ar_occupation' => 'Sawing Machine Setters and Set-Up Operators',
                'slug' => 'sawing-machine-setters-and-set-up-operators',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            158 => [
                'id' => 1159,
                'en_occupation' => 'Sawing Machine Setters, Operators, and Tenders, Wood',
                'ar_occupation' => 'Sawing Machine Setters, Operators, and Tenders, Wood',
                'slug' => 'sawing-machine-setters-operators-and-tenders-wood',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            159 => [
                'id' => 1160,
                'en_occupation' => 'Sawing Machine Tool Setters and Set-Up Operators, Metal and Plastic',
                'ar_occupation' => 'Sawing Machine Tool Setters and Set-Up Operators, Metal and Plastic',
                'slug' => 'sawing-machine-tool-setters-and-set-up-operators-metal-and-plastic',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            160 => [
                'id' => 1161,
                'en_occupation' => 'Scanner Operators',
                'ar_occupation' => 'Scanner Operators',
                'slug' => 'scanner-operators',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            161 => [
                'id' => 1162,
                'en_occupation' => 'Screen Printing Machine Setters and Set-Up Operators',
                'ar_occupation' => 'Screen Printing Machine Setters and Set-Up Operators',
                'slug' => 'screen-printing-machine-setters-and-set-up-operators',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            162 => [
                'id' => 1163,
                'en_occupation' => 'Sculptors',
                'ar_occupation' => 'Sculptors',
                'slug' => 'sculptors',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            163 => [
                'id' => 1164,
                'en_occupation' => 'Search Marketing Strategists',
                'ar_occupation' => 'Search Marketing Strategists',
                'slug' => 'search-marketing-strategists',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            164 => [
                'id' => 1165,
                'en_occupation' => 'Secondary School Teachers, Except Special and Vocational Education',
                'ar_occupation' => 'Secondary School Teachers, Except Special and Vocational Education',
                'slug' => 'secondary-school-teachers-except-special-and-vocational-education',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            165 => [
                'id' => 1166,
                'en_occupation' => 'Secretaries, Except Legal, Medical, and Executive',
                'ar_occupation' => 'Secretaries, Except Legal, Medical, and Executive',
                'slug' => 'secretaries-except-legal-medical-and-executive',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            166 => [
                'id' => 1167,
                'en_occupation' => 'Securities and Commodities Traders',
                'ar_occupation' => 'Securities and Commodities Traders',
                'slug' => 'securities-and-commodities-traders',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            167 => [
                'id' => 1168,
                'en_occupation' => 'Securities, Commodities, and Financial Services Sales Agents',
                'ar_occupation' => 'Securities, Commodities, and Financial Services Sales Agents',
                'slug' => 'securities-commodities-and-financial-services-sales-agents',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            168 => [
                'id' => 1169,
                'en_occupation' => 'Security and Fire Alarm Systems Installers',
                'ar_occupation' => 'Security and Fire Alarm Systems Installers',
                'slug' => 'security-and-fire-alarm-systems-installers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            169 => [
                'id' => 1170,
                'en_occupation' => 'Security Guards',
                'ar_occupation' => 'Security Guards',
                'slug' => 'security-guards',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            170 => [
                'id' => 1171,
                'en_occupation' => 'Security Management Specialists',
                'ar_occupation' => 'Security Management Specialists',
                'slug' => 'security-management-specialists',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            171 => [
                'id' => 1172,
                'en_occupation' => 'Security Managers',
                'ar_occupation' => 'Security Managers',
                'slug' => 'security-managers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            172 => [
                'id' => 1173,
                'en_occupation' => 'Segmental Pavers',
                'ar_occupation' => 'Segmental Pavers',
                'slug' => 'segmental-pavers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            173 => [
                'id' => 1174,
                'en_occupation' => 'Self-Enrichment Education Teachers',
                'ar_occupation' => 'Self-Enrichment Education Teachers',
                'slug' => 'self-enrichment-education-teachers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            174 => [
                'id' => 1175,
                'en_occupation' => 'Semiconductor Processors',
                'ar_occupation' => 'Semiconductor Processors',
                'slug' => 'semiconductor-processors',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            175 => [
                'id' => 1176,
                'en_occupation' =>
                    'Separating, Filtering, Clarifying, Precipitating, and Still Machine Setters, Operators, and Tenders',
                'ar_occupation' =>
                    'Separating, Filtering, Clarifying, Precipitating, and Still Machine Setters, Operators, and Tenders',
                'slug' =>
                    'separating-filtering-clarifying-precipitating-and-still-machine-setters-operators-and-tenders',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            176 => [
                'id' => 1177,
                'en_occupation' => 'Septic Tank Servicers and Sewer Pipe Cleaners',
                'ar_occupation' => 'Septic Tank Servicers and Sewer Pipe Cleaners',
                'slug' => 'septic-tank-servicers-and-sewer-pipe-cleaners',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            177 => [
                'id' => 1178,
                'en_occupation' => 'Service Station Attendants',
                'ar_occupation' => 'Service Station Attendants',
                'slug' => 'service-station-attendants',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            178 => [
                'id' => 1179,
                'en_occupation' => 'Service Unit Operators, Oil, Gas, and Mining',
                'ar_occupation' => 'Service Unit Operators, Oil, Gas, and Mining',
                'slug' => 'service-unit-operators-oil-gas-and-mining',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            179 => [
                'id' => 1180,
                'en_occupation' => 'Set and Exhibit Designers',
                'ar_occupation' => 'Set and Exhibit Designers',
                'slug' => 'set-and-exhibit-designers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            180 => [
                'id' => 1181,
                'en_occupation' => 'Set Designers',
                'ar_occupation' => 'Set Designers',
                'slug' => 'set-designers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            181 => [
                'id' => 1182,
                'en_occupation' => 'Sewers, Hand',
                'ar_occupation' => 'Sewers, Hand',
                'slug' => 'sewers-hand',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            182 => [
                'id' => 1183,
                'en_occupation' => 'Sewing Machine Operators',
                'ar_occupation' => 'Sewing Machine Operators',
                'slug' => 'sewing-machine-operators',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            183 => [
                'id' => 1184,
                'en_occupation' => 'Sewing Machine Operators, Garment',
                'ar_occupation' => 'Sewing Machine Operators, Garment',
                'slug' => 'sewing-machine-operators-garment',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            184 => [
                'id' => 1185,
                'en_occupation' => 'Sewing Machine Operators, Non-Garment',
                'ar_occupation' => 'Sewing Machine Operators, Non-Garment',
                'slug' => 'sewing-machine-operators-non-garment',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            185 => [
                'id' => 1186,
                'en_occupation' => 'Shampooers',
                'ar_occupation' => 'Shampooers',
                'slug' => 'shampooers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            186 => [
                'id' => 1187,
                'en_occupation' =>
                    'Shear and Slitter Machine Setters and Set-Up Operators, Metal and Plastic',
                'ar_occupation' =>
                    'Shear and Slitter Machine Setters and Set-Up Operators, Metal and Plastic',
                'slug' => 'shear-and-slitter-machine-setters-and-set-up-operators-metal-and-plastic',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            187 => [
                'id' => 1188,
                'en_occupation' => 'Sheet Metal Workers',
                'ar_occupation' => 'Sheet Metal Workers',
                'slug' => 'sheet-metal-workers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            188 => [
                'id' => 1189,
                'en_occupation' => 'Sheriffs and Deputy Sheriffs',
                'ar_occupation' => 'Sheriffs and Deputy Sheriffs',
                'slug' => 'sheriffs-and-deputy-sheriffs',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            189 => [
                'id' => 1190,
                'en_occupation' => 'Ship and Boat Captains',
                'ar_occupation' => 'Ship and Boat Captains',
                'slug' => 'ship-and-boat-captains',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            190 => [
                'id' => 1191,
                'en_occupation' => 'Ship Carpenters and Joiners',
                'ar_occupation' => 'Ship Carpenters and Joiners',
                'slug' => 'ship-carpenters-and-joiners',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            191 => [
                'id' => 1192,
                'en_occupation' => 'Ship Engineers',
                'ar_occupation' => 'Ship Engineers',
                'slug' => 'ship-engineers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            192 => [
                'id' => 1193,
                'en_occupation' => 'Shipping, Receiving, and Traffic Clerks',
                'ar_occupation' => 'Shipping, Receiving, and Traffic Clerks',
                'slug' => 'shipping-receiving-and-traffic-clerks',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            193 => [
                'id' => 1194,
                'en_occupation' => 'Shoe and Leather Workers and Repairers',
                'ar_occupation' => 'Shoe and Leather Workers and Repairers',
                'slug' => 'shoe-and-leather-workers-and-repairers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            194 => [
                'id' => 1195,
                'en_occupation' => 'Shoe Machine Operators and Tenders',
                'ar_occupation' => 'Shoe Machine Operators and Tenders',
                'slug' => 'shoe-machine-operators-and-tenders',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            195 => [
                'id' => 1196,
                'en_occupation' => 'Shop and Alteration Tailors',
                'ar_occupation' => 'Shop and Alteration Tailors',
                'slug' => 'shop-and-alteration-tailors',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            196 => [
                'id' => 1197,
                'en_occupation' => 'Shuttle Car Operators',
                'ar_occupation' => 'Shuttle Car Operators',
                'slug' => 'shuttle-car-operators',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            197 => [
                'id' => 1198,
                'en_occupation' => 'Signal and Track Switch Repairers',
                'ar_occupation' => 'Signal and Track Switch Repairers',
                'slug' => 'signal-and-track-switch-repairers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            198 => [
                'id' => 1199,
                'en_occupation' => 'Silversmiths',
                'ar_occupation' => 'Silversmiths',
                'slug' => 'silversmiths',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            199 => [
                'id' => 1200,
                'en_occupation' => 'Singers',
                'ar_occupation' => 'Singers',
                'slug' => 'singers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            200 => [
                'id' => 1201,
                'en_occupation' => 'Sketch Artists',
                'ar_occupation' => 'Sketch Artists',
                'slug' => 'sketch-artists',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            201 => [
                'id' => 1202,
                'en_occupation' => 'Skin Care Specialists',
                'ar_occupation' => 'Skin Care Specialists',
                'slug' => 'skin-care-specialists',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            202 => [
                'id' => 1203,
                'en_occupation' => 'Slaughterers and Meat Packers',
                'ar_occupation' => 'Slaughterers and Meat Packers',
                'slug' => 'slaughterers-and-meat-packers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            203 => [
                'id' => 1204,
                'en_occupation' => 'Slot Key Persons',
                'ar_occupation' => 'Slot Key Persons',
                'slug' => 'slot-key-persons',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            204 => [
                'id' => 1205,
                'en_occupation' => 'Social and Community Service Managers',
                'ar_occupation' => 'Social and Community Service Managers',
                'slug' => 'social-and-community-service-managers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            205 => [
                'id' => 1206,
                'en_occupation' => 'Social and Human Service Assistants',
                'ar_occupation' => 'Social and Human Service Assistants',
                'slug' => 'social-and-human-service-assistants',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            206 => [
                'id' => 1207,
                'en_occupation' => 'Social Science Research Assistants',
                'ar_occupation' => 'Social Science Research Assistants',
                'slug' => 'social-science-research-assistants',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            207 => [
                'id' => 1208,
                'en_occupation' => 'Social Sciences Teachers, Postsecondary, All Other',
                'ar_occupation' => 'Social Sciences Teachers, Postsecondary, All Other',
                'slug' => 'social-sciences-teachers-postsecondary-all-other',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            208 => [
                'id' => 1209,
                'en_occupation' => 'Social Scientists and Related Workers, All Other',
                'ar_occupation' => 'Social Scientists and Related Workers, All Other',
                'slug' => 'social-scientists-and-related-workers-all-other',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            209 => [
                'id' => 1210,
                'en_occupation' => 'Social Work Teachers, Postsecondary',
                'ar_occupation' => 'Social Work Teachers, Postsecondary',
                'slug' => 'social-work-teachers-postsecondary',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            210 => [
                'id' => 1211,
                'en_occupation' => 'Social Workers, All Other',
                'ar_occupation' => 'Social Workers, All Other',
                'slug' => 'social-workers-all-other',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            211 => [
                'id' => 1212,
                'en_occupation' => 'Sociologists',
                'ar_occupation' => 'Sociologists',
                'slug' => 'sociologists',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            212 => [
                'id' => 1213,
                'en_occupation' => 'Sociology Teachers, Postsecondary',
                'ar_occupation' => 'Sociology Teachers, Postsecondary',
                'slug' => 'sociology-teachers-postsecondary',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            213 => [
                'id' => 1214,
                'en_occupation' => 'Software Developers, Applications',
                'ar_occupation' => 'Software Developers, Applications',
                'slug' => 'software-developers-applications',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            214 => [
                'id' => 1215,
                'en_occupation' => 'Software Developers, Systems Software',
                'ar_occupation' => 'Software Developers, Systems Software',
                'slug' => 'software-developers-systems-software',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            215 => [
                'id' => 1216,
                'en_occupation' => 'Software Quality Assurance Engineers and Testers',
                'ar_occupation' => 'Software Quality Assurance Engineers and Testers',
                'slug' => 'software-quality-assurance-engineers-and-testers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            216 => [
                'id' => 1217,
                'en_occupation' => 'Soil and Plant Scientists',
                'ar_occupation' => 'Soil and Plant Scientists',
                'slug' => 'soil-and-plant-scientists',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            217 => [
                'id' => 1218,
                'en_occupation' => 'Soil Conservationists',
                'ar_occupation' => 'Soil Conservationists',
                'slug' => 'soil-conservationists',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            218 => [
                'id' => 1219,
                'en_occupation' => 'Soil Scientists',
                'ar_occupation' => 'Soil Scientists',
                'slug' => 'soil-scientists',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            219 => [
                'id' => 1220,
                'en_occupation' => 'Solar Energy Installation Managers',
                'ar_occupation' => 'Solar Energy Installation Managers',
                'slug' => 'solar-energy-installation-managers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            220 => [
                'id' => 1221,
                'en_occupation' => 'Solar Energy Systems Engineers',
                'ar_occupation' => 'Solar Energy Systems Engineers',
                'slug' => 'solar-energy-systems-engineers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            221 => [
                'id' => 1222,
                'en_occupation' => 'Solar Photovoltaic Installers',
                'ar_occupation' => 'Solar Photovoltaic Installers',
                'slug' => 'solar-photovoltaic-installers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            222 => [
                'id' => 1223,
                'en_occupation' => 'Solar Sales Representatives and Assessors',
                'ar_occupation' => 'Solar Sales Representatives and Assessors',
                'slug' => 'solar-sales-representatives-and-assessors',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            223 => [
                'id' => 1224,
                'en_occupation' => 'Solar Thermal Installers and Technicians',
                'ar_occupation' => 'Solar Thermal Installers and Technicians',
                'slug' => 'solar-thermal-installers-and-technicians',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            224 => [
                'id' => 1225,
                'en_occupation' => 'Solderers',
                'ar_occupation' => 'Solderers',
                'slug' => 'solderers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            225 => [
                'id' => 1226,
                'en_occupation' => 'Solderers and Brazers',
                'ar_occupation' => 'Solderers and Brazers',
                'slug' => 'solderers-and-brazers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            226 => [
                'id' => 1227,
                'en_occupation' => 'Soldering and Brazing Machine Operators and Tenders',
                'ar_occupation' => 'Soldering and Brazing Machine Operators and Tenders',
                'slug' => 'soldering-and-brazing-machine-operators-and-tenders',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            227 => [
                'id' => 1228,
                'en_occupation' => 'Soldering and Brazing Machine Setters and Set-Up Operators',
                'ar_occupation' => 'Soldering and Brazing Machine Setters and Set-Up Operators',
                'slug' => 'soldering-and-brazing-machine-setters-and-set-up-operators',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            228 => [
                'id' => 1229,
                'en_occupation' => 'Sound Engineering Technicians',
                'ar_occupation' => 'Sound Engineering Technicians',
                'slug' => 'sound-engineering-technicians',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            229 => [
                'id' => 1230,
                'en_occupation' => 'Spa Managers',
                'ar_occupation' => 'Spa Managers',
                'slug' => 'spa-managers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            230 => [
                'id' => 1231,
                'en_occupation' => 'Special Education Teacher, Secondary School',
                'ar_occupation' => 'Special Education Teacher, Secondary School',
                'slug' => 'special-education-teacher-secondary-school',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            231 => [
                'id' => 1232,
                'en_occupation' => 'Special Education Teachers, Kindergarten and Elementary School',
                'ar_occupation' => 'Special Education Teachers, Kindergarten and Elementary School',
                'slug' => 'special-education-teachers-kindergarten-and-elementary-school',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            232 => [
                'id' => 1233,
                'en_occupation' => 'Special Education Teachers, Middle School',
                'ar_occupation' => 'Special Education Teachers, Middle School',
                'slug' => 'special-education-teachers-middle-school',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            233 => [
                'id' => 1234,
                'en_occupation' => 'Special Education Teachers, Middle School',
                'ar_occupation' => 'Special Education Teachers, Middle School',
                'slug' => 'special-education-teachers-middle-school',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            234 => [
                'id' => 1235,
                'en_occupation' => 'Special Education Teachers, Middle School',
                'ar_occupation' => 'Special Education Teachers, Middle School',
                'slug' => 'special-education-teachers-middle-school',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            235 => [
                'id' => 1236,
                'en_occupation' =>
                    'Special Education Teachers, Preschool, Kindergarten, and Elementary School',
                'ar_occupation' =>
                    'Special Education Teachers, Preschool, Kindergarten, and Elementary School',
                'slug' => 'special-education-teachers-preschool-kindergarten-and-elementary-school',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            236 => [
                'id' => 1237,
                'en_occupation' => 'Special Education Teachers, Secondary School',
                'ar_occupation' => 'Special Education Teachers, Secondary School',
                'slug' => 'special-education-teachers-secondary-school',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            237 => [
                'id' => 1238,
                'en_occupation' => 'Special Forces',
                'ar_occupation' => 'Special Forces',
                'slug' => 'special-forces',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            238 => [
                'id' => 1239,
                'en_occupation' => 'Special Forces Officers',
                'ar_occupation' => 'Special Forces Officers',
                'slug' => 'special-forces-officers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            239 => [
                'id' => 1240,
                'en_occupation' => 'Speech-Language Pathologists',
                'ar_occupation' => 'Speech-Language Pathologists',
                'slug' => 'speech-language-pathologists',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            240 => [
                'id' => 1241,
                'en_occupation' => 'Speech-Language Pathology Assistants',
                'ar_occupation' => 'Speech-Language Pathology Assistants',
                'slug' => 'speech-language-pathology-assistants',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            241 => [
                'id' => 1242,
                'en_occupation' => 'Sports Medicine Physicians',
                'ar_occupation' => 'Sports Medicine Physicians',
                'slug' => 'sports-medicine-physicians',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            242 => [
                'id' => 1243,
                'en_occupation' => 'Spotters, Dry Cleaning',
                'ar_occupation' => 'Spotters, Dry Cleaning',
                'slug' => 'spotters-dry-cleaning',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            243 => [
                'id' => 1244,
                'en_occupation' => 'Statement Clerks',
                'ar_occupation' => 'Statement Clerks',
                'slug' => 'statement-clerks',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            244 => [
                'id' => 1245,
                'en_occupation' => 'Station Installers and Repairers, Telephone',
                'ar_occupation' => 'Station Installers and Repairers, Telephone',
                'slug' => 'station-installers-and-repairers-telephone',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            245 => [
                'id' => 1246,
                'en_occupation' => 'Stationary Engineers',
                'ar_occupation' => 'Stationary Engineers',
                'slug' => 'stationary-engineers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            246 => [
                'id' => 1247,
                'en_occupation' => 'Stationary Engineers and Boiler Operators',
                'ar_occupation' => 'Stationary Engineers and Boiler Operators',
                'slug' => 'stationary-engineers-and-boiler-operators',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            247 => [
                'id' => 1248,
                'en_occupation' => 'Statistical Assistants',
                'ar_occupation' => 'Statistical Assistants',
                'slug' => 'statistical-assistants',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            248 => [
                'id' => 1249,
                'en_occupation' => 'Statisticians',
                'ar_occupation' => 'Statisticians',
                'slug' => 'statisticians',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            249 => [
                'id' => 1250,
                'en_occupation' => 'Stevedores, Except Equipment Operators',
                'ar_occupation' => 'Stevedores, Except Equipment Operators',
                'slug' => 'stevedores-except-equipment-operators',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            250 => [
                'id' => 1251,
                'en_occupation' => 'Stock Clerks and Order Fillers',
                'ar_occupation' => 'Stock Clerks and Order Fillers',
                'slug' => 'stock-clerks-and-order-fillers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            251 => [
                'id' => 1252,
                'en_occupation' => 'Stock Clerks- Stockroom, Warehouse, or Storage Yard',
                'ar_occupation' => 'Stock Clerks- Stockroom, Warehouse, or Storage Yard',
                'slug' => 'stock-clerks-stockroom-warehouse-or-storage-yard',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            252 => [
                'id' => 1253,
                'en_occupation' => 'Stock Clerks, Sales Floor',
                'ar_occupation' => 'Stock Clerks, Sales Floor',
                'slug' => 'stock-clerks-sales-floor',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            253 => [
                'id' => 1254,
                'en_occupation' => 'Stone Cutters and Carvers',
                'ar_occupation' => 'Stone Cutters and Carvers',
                'slug' => 'stone-cutters-and-carvers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            254 => [
                'id' => 1255,
                'en_occupation' => 'Stone Sawyers',
                'ar_occupation' => 'Stone Sawyers',
                'slug' => 'stone-sawyers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            255 => [
                'id' => 1256,
                'en_occupation' => 'Stonemasons',
                'ar_occupation' => 'Stonemasons',
                'slug' => 'stonemasons',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            256 => [
                'id' => 1257,
                'en_occupation' => 'Storage and Distribution Managers',
                'ar_occupation' => 'Storage and Distribution Managers',
                'slug' => 'storage-and-distribution-managers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            257 => [
                'id' => 1258,
                'en_occupation' => 'Stringed Instrument Repairers and Tuners',
                'ar_occupation' => 'Stringed Instrument Repairers and Tuners',
                'slug' => 'stringed-instrument-repairers-and-tuners',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            258 => [
                'id' => 1259,
                'en_occupation' => 'Strippers',
                'ar_occupation' => 'Strippers',
                'slug' => 'strippers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            259 => [
                'id' => 1260,
                'en_occupation' => 'Structural Iron and Steel Workers',
                'ar_occupation' => 'Structural Iron and Steel Workers',
                'slug' => 'structural-iron-and-steel-workers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            260 => [
                'id' => 1261,
                'en_occupation' => 'Structural Metal Fabricators and Fitters',
                'ar_occupation' => 'Structural Metal Fabricators and Fitters',
                'slug' => 'structural-metal-fabricators-and-fitters',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            261 => [
                'id' => 1262,
                'en_occupation' => 'Substance Abuse and Behavioral Disorder Counselors',
                'ar_occupation' => 'Substance Abuse and Behavioral Disorder Counselors',
                'slug' => 'substance-abuse-and-behavioral-disorder-counselors',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            262 => [
                'id' => 1263,
                'en_occupation' => 'Subway and Streetcar Operators',
                'ar_occupation' => 'Subway and Streetcar Operators',
                'slug' => 'subway-and-streetcar-operators',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            263 => [
                'id' => 1264,
                'en_occupation' => 'Supply Chain Managers',
                'ar_occupation' => 'Supply Chain Managers',
                'slug' => 'supply-chain-managers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            264 => [
                'id' => 1265,
                'en_occupation' => 'Surgeons',
                'ar_occupation' => 'Surgeons',
                'slug' => 'surgeons',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            265 => [
                'id' => 1266,
                'en_occupation' => 'Surgical Assistants',
                'ar_occupation' => 'Surgical Assistants',
                'slug' => 'surgical-assistants',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            266 => [
                'id' => 1267,
                'en_occupation' => 'Surgical Technologists',
                'ar_occupation' => 'Surgical Technologists',
                'slug' => 'surgical-technologists',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            267 => [
                'id' => 1268,
                'en_occupation' => 'Survey Researchers',
                'ar_occupation' => 'Survey Researchers',
                'slug' => 'survey-researchers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            268 => [
                'id' => 1269,
                'en_occupation' => 'Surveying and Mapping Technicians',
                'ar_occupation' => 'Surveying and Mapping Technicians',
                'slug' => 'surveying-and-mapping-technicians',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            269 => [
                'id' => 1270,
                'en_occupation' => 'Surveying Technicians',
                'ar_occupation' => 'Surveying Technicians',
                'slug' => 'surveying-technicians',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            270 => [
                'id' => 1271,
                'en_occupation' => 'Surveyors',
                'ar_occupation' => 'Surveyors',
                'slug' => 'surveyors',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            271 => [
                'id' => 1272,
                'en_occupation' => 'Sustainability Specialists',
                'ar_occupation' => 'Sustainability Specialists',
                'slug' => 'sustainability-specialists',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            272 => [
                'id' => 1273,
                'en_occupation' => 'Switchboard Operators, Including Answering Service',
                'ar_occupation' => 'Switchboard Operators, Including Answering Service',
                'slug' => 'switchboard-operators-including-answering-service',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            273 => [
                'id' => 1274,
                'en_occupation' => 'Tailors, Dressmakers, and Custom Sewers',
                'ar_occupation' => 'Tailors, Dressmakers, and Custom Sewers',
                'slug' => 'tailors-dressmakers-and-custom-sewers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            274 => [
                'id' => 1275,
                'en_occupation' => 'Talent Directors',
                'ar_occupation' => 'Talent Directors',
                'slug' => 'talent-directors',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            275 => [
                'id' => 1276,
                'en_occupation' => 'Tank Car, Truck, and Ship Loaders',
                'ar_occupation' => 'Tank Car, Truck, and Ship Loaders',
                'slug' => 'tank-car-truck-and-ship-loaders',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            276 => [
                'id' => 1277,
                'en_occupation' => 'Tapers',
                'ar_occupation' => 'Tapers',
                'slug' => 'tapers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            277 => [
                'id' => 1278,
                'en_occupation' => 'Tax Examiners, Collectors, and Revenue Agents',
                'ar_occupation' => 'Tax Examiners, Collectors, and Revenue Agents',
                'slug' => 'tax-examiners-collectors-and-revenue-agents',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            278 => [
                'id' => 1279,
                'en_occupation' => 'Tax Preparers',
                'ar_occupation' => 'Tax Preparers',
                'slug' => 'tax-preparers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            279 => [
                'id' => 1280,
                'en_occupation' => 'Taxi Drivers and Chauffeurs',
                'ar_occupation' => 'Taxi Drivers and Chauffeurs',
                'slug' => 'taxi-drivers-and-chauffeurs',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            280 => [
                'id' => 1281,
                'en_occupation' => 'Teacher Assistants',
                'ar_occupation' => 'Teacher Assistants',
                'slug' => 'teacher-assistants',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            281 => [
                'id' => 1282,
                'en_occupation' => 'Teachers and Instructors, All Other',
                'ar_occupation' => 'Teachers and Instructors, All Other',
                'slug' => 'teachers-and-instructors-all-other',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            282 => [
                'id' => 1283,
                'en_occupation' => 'Team Assemblers',
                'ar_occupation' => 'Team Assemblers',
                'slug' => 'team-assemblers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            283 => [
                'id' => 1284,
                'en_occupation' => 'Technical Directors--Managers',
                'ar_occupation' => 'Technical Directors--Managers',
                'slug' => 'technical-directors-managers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            284 => [
                'id' => 1285,
                'en_occupation' => 'Technical Writers',
                'ar_occupation' => 'Technical Writers',
                'slug' => 'technical-writers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            285 => [
                'id' => 1286,
                'en_occupation' => 'Telecommunications Engineering Specialists',
                'ar_occupation' => 'Telecommunications Engineering Specialists',
                'slug' => 'telecommunications-engineering-specialists',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            286 => [
                'id' => 1287,
                'en_occupation' =>
                    'Telecommunications Equipment Installers and Repairers, Except Line Installers',
                'ar_occupation' =>
                    'Telecommunications Equipment Installers and Repairers, Except Line Installers',
                'slug' => 'telecommunications-equipment-installers-and-repairers-except-line-installers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            287 => [
                'id' => 1288,
                'en_occupation' => 'Telecommunications Facility Examiners',
                'ar_occupation' => 'Telecommunications Facility Examiners',
                'slug' => 'telecommunications-facility-examiners',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            288 => [
                'id' => 1289,
                'en_occupation' => 'Telecommunications Line Installers and Repairers',
                'ar_occupation' => 'Telecommunications Line Installers and Repairers',
                'slug' => 'telecommunications-line-installers-and-repairers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            289 => [
                'id' => 1290,
                'en_occupation' => 'Telemarketers',
                'ar_occupation' => 'Telemarketers',
                'slug' => 'telemarketers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            290 => [
                'id' => 1291,
                'en_occupation' => 'Telephone Operators',
                'ar_occupation' => 'Telephone Operators',
                'slug' => 'telephone-operators',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            291 => [
                'id' => 1292,
                'en_occupation' => 'Tellers',
                'ar_occupation' => 'Tellers',
                'slug' => 'tellers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            292 => [
                'id' => 1293,
                'en_occupation' => 'Terrazzo Workers and Finishers',
                'ar_occupation' => 'Terrazzo Workers and Finishers',
                'slug' => 'terrazzo-workers-and-finishers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            293 => [
                'id' => 1294,
                'en_occupation' => 'Textile Bleaching and Dyeing Machine Operators and Tenders',
                'ar_occupation' => 'Textile Bleaching and Dyeing Machine Operators and Tenders',
                'slug' => 'textile-bleaching-and-dyeing-machine-operators-and-tenders',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            294 => [
                'id' => 1295,
                'en_occupation' => 'Textile Cutting Machine Setters, Operators, and Tenders',
                'ar_occupation' => 'Textile Cutting Machine Setters, Operators, and Tenders',
                'slug' => 'textile-cutting-machine-setters-operators-and-tenders',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            295 => [
                'id' => 1296,
                'en_occupation' =>
                    'Textile Knitting and Weaving Machine Setters, Operators, and Tenders',
                'ar_occupation' =>
                    'Textile Knitting and Weaving Machine Setters, Operators, and Tenders',
                'slug' => 'textile-knitting-and-weaving-machine-setters-operators-and-tenders',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            296 => [
                'id' => 1297,
                'en_occupation' =>
                    'Textile Winding, Twisting, and Drawing Out Machine Setters, Operators, and Tenders',
                'ar_occupation' =>
                    'Textile Winding, Twisting, and Drawing Out Machine Setters, Operators, and Tenders',
                'slug' =>
                    'textile-winding-twisting-and-drawing-out-machine-setters-operators-and-tenders',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            297 => [
                'id' => 1298,
                'en_occupation' => 'Textile, Apparel, and Furnishings Workers, All Other',
                'ar_occupation' => 'Textile, Apparel, and Furnishings Workers, All Other',
                'slug' => 'textile-apparel-and-furnishings-workers-all-other',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            298 => [
                'id' => 1299,
                'en_occupation' => 'Therapists, All Other',
                'ar_occupation' => 'Therapists, All Other',
                'slug' => 'therapists-all-other',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            299 => [
                'id' => 1300,
                'en_occupation' => 'Tile and Marble Setters',
                'ar_occupation' => 'Tile and Marble Setters',
                'slug' => 'tile-and-marble-setters',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            300 => [
                'id' => 1301,
                'en_occupation' => 'Timing Device Assemblers, Adjusters, and Calibrators',
                'ar_occupation' => 'Timing Device Assemblers, Adjusters, and Calibrators',
                'slug' => 'timing-device-assemblers-adjusters-and-calibrators',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            301 => [
                'id' => 1302,
                'en_occupation' => 'Tire Builders',
                'ar_occupation' => 'Tire Builders',
                'slug' => 'tire-builders',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            302 => [
                'id' => 1303,
                'en_occupation' => 'Tire Repairers and Changers',
                'ar_occupation' => 'Tire Repairers and Changers',
                'slug' => 'tire-repairers-and-changers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            303 => [
                'id' => 1304,
                'en_occupation' => 'Title Examiners and Abstractors',
                'ar_occupation' => 'Title Examiners and Abstractors',
                'slug' => 'title-examiners-and-abstractors',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            304 => [
                'id' => 1305,
                'en_occupation' => 'Title Examiners, Abstractors, and Searchers',
                'ar_occupation' => 'Title Examiners, Abstractors, and Searchers',
                'slug' => 'title-examiners-abstractors-and-searchers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            305 => [
                'id' => 1306,
                'en_occupation' => 'Title Searchers',
                'ar_occupation' => 'Title Searchers',
                'slug' => 'title-searchers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            306 => [
                'id' => 1307,
                'en_occupation' => 'Tool and Die Makers',
                'ar_occupation' => 'Tool and Die Makers',
                'slug' => 'tool-and-die-makers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            307 => [
                'id' => 1308,
                'en_occupation' => 'Tool Grinders, Filers, and Sharpeners',
                'ar_occupation' => 'Tool Grinders, Filers, and Sharpeners',
                'slug' => 'tool-grinders-filers-and-sharpeners',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            308 => [
                'id' => 1309,
                'en_occupation' => 'Tour Guides and Escorts',
                'ar_occupation' => 'Tour Guides and Escorts',
                'slug' => 'tour-guides-and-escorts',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            309 => [
                'id' => 1310,
                'en_occupation' => 'Tour Guides and Escorts',
                'ar_occupation' => 'Tour Guides and Escorts',
                'slug' => 'tour-guides-and-escorts',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            310 => [
                'id' => 1311,
                'en_occupation' => 'Tractor-Trailer Truck Drivers',
                'ar_occupation' => 'Tractor-Trailer Truck Drivers',
                'slug' => 'tractor-trailer-truck-drivers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            311 => [
                'id' => 1312,
                'en_occupation' => 'Traffic Technicians',
                'ar_occupation' => 'Traffic Technicians',
                'slug' => 'traffic-technicians',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            312 => [
                'id' => 1313,
                'en_occupation' => 'rain Crew Members',
                'ar_occupation' => 'rain Crew Members',
                'slug' => 'rain-crew-members',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            313 => [
                'id' => 1314,
                'en_occupation' => 'Training and Development Manager',
                'ar_occupation' => 'Training and Development Manager',
                'slug' => 'training-and-development-manager',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            314 => [
                'id' => 1315,
                'en_occupation' => 'Training and Development Managers',
                'ar_occupation' => 'Training and Development Managers',
                'slug' => 'training-and-development-managers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            315 => [
                'id' => 1316,
                'en_occupation' => 'Training and Development Specialists',
                'ar_occupation' => 'Training and Development Specialists',
                'slug' => 'training-and-development-specialists',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            316 => [
                'id' => 1317,
                'en_occupation' => 'Training and Development Specialists',
                'ar_occupation' => 'Training and Development Specialists',
                'slug' => 'training-and-development-specialists',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            317 => [
                'id' => 1318,
                'en_occupation' => 'Transformer Repairers',
                'ar_occupation' => 'Transformer Repairers',
                'slug' => 'transformer-repairers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            318 => [
                'id' => 1319,
                'en_occupation' => 'Transit and Railroad Police',
                'ar_occupation' => 'Transit and Railroad Police',
                'slug' => 'transit-and-railroad-police',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            319 => [
                'id' => 1320,
                'en_occupation' => 'Transportation Attendants, Except Flight Attendants',
                'ar_occupation' => 'Transportation Attendants, Except Flight Attendants',
                'slug' => 'transportation-attendants-except-flight-attendants',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            320 => [
                'id' => 1321,
                'en_occupation' =>
                    'Transportation Attendants, Except Flight Attendants and Baggage Porters',
                'ar_occupation' =>
                    'Transportation Attendants, Except Flight Attendants and Baggage Porters',
                'slug' => 'transportation-attendants-except-flight-attendants-and-baggage-porters',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            321 => [
                'id' => 1322,
                'en_occupation' => 'Transportation Engineers',
                'ar_occupation' => 'Transportation Engineers',
                'slug' => 'transportation-engineers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            322 => [
                'id' => 1323,
                'en_occupation' => 'Transportation Inspectors',
                'ar_occupation' => 'Transportation Inspectors',
                'slug' => 'transportation-inspectors',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            323 => [
                'id' => 1324,
                'en_occupation' => 'Transportation Managers',
                'ar_occupation' => 'Transportation Managers',
                'slug' => 'transportation-managers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            324 => [
                'id' => 1325,
                'en_occupation' => 'Transportation Planners',
                'ar_occupation' => 'Transportation Planners',
                'slug' => 'transportation-planners',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            325 => [
                'id' => 1326,
                'en_occupation' => 'Transportation Security Screeners',
                'ar_occupation' => 'Transportation Security Screeners',
                'slug' => 'transportation-security-screeners',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            326 => [
                'id' => 1327,
                'en_occupation' =>
                    'Transportation Vehicle, Equipment and Systems Inspectors, Except Aviation',
                'ar_occupation' =>
                    'Transportation Vehicle, Equipment and Systems Inspectors, Except Aviation',
                'slug' => 'transportation-vehicle-equipment-and-systems-inspectors-except-aviation',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            327 => [
                'id' => 1328,
                'en_occupation' => 'Transportation Workers, All Other',
                'ar_occupation' => 'Transportation Workers, All Other',
                'slug' => 'transportation-workers-all-other',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            328 => [
                'id' => 1329,
                'en_occupation' => 'Transportation, Storage, and Distribution Managers',
                'ar_occupation' => 'Transportation, Storage, and Distribution Managers',
                'slug' => 'transportation-storage-and-distribution-managers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            329 => [
                'id' => 1330,
                'en_occupation' => 'Travel Agents',
                'ar_occupation' => 'Travel Agents',
                'slug' => 'travel-agents',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            330 => [
                'id' => 1331,
                'en_occupation' => 'Travel Clerks',
                'ar_occupation' => 'Travel Clerks',
                'slug' => 'travel-clerks',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            331 => [
                'id' => 1332,
                'en_occupation' => 'Travel Guide',
                'ar_occupation' => 'Travel Guide',
                'slug' => 'travel-guide',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            332 => [
                'id' => 1333,
                'en_occupation' => 'Travel Guides',
                'ar_occupation' => 'Travel Guides',
                'slug' => 'travel-guides',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            333 => [
                'id' => 1334,
                'en_occupation' => 'Treasurers, Controllers, and Chief Financial Officers',
                'ar_occupation' => 'Treasurers, Controllers, and Chief Financial Officers',
                'slug' => 'treasurers-controllers-and-chief-financial-officers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            334 => [
                'id' => 1335,
                'en_occupation' => 'Tree Trimmers and Pruners',
                'ar_occupation' => 'Tree Trimmers and Pruners',
                'slug' => 'tree-trimmers-and-pruners',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            335 => [
                'id' => 1336,
                'en_occupation' => 'Truck Drivers, Heavy',
                'ar_occupation' => 'Truck Drivers, Heavy',
                'slug' => 'truck-drivers-heavy',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            336 => [
                'id' => 1337,
                'en_occupation' => 'Truck Drivers, Heavy and Tractor-Trailer',
                'ar_occupation' => 'Truck Drivers, Heavy and Tractor-Trailer',
                'slug' => 'truck-drivers-heavy-and-tractor-trailer',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            337 => [
                'id' => 1338,
                'en_occupation' => 'Truck Drivers, Light or Delivery Services',
                'ar_occupation' => 'Truck Drivers, Light or Delivery Services',
                'slug' => 'truck-drivers-light-or-delivery-services',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            338 => [
                'id' => 1339,
                'en_occupation' => 'Tutors',
                'ar_occupation' => 'Tutors',
                'slug' => 'tutors',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            339 => [
                'id' => 1340,
                'en_occupation' => 'Typesetting and Composing Machine Operators and Tenders',
                'ar_occupation' => 'Typesetting and Composing Machine Operators and Tenders',
                'slug' => 'typesetting-and-composing-machine-operators-and-tenders',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            340 => [
                'id' => 1341,
                'en_occupation' => 'Umpires, Referees, and Other Sports Officials',
                'ar_occupation' => 'Umpires, Referees, and Other Sports Officials',
                'slug' => 'umpires-referees-and-other-sports-officials',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            341 => [
                'id' => 1342,
                'en_occupation' => 'Upholsterers',
                'ar_occupation' => 'Upholsterers',
                'slug' => 'upholsterers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            342 => [
                'id' => 1343,
                'en_occupation' => 'Urban and Regional Planners',
                'ar_occupation' => 'Urban and Regional Planners',
                'slug' => 'urban-and-regional-planners',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            343 => [
                'id' => 1344,
                'en_occupation' => 'Urologists',
                'ar_occupation' => 'Urologists',
                'slug' => 'urologists',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            344 => [
                'id' => 1345,
                'en_occupation' => 'Ushers, Lobby Attendants, and Ticket Takers',
                'ar_occupation' => 'Ushers, Lobby Attendants, and Ticket Takers',
                'slug' => 'ushers-lobby-attendants-and-ticket-takers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            345 => [
                'id' => 1346,
                'en_occupation' => 'Validation Engineers',
                'ar_occupation' => 'Validation Engineers',
                'slug' => 'validation-engineers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            346 => [
                'id' => 1347,
                'en_occupation' => 'Valve and Regulator Repairers',
                'ar_occupation' => 'Valve and Regulator Repairers',
                'slug' => 'valve-and-regulator-repairers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            347 => [
                'id' => 1348,
                'en_occupation' => 'Veterinarians',
                'ar_occupation' => 'Veterinarians',
                'slug' => 'veterinarians',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            348 => [
                'id' => 1349,
                'en_occupation' => 'Veterinary Assistants and Laboratory Animal Caretakers',
                'ar_occupation' => 'Veterinary Assistants and Laboratory Animal Caretakers',
                'slug' => 'veterinary-assistants-and-laboratory-animal-caretakers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            349 => [
                'id' => 1350,
                'en_occupation' => 'Veterinary Technologists and Technicians',
                'ar_occupation' => 'Veterinary Technologists and Technicians',
                'slug' => 'veterinary-technologists-and-technicians',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            350 => [
                'id' => 1351,
                'en_occupation' => 'Video Game Designers',
                'ar_occupation' => 'Video Game Designers',
                'slug' => 'video-game-designers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            351 => [
                'id' => 1352,
                'en_occupation' => 'Vocational Education Teachers Postsecondary',
                'ar_occupation' => 'Vocational Education Teachers Postsecondary',
                'slug' => 'vocational-education-teachers-postsecondary',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            352 => [
                'id' => 1353,
                'en_occupation' => 'Vocational Education Teachers, Middle School',
                'ar_occupation' => 'Vocational Education Teachers, Middle School',
                'slug' => 'vocational-education-teachers-middle-school',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            353 => [
                'id' => 1354,
                'en_occupation' => 'Vocational Education Teachers, Secondary School',
                'ar_occupation' => 'Vocational Education Teachers, Secondary School',
                'slug' => 'vocational-education-teachers-secondary-school',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            354 => [
                'id' => 1355,
                'en_occupation' => 'Waiters and Waitresses',
                'ar_occupation' => 'Waiters and Waitresses',
                'slug' => 'waiters-and-waitresses',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            355 => [
                'id' => 1356,
                'en_occupation' => 'Watch Repairers',
                'ar_occupation' => 'Watch Repairers',
                'slug' => 'watch-repairers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            356 => [
                'id' => 1357,
                'en_occupation' => 'Water and Liquid Waste Treatment Plant and System Operators',
                'ar_occupation' => 'Water and Liquid Waste Treatment Plant and System Operators',
                'slug' => 'water-and-liquid-waste-treatment-plant-and-system-operators',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            357 => [
                'id' => 1358,
                'en_occupation' => 'Water Resource Specialists',
                'ar_occupation' => 'Water Resource Specialists',
                'slug' => 'water-resource-specialists',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            358 => [
                'id' => 1359,
                'en_occupation' => 'Water/Wastewater Engineers',
                'ar_occupation' => 'Water/Wastewater Engineers',
                'slug' => 'waterwastewater-engineers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            359 => [
                'id' => 1360,
                'en_occupation' => 'Weatherization Installers and Technicians',
                'ar_occupation' => 'Weatherization Installers and Technicians',
                'slug' => 'weatherization-installers-and-technicians',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            360 => [
                'id' => 1361,
                'en_occupation' => 'Web Administrators',
                'ar_occupation' => 'Web Administrators',
                'slug' => 'web-administrators',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            361 => [
                'id' => 1362,
                'en_occupation' => 'Web Developers',
                'ar_occupation' => 'Web Developers',
                'slug' => 'web-developers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            362 => [
                'id' => 1363,
                'en_occupation' => 'Weighers, Measurers, Checkers, and Samplers, Recordkeeping',
                'ar_occupation' => 'Weighers, Measurers, Checkers, and Samplers, Recordkeeping',
                'slug' => 'weighers-measurers-checkers-and-samplers-recordkeeping',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            363 => [
                'id' => 1364,
                'en_occupation' => 'Welder-Fitters',
                'ar_occupation' => 'Welder-Fitters',
                'slug' => 'welder-fitters',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            364 => [
                'id' => 1365,
                'en_occupation' => 'Welders and Cutters',
                'ar_occupation' => 'Welders and Cutters',
                'slug' => 'welders-and-cutters',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            365 => [
                'id' => 1366,
                'en_occupation' => 'Welders, Cutters, and Welder Fitters',
                'ar_occupation' => 'Welders, Cutters, and Welder Fitters',
                'slug' => 'welders-cutters-and-welder-fitters',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            366 => [
                'id' => 1367,
                'en_occupation' => 'Welders, Cutters, Solderers, and Brazers',
                'ar_occupation' => 'Welders, Cutters, Solderers, and Brazers',
                'slug' => 'welders-cutters-solderers-and-brazers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            367 => [
                'id' => 1368,
                'en_occupation' => 'Welders, Production',
                'ar_occupation' => 'Welders, Production',
                'slug' => 'welders-production',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            368 => [
                'id' => 1369,
                'en_occupation' => 'Welding Machine Operators and Tenders',
                'ar_occupation' => 'Welding Machine Operators and Tenders',
                'slug' => 'welding-machine-operators-and-tenders',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            369 => [
                'id' => 1370,
                'en_occupation' => 'Welding Machine Setters and Set-Up Operators',
                'ar_occupation' => 'Welding Machine Setters and Set-Up Operators',
                'slug' => 'welding-machine-setters-and-set-up-operators',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            370 => [
                'id' => 1371,
                'en_occupation' =>
                    'Welding, Soldering, and Brazing Machine Setters, Operators, and Tenders',
                'ar_occupation' =>
                    'Welding, Soldering, and Brazing Machine Setters, Operators, and Tenders',
                'slug' => 'welding-soldering-and-brazing-machine-setters-operators-and-tenders',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            371 => [
                'id' => 1372,
                'en_occupation' => 'Welfare Eligibility Workers and Interviewers',
                'ar_occupation' => 'Welfare Eligibility Workers and Interviewers',
                'slug' => 'welfare-eligibility-workers-and-interviewers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            372 => [
                'id' => 1373,
                'en_occupation' => 'Well and Core Drill Operators',
                'ar_occupation' => 'Well and Core Drill Operators',
                'slug' => 'well-and-core-drill-operators',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            373 => [
                'id' => 1374,
                'en_occupation' => 'Wellhead Pumpers',
                'ar_occupation' => 'Wellhead Pumpers',
                'slug' => 'wellhead-pumpers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            374 => [
                'id' => 1375,
                'en_occupation' => 'Wholesale and Retail Buyers, Except Farm Products',
                'ar_occupation' => 'Wholesale and Retail Buyers, Except Farm Products',
                'slug' => 'wholesale-and-retail-buyers-except-farm-products',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            375 => [
                'id' => 1376,
                'en_occupation' => 'Wind Energy Engineers',
                'ar_occupation' => 'Wind Energy Engineers',
                'slug' => 'wind-energy-engineers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            376 => [
                'id' => 1377,
                'en_occupation' => 'Wind Energy Operations Managers',
                'ar_occupation' => 'Wind Energy Operations Managers',
                'slug' => 'wind-energy-operations-managers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            377 => [
                'id' => 1378,
                'en_occupation' => 'Wind Energy Project Managers',
                'ar_occupation' => 'Wind Energy Project Managers',
                'slug' => 'wind-energy-project-managers',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            378 => [
                'id' => 1379,
                'en_occupation' => 'Wind Turbine Service Technicians',
                'ar_occupation' => 'Wind Turbine Service Technicians',
                'slug' => 'wind-turbine-service-technicians',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:42',
                'updated_at' => '2021-02-16 06:34:42'
            ],
            379 => [
                'id' => 1380,
                'en_occupation' => 'Woodworkers, All Other',
                'ar_occupation' => 'Woodworkers, All Other',
                'slug' => 'woodworkers-all-other',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:43',
                'updated_at' => '2021-02-16 06:34:43'
            ],
            380 => [
                'id' => 1381,
                'en_occupation' => 'Woodworking Machine Operators and Tenders, Except Sawing',
                'ar_occupation' => 'Woodworking Machine Operators and Tenders, Except Sawing',
                'slug' => 'woodworking-machine-operators-and-tenders-except-sawing',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:43',
                'updated_at' => '2021-02-16 06:34:43'
            ],
            381 => [
                'id' => 1382,
                'en_occupation' => 'Woodworking Machine Setters and Set-Up Operators, Except Sawing',
                'ar_occupation' => 'Woodworking Machine Setters and Set-Up Operators, Except Sawing',
                'slug' => 'woodworking-machine-setters-and-set-up-operators-except-sawing',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:43',
                'updated_at' => '2021-02-16 06:34:43'
            ],
            382 => [
                'id' => 1383,
                'en_occupation' => 'Woodworking Machine Setters, Operators, and Tenders, Except Sawing',
                'ar_occupation' => 'Woodworking Machine Setters, Operators, and Tenders, Except Sawing',
                'slug' => 'woodworking-machine-setters-operators-and-tenders-except-sawing',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:43',
                'updated_at' => '2021-02-16 06:34:43'
            ],
            383 => [
                'id' => 1384,
                'en_occupation' => 'Word Processors and Typists',
                'ar_occupation' => 'Word Processors and Typists',
                'slug' => 'word-processors-and-typists',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:43',
                'updated_at' => '2021-02-16 06:34:43'
            ],
            384 => [
                'id' => 1385,
                'en_occupation' => 'Writers and Authors',
                'ar_occupation' => 'Writers and Authors',
                'slug' => 'writers-and-authors',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:43',
                'updated_at' => '2021-02-16 06:34:43'
            ],
            385 => [
                'id' => 1386,
                'en_occupation' => 'Zoologists and Wildlife Biologists',
                'ar_occupation' => 'Zoologists and Wildlife Biologists',
                'slug' => 'zoologists-and-wildlife-biologists',
                'status' => 0,
                'created_at' => '2021-02-16 06:34:43',
                'updated_at' => '2021-02-16 06:34:43'
            ]
        ]);
    }
}
