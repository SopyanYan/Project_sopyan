<?php

namespace Database\Seeders;

use App\Models\Siswa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Siswa::insert([
            'nama' => "Sopyan Muhardan",
            'jenis_kelamin' => 0,
            'umur' => 17,
            'alamat' => "Baleendah"
        ]);
        Siswa::insert([
            'nama' => "Ahmad",
            'jenis_kelamin' => 0,
            'umur' => 17,
            'alamat' => "sekeawi"
        ]);
        Siswa::insert([
            'nama' => "Ape",
            'jenis_kelamin' => 0,
            'umur' => 23,
            'alamat' => "TCI"
        ]);
        Siswa::insert([
            'nama' => "Dapa",
            'jenis_kelamin' => 0,
            'umur' => 17,
            'alamat' => "TCI"
        ]);
        Siswa::insert([
            'nama' => "Ryan",
            'jenis_kelamin' => 0,
            'umur' => 17,
            'alamat' => "Pasar"
        ]);
        Siswa::insert([
            'nama' => "Rehan",
            'jenis_kelamin' => 1,
            'umur' => 17,
            'alamat' => "TCI"
        ]);
        Siswa::insert([
            'nama' => "Pikritiw",
            'jenis_kelamin' => 1,
            'umur' => 17,
            'alamat' => "Kopo"
        ]);
        Siswa::insert([
            'nama' => "Ayew",
            'jenis_kelamin' => 0,
            'umur' => 17,
            'alamat' => "Sayuran"
        ]);
        Siswa::insert([
            'nama' => "Nadif",
            'jenis_kelamin' => 0,
            'umur' => 17,
            'alamat' => "Sekeawi"
        ]);
        Siswa::insert([
            'nama' => "Mariadi",
            'jenis_kelamin' => 1,
            'umur' => 17,
            'alamat' => "Kopo"
        ]);
    }
}
