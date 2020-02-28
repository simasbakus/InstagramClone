<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/', 'UsersController@logedInUser')->name('home')->middleware('auth');

Route::get('/home', 'UsersController@logedInUser')->name('home')->middleware('auth');

Route::get('/users', 'UsersController@index')->middleware('auth');

Route::get('/user/{user}', 'UsersController@show')->middleware('auth');



Route::get('/userPhoto/create', 'UserPhotosController@create')->middleware('auth');

Route::post('/home', 'UserPhotosController@store')->middleware('auth');

Route::get('/userPhoto/{userPhoto}', 'UserPhotosController@show')->middleware('auth');

Route::get('/userPhoto/{userPhoto}/edit', 'UserPhotosController@edit')->middleware('auth');

Route::patch('/userPhoto/{userPhoto}', 'UserPhotosController@update')->middleware('auth');

Route::delete('/userPhoto/{userPhoto}', 'UserPhotosController@destroy')->middleware('auth');



Route::post('/follow', 'FollowersController@ajaxStore')->middleware('auth');
