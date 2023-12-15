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
            [
                'title' => 'Estados Unidos inmoviliza todos los aviones Osprey tras el accidente en Japón',
                'subtitle' => 'Boeing acelera la colaboración a nivel local y global',
                'body' => 'Boeing está intensificando sus esfuerzos a nivel mundial para promover el uso de combustibles sostenibles de aviación (SAF, por sus siglas en inglés), como una medida clave para reducir las emisiones en la industria aérea tanto en la actualidad como en el futuro.
                Boeing se centra en catalizar la colaboración, la investigación y el desarrollo de políticas relacionadas con los SAF. Estos combustibles pueden reducir hasta un 85% las emisiones de CO2 a lo largo del ciclo de vida de las aeronaves. «Estamos fortaleciendo nuestras colaboraciones internacionales para lograr un planeta con un mayor uso de SAF», declaró Chris Raymond, Director de Sostenibilidad de Boeing. «Los SAF son la solución más prometedora para reducir las emisiones de la aviación, y estamos comprometidos en seguir colaborando e innovando para fomentar su producción en todo el mundo».',
                'img_path' => 'noticia1.jpg',
                'date' => now(),
                'created_at' => now(),
                'updated_at' => now(),
                'id_user' => 1,
            ],
            [
                'title' => 'Avión Aero Tanker aterriza en Chile para combatir incendios forestales',
                'subtitle' => 'Un nuevo refuerzo en la lucha contra los incendios forestales en Chile',
                'body' => 'El avión bombardero contra incendios forestales Erickson Aero Tanker MD-87T ha llegado a Chile para unirse a la flota de la empresa chilena Ecocopter y prestar servicios a la Corporación Nacional Forestal (CONAF) en la lucha contra los incendios forestales. Con una capacidad de carga de 11.356 litros de agua y una velocidad máxima de 788 km/h, este avión se convertirá en una herramienta clave para combatir los siniestros que afectan al país. El Aero Tanker MD-87T destaca por su versatilidad, ya que puede operar en pistas de menor tamaño en comparación con otras aeronaves de gran capacidad. Además, cuenta con estanques que pueden ser cargados rápidamente en aproximadamente 7 minutos. Esto permitirá una respuesta oportuna y eficaz ante los incendios forestales, evitando su propagación una vez que se activa la emergencia. Para la temporada 2023-2024, el Aero Tanker cuenta con tripulaciones expertas y un equipo de más de 6 personas, incluyendo pilotos, mecánicos, ingenieros y personal de apoyo logístico. Esta preparación conjunta entre el Estado y el sector privado demuestra el compromiso para abordar de manera efectiva los incendios forestales, especialmente en el período más complejo.',
                'img_path' => 'noticia2.jpg',
                'date' => now(),
                'created_at' => now(),
                'updated_at' => now(),
                'id_user' => 1,
            ],
            [
                'title' => '«PMA»: el procedimiento de Aeroflot y Rosatom para esquivar el embargo de repuestos de Airbus y Boeing',
                'subtitle' => 'Esta iniciativa se produce en respuesta a las sanciones económicas y busca asegurar la sostenibilidad de la industria aeronáutica rusa.',
                'body' => 'Aeroflot Group anunció recientemente su colaboración con Rosatom, la corporación estatal de energía atómica de Rusia, para iniciar la producción de componentes «Parts Manufacturer Approval» (PMA, por sus siglas en inglés) para aviones de fabricación occidental, incluidos Airbus y Boeing. Aeroflot y Rosatom planean crear una estructura integrada que cubra todo el ciclo de diseño, fabricación y mantenimiento de componentes y consumibles rusos para aviones extranjeros. La asociación estratégica entre las dos empresas ya ha dado frutos con la aprobación por parte de Rosaviatsiya, la autoridad de aviación rusa, del uso de filtros de aire diseñados conjuntamente. Según publicitan, estos filtros, superan en un 20-25% la vida útil de los componentes occidentales, se utilizan en el sistema de aire acondicionado de los aviones Airbus A320. Los PMA, es un proceso de certificación en la industria de la aviación que permite a terceros fabricar y vender piezas de repuesto para aviones.

                Este proceso es regulado por la Administración Federal de Aviación (FAA) en los Estados Unidos, y permite a las empresas producir piezas que son equivalentes, o incluso superiores, a las piezas originales del fabricante (OEM).

                Las piezas PMA son a menudo más económicas que las piezas OEM, lo que puede reducir los costos de mantenimiento para las aerolíneas. Además, pueden ofrecer en algunos casos mejoras en el diseño o la funcionalidad sobre las piezas OEM.

                El mercado global de componentes PMA ha crecido hasta superar los 10 mil millones $ el año pasado, siendo Estados Unidos el líder del mercado. Otros usuarios activos de piezas PMA incluyen China, Japón, Canadá y Alemania. El uso seguro de estos componentes en la aviación comercial fue inicialmente desarrollado e implementado por la Administración Federal de Aviación en los Estados Unidos, y luego adoptado en la Unión Europea, Australia, China y otros países.

                La introducción en Rusia de procedimientos similares a los de PMA para aprobar piezas no OEM, permitirá a Rusia esquivar el embargo internacional y reducirá su dependencia de las piezas importadas. La asociación entre Aeroflot y Rosatom está destinada a lanzar la producción de piezas y componentes para el mantenimiento de aeronaves occidentales.

                Además Aeroflot y Rosatom planean desarrollar, certificar y producir componentes para todo tipo de aeronaves, incluyendo elementos de filtro de aire y agua, componentes electrónicos de cabina de pasajeros, entre otros.',
                'img_path' => 'noticia3.jpg',
                'date' => now(),
                'created_at' => now(),
                'updated_at' => now(),
                'id_user' => 1,
            ],
            [
                'title' => 'El Aeropuerto de Zaragoza experimenta un impresionante crecimiento en el tráfico de carga aérea',
                'subtitle' => 'Se registraron un total de 14.004 toneladas de mercancías transportadas, lo que representa un incremento del 21,5% con respecto a noviembre de 2022',
                'body' => 'El Aeropuerto de Zaragoza ha cerrado el mes de noviembre con un crecimiento significativo en el tráfico de mercancías, consolidándose como uno de los principales centros de carga aérea en España. Según los datos más recientes, el aeropuerto ha experimentado un aumento del 21,5% en el volumen de carga en comparación con el mismo mes del año pasado. Este crecimiento es un reflejo del papel crucial que juega Zaragoza en el transporte de mercancías a nivel nacional e internacional. El mes de noviembre ha sido especialmente positivo para el Aeropuerto de Zaragoza en términos de tráfico de carga aérea. Durante este periodo, se registraron un total de 14.004 toneladas de mercancías transportadas, lo que representa un incremento del 21,5% en comparación con noviembre de 2022. Además, en el periodo acumulado entre enero y noviembre, se contabilizaron más de 118.463 toneladas de carga, un aumento del 0,6% en comparación con el mismo periodo del año anterior. El crecimiento en el tráfico de carga aérea del Aeropuerto de Zaragoza tiene un impacto significativo en la economía local y regional. Este aumento en la actividad de transporte de mercancías impulsa la creación de empleo y fomenta el desarrollo económico en la zona. Además, fortalece la posición estratégica de Zaragoza como un centro logístico clave en España y Europa. Aunque el enfoque principal del Aeropuerto de Zaragoza es el transporte de carga, también se registra el movimiento de pasajeros. En noviembre, pasaron por el aeropuerto un total de 40.534 viajeros, lo que representa una disminución del 9,8% en comparación con el mismo mes del año anterior. Sin embargo, a pesar de esta ligera disminución, los once primeros meses del año mostraron un aumento del 10,8% en el número de pasajeros en comparación con el mismo periodo del año anterior, alcanzando la cifra de 635.626 pasajeros. En cuanto a las operaciones aéreas, el Aeropuerto de Zaragoza registró 738 movimientos de aterrizaje y despegue durante el mes de noviembre. Aunque esto representa un ligero descenso del 4,5% en comparación con noviembre de 2022, el aeropuerto acumuló un total de 8.989 vuelos desde enero hasta noviembre, lo que representa una disminución del 3,8% en comparación con el mismo periodo del año anterior.',
                'img_path' => 'noticia4.jpg',
                'date' => now(),
                'created_at' => now(),
                'updated_at' => now(),
                'id_user' => 2,
            ],
            [
                'title' => 'La Vanguardia de Boeing en la Sostenibilidad Aeronáutica: Compromisos y Desafíos en la III Cumbre del Clima',
                'subtitle' => 'La innovación y el compromiso son las alas que llevarán al sector aeronáutico hacia un futuro más limpio y responsable',
                'body' => 'La industria aeronáutica se encuentra en un punto de inflexión crucial. Frente a los desafíos ambientales que plantea el cambio climático, las empresas líderes en el sector, como Boeing, están adoptando estrategias innovadoras para reducir su impacto ecológico y avanzar hacia una aviación más sostenible.

                En la reciente III Cumbre del Clima en el Sector Aeronáutico, organizada por COIAE, Beatriz Ventero Peña, Responsable de desarrollo de negocio en Boeing Research & Technology Europe, compartió mesa con Ana Salazar, Directora de Sostenibilidad de AENA y Marina García Aedo de IAG Group Sustainability para exponer las acciones y compromisos de Boeing en esta materia. La sostenibilidad se ha convertido en una prioridad empresarial no solo por una cuestión de responsabilidad ambiental sino también como un imperativo estratégico para la supervivencia y el crecimiento a largo plazo. «Boeing lleva mucho tiempo comprometido a alcanzar cero emisiones netas en todas sus operaciones«, afirmó Ventero Peña, destacando el enfoque integral que la empresa está adoptando. La digitalización juega un papel fundamental en la optimización de procesos y la minimización de residuos. Boeing está invirtiendo en ingeniería de sistemas basada en modelos para acortar ciclos de diseño y mejorar el mantenimiento predictivo. Además, la introducción de energías renovables en plantas como la de Charleston y la implementación de la fabricación aditiva son pasos significativos hacia una producción más limpia y eficiente.

                La selección y cualificación de proveedores ahora incluye criterios estrictos de sostenibilidad. «Hoy tienen muy en cuenta a la hora de cualificar proveedores tier 1 y tier 2 la estrategia de sostenibilidad«, indicó Ventero Peña, subrayando la importancia de integrar prácticas sostenibles en toda la cadena de suministro.',
                'img_path' => 'noticia5.jpg',
                'date' => now(),
                'created_at' => now(),
                'updated_at' => now(),
                'id_user' => 4,
            ],
        ]);
    }
}
