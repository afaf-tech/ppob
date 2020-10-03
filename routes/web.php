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

Route::get('/login', function () {
    return view('login');
})->name('login');
Route::post('/login', 'LoginController@login');
Route::post('/register', 'UserController@register');
Route::get('/logout', 'LoginController@logout')->name('logout');

//Dashboard
Route::get('/', 'DashboardController@index')->middleware('auth:web');
Route::get('/pulsa', 'PulsaController@index')->middleware('auth:web');
Route::post('/pulsa_post', 'PulsaController@post')->middleware('auth:web')->name('pulsa');
