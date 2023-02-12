<?php

namespace Database\Seeders;

use App\Models\Major;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MajorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Major::create([
            'code' => 'TI',
            'name' => 'Teknik Informatika',
            'kaprodi' => 'Tiffany Nabarian'
        ]);

        Major::create([
            'code' => 'SI',
            'name' => 'Sistem Informasi',
            'kaprodi' => 'Misna Asqia'
        ]);

        Major::create([
            'code' => 'BD',
            'name' => 'Bisnis Digital',
            'kaprodi' => 'Amalia Rahmah'
        ]);
    }
}
