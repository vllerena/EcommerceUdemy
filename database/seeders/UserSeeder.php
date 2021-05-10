<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'Victor Llerena Caballero',
            'email' => 'victor@gmail.com',
            'password' => bcrypt('victor123'),
        ]);
    }
}
