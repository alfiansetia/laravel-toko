<?php

namespace Database\Seeders;

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
        // \App\Models\User::factory(10)->create();
        $this->call([
            CompSeeder::class,
            UserSeeder::class,
            CatProdSeeder::class,
            ProductSeeder::class,
            AlbumSeeder::class,
            FotoSeeder::class
        ]);
    }
}
