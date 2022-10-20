<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(GradesSeeder::class);
        $this->call(UsersSeeder::class);
        $this->call(GroupsSeeder::class);
        $this->call(AreasSeeder::class);
        $this->call(SubjectsSeeder::class);
        $this->call(TopicsSeeder::class);
        $this->call(IndicatorsSeeder::class);
        $this->call(CompetencesSeeder::class);
    }
}
