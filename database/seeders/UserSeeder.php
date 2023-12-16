<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'id_subscription' => 3,
                'username' => 'lucasgarcia0027',
                'avatar' => 'lucas.jpg',
                'name' => 'Lucas',
                'lastname' => 'García',
                'email' => 'lucas.garcia@davinci.edu.ar',
                'password' => Hash::make('123456'),
                'role' => 'superadmin',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id_subscription' => 3,
                'username' => 'MartuBianchi',
                'avatar' => 'martina.jpg',
                'name' => 'Martina',
                'lastname' => 'Bianchi',
                'email' => 'martina.bianchi@davinci.edu.ar',
                'password' => Hash::make('123456'),
                'role' => 'admin',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id_subscription' => null,
                'username' => 'KunAgüero',
                'avatar' => 'nico.jpg',
                'name' => 'Nicolás',
                'lastname' => 'Agüero',
                'email' => 'nicolas.aguero@davinci.edu.ar',
                'password' => Hash::make('123456'),
                'role' => 'regular',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id_subscription' => 2,
                'username' => 'BeluuStella',
                'avatar' => 'belen.jpg',
                'name' => 'Belén',
                'lastname' => 'Stella',
                'email' => 'belen.stella@davinci.edu.ar',
                'password' => Hash::make('123456'),
                'role' => 'regular',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
