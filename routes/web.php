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
    return view('webhome');
});

Auth::routes('');

//Home Management route
Route::resource('home', 'HomeController');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home', 'TutorController@tutorTable');



//User/Edit Management Route
Route::resource('users', 'UserController');
Route::get('users/{user}/edit',  ['as' => 'users.edit', 'uses' => 'UserController@edit']);
Route::patch('users/{user}/update',  ['as' => 'users.update', 'uses' => 'UserController@update']);

//Ambil nilai departemen, mata kuliah
// Route::get('myfak', 'HomeController@myfak');
Route::get('id_matakuliah/get/{id}', 'HomeController@getMatkul');
Route::get('departemen/get/{id}', 'HomeController@getDept');

// Route::post('kelas/fetch', 'KelasController@fetch')->name('kelas.fetch');

//picture upload
Route::resource('picture', 'PictureController');
Route::patch('picture/{user}/update',  ['as' => 'picture.update', 'uses' => 'PictureController@update']);

//Kelas Management Route
Route::resource('kelas', 'KelasController');
Route::get('kelas/{id}',  'KelasController@destroy');
Route::get('kelas/{id}/edit',  ['as' => 'kelas.edit', 'uses' => 'KelasController@edit']);
Route::patch('kelas/{id}/update',  ['as' => 'kelas.update', 'uses' => 'KelasController@update']);

//Login SIgnup Route
Route::get('/web-login', array('uses' => 'WebhomeController@WebLogin', 'as' => 'pages.login'));
Route::get('/web-signup', array('uses' => 'WebhomeController@WebSignup', 'as' => 'pages.signup'));
Route ::get('/logout', function(){
Auth::logout();
  return redirect('/');

});

//userhome Route dan search
Route::get('/userhome','UserHomeController@UserHome')->name('userhome');


//Change password
Route::get('/changePassword', array('uses' => 'HomeController@showChangePasswordForm','as' =>'change.password'));
Route::post('/changePassword','HomeController@changePassword')->name('changePassword');
