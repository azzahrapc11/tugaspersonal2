<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name' => 'Admin',
            'id_karyawan' => '00000',
            'nohp' => '08277162',
            'alamat' => 'Jakarta',
            'email' => 'adminproject@mail.com',
            'password' => bcrypt('12345678'),
        ]);

        $admin->assignRole('admin');

        $user = User::create([
            'name' => 'Karyawan',
            'id_karyawan' => '11261',
            'nohp' => '08282810',
            'alamat' => 'Tangerang',
            'email' => 'karyawan@mail.com',
            'password' => bcrypt('12345678'),
        ]);

        $user->assignRole('user');
    }
}
