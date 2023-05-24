<?php

namespace Database\Seeders;

use App\Models\Group;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GroupsSeeder extends Seeder
{
    public function run(): void
    {
        Group::create([
           'letter' => 'a',
           'grade_id' => 1,
           'user_id' => 1,
        ]);

        Group::create([
            'letter' => 'b',
            'grade_id' => 1,
            'user_id' => 1,
        ]);

        Group::create([
            'letter' => 'c',
            'grade_id' => 1,
            'user_id' => 1,
        ]);
    }
}
