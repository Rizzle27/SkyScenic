<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('news_articles')->insert([
            'title' => 'Estados Unidos inmoviliza todos los aviones Osprey tras el accidente en Japón',
            'subtitle' => 'Investigación en curso: Osprey en tierra para determinar causas y garantizar seguridad',
            'body' => 'El ejército estadounidense ha tomado la decisión de poner en tierra todos sus aviones Osprey V-22 después de un trágico accidente en Japón. Este movimiento se produce una semana después de que ocho miembros del servicio perdieran la vida en un accidente en la isla Yakushima de la prefectura de Kagoshima, marcando el primer incidente fatal de este tipo en Japón.
            Las investigaciones preliminares indican que los problemas con el avión fueron la causa del accidente, y no un error de la tripulación. Según el teniente general Tony Bauernfeind, jefe del Comando de Operaciones Especiales de la Fuerza Aérea de EE. UU., una posible falla de material habría sido la causa, aunque aún se desconoce la causa subyacente de esta falla.
            Esta medida de poner en tierra a los Osprey permitirá llevar a cabo una investigación exhaustiva para determinar los factores causales y recomendar las medidas necesarias para garantizar la seguridad de la flota CV-22 de la Fuerza Aérea.',
            'img_path' => 'noticia1.jpg',
            'date' => now(),
            'created_at' => now(),
            'updated_at' => now(),
            'id_user' => 1,
        ]);
    }
}
