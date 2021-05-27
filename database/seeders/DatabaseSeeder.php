<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        Storage::deleteDirectory('categories');
        Storage::deleteDirectory('subcategories');
        Storage::makeDirectory('categories');
        Storage::makeDirectory('subcategories');

        $this->call([
            UserSeeder::class,
            CategorySeeder::class,
            SubcategorySeeder::class,
            ProductSeeder::class,
        ]);
    }
}
