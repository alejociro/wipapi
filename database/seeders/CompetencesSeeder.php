<?php

namespace Database\Seeders;

use App\Models\Competence;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompetencesSeeder extends Seeder
{
    public function run(): void
    {
        Competence::create([
           'description' => 'El sabe hacer la tarea de manera correcta juntos a sus compañeros',
            'subject_id' => 1,
        ]);

        Competence::create([
            'description' => 'El estudiante comparte de manera correcta la socialización a sus compañeros',
            'subject_id' => 1,
        ]);

        Competence::create([
            'description' => 'El sabe hacer la tarea de manera correcta juntos a sus compañeros',
            'subject_id' => 2,
        ]);

        Competence::create([
            'description' => 'El estudiante comparte de manera correcta la socialización a sus compañeros',
            'subject_id' => 2,
        ]);

        Competence::create([
            'description' => 'El sabe hacer la tarea de manera correcta juntos a sus compañeros',
            'subject_id' => 3,
        ]);

        Competence::create([
            'description' => 'El estudiante comparte de manera correcta la socialización a sus compañeros',
            'subject_id' => 3,
        ]);

        Competence::create([
            'description' => 'El sabe hacer la tarea de manera correcta juntos a sus compañeros',
            'subject_id' => 4,
        ]);

        Competence::create([
            'description' => 'El estudiante comparte de manera correcta la socialización a sus compañeros',
            'subject_id' => 4,
        ]);

        Competence::create([
            'description' => 'El sabe hacer la tarea de manera correcta juntos a sus compañeros',
            'subject_id' => 5,
        ]);

        Competence::create([
            'description' => 'El estudiante comparte de manera correcta la socialización a sus compañeros',
            'subject_id' => 5,
        ]);
    }
}
