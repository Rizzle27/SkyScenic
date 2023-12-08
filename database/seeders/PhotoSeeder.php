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
                'visit_count' => 200
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
                'visit_count' => 30
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
                'visit_count' => 80
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
                'visit_count' => 25
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
                'visit_count' => 15
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
                'visit_count' => 4
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
                'visit_count' => 40
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
                'visit_count' => 25
            ],
            ]);
    }
}
