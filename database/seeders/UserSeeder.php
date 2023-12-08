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
                'id' => 1,
                'username' => 'lucasgarcia0027',
                'avatar' => 'photos/lucas.jpg',
                'name' => 'Lucas',
                'lastname' => 'García',
                'email' => 'lucas.garcia@davinci.edu.ar',
                'password' => Hash::make('123456'),
                'role' => 'superadmin',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 2,
                'username' => 'MartuBianchi',
                'avatar' => 'photos/martina.jpg',
                'name' => 'Martina',
                'lastname' => 'Bianchi',
                'email' => 'martina.bianchi@davinci.edu.ar',
                'password' => Hash::make('123456'),
                'role' => 'admin',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 3,
                'username' => 'KunAgüero',
                'avatar' => 'photos/nico.jpg',
                'name' => 'Nicolás',
                'lastname' => 'Agüero',
                'email' => 'nicolas.aguero@davinci.edu.ar',
                'password' => Hash::make('123456'),
                'role' => 'regular',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 4,
                'username' => 'BeluuStella',
                'avatar' => 'photos/belen.jpg',
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
