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

Route::get('/pembimbing/cari', 'pembimbingController@cari');

Route::get('/guru/cari','guruController@cari');


Route::get('/perusahaan',function(){
$perusahaan=\App\perusahaan::where('nama','like','%' . request('query').'%')->get();
return view('/perusahaan/search')->with('perusahaan',$perusahaan)
                                 ->with('nama','search results :' . request('query'))
                                 ->with('query',request('query'));
});

Route::get('/results',function(){
$siswa = \App\Siswa::where('nama','like','%' . request('query').'%')->get();
return view('/siswa/search')->with('siswa',$siswa)
                      ->with('nama','search results :' . request('query'))
                      ->with('query',request('query'));
                    
});

Route::get('/login', function () {
    return view('login.login');
});
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

