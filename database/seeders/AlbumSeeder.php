<?php

namespace Database\Seeders;

use App\Models\Album;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class AlbumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        File::cleanDirectory(public_path('img/album'));
        File::copy(public_path('img/old/album/1.jpg'), public_path('img/album/1.jpg'));
        File::copy(public_path('img/old/album/2.jpg'), public_path('img/album/2.jpg'));
        Album::create([
            'name' => 'Surabaya',
            'desc' => 'Antar Pesanan ke toko Surabaya',
            'img'  => '1.jpg',
            'show' => 1
        ]);

        Album::create([
            'name' => 'Jakarta',
            'desc' => 'Antar Pesanan ke toko Jakarta',
            'img'  => '2.jpg',
            'show' => 1
        ]);
    }
}
