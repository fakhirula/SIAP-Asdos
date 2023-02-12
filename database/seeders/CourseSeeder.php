<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Course::create([
            'name' => 'Pemrograman Web 1',
            'sks' => '3',
            'semester_id' => '1',
            'dosen_id' => '1'
        ]);

        Course::create([
            'name' => 'Dasar dasar Pemrograman',
            'sks' => '3',
            'semester_id' => '1',
            'dosen_id' => '2'
        ]);
    }
}
