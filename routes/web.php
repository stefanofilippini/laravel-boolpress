<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

/* Route::get('/home', 'HomeController@index')->name('home'); */

Route::middleware('auth')
    ->namespace('Admin')
    ->name('admin.')
    ->prefix('admin')
    ->group(function() {
        Route::get('/home', 'HomeController@index')->name('home');
        Route::get('/index', 'IndexController@index')->name('index');
        Route::get('/create', 'CreateController@index')->name('create');
        Route::post('/store', 'CreateController@store')->name('store');
        Route::get('/edit/{id}', 'CreateController@edit')->name('edit');
        Route::post('/update/{id}', 'CreateController@update')->name('update');
        Route::get('/show/{id}', 'CreateController@show')->name('show');
        Route::get('/delete/{id}', 'CreateController@delete')->name('delete');
    });

    Route::get('{any?}', function () {
        return view('guests.home');
    })->where("any", ".*");