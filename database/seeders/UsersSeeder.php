<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Pilar',
            'email' => 'pilar@gmail.com',
            'password' => '$2y$10$4.aepK/TULOQI2sbsywX0OLK4WF4/MPdQ9U4qyr3XMDaRcmYEy5Uq',
        ]);
    }
}
