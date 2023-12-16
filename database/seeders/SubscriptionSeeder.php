<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubscriptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('subscriptions')->insert([
            [
                'id' => 1,
                'name' => 'Aficionado',
                'plan' => 'basic',
                'download_limit' => 1,
                'price' => 3999,
            ],
            [
                'id' => 2,
                'name' => 'Copiloto',
                'plan' => 'standard',
                'download_limit' => 3,
                'price' => 7999,
            ],
            [
                'id' => 3,
                'name' => 'Piloto',
                'plan' => 'premium',
                'download_limit' => 5,
                'price' => 14999,
            ],
        ]);
    }
}
