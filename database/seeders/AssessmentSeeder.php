<?php

namespace Database\Seeders;

use App\Models\Assessment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AssessmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Assessment::create([
            'semester_id' => '3',
            'user_id' => '3',
            'course_id' => '1',
            'assmt_1' => '100',
            'assmt_2' => '100',
            'assmt_3' => '100',
            'assmt_4' => '100',
            'assmt_5' => '100',
            'assmt_6' => '100',
            'assmt_7' => '95',
            'assmt_uts' => '95',
            'assmt_8' => '80',
            'assmt_9' => '80',
            'assmt_10' => '100',
            'assmt_11' => '100',
            'assmt_12' => '90',
            'assmt_13' => '95',
            'assmt_14' => '95',
            'assmt_uas' => '90',
            'assmt_final' => '95',
        ]);

        Assessment::create([
            'semester_id' => '3',
            'user_id' => '4',
            'course_id' => '1',
            'assmt_1' => '90',
            'assmt_2' => '90',
            'assmt_3' => '90',
            'assmt_4' => '90',
            'assmt_5' => '90',
            'assmt_6' => '90',
            'assmt_7' => '100',
            'assmt_uts' => '100',
            'assmt_8' => '85',
            'assmt_9' => '85',
            'assmt_10' => '100',
            'assmt_11' => '100',
            'assmt_12' => '90',
            'assmt_13' => '100',
            'assmt_14' => '100',
            'assmt_uas' => '90',
            'assmt_final' => '80',
        ]);
    }
}
