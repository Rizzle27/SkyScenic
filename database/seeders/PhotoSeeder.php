<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PhotoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('photos')->insert([
            [
                'aircraft' => "Boeing 747-481(BCF)",
                'license_plate' => "TF-AMP",
                'airline' => "Magma Aviation (Air Atlanta Icelandic)",
                'location' => "Cologne/Bonn Konrad Adenauer Airport - EDDK",
                'country' => "Germany",
                'img_path' => "test1.jpg",
                'date' => now(),
                'created_at' => now(),
                'updated_at' => now(),
                'id_user' => 1,
                'visit_count' => 10
            ],
            [
                'aircraft' => "Panavia Tornado IDS",
                'license_plate' => "45-14",
                'airline' => "Germany - Air Force",
                'location' => "Fairford Air Force Base - EGVA",
                'country' => "United Kingdom",
                'img_path' => "test2.jpg",
                'date' => now(),
                'created_at' => now(),
                'updated_at' => now(),
                'id_user' => 1,
                'visit_count' => 15
            ],
            [
                'aircraft' => "Lockheed Martin F-35A Lightning II",
                'license_plate' => "22-5684",
                'airline' => "United States - US Air Force (USAF)",
                'location' => "Other Location - Lake District",
                'country' => "United Kingdom",
                'img_path' => "test3.jpg",
                'date' => now(),
                'created_at' => now(),
                'updated_at' => now(),
                'id_user' => 1,
                'visit_count' => 8
            ],
            [
                'aircraft' => "SpaceX Falcon 9",
                'license_plate' => "v1.2",
                'airline' => "SpaceX",
                'location' => "Hawthorne Municipal Airport - KHHR",
                'country' => "USA - California",
                'img_path' => "test4.jpg",
                'date' => now(),
                'created_at' => now(),
                'updated_at' => now(),
                'id_user' => 2,
                'visit_count' => 9
            ],
            [
                'aircraft' => "General Dynamics F-16C Fighting Falcon",
                'license_plate' => "92-3917",
                'airline' => "United States - US Air Force (USAF)",
                'location' => "Savannah Int'l Airport - KSAV",
                'country' => "USA - Georgia",
                'img_path' => "test5.jpg",
                'date' => now(),
                'created_at' => now(),
                'updated_at' => now(),
                'id_user' => 4,
                'visit_count' => 10
            ],
            [
                'aircraft' => "Alenia Aermacchi T-345A",
                'license_plate' => "CSX55237",
                'airline' => "Italy - Air Force",
                'location' => "Varese - Venegono - LILN",
                'country' => "Italy",
                'img_path' => "test6.jpg",
                'date' => now(),
                'created_at' => now(),
                'updated_at' => now(),
                'id_user' => 4,
                'visit_count' => 2
            ],
            [
                'aircraft' => "Dassault Mirage 2000-5F",
                'license_plate' => "66",
                'airline' => "France - Air Force",
                'location' => "Inflight",
                'country' => "France",
                'img_path' => "test7.jpg",
                'date' => now(),
                'created_at' => now(),
                'updated_at' => now(),
                'id_user' => 3,
                'visit_count' => 4
            ],
            [
                'aircraft' => "Boeing 747SP-21",
                'license_plate' => "N747NA",
                'airline' => "United States - National Aeronautics and Space Administration (NASA)",
                'location' => "Christchurch Int'l Airport - NZCH",
                'country' => "New Zealand",
                'img_path' => "test8.jpg",
                'date' => now(),
                'created_at' => now(),
                'updated_at' => now(),
                'id_user' => 2,
                'visit_count' => 8
            ],
            [
                'aircraft' => "Rockwell Space Shuttle Orbiter",
                'license_plate' => "OV-104",
                'airline' => "United States - National Aeronautics and Space Administration (NASA)",
                'location' => "Other Location - Kennedy Space Center",
                'country' => "USA - Florida",
                'img_path' => "test9.jpg",
                'date' => now(),
                'created_at' => now(),
                'updated_at' => now(),
                'id_user' => 1,
                'visit_count' => 2
            ],
            [
                'aircraft' => "Republic F-105F Thunderchief",
                'license_plate' => "63-8309",
                'airline' => "United States - US Air Force (USAF)",
                'location' => "Riverside March Air Force Base - KRIV",
                'country' => "USA - California",
                'img_path' => "test10.jpg",
                'date' => now(),
                'created_at' => now(),
                'updated_at' => now(),
                'id_user' => 1,
                'visit_count' => 4
            ],
            [
                'aircraft' => "Grumman F-14A Tomcat",
                'license_plate' => "162591",
                'airline' => "United States - US Navy (USN)",
                'location' => "El Centro Naval Air Facility - KNJK",
                'country' => "USA - California",
                'img_path' => "test11.jpg",
                'date' => now(),
                'created_at' => now(),
                'updated_at' => now(),
                'id_user' => 1,
                'visit_count' => 5
            ],
            [
                'aircraft' => "Boeing F/A-18F Super Hornet",
                'license_plate' => "166614",
                'airline' => "United States - US Navy (USN)",
                'location' => "El Centro Naval Air Facility - KNJK",
                'country' => "USA - California",
                'img_path' => "test12.jpg",
                'date' => now(),
                'created_at' => now(),
                'updated_at' => now(),
                'id_user' => 1,
                'visit_count' => 4
            ],
            [
                'aircraft' => "Boeing 747-8B5",
                'license_plate' => "HL7636",
                'airline' => "Korean Air",
                'location' => "Seoul Incheon Int'l - RKSI",
                'country' => "South Korea",
                'img_path' => "test13.jpg",
                'date' => now(),
                'created_at' => now(),
                'updated_at' => now(),
                'id_user' => 1,
                'visit_count' => 9
            ],
            [
                'aircraft' => "Boeing 747-446",
                'license_plate' => "JA8088",
                'airline' => "Japan Airlines (JAL)",
                'location' => "Inflight",
                'country' => "Guam",
                'img_path' => "test14.jpg",
                'date' => now(),
                'created_at' => now(),
                'updated_at' => now(),
                'id_user' => 1,
                'visit_count' => 16
            ],
            [
                'aircraft' => "Boeing 747-48EF(SCD)",
                'license_plate' => "HL7420",
                'airline' => "Asiana Cargo",
                'location' => "Los Angeles Int'l Airport - KLAX",
                'country' => "USA - California",
                'img_path' => "test15.jpg",
                'date' => now(),
                'created_at' => now(),
                'updated_at' => now(),
                'id_user' => 1,
                'visit_count' => 12
            ],
            [
                'aircraft' => "Fokker 50",
                'license_plate' => "SE-LIO",
                'airline' => "Amapola Flyg",
                'location' => "Ostrava Leos Janacek Airport - LKMT",
                'country' => "Czech Republic",
                'img_path' => "test16.jpg",
                'date' => now(),
                'created_at' => now(),
                'updated_at' => now(),
                'id_user' => 1,
                'visit_count' => 20
            ],
            [
                'aircraft' => "Agusta-Bell AB-206B JetRanger II",
                'license_plate' => "OE-XJI",
                'airline' => "Private",
                'location' => "Other Location - Thalgau",
                'country' => "Austria",
                'img_path' => "test17.jpg",
                'date' => now(),
                'created_at' => now(),
                'updated_at' => now(),
                'id_user' => 2,
                'visit_count' => 18
            ],
            [
                'aircraft' => "Fairchild A-10C Thunderbolt II",
                'license_plate' => "79-0183",
                'airline' => "United States - US Air Force (USAF)",
                'location' => "Osan Air Base - RKSO",
                'country' => "South Korea",
                'img_path' => "test18.jpg",
                'date' => now(),
                'created_at' => now(),
                'updated_at' => now(),
                'id_user' => 2,
                'visit_count' => 15
            ],
            [
                'aircraft' => "Douglas C-47B Skytrain",
                'license_plate' => "N60154",
                'airline' => "Private",
                'location' => "Palm Springs Regional Airport - KPSP",
                'country' => "USA - California",
                'img_path' => "test19.jpg",
                'date' => now(),
                'created_at' => now(),
                'updated_at' => now(),
                'id_user' => 2,
                'visit_count' => 14
            ],
            [
                'aircraft' => "Chance Vought F4U-4 Corsair",
                'license_plate' => "96885",
                'airline' => "United States - US Marine Corps",
                'location' => "Other Location - USS Midway Museum, San Diego",
                'country' => "USA - California",
                'img_path' => "test20.jpg",
                'date' => now(),
                'created_at' => now(),
                'updated_at' => now(),
                'id_user' => 2,
                'visit_count' => 22
            ],
        ]);
    }
}
