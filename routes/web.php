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
Route::get('/dashboard', 'DashboardController@index')->middleware('auth:web');

Route::get('/pulsa', 'PulsaController@index')->middleware('auth:web');
Route::post('/pulsa_post', 'PulsaController@post')->middleware('auth:web')->name('pulsa');


Route::get('/paket-data', 'PaketDataController@index')->middleware('auth:web');
Route::post('/paket-data-post', 'PaketDataController@post')->middleware('auth:web')->name('pulsa');

Route::get('/pln', 'PlnController@index')->middleware('auth:web');
Route::post('/pln-post', 'PlnController@post')->middleware('auth:web')->name('pulsa');


Route::get('/pln', 'PlnController@index')->middleware('auth:web');
Route::get('/customer', 'PlnController@customer')->middleware('auth:web');
Route::get('/data_customer', 'PlnController@data_customer')->middleware('auth:web');
Route::post('/pln-post', 'PlnController@post')->middleware('auth:web')->name('pulsa');
