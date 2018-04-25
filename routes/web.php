<?php

Route::get('/', function(){
    return view('welcome');
});

Route::get('/blog', 'BlogController@index');
Route::get('/blog/{id}', 'BlogController@show');


Route::get('/admin-home', 'AdminController@AdminHome');

Route::get('/admin-users', 'AdminController@AdminUser');

Route::get('/web-home', 'WebController@WebHome');
Route::get('/web-login', array('uses' => 'WebController@WebLogin', 'as' => 'pages.login'));




Route::get('/blog', 'BlogController@index');
