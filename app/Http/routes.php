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
Route::get('/seminars', 'WelcomeController@seminars');
Route::get('/seminar', 'WelcomeController@seminar');
Route::get('/services', 'WelcomeController@services');
Route::get('/feedback', 'WelcomeController@feedback');
Route::get('/lektors', 'WelcomeController@lektors');
Route::get('/contacts', 'WelcomeController@contacts');
Route::post('/mailsend', 'WelcomeController@mailsend');


Route::get('home', 'HomeController@index');
Route::get('admin/seminars', 'HomeController@seminars');
    Route::get('admin/seminars/add', 'HomeController@seminars_add');
Route::get('admin/cities', 'HomeController@cities');
    Route::post('admin/cities/rm', 'HomeController@cities_rm');
    Route::get('admin/cities/edit/{id}', 'HomeController@cities_edit');
    Route::post('admin/cities/edit', 'HomeController@cities_edit_post');
    Route::get('admin/cities/add', 'HomeController@cities_add');
    Route::post('admin/cities/add', 'HomeController@cities_add_post');
Route::get('admin/descriptions', 'HomeController@descriptions');
Route::get('admin/feedbacks', 'HomeController@feedbacks');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
