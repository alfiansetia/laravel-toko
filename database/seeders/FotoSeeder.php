<?php

namespace Database\Seeders;

use App\Models\Foto;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class FotoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        File::cleanDirectory(public_path('img/foto'));
        File::copy(public_path('img/old/foto/1.jpg'), public_path('img/foto/1.jpg'));
        File::copy(public_path('img/old/foto/2.jpg'), public_path('img/foto/2.jpg'));

        Foto::create([
            'album_id' => 1,
            'name' => '1.jpg',
            'desc' => 'Foto Waktu kirim ke Surabaya',
        ]);

        Foto::create([
            'album_id' => 2,
            'name' => '2.jpg',
            'desc' => 'Foto Waktu kirim ke Jakarta',
        ]);
    }
}
