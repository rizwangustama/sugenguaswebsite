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

// Route::get('/', function () {
//     return view('pages.home.homepage');
// });

Route::prefix('/')
    ->namespace('Home')
    ->group(function() {
        Route::resource('/', 'HomepageController');
    });

Route::prefix('home')
    ->namespace('Admin')
    ->group(function(){
        Route::resource('/', 'DashboardController');
        Route::resource('/news', 'NewsController');

    });


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
