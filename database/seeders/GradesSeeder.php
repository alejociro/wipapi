<?php

namespace Database\Seeders;

use App\Models\Grade;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GradesSeeder extends Seeder
{
    public function run()
    {
        Grade::create([
            'name' => 'primero'
        ]);
        Grade::create([
            'name' => 'segundo'
        ]);
        Grade::create([
            'name' => 'tercero'
        ]);
        Grade::create([
            'name' => 'cuarto'
        ]);
    }
}
