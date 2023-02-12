<?php

namespace Database\Seeders;

use App\Models\Rombel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RombelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Rombel::create([
            'code' => 'TI04',
            'major_id' => '1',
            'asdos_id' => '2',
        ]);

        Rombel::create([
            'code' => 'TI12',
            'major_id' => '1',
            'asdos_id' => '2',
        ]);

        Rombel::create([
            'code' => 'SI01',
            'major_id' => '2',
            'asdos_id' => '2',
        ]);

        Rombel::create([
            'code' => 'SI03',
            'major_id' => '2',
            'asdos_id' => '2',
        ]);

        Rombel::create([
            'code' => 'SI10',
            'major_id' => '2',
            'asdos_id' => '2',
        ]);
    }
}
