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

  Route::get('/admin', function () {
    return view('admin.dashboard');
  });

  Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
  })->name('admin.dashboard');

  Route::get('/admin/conta', function () {
    return view('admin.profile');
  })->name('admin.conta');


  // ProductController
  Route::get('/admin/produtos/create', 'ProductController@create')->name('admin.product.create');
  Route::post('/admin/produtos', 'ProductController@store')->name("admin.product.store");
  Route::get('/admin/produtos', 'ProductController@index')->name("admin.product.index");
  Route::get('/admin/produtos/edit/{id}', 'ProductController@edit')->name('admin.product.edit');
  Route::post('/admin/produtos/edit/{id}', 'ProductController@update')->name('admin.product.update');
  Route::delete('/admin/produtos/delete/{id}', 'ProductController@destroy')->name('admin.product.delete');


  // CategoriesController
  Route::get('/admin/produtos/categorias', 'CategoriesController@index')->name('admin.categories.index');
});
