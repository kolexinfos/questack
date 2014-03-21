<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('index');
});

//Auth routes
Route::post('/auth/login', 'AuthController@login');
Route::get('/auth/logout', 'AuthController@logout');
Route::post('/auth/signup', 'AuthController@signup');


//module routes
Route::get('/modules/get','ModuleController@getModules');
Route::get('/modules/getById','ModuleController@getModuleById');


//question routes
Route::get('/question/exams', 'QuestionController@exam' );
Route::get('/question/courses', 'QuestionController@courses' );
Route::get('/questions/questionsByYear', 'QuestionController@questionsByYear');

