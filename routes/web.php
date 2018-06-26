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
    return view('welcome');
});

Auth::routes('');
Route::get('/home', 'HomeController@index')->name('home');

//User Management Route
Route::resource('users', 'UserController');
Route::get('users/{user}/edit',  ['as' => 'users.edit', 'uses' => 'UserController@edit']);
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
