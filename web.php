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

Route::get('/', function () {
    return view('home');
});

Auth::routes('');

//Home Management route
Route::resource('home', 'HomeController');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home', 'TutorController@tutorTable');

Route::get('/profil-tutor', 'TutorController@profil');
Route::resource('users', 'UserController');

//User/Edit Management Route
// Route::get('users/{user}/edit',  ['as' => 'users.edit', 'uses' => 'UserController@edit']);
Route::patch('users/{user}/update',  ['as' => 'users.update', 'uses' => 'UserController@update']);

//Ambil nilai departemen, mata kuliah
// Route::get('myfak', 'HomeController@myfak');
Route::get('id_matakuliah/get/{id}', 'HomeController@getMatkul');
Route::get('departemen/get/{id}', 'HomeController@getDept');

//Kelas Management Route
Route::resource('kelas', 'KelasController');
Route::get('kelas/{id}',  'KelasController@destroy');
Route::get('kelas/{id}/edit',  ['as' => 'kelas.edit', 'uses' => 'KelasController@edit']);
Route::patch('kelas/{id}/update',  ['as' => 'kelas.update', 'uses' => 'KelasController@update']);


/* WebController */
Route::get('/web-home', 'WebController@WebHome');
Route::get('/web-login', array('uses' => 'WebController@WebLogin', 'as' => 'pages.login'));

/* UserController */
Route::get('/user-home/{id}', 'UserController@UserHome');
Route::get('/profil-tutor/{id}', 'UserController@ProfilTutor');
Route::get('/cari-tutor',array('uses' => 'UserController@cariTutor', 'as' => 'pages.cari'));
Route::get('users/{user}/edit-profil',['as' => 'users.edit', 'uses' => 'UserController@edit']);
Route::get('/edit-pengalaman',['as' => 'users.edit-pengalaman', 'uses' => 'UserController@EditPengalaman']);
Route::get('/ubah-sandi',['as' => 'users.ubah-sandi', 'uses' => 'UserController@UbahSandi']);

/*KelasController */
Route::get('/edit-kelas',['as' => 'kelas.edit-kelas', 'uses' => 'UserController@EditKelas']);
Route::get('/blog', 'BlogController@index');
