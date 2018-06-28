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

Route::get('/cari-tutor',array('uses' => 'UserHomeController@CariTutor', 'as' => 'cari-tutor'));

Route::any('/search',function(){
    $q = Input::get ( 'id_matakuliah' );

    $user = DB::table('kelas')->join('users', 'users.id', '=', 'kelas.id_tutor')
                              ->join('departemen', 'users.departemen', '=', 'departemen.id_departemen')
                              ->join('fakultas', 'fakultas.id_fakultas', '=', 'users.fakultas')
                              ->where('id_matakuliah','LIKE','%'.$q.'%')->get();

    // if(count($user) > 0){
        return view('pages.hasil-cari')->withDetails($user)->withQuery ( $q );
    // }
    // else
    //     return view ('pages.hasil-cari')->withMessage('No Details found. Try to search again !');
});
Route::get('/web-login', array('uses' => 'WebhomeController@WebLogin', 'as' => 'pages.login'));
Route::get('/web-signup', array('uses' => 'WebhomeController@WebSignup', 'as' => 'pages.signup'));
Route ::get('/logout', function(){
Auth::logout();
  return redirect('/');

});

/* UserController */
Route::resource('users', 'UserController');
Route::get('profil-tutor/{id}', ['as' => 'profil-tutor', 'uses' => 'UserController@ProfilTutor']);
Route::get('edit-profil', ['as' => 'users.edit-profil', 'uses' => 'UserController@edit']);
Route::get('ubah-sandi',['as' => 'users.ubah-sandi', 'uses' => 'UserController@UbahSandi']);
Route::get('users/{user}',  ['as' => 'users.update', 'uses' => 'UserController@update']);


/*KelasController */
// Route::get('users/edit-kelas',['as' => 'users.edit-kelas', 'uses' => 'KelasController@index']);

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

Route::get('changePassword', array('uses' => 'UserHomeController@showChangePasswordForm','as' =>'change.password'));
Route::post('changePassword','UserHomeController@changePassword')->name('changePassword');

//picture upload
Route::resource('picture', 'PictureController');
Route::patch('picture/{user}/update',  ['as' => 'picture.update', 'uses' => 'PictureController@update']);
Auth::Routes();
