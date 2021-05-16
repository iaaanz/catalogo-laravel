<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::redirect('/', '/v1/admin');

Route::prefix('/v1')->group(function () {
  Auth::routes();

  Route::get('/home', function () {
    return view('v1.index');
  })->name('home');

  Route::get('/produtos', function () {
    return view('v1.produtos');
  })->name('produtos');

  Route::get('/', function () {
    return view('layout');
  })->name('sobre');

  Route::group(['prefix' => '/admin', 'middleware' => 'auth'], function () {
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
    Route::get('/produtos', 'ProductController@index')->name("admin.product.index");
    Route::get('/produtos/edit/{id}', 'ProductController@edit')->name('admin.product.edit');
    Route::post('/produtos', 'ProductController@store')->name("admin.product.store");
    Route::post('/produtos/edit/{id}', 'ProductController@update')->name('admin.product.update');
    Route::delete('/produtos/delete/{id}', 'ProductController@destroy')->name('admin.product.delete');

    // CategoriesController
    Route::get('/categorias', 'CategoriesController@index')->name('admin.categories.index');
    Route::get('/categorias/all', 'CategoriesController@allCategories')->name('admin.categories.all');
    Route::post('/categorias/create', 'CategoriesController@store')->name('admin.categories,store');
    Route::patch('/categorias/edit/{id}', 'CategoriesController@update')->name('admin.categories.update');
    Route::delete('/categorias/delete/{id}', 'CategoriesController@delete')->name('admin.categories.delete');

    //SubcategoriesController
    Route::get('/subcategorias', 'SubcategoriesController@index')->name('admin.subcategories.index');
    Route::post('/subcategorias/create', 'SubcategoriesController@store')->name('admin.subcategories.store');
    Route::patch('/subcategorias/edit/{id}', 'SubcategoriesController@update')->name('admin.subcategories.update');
    Route::delete('/subcategorias/delete/{id}', 'SubcategoriesController@delete')->name('admin.subcategories.delete');
  });
});
