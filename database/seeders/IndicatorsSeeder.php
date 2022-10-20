<?php

namespace Database\Seeders;

use App\Models\Indicator;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class IndicatorsSeeder extends Seeder
{
    public function run(): void
    {
        Indicator::create([
            'type' => 'Saber conocer',
            'description' => 'El estudiante es capaz de tratar con sus compañeros de manera correcta',
            'subject_id' => 1,
        ]);

        Indicator::create([
            'type' => 'Saber ser',
            'description' => 'El estudiante es capaz de tratar con sus compañeros de manera correcta',
            'subject_id' => 1,
        ]);

        Indicator::create([
            'type' => 'Saber hacer',
            'description' => 'El estudiante es capaz de tratar con sus compañeros de manera correcta',
            'subject_id' => 1,
        ]);

        Indicator::create([
            'type' => 'Saber ser',
            'description' => 'El sabe hacer la tarea de manera correcta juntos a sus compañeros',
            'subject_id' => 2,
        ]);

        Indicator::create([
            'type' => 'Saber conocer',
            'description' => 'El sabe hacer la tarea de manera correcta juntos a sus compañeros',
            'subject_id' => 2,
        ]);

        Indicator::create([
            'type' => 'Saber conocer',
            'description' => 'El sabe hacer la tarea de manera correcta juntos a sus compañeros',
            'subject_id' => 2,
        ]);

        Indicator::create([
            'type' => 'Saber ser',
            'description' => 'El sabe hacer la tarea de manera correcta juntos a sus compañeros',
            'subject_id' => 3,
        ]);

        Indicator::create([
            'type' => 'Saber conocer',
            'description' => 'El sabe hacer la tarea de manera correcta juntos a sus compañeros',
            'subject_id' => 3,
        ]);

        Indicator::create([
            'type' => 'Saber conocer',
            'description' => 'El sabe hacer la tarea de manera correcta juntos a sus compañeros',
            'subject_id' => 3,
        ]);

        Indicator::create([
            'type' => 'Saber ser',
            'description' => 'El sabe hacer la tarea de manera correcta juntos a sus compañeros',
            'subject_id' => 4,
        ]);

        Indicator::create([
            'type' => 'Saber conocer',
            'description' => 'El sabe hacer la tarea de manera correcta juntos a sus compañeros',
            'subject_id' => 4,
        ]);

        Indicator::create([
            'type' => 'Saber conocer',
            'description' => 'El sabe hacer la tarea de manera correcta juntos a sus compañeros',
            'subject_id' => 4,
        ]);

        Indicator::create([
            'type' => 'Saber ser',
            'description' => 'El sabe hacer la tarea de manera correcta juntos a sus compañeros',
            'subject_id' => 5,
        ]);

        Indicator::create([
            'type' => 'Saber conocer',
            'description' => 'El sabe hacer la tarea de manera correcta juntos a sus compañeros',
            'subject_id' => 5,
        ]);

        Indicator::create([
            'type' => 'Saber conocer',
            'description' => 'El sabe hacer la tarea de manera correcta juntos a sus compañeros',
            'subject_id' => 5,
        ]);

    }
}
