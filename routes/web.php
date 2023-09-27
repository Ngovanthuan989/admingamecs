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


Route::group(['middleware' => ['check.login']], function () {

    Route::get('/login', 'LoginController@login')->name('home.login');
    Route::post('/postLogin', 'LoginController@postLogin')->name('home.postLogin');
    Route::get('/logout', 'LoginController@logout')->name('home.logout');
});

Route::group(['middleware' => ['check.logout']], function () {
    Route::get('/', 'HomeController@index')->name('home.index');

    Route::group(['prefix' => 'promotion'], function () {
        Route::get('/create', 'PromotionController@create')->name('dashboard.promotion.create');
        Route::get('/', 'PromotionController@index')->name('dashboard.promotion.show');
        Route::get('/edit/{id}', 'PromotionController@edit')->name('dashboard.promotion.edit');
        Route::post('/update', 'PromotionController@update')->name('dashboard.promotion.update');
        Route::post('/delete', 'PromotionController@delete')->name('dashboard.promotion.delete');
        Route::post('/addPost', 'PromotionController@addPost')->name('dashboard.promotion.addPost');
    });
});

