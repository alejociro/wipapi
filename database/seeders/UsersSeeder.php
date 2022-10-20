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
            'password' => 'pilar123'
        ]);

        User::create([
            'name' => 'Claudia',
            'email' => 'claudia@gmail.com',
            'password' => 'claudia123'
        ]);

        User::create([
            'name' => 'Jorge',
            'email' => 'jorge@gmail.com',
            'password' => 'jorge123'
        ]);
    }
}
