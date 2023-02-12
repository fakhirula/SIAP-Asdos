<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Administrator',
            'email' => 'admin@siap.com',
            'password' => Hash::make('admin'),
            'role_id' => '1'
        ]);

        User::create([
            'nim' => '0110221236',
            'name' => 'Fakhirul Akmal',
            'gender' => 'L',
            'email' => 'fakh21236ti@student.nurulfikri.ac.id',
            'password' => Hash::make('fakhirula'),
            'address' => 'Depok',
            'batch' => '2021',
            'role_id' => '2',
            'semester_id' => '4'
        ]);

        User::create([
            'nim' => '0221332347',
            'name' => 'Rul Haxor',
            'gender' => 'L',
            'email' => 'rulh32347si@student.nurulfikri.ac.id',
            'password' => Hash::make('rulhaxor'),
            'address' => 'Jakarta',
            'batch' => '2022',
            'rombel_id' => '5',
            'role_id' => '3',
            'semester_id' => '4'
        ]);

        User::create([
            'nim' => '0332443458',
            'name' => 'Zilong',
            'gender' => 'L',
            'email' => 'zilo443458ti@student.nurulfikri.ac.id',
            'password' => Hash::make('zilong'),
            'address' => 'Land of Dawn',
            'batch' => '2022',
            'rombel_id' => '1',
            'role_id' => '3',
            'semester_id' => '4'
        ]);
    }
}
