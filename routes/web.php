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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/profile/{username}', 'ProfileController@profile');

// route for project
Route::get('/project', 'ProjectController@index');
Route::get('/project/create', 'ProjectController@create');
Route::post('/project', 'ProjectController@store');

Route::get('/project/{id}', 'ProjectController@show');
Route::get('/project/{id?}/edit', 'ProjectController@edit');
Route::post('/project/{id?}/edit', 'ProjectController@update');
Route::post('/project/{id?}/delete', 'ProjectController@destroy');
