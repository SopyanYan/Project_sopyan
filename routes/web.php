<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {

    $nama = "Farel";
    $jenis_kelamin = "laki-laki";
    $pendidikan_terakhir = "SMA";
    $pekerjaan = "Siswa";
    $alamat = "Baleendah";


    return view('data_diri', compact('nama','jenis_kelamin','pendidikan_terakhir','pekerjaan','alamat'));
});

Route::get('/hala', function () {

    $nama = "Antony";
    $jenis_kelamin = "laki-laki";
    $club_sekarang = "Emyu";
    $julukan = "El gasing";
    $hobi = "Muter Muter Gajelas wakk";

    return view('data_GOAT', compact('nama','jenis_kelamin','club_sekarang','julukan','hobi'));
});


Route:: get('/about2/{nama2}/{jk}/{pt}/{pep}/{al}', function (Request $request, $nama, $jk, $pt, $pep, $al) {
    $nama2 = $nama;
    $jk2 = $jk;
    $pt2 = $pt;
    $pep2 = $pep;
    $al2 = $al;

    return view('biodata2',compact('nama2','jk2', 'pt2', 'pep2', 'al2'));
});




