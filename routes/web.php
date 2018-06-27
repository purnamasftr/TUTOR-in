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
// Route::get('/userhome/{id?}', function() {
//     return redirect()->route('pages.userhome', ['id' => Auth::user()->id]);
// });

Route::get('/cari-tutor',array('uses' => 'UserHomeController@cariTutor', 'as' => 'pages.cari-tutor'));


//Route::get('/webhome', 'WebhomeController@WebHome');
Route::get('/web-login', array('uses' => 'WebhomeController@WebLogin', 'as' => 'pages.login'));
Route::get('/web-signup', array('uses' => 'WebhomeController@WebSignup', 'as' => 'pages.signup'));
Route ::get('/logout', function(){
Auth::logout();
  return redirect('/');

});

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
