<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        File::cleanDirectory(public_path('img/product'));
        File::copy(public_path('img/old/product/1.jpg'), public_path('img/product/1.jpg'));
        File::copy(public_path('img/old/product/2.jpg'), public_path('img/product/2.jpg'));

        Product::create([
            'catprod_id' => 1,
            'name' => 'Batik 1',
            'price' => '1000',
            'desc' => 'Loster Batik No 1 di indonesia',
            'img' => '1.jpg',
            'show' => 1,
            'is_fav' => 1,
        ]);

        Product::create([
            'catprod_id' => 1,
            'name' => 'Batik 2',
            'price' => '900',
            'desc' => 'Loster Batik 2 Terbaik di indonesia',
            'img' => '2.jpg',
            'show' => 1,
            'is_fav' => 1,
        ]);
    }
}
