<?php

namespace Database\Seeders;

use App\Models\Topic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TopicsSeeder extends Seeder
{
    public function run(): void
    {
        Topic::create([
            'name' => 'circulo',
            'subject_id' => 1
        ]);

        Topic::create([
            'name' => 'triangulo',
            'subject_id' => 1
        ]);

        Topic::create([
            'name' => 'cuadrado',
            'subject_id' => 1
        ]);

        Topic::create([
            'name' => 'numero',
            'subject_id' => 2
        ]);

        Topic::create([
            'name' => 'variable',
            'subject_id' => 2
        ]);

        Topic::create([
            'name' => 'Sumar',
            'subject_id' => 3
        ]);

        Topic::create([
            'name' => 'Restar',
            'subject_id' => 3
        ]);

        Topic::create([
            'name' => 'Greetings and farewells',
            'subject_id' => 4
        ]);

        Topic::create([
            'name' => 'Family',
            'subject_id' => 4
        ]);

        Topic::create([
            'name' => 'Classroom',
            'subject_id' => 4
        ]);

        Topic::create([
            'name' => 'Alphabet',
            'subject_id' => 4
        ]);

        Topic::create([
            'name' => 'Colors',
            'subject_id' => 4
        ]);

        Topic::create([
            'name' => 'Toys',
            'subject_id' => 4
        ]);

        Topic::create([
            'name' => 'Observación y descripción',
            'subject_id' => 5
        ]);

        Topic::create([
            'name' => 'Lectura y escritura no convencional de diferentes textos',
            'subject_id' => 5
        ]);

        Topic::create([
            'name' => 'La comunicación y expresión oral (narración de experiencias)',
            'subject_id' => 5
        ]);

        Topic::create([
            'name' => 'Textos narrativos',
            'subject_id' => 5
        ]);

        Topic::create([
            'name' => 'Discusión',
            'subject_id' => 5
        ]);

        Topic::create([
            'name' => 'Pictogramas y jeroglificos',
            'subject_id' => 5
        ]);

        Topic::create([
            'name' => 'Nombres de objetos cotidianos',
            'subject_id' => 5
        ]);

        Topic::create([
            'name' => 'Descripción',
            'subject_id' => 5
        ]);

        Topic::create([
            'name' => 'Lectura y escritura de diferentes textos',
            'subject_id' => 5
        ]);

        Topic::create([
            'name' => 'Producción de textos',
            'subject_id' => 5
        ]);

        Topic::create([
            'name' => 'Narración',
            'subject_id' => 5
        ]);

        Topic::create([
            'name' => 'Obra de teatro, poesía, canciones',
            'subject_id' => 5
        ]);

    }
}
