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
            'name' => 'Matematicas',
            'grade_id' => 1
        ]);

        Area::create([
            'name' => 'Escribir leer y pensar',
            'grade_id' => 1
        ]);

        Area::create([
            'name' => 'Humanidades',
            'grade_id' => 1
        ]);
    }
}
