<?php

namespace Database\Seeders;

use App\Models\Semester;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SemesterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Semester::create([
            'academic_year' => '2021/2022',
            'desc' => 'Ganjil',
        ]);

        Semester::create([
            'academic_year' => '2021/2022',
            'desc' => 'Genap',
        ]);

        Semester::create([
            'academic_year' => '2022/2023',
            'desc' => 'Ganjil',
        ]);

        Semester::create([
            'academic_year' => '2022/2023',
            'desc' => 'Genap',
        ]);
    }
}
