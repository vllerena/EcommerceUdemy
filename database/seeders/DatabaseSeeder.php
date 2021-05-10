<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        Storage::deleteDirectory('products');
        Storage::makeDirectory('products');

        $this->call([
            UserSeeder::class,
            CategorySeeder::class,
        ]);
    }
}
