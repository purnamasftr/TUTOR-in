<?php

Route::get('/', function(){
    return view('welcome');
});

Route::get('/blog', 'BlogController@index');
Route::get('/blog/{id}', 'BlogController@show');


Route::get('/admin-home', 'AdminController@AdminHome');
Route::get('/admin-users', 'AdminController@AdminUser');

/* WebController */
Route::get('/web-home', 'WebController@WebHome');
Route::get('/web-login', array('uses' => 'WebController@WebLogin', 'as' => 'pages.login'));

/* UserController */
Route::get('/user-home/{id}', 'UserController@UserHome');
Route::get('/profil-tutor/{id}', 'UserController@ProfilTutor');
Route::get('/cari-tutor',array('uses' => 'UserController@cariTutor', 'as' => 'pages.cari'));


Route::get('/blog', 'BlogController@index');
