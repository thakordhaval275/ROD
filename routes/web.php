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
    return view('index');
});


Route::get('/index','RodController@index')->name('index'); //index
Route::get('/login','RodController@login')->name('login'); //Login
Route::get('/about','RodController@about')->name('about'); //about
Route::get('/jobPost','RodController@jobPost')->name('jobPost'); //jobpost