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

Route::get('/practice', 'PracticeController@index');


Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth']], function() {
Route::get('/profile', 'ProfileController@index');
Route::get('profile/edit', 'ProfileController@edit');
Route::post('profile/update', 'ProfileController@update');
});

Route::get('post/create', 'PostController@create');
Route::post('post/store', 'PostController@store');
Route::get('post/edit/{id}', 'PostController@edit');
Route::post('post/update/{id}', 'PostController@update');
Route::get('post/delete', 'PostController@delete');


