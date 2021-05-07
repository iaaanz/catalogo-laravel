<?php

namespace App\Http\Controllers;

use App\Categories;
use Illuminate\Http\Request;

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

  // TODO: fazer request que valida depois : )
  public function store(Request $request)
  {

    $category = new Categories([
      'category_name' => $request->get('category')
    ]);

    $category->save();

    return response()->json(["category" => $request->get('category')]);
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
