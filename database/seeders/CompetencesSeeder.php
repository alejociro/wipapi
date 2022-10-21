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
            'description' => 'Competencia lingüística.',
            'subject_id' => 4,
        ]);

        Competence::create([
            'description' => 'Competencia pragmática.',
            'subject_id' => 4,
        ]);

        Competence::create([
            'description' => 'Competencia sociolingüística.',
            'subject_id' => 4,
        ]);

        Competence::create([
            'description' => 'Situación de aprendizaje: Getting to know me, my classroom, fruits, pets and toys.',
            'subject_id' => 4,
        ]);

        Competence::create([
            'description' => 'Gramatical o sintáctica',
            'subject_id' => 5,
        ]);

        Competence::create([
            'description' => 'Textual',
            'subject_id' => 5,
        ]);

        Competence::create([
            'description' => 'Semántica',
            'subject_id' => 5,
        ]);

        Competence::create([
            'description' => 'Pragmática o sociocultural',
            'subject_id' => 5,
        ]);

        Competence::create([
            'description' => 'Enciclopédia',
            'subject_id' => 5,
        ]);

        Competence::create([
            'description' => 'Poética y literaria',
            'subject_id' => 5,
        ]);
    }
}
