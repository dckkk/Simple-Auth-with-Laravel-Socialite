<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('auth/github', 'GithubController@redirectToProvider');
Route::get('auth/github/callback', 'GithubController@handleProviderCallback');

Route::get('auth/facebook', 'FacebookController@redirectToProvider');
Route::get('auth/facebook/callback', 'FacebookController@handleProviderCallback');

Route::get('auth/twitter', 'TwitterController@redirectToProvider');
Route::get('auth/twitter/callback', 'TwitterController@handleProviderCallback');

Route::get('auth/gplus', 'GplusController@redirectToProvider');
Route::get('auth/gplus/callback', 'GplusController@handleProviderCallback');

Route::get('auth/linkedin', 'LinkedController@redirectToProvider');
Route::get('auth/linkedin/callback', 'LinkedController@handleProviderCallback');

Route::get('/home', 'HomeController@index');
