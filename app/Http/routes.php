<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');
Route::get('/contact-me', 'WelcomeController@contact');
Route::get('/contact', 'PagesController@contact');
Route::get('home', 'HomeController@index');


Route::get('foo123', function() {
    return 'bar';
});

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::get('about', 'PagesController@about');

Route::resource('articles', 'ArticlesController');
