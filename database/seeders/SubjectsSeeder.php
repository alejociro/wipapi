<?php

namespace Database\Seeders;

use App\Models\Subject;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubjectsSeeder extends Seeder
{
    public function run(): void
    {
        Subject::create([
            'name' => 'geometria',
            'area_id' => 4,
        ]);

        Subject::create([
            'name' => 'trigonometria',
            'area_id' => 4,
        ]);

        Subject::create([
            'name' => 'Numeros',
            'area_id' => 4,
        ]);

        Subject::create([
            'name' => 'lengua extranjera',
            'area_id' => 1,
        ]);

        Subject::create([
            'name' => 'Lengua castellana',
            'area_id' => 1,
        ]);

        Subject::create([
            'name' => 'Etica',
            'area_id' => 3,
        ]);
    }
}
