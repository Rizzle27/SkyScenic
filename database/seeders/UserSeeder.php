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
                'username' => 'lucasgarcia0027',
                'name' => 'Lucas',
                'lastname' => 'García',
                'email' => 'lucas.garcia@davinci.edu.ar',
                'password' => Hash::make('1234'),
                'role' => 'superadmin',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'username' => 'MartuBianchi',
                'name' => 'Martina',
                'lastname' => 'Bianchi',
                'email' => 'martina.bianchi@davinci.edu.ar',
                'password' => Hash::make('1234'),
                'role' => 'admin',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'username' => 'KunAgüero',
                'name' => 'Nicolás',
                'lastname' => 'Agüero',
                'email' => 'nicolas.aguero@davinci.edu.ar',
                'password' => Hash::make('1234'),
                'role' => 'regular',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'username' => 'BeluuStella',
                'name' => 'Belén',
                'lastname' => 'Stella',
                'email' => 'belen.stella@davinci.edu.ar',
                'password' => Hash::make('1234'),
                'role' => 'regular',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
