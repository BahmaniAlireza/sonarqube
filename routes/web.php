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

Route::group(['middleware' => ['auth']], function() {
    Route::get('/option/{id}', 'OptionController@showThemeDetails')->name('option');
    Route::post('/option/{id}','OptionController@SendOrder')->name('order');
    Route::Post('/order/', 'OrderConteroller@newOrder')->name('newOrder');
    Route::get('/callback/{order_id}', 'CallBackController@order')->name('callback');
    Route::get('/re-pay/{order_id}', 'RePay@pay')->name('repay');
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/profile', 'ProfileController@index')->name('profile');
});
Route::get('/theme', 'ThemesController@show');

Auth::routes();