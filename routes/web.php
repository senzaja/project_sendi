<?php

use App\Models\Penggunas;
use App\Models\telepons;
use App\Models\post;
use App\Models\produk;
use Illuminate\Support\Facades\Route;
use Spatie\FlareClient\View;

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
    $nama = "sendi";
    $jenis_kelamin ="laki-laki";
    $alamat="sukamenak gg sudirja";
    $pendidikan = "SMK";
    $pekerjaan = "OP";
    return view('biodata',compact('nama','jenis_kelamin','alamat','pendidikan','pekerjaan'));
});

Route::get('/home', function () {
    return view('biodata1');
});

Route::get('/kontak', function () {
    return view('biodata2');
});

//parameter//
Route::get('/about2/{nama}/{jk}/{alamat}/{pendidikan}/{pekerjaan}', function (Request $request, $nama, $jk, $alamat, $pendidikan, $pekerjaan) {
    $nama2 = $nama;
    $jk2 =  $jk;
    $alamat2 = $alamat;
    $pendidikan2 = $pendidikan;
    $pekerjaan2 = $pekerjaan;
    return view('param', compact('nama2','jk2','alamat2','pendidikan2','pekerjaan2'));
});
//menampilkan tabel
// Route::get('/tampil_post', function () {
//     //menampilkan semua data
//     $posts = post::all();
//     return  view('tampil_post', compact('posts'));
// });

// //menampilkan JSON
Route::get('/data_post', function () {
    //menampilkan semua data
    $posts = post::find(2);
    return $posts;
});
// Route::get('/data_produk', function () {
//     //menampilkan semua data
//     $produks = produk::all();
//     return  $produks;
// });
Route::get('/tampil_produk', function () {
    //menampilkan semua data
    $produks = produk::all();
    return  view('tampil_produk', compact('produks'));
});
// Route::get('/data_pengguna', function () {
//     //menampilkan semua data
//     $penggunas = penggunas::all();
//     return  $penggunas;
// });
Route::get('/tampil_pengguna', function () {
    //menampilkan semua data
    $penggunas = Penggunas::all();
    return  view('tampil_pengguna', compact('penggunas'));
});
// Route::get('/data_telepons', function () {
//     //menampilkan semua data
//     $telepons = telepons::all();
//     return  $telepons;
// });
Route::get('/tampil_telepons', function () {
    //menampilkan semua data
    $telepons = telepons::all();
    return  view('tampil_telepon', compact('telepons'));
});
