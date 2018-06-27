<?php
use App\User;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

Route::get('/', function(){
    return view('webhome');
});

// Route::get('/userhome/{id?}', function() {
//     return redirect()->route('pages.userhome', ['id' => Auth::user()->id]);
// });

Route::get('/userhome', 'UserHomeController@UserHome')->name('pages.userhome');

Route::get('pages/cari-tutor',['as' => 'pages.cari-tutor', 'uses' => 'UserHomeController@cariTutor']);
Route::get('pages/hasil-cari',['as' => 'pages.hasil-cari', 'uses' => 'UserHomeController@HasilCari']);
Route::get('/web-login', array('uses' => 'WebhomeController@WebLogin', 'as' => 'pages.login'));
Route::get('/web-signup', array('uses' => 'WebhomeController@WebSignup', 'as' => 'pages.signup'));
Route ::get('/logout', function(){
Auth::logout();
  return redirect('/');

});

/* UserController */
Route::get('/profil-tutor/{id}', ['as' => 'lihat-profil', 'uses' => 'UserController@ProfilTutor']);
Route::get('/cari-tutor',array('uses' => 'UserController@cariTutor', 'as' => 'pages.cari'));
Route::get('users/edit-profil',['as' => 'users.edit-profil', 'uses' => 'UserController@EditProfil']);
Route::get('users/edit-pengalaman',['as' => 'users.edit-pengalaman', 'uses' => 'UserController@EditPengalaman']);
Route::get('users/ubah-sandi',['as' => 'users.ubah-sandi', 'uses' => 'UserController@UbahSandi']);

/*KelasController */
// Route::get('users/edit-kelas',['as' => 'users.edit-kelas', 'uses' => 'KelasController@index']);

Route::resource('users', 'UserController');
//User/Edit Management Route
Route::get('users/{user}/edit',  ['as' => 'users.edit', 'uses' => 'UserController@edit']);
Route::patch('users/{user}/update',  ['as' => 'users.update', 'uses' => 'UserController@update']);

//Kelas Management Route
Route::resource('kelas', 'KelasController');
Route::get('kelas/{id}',  'KelasController@destroy');
Route::get('kelas/{id}/edit',  ['as' => 'kelas.edit', 'uses' => 'KelasController@edit']);
Route::patch('kelas/{id}/update',  ['as' => 'kelas.update', 'uses' => 'KelasController@update']);


Route::get('autocomplete',array('as'=>'autocomplete','uses'=>'AutoCompleteController@index'));
Route::get('searchajax',array('as'=>'searchajax','uses'=>'AutoCompleteController@autoComplete'));

//Ambil nilai departemen, mata kuliah
// Route::get('myfak', 'HomeController@myfak');
Route::get('id_matakuliah/get/{id}', 'HomeController@getMatkul');
Route::get('departemen/get/{id}', 'HomeController@getDept');

//Member Route
Route::resource('member', 'MemberController');
Route::get('member/{id}',  ['as' => 'member.update', 'uses' => 'MemberController@update']);

Route::get('/changePassword', array('uses' => 'HomeController@showChangePasswordForm','as' =>'change.password'));
Route::post('/changePassword','HomeController@changePassword')->name('changePassword');

Auth::Routes();
