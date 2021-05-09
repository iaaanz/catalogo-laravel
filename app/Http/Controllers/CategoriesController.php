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

  public function update(Request $request, $id)
  {
    $category = Categories::find($id);
    $category->category_name = $request->get('category');
    $category->save();

    session()->flash('success', 'Categoria alterada com sucesso!');
    return response()->json([
      'action' => 'Updated'
    ]);
  }

  public function delete($id)
  {
    // TODO: Validar se existe item com essa categoria e tratar o retorno

    Categories::destroy($id);

    session()->flash('success', 'Categoria excluída com sucesso!');
    return response()->json([
      'action' => 'Deleted'
    ]);
  }
}
