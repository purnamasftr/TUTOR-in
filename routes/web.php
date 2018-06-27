<?php
use App\User;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

Route::get('/', function(){
    return view('webhome');
});

/* WebController */
//Route::get('/webhome', 'WebhomeController@WebHome');
Route::get('/home', function () {
    return view('home');
});
Route::get('/home', 'HomeController@mytut');
Route::get('/userhome','UserHomeController@UserHome')->name('pages.userhome');
// Route::get('/userhome/{id?}', function() {
//     return redirect()->route('pages.userhome', ['id' => Auth::user()->id]);
// });

Route::get('pages/cari-tutor',['as' => 'pages.cari-tutor', 'uses' => 'UserHomeController@cariTutor']);
Route::get('/web-login', array('uses' => 'WebhomeController@WebLogin', 'as' => 'pages.login'));
Route::get('/web-signup', array('uses' => 'WebhomeController@WebSignup', 'as' => 'pages.signup'));
Route ::get('/logout', function(){
Auth::logout();
  return redirect('/');

});

/* UserController */
Route::get('/user-home/{id}', 'UserController@UserHome');
Route::get('/profil-tutor/{id}', 'UserController@ProfilTutor');
Route::get('/cari-tutor',array('uses' => 'UserController@cariTutor', 'as' => 'pages.cari'));
Route::get('users/edit-profil',['as' => 'users.edit-profil', 'uses' => 'UserController@EditProfil']);
Route::get('users/edit-pengalaman',['as' => 'users.edit-pengalaman', 'uses' => 'UserController@EditPengalaman']);
Route::get('users/ubah-sandi',['as' => 'users.ubah-sandi', 'uses' => 'UserController@UbahSandi']);

/*KelasController */
Route::get('users/edit-kelas',['as' => 'kelas.edit-kelas', 'uses' => 'UserController@EditKelas']);

Route::resource('users', 'UserController');
//User/Edit Management Route
Route::get('users/{user}/edit',  ['as' => 'users.edit', 'uses' => 'UserController@edit']);
Route::patch('users/{user}/update',  ['as' => 'users.update', 'uses' => 'UserController@update']);

// Route::get('search', 'CariController@search');
// Route::get('show', 'CariController@show');
Route::any('/search',function(){
    $q = Input::get ( 'q' );

    $user = User::where('type', '=', 2)->where('name','LIKE','%'.$q.'%')->get();

    if(count($user) > 0){
        return view('result')->withDetails($user)->withQuery ( $q );
    }
    else
        return view ('result')->withMessage('No Details found. Try to search again !');
});
Route::get('/show', function () {
    return view('show');
});


Route::get('autocomplete',array('as'=>'autocomplete','uses'=>'AutoCompleteController@index'));
Route::get('searchajax',array('as'=>'searchajax','uses'=>'AutoCompleteController@autoComplete'));


Route::get('/changePassword', array('uses' => 'HomeController@showChangePasswordForm','as' =>'change.password'));
Route::post('/changePassword','HomeController@changePassword')->name('changePassword');

Auth::Routes();
