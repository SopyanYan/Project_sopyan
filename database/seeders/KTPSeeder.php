<?php

namespace Database\Seeders;

use App\Models\KTP;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KTPSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        KTP::insert([
            'warga_id' => 1,
            'nik' => 1111,
        ]);
        KTP::insert([
            'warga_id' => 2,
            'nik' => 2222,
        ]);
        KTP::insert([
            'warga_id' => 3,
            'nik' => 3333,
        ]);
        KTP::insert([
            'warga_id' => 4,
            'nik' => 4444,
        ]);
        KTP::insert([
            'warga_id' => 5,
            'nik' => 5555,
        ]);
    }
}
