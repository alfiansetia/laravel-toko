<?php

namespace Database\Seeders;

use App\Models\Comp;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class CompSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        File::cleanDirectory(public_path('img/comp'));
        File::copy(public_path('img/old/comp/logo.png'), public_path('img/comp/logo.png'));
        File::copy(public_path('img/old/comp/favicon.ico'), public_path('img/comp/favicon.ico'));
        Comp::create([
            'name' => 'AGUNG LOSTER',
            'phone' => '082324129752',
            'address' => 'Sarip, Karangasem, Wirosari, Grobogan, Jawa Tengah',
            'email' => 'agung@loster.com',
            'wa' => '5475747',
            'fb' => 'fb.com/agungloster',
            'ig' => '@agungloster',
            'yt' => 'agungloster',
            'fav' => 'favicon.ico',
            'logo' => 'logo.png',
            'slogan' => 'Melayani pembelian segala jenis bata, genteng, paving dll',
        ]);
    }
}
