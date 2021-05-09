<?php

use Illuminate\Support\Facades\Route;

Route::prefix('/v1')->group(function () {
  Route::get('/home', function () {
    return view('v1.index');
  })->name('home');

  Route::get('/produtos', function () {
    return view('v1.produtos');
  })->name('produtos');

  Route::get('/', function () {
    return view('layout');
  })->name('sobre');


  Route::prefix('/admin')->group(function () {

    Route::get('/', function () {
      return view('admin.dashboard');
    });
    Route::get('/dashboard', function () {
      return view('admin.dashboard');
    })->name('admin.dashboard');
    Route::get('/conta', function () {
      return view('admin.profile');
    })->name('admin.conta');

    // ProductController
    Route::get('/produtos/create', 'ProductController@create')->name('admin.product.create');
    Route::post('/produtos', 'ProductController@store')->name("admin.product.store");
    Route::get('/produtos', 'ProductController@index')->name("admin.product.index");
    Route::get('/produtos/edit/{id}', 'ProductController@edit')->name('admin.product.edit');
    Route::post('/produtos/edit/{id}', 'ProductController@update')->name('admin.product.update');
    Route::delete('/produtos/delete/{id}', 'ProductController@destroy')->name('admin.product.delete');

    // CategoriesController
    Route::get('/categorias', 'CategoriesController@index')->name('admin.categories.index');
    Route::post('/categorias/create', 'CategoriesController@store')->name('admin.categories,store');
    Route::patch('/categorias/edit/{id}', 'CategoriesController@update')->name('admin.categories.update');
    Route::delete('/categorias/delete/{id}', 'CategoriesController@delete')->name('admin.categories.delete');
  });
});
