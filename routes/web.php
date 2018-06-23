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

//User Management Route
Route::resource('users', 'UserController');
// Route::get('users/{user}',  ['as' => 'users.index', 'uses' => 'UserController@index']);
Route::get('users/{user}/edit',  ['as' => 'users.edit', 'uses' => 'UserController@edit']);

//Route::get('users/{user}',  'UserController@myfak');
// Route::get('departemen/get/{id}', 'UserController@getDept');

//Route::patch('users/{user}/update',  ['as' => 'users.update', 'uses' => 'UserController@update']);

Route::get('/home', 'HomeController@index')->name('home');

//Ambil nilai fakultas, departemen, mata kuliah
Route::get('myfak', 'HomeController@myfak');
Route::get('id_matakuliah/get/{id}', 'HomeController@getMatkul');
Route::get('departemen/get/{id}', 'HomeController@getDept');
//Kelas Management Route
// Route::get('edit', function () {
//Route::get(e/{id}/delete', ['uses' =>KelasmeController@destroy', 'as' =>kelasme.delete']);

//     $kelas = DB::table('kelas')->get();
//
//     return view('users.edit', ['kelas' => $kelas]);
// });
// Route::resource('users', 'KelasController');
Route::get('users/{user}/kelas',  ['as' => 'users.kelas', 'uses' => 'KelasController@tabel']);
// Route::get('users/{user}/kelas/{id}',  'KelasController@destroy');
// Route::get('users/{user}',  ['as' => 'users.edit', 'uses' => 'KelasController@edit']);
// Route::get('users/{user}',  ['as' => 'users.edit', 'uses' => 'UserController@edit']);
