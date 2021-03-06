<?php

namespace Database\Seeders;

use App\Models\Catprod;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class CatProdSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        File::cleanDirectory(public_path('img/catprod'));
        File::copy(public_path('img/old/catprod/1.jpg'), public_path('img/catprod/1.jpg'));
        File::copy(public_path('img/old/catprod/2.jpg'), public_path('img/catprod/2.jpg'));
        File::copy(public_path('img/old/catprod/3.jpg'), public_path('img/catprod/3.jpg'));
        File::copy(public_path('img/old/catprod/4.jpg'), public_path('img/catprod/4.jpg'));

        Catprod::create([
            'name' => 'Loster',
            'desc' => 'Loster Terbaik',
            'img'  => '1.jpg',
            'show' => 1
        ]);

        Catprod::create([
            'name' => 'Batako',
            'desc' => 'Batako Terbaik',
            'img'  => '2.jpg',
            'show' => 1
        ]);

        Catprod::create([
            'name' => 'Genteng',
            'desc' => 'Genteng Terbaik',
            'img'  => '3.jpg',
            'show' => 1
        ]);

        Catprod::create([
            'name' => 'Bata Tempel',
            'desc' => 'Bata Tempel Terbaik',
            'img'  => '4.jpg',
            'show' => 1
        ]);
    }
}
