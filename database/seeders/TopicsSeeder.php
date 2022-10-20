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
            'name' => 'Leer',
            'subject_id' => 4
        ]);

        Topic::create([
            'name' => 'Cantar',
            'subject_id' => 4
        ]);

        Topic::create([
            'name' => 'Valores',
            'subject_id' => 5
        ]);
    }
}
