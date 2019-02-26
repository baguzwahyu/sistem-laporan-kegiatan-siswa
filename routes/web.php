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

Route::get('/root', function(){
$pembimbing=\App\Pembimbing::where('nama','like','%'.request('queri').'%')->get();
return view('/pembimbing/search')->with('pembimbing',$pembimbing)
                                 ->with('nama','search result :' . request('queri'))
                                 ->with('queri',request('queri'));

});

Route::get('/rest',function(){
$guru=\App\Guru::where('nama','like','%'.request('qr').'%')->get();
return view('/guru/search')->with('guru',$guru)
                           ->with('nama','search result :' . request('qr'))
                           ->with('qr',request('qr'));
});


Route::get('/result',function(){
$perusahaan=\App\perusahaan::where('nama','like','%' . request('querys').'%')->get();
return view('/perusahaan/search')->with('perusahaan',$perusahaan)
                                 ->with('nama','search result :' . request('querys'))
                                 ->with('querys',request('querys'));
});

Route::get('/results',function(){
$siswa = \App\Siswa::where('nama','like','%' . request('query').'%')->get();
return view('/siswa/search')->with('siswa',$siswa)
                      ->with('nama','search results :' . request('query'))
                      ->with('query',request('query'));
                    
});


// Route::get('/ss', function (){
//     return view('dashboard.dashboard');
// });

// Route::get('/dashboard',[
//         'uses' => 'HomeController@dashboard',
//         'as' => 'dashboard'
//     ]);

// Route::get('/login', function () {
//     return view('login.login');
// });

Route::get('/master', function () {
    return view('layouts.master');
});


Route::group(['prefix' => 'admin','middleware'=>'auth'],function(){
    
    Route::get('/homeAll',function(){
        return view('dashboard.siswas.dashboard');
    });

    Route::resource('/guru','GuruController');
    Route::resource('/perusahaan','PerusahaanController');
    Route::resource('/siswa','SiswaController');
    Route::resource('/pembimbing','PembimbingController');
    Route::resource('/kegiatan','KegiatanController');

    route::get('/kegiatan/admin/{id}',[
        'uses'  => 'KegiatanController@admin',
        'as'    =>  'kegiatan.admin'
    ]);
    route::get('/kegiatan/not_admin/{id}',[
        'uses'  => 'KegiatanController@not_admin',
        'as'    =>  'kegiatan.not.admin'
    ]);
    route::get('/user/edit_user/{id}',[
        'uses'  => 'KegiatanController@edit_user',
        'as'    =>  'edit_user'
    ]);
    route::post('/user/update/{id}',[
        'uses'  => 'KegiatanController@update_user',
        'as'    =>  'user.update'
    ]);

    // route::post('/user/store/{id}',[
    //     'uses'  => 'KegiatanController@store_user',
    //     'as'    =>  'user.store'
    // ]);
    route::get('/index_pembimbing','KegiatanController@index_pembimbing');

    route::get('/profile','HomeController@profile_user');
    
   
    
});

Route::get('/', function () {
    return view('auth.login');
});
// Auth::routes();

// Route::get('/dashboard', 'HomeController@index')->name('dashboard');

// Route::get('/showKegiatan','index@KegiatanController')->name('kegiatan.index');

// Route::get('/showKegiatan',[
//     'uses' => 'KegiatanController@index',
//     'as' => 'kegiatan.create'
// ]);
Auth::routes();



    Route::get('/home', 'HomeController@index')->name('home');
       
