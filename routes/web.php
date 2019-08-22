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

use Illuminate\Support\Facades\Route;
// Admin Routes
Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function () {
    // Dashboard
    Route::get('/dashboard','DashboardController@index')->name('dashboard.index');
    // Category
    Route::prefix('category')->group(function () {
        Route::get('/','CategoryController@index')->name('category.index');
        Route::post('/','CategoryController@store')->name('category.store');
        Route::delete('/{category}','CategoryController@destroy')->name('category.delete');
        Route::get('/{category}','CategoryController@edit')->name('category.edit');
        Route::put('/{category}','CategoryController@update')->name('category.update');
    });
    // Tag
    Route::prefix('tag')->group(function () {
        Route::get('/','TagController@index')->name('tag.index');
        Route::post('/','TagController@store')->name('tag.store');
        Route::delete('/{tag}','TagController@destroy')->name('tag.delete');
        Route::get('/{tag}','TagController@edit')->name('tag.edit');
        Route::put('/{tag}','TagController@update')->name('tag.update');
    });
    // Post
    Route::resource('post','PostController');
});
// Site Routes
Route::get('/','HomeController@index')->name('home.index');
