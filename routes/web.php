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


Route::get('/home', 'HomeController@index');

Route::group(['middleware' => ['auth']], function() {
Route::get('/profile/{id}', 'ProfileController@index');
Route::get('/profile/edit/{id}', 'ProfileController@edit');
Route::post('/profile/update/{id}', 'ProfileController@update');
});

Route::group(['middleware' => ['auth']], function() {
Route::get('/post/create', 'PostController@create');
Route::post('/post/store', 'PostController@store');
Route::get('/post/delete/{id}', 'PostController@delete');
Route::get('/post/favorite/{id}', 'PostController@favorite');
});

Route::get('/blacklist/store/{id}', 'BlacklistController@store');

//パスワードリセット
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');