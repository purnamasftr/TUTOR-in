<?php
use App\User;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

Route::get('/', function(){
    return view('webhome');
});
Route::get('/userhome', 'UserHomeController@UserHome')->name('pages.userhome');

/* Search Controller */
Route::get('/cari-tutor',array('uses' => 'CariController@CariTutor', 'as' => 'cari-tutor'));
Route::any('/search',function(){
    $q = Input::get ( 'id_matakuliah' );
    $a = DB::table('mata_kuliah')->where('id_matakuliah', '=', $q);
    if(count($a)>0){
      $user = DB::table('kelas')->join('users', 'users.id', '=', 'kelas.id_tutor')
                                ->join('departemen', 'users.departemen', '=', 'departemen.id_departemen')
                                ->where('id_matakuliah','LIKE','%'.$q.'%')->get();
      $faku = DB::table('fakultas')->pluck('nama_fakultas','id_fakultas');
    }


    // if(count($user) > 0){
        return view('pages.hasil-cari')->withDetails($user)->withQuery ( $q )->withFakult($faku);
    // }
    // else
    //     return view ('pages.hasil-cari')->withMessage('No Details found. Try to search again !');
});
Route::get('autocomplete',array('as'=>'autocomplete','uses'=>'AutoCompleteController@index'));
Route::get('searchajax',array('as'=>'searchajax','uses'=>'AutoCompleteController@autoComplete'));

/* Login, Log Out, Sign Up Controller */
Route ::get('/logout', function(){
Auth::logout();
  return redirect('/');
});

/* UserController */
Route::resource('users', 'UserController');
Route::get('edit-profil', ['as' => 'users.edit-profil', 'uses' => 'UserController@edit']);
Route::get('users/{user}',  ['as' => 'users.update', 'uses' => 'UserController@update']);

/* UbahSandiController */
Route::get('ubah-sandi',['as' => 'users.ubah-sandi', 'uses' => 'UbahSandiController@UbahSandi']);
Route::get('changePassword', array('uses' => 'UbahSandiController@showChangePasswordForm','as' =>'change.password'));
Route::post('changePassword','UbahSandiController@changePassword')->name('changePassword');

/* PictureController */
Route::resource('picture', 'PictureController');
Route::patch('picture/{user}/update',  ['as' => 'picture.update', 'uses' => 'PictureController@update']);
Auth::Routes();

/* ProfileController */
Route::get('profil-tutor/{id}', ['as' => 'profil-tutor', 'uses' => 'ProfileController@ProfilTutor']);

/*KelasController */
Route::resource('kelas', 'KelasController');
Route::get('kelas/{id}',  'KelasController@destroy');
Route::get('kelas/{id}/edit',  ['as' => 'kelas.edit', 'uses' => 'KelasController@edit']);
Route::patch('kelas/{id}/update',  ['as' => 'kelas.update', 'uses' => 'KelasController@update']);

/*FakultasController */
Route::get('id_matakuliah/get/{id}', 'FakultasController@getMatkul');
Route::get('departemen/get/{id}', 'FakultasController@getDept');

/*MemberController */
Route::resource('member', 'MemberController');
Route::get('member/{id}',  ['as' => 'member.update', 'uses' => 'MemberController@update']);
