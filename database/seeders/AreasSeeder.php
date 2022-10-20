<?php

namespace Database\Seeders;

use App\Models\Area;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AreasSeeder extends Seeder
{
    public function run(): void
    {
        Area::create([
            'name' => 'Leer, Escribir y Crear',
            'grade_id' => 1,
            'image' => 'https://img.freepik.com/vector-premium/nino-leyendo-estudiando-ilustracion-estilo-dibujos-animados-contorno-mesa-aula_7102-523.jpg?w=2000'
        ]);

        Area::create([
            'name' => 'Vida, Naturaleza e Innovación',
            'grade_id' => 1,
            'image' => 'https://img.freepik.com/vector-premium/nino-nina-explorando-naturaleza_1639-4050.jpg?w=1480'
        ]);

        Area::create([
            'name' => 'Cultura para la paz',
            'grade_id' => 1,
            'image' => 'https://img.freepik.com/vector-gratis/fondo-dia-paz-ninos-diseno-plano_23-2148255510.jpg?w=1800&t=st=1666231325~exp=1666231925~hmac=1436091cf861175938c2bb28d592d4b3d9445d279edb59ad19c315243a91032c'
        ]);

        Area::create([
            'name' => 'Pensamiento matemático',
            'grade_id' => 1,
            'image' => 'https://img.freepik.com/vector-gratis/ninos-que-cuentan-numeros-cuatro_1308-3061.jpg?w=1480&t=st=1666231364~exp=1666231964~hmac=7f4463750bfec61e9ad7d660fc0476b5be92db6155932178922aa7fe18b9ec04'
        ]);

        Area::create([
            'name' => 'Sentir y Pensar',
            'grade_id' => 1,
            'image' => 'https://img.freepik.com/foto-gratis/icono-signo-interrogacion-pensando-solucion_53876-123009.jpg?w=1800&t=st=1666231390~exp=1666231990~hmac=41c411f41142ac6ddfda09ea55c9f008dda0a588cb83232276af7d999980c2b9'
        ]);
    }
}
