<?php

namespace Database\Seeders;

use App\Models\Fotoprod;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class FotoprodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        File::cleanDirectory(public_path('img/fotoprod'));
        File::copy(public_path('img/old/fotoprod/1.jpg'), public_path('img/fotoprod/1.jpg'));
        File::copy(public_path('img/old/fotoprod/2.jpg'), public_path('img/fotoprod/2.jpg'));

        Fotoprod::create([
            'product_id' => 1,
            'name' => '1.jpg',
        ]);

        Fotoprod::create([
            'product_id' => 1,
            'name' => '2.jpg',
        ]);
    }
}
