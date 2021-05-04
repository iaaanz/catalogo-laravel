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

  // fazer request que valida depois : )
  public function store($request)
  {
    $category = new Categories([
      'category_name' => $request->get('category_name')
    ]);

    $category->save();
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
