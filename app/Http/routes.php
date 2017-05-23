<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/', function () {
    return view('welcome');
});
Route::get('login', function () {
    return view('login');
});
Route::get('master_2', function () {
    return view('master_2');
});

Route::get('/login2','SesiController@form');
Route::post('/login2','SesiController@validasi');
Route::get('/logout1','SesiController@logout');

// Route::get('/login2','SesiController@form');
// Route::post('/login2','SesiController@validasi');
// Route::get('/logout1','SesiController@logout');

// Route::get('kios', function () {
//     return view('master_2');
// });

Route::get('akta','AktaController@awal');
Route::get('akta/tambah','AktaController@tambah');
Route::get('akta/{akta}','AktaController@lihat');
Route::post('akta/simpan','AktaController@simpan');
Route::get('akta/edit/{akta}','AktaController@edit');
Route::post('akta/edit/{akta}','AktaController@update');
Route::get('akta/hapus/{akta}','AktaController@hapus');


Route::get('anggota','AnggotaController@awal');
Route::get('anggota/tambah','AnggotaController@tambah');
Route::get('anggota/{anggota}','AnggotaController@lihat');
Route::post('anggota/simpan','AnggotaController@simpan');
Route::get('anggota/edit/{anggota}','AnggotaController@edit');
Route::post('anggota/edit/{akta}','AnggotaController@update');
Route::get('anggota/hapus/{akta}','AnggotaController@hapus');


Route::get('kartu_keluarga','Kartu_keluargaController@awal');
Route::get('kartu_keluarga/tambah','Kartu_keluargaController@tambah');
Route::get('kartu_keluarga/{kartu_keluarga}','Kartu_keluargaController@lihat');
Route::post('kartu_keluarga/simpan','Kartu_keluargaController@simpan');
Route::get('kartu_keluarga/edit/{kartu_keluarga}','Kartu_keluargaController@edit');
Route::post('kartu_keluarga/edit/{kartu_keluarga}','Kartu_keluargaController@update');
Route::get('kartu_keluarga/hapus/{akta}','Kartu_keluargaController@hapus');





Route::get('kelahiran_pend','Kelahiran_pendController@awal');
Route::get('kelahiran_pend/tambah','Kelahiran_pendController@tambah');


Route::get('kematian','KematianController@awal');
Route::get('kematian/tambah','KematianController@tambah');
Route::get('kematian/{kematian}','KematianController@lihat');
Route::post('kematian/simpan','KematianController@simpan');
Route::get('kematian/edit/{kematian}','KematianController@edit');
Route::post('kematian/edit/{kematian}','KematianController@update');
Route::get('kematian/hapus/{kematian}','KematianController@hapus');


Route::get('kelahiran','KelahiranController@awal');
Route::get('kelahiran/tambah','KelahiranController@tambah');
Route::get('kelahiran/{kelahiran}','KelahiranController@lihat');
Route::post('kelahiran/simpan','KelahiranController@simpan');
Route::get('kelahiran/edit/{kelahiran}','KelahiranController@edit');
Route::post('kelahiran/edit/{kelahiran}','KelahiranController@update');
Route::get('kelahiran/hapus/{kelahiran}','KelahiranController@hapus');


Route::get('penduduk','PendudukController@awal');
Route::get('penduduk/tambah','PendudukController@tambah');
Route::get('penduduk/{penduduk}','PendudukController@lihat');
Route::post('penduduk/simpan','PendudukController@simpan');
Route::get('penduduk/edit/{penduduk}','PendudukController@edit');
Route::post('penduduk/edit/{penduduk}','PendudukController@update');
Route::get('penduduk/hapus/{penduduk}','PendudukController@hapus');

Route::get('pindah','PindahController@awal');
Route::get('pindah/tambah','PindahController@tambah');
Route::get('pindah/{pindah}','PindahController@lihat');
Route::post('pindah/simpan','PindahController@simpan');
Route::get('pindah/edit/{pindah}','PindahController@edit');
Route::post('pindah/edit/{pindah}','PindahController@update');
Route::get('pindah/hapus/{pindah}','PindahController@hapus');








// Route::get('admin_yard', function () {
//     return view('backyard/masteryard');
// });

// Route::get('admin_2', function () {
//     return view('master_2');
// });