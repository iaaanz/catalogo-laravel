<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subcategories;
use App\Categories;

class SubcategoriesController extends Controller
{

  public function index()
  {
    $var = Subcategories::all();
    // $var = Categories::find(2)->subcategory;
    return $var;
  }

  public function store(Request $request)
  {
    $subcategory = new Subcategories([
      'name' => $request->get('subcategory'),
      'category_id' => $request->get('category_id')
    ]);

    $subcategory->save();

    session()->flash('success', 'Subcategoria cadastrada com sucesso!');
    return response()->json(["subcategory" => $request->get('subcategory')]);
  }

  public function update(Request $request, $id)
  {
    $subcategory = Subcategories::find($id);
    $subcategory->name = $request->get('subcategory');
    $subcategory->category_id = $request->get('category_id');
    $subcategory->save();

    session()->flash('success', 'Subcategoria alterada com sucesso!');
    return response()->json([
      'action' => 'Updated'
    ]);
  }

  public function delete($id)
  {
    $subcategory = Subcategories::find($id);
    $rs = ['product'];

    foreach ($rs as $r) {
      if ($subcategory->$r->count() > 0) {
        session()->flash('error', 'A subcategoria possui vínculo com algum produto, remova a associação para conseguir excluí-la');
        return response()->json([
          'error' => 'Categoria com vínculo em algum produto'
        ]);
      }
    }

    Subcategories::destroy($id);

    session()->flash('success', 'Subcategoria excluída com sucesso!');
    return response()->json([
      'action' => 'Deleted'
    ]);
  }
}
