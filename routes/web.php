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

Route::get('/test/layout', function () {
  return view('template.layout');
});
Route::get('/test/dashboard', function () {
  return view('template.dashboard');
});

Route::get('/home', 'ProductController@home');
Route::get('/products', 'ProductController@create');
Route::post('/products', 'ProductController@store')->name("products.store");
// Route::resource('products', 'ProductController');