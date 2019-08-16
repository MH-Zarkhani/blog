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

Route::namespace('Admin')->prefix('admin')->group(function () {
    Route::get('/dashboard','DashboardController@index')->name('dashboard.index');
    Route::prefix('category')->group(function () {
        Route::get('/','CategoryController@index')->name('admin.category.index');
        Route::post('/','CategoryController@store')->name('admin.category.store');
        Route::delete('/{category}','CategoryController@destroy')->name('admin.category.delete');
        Route::get('/{category}','CategoryController@edit')->name('admin.category.edit');
        Route::put('/{category}','CategoryController@update')->name('admin.category.update');
    });
});

Route::get('/','HomeController@index')->name('home.index');