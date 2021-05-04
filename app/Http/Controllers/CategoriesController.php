<?php

namespace App\Http\Controllers;

use App\Categories;

class CategoriesController extends Controller
{
  public function index()
  {
    $categories = Categories::orderBy('id')->paginate(10);

    return view('admin.categories_index', compact('categories'));
  }

  public function create()
  {
  }

  public function store()
  {
  }

  public function edit()
  {
  }

  public function update()
  {
  }

  public function delete()
  {
  }
}
