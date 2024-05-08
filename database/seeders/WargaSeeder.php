<?php

namespace Database\Seeders;

use App\Models\Warga;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WargaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        warga::insert([
            'nama' => 'Sopyan',
            'jenis_kelamin' => 0,
            'alamat' => 'Baleendah',
        ]);
        warga::insert([
            'nama' => 'Rehan',
            'jenis_kelamin' => 0,
            'alamat' => 'TCI',
        ]);
        warga::insert([
            'nama' => 'Nadif',
            'jenis_kelamin' => 0,
            'alamat' => 'Sekeawi',
        ]);
        warga::insert([
            'nama' => 'Dapag',
            'jenis_kelamin' => 0,
            'alamat' => 'TCI',
        ]);
        warga::insert([
            'nama' => 'Ryan',
            'jenis_kelamin' => 0,
            'alamat' => 'Pasar',
        ]);
    }
}
