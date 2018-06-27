<?php
use App\User;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
Route::get('/', function () {
    return view('webhome');
});


Route::get('/blog','BlogController@index');
Route::get('/blog/{id}','BlogController@show');


Route::get('/home', function () {
    return view('home');
});
Route::get('/home', 'HomeController@mytut');
Route::get('/userhome','UserHomeController@UserHome')->name('pages.userhome');
Route::get('/cari-tutor',array('uses' => 'UserHomeController@CariTutor', 'as' => 'pages.cari-tutor'));

Route::any('/search',function(){
    $q = Input::get ( 'id_matakuliah' );

    $user = DB::table('kelas')->where('id_matakuliah','LIKE','%'.$q.'%')->get();

    if(count($user) > 0){
        return view('pages.hasil-cari')->withDetails($user)->withQuery ( $q );
    }
    else
        return view ('pages.hasil-cari')->withMessage('No Details found. Try to search again !');
});
Route::get('users/edit-profil',['as' => 'users.edit-profil', 'uses' => 'UserController@EditProfil']);
Route::get('users/edit-pengalaman',['as' => 'users.edit-pengalaman', 'uses' => 'UserController@EditPengalaman']);
Route::get('users/ubah-sandi',['as' => 'users.ubah-sandi', 'uses' => 'UserController@UbahSandi']);

Route::get('id_matakuliah/get/{id}', 'HomeController@getMatkul');
Route::get('departemen/get/{id}', 'HomeController@getDept');


Route::resource('kelas', 'KelasController');
Route::get('kelas/{id}',  'KelasController@destroy');
Route::get('kelas/{id}/edit',  ['as' => 'kelas.edit', 'uses' => 'KelasController@edit']);
Route::patch('kelas/{id}/update',  ['as' => 'kelas.update', 'uses' => 'KelasController@update']);
Route::get('users/edit-kelas',['as' => 'kelas.edit-kelas', 'uses' => 'UserController@EditKelas']);



Route::get('/show', function () {
    return view('show');
});


//Route::get('/webhome', 'WebhomeController@WebHome');
Route::get('/web-login', array('uses' => 'WebhomeController@WebLogin', 'as' => 'pages.login'));
Route::get('/web-signup', array('uses' => 'WebhomeController@WebSignup', 'as' => 'pages.signup'));
Route ::get('/logout', function(){
Auth::logout();
  return redirect('/');

});

// Route::get('search', 'CariController@search');
// Route::get('show', 'CariController@show');


Route::get('autocomplete',array('as'=>'autocomplete','uses'=>'AutoCompleteController@index'));
Route::get('searchajax',array('as'=>'searchajax','uses'=>'AutoCompleteController@autoComplete'));


Route::get('/changePassword', array('uses' => 'HomeController@showChangePasswordForm','as' =>'change.password'));
Route::post('/changePassword','HomeController@changePassword')->name('changePassword');

/*
$this->get('/login', 'Auth\LoginController@showLoginForm')->name('login');
$this->post('/login', 'Auth\LoginController@login');
$this->post('/logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
$this->get('/register', 'Auth\RegisterController@showRegistrationForm')->name('register');
$this->post('/register', 'Auth\RegisterController@register');

// Password Reset Routes...
  $this->get('/password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
 $this->post('/password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
$this->get('/password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
$this->post('/password/reset', 'Auth\ResetPasswordController@reset');
*/
Auth::routes();
