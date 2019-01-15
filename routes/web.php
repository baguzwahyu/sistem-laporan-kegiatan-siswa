<?php

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

Route::get('/', 'pembimbingController@index');
Route::get('/', 'siswaController@index');

Route::get('/master', function () {
    return view('layouts.master');
});

Route::get('/hello', function () {
    return view('bro');
});

Route::get('/smk', function () {
    echo "smk telkom du";
}); 

Route::get('/BIIS',function() {
    echo "terserah";
});
route::get('/siswa',function(){
    echo "siswa smk telkom";
});

Route::get('/pelajar',function() {
     echo "M. NUZULUL KIROMI";
 });
 Route::get('/sekolah',function(){
     echo "smk telkom DU";
 });
Route::get('/kelas', function () {
    echo"Classroom";
});
Route::get('/contact',function() {
    echo"person";
});
Route::resource('/guru','GuruController');
Route::resource('/perusahaan','PerusahaanController');
Route::resource('/siswa','SiswaController');
Route::resource('/pembimbing','PembimbingController');

