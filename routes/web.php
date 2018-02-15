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


Route::get('/login','RodController@login')->name('login'); //Login

//Home Page
Route::get('/index','RodController@index')->name('index'); //index
Route::get('/about','RodController@about')->name('about'); //about
Route::get('/contact','RodController@contact')->name('contactus'); //contect
Route::get('/signup','RodController@signup')->name('signup'); //signup


//Company Page
Route::get('/jobpost','RodController@jobpost')->name('jobpost'); //jobpost
Route::get('/companyprofile','RodController@companyprofile')->name('companyprofile');//company Profile
