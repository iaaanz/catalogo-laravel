<?php

namespace App\Http\Controllers;

use App\Categories;
use App\Subcategories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoriesController extends Controller
{

  public function allCategories()
  {
    return $categories = Categories::all();
  }

  public function index()
  {
    $categories = Categories::orderBy('id')->paginate(5, ['*'], 'categories');

    $subcategories = DB::table('subcategories')
      ->join('categories', 'subcategories.category_id', '=', 'categories.id')
      ->select('subcategories.*', 'categories.name as catName')
      ->paginate(5);

    // $subcategories = Subcategories::orderBy('id')->paginate(5, ['*'], 'subcategories');
    // dd($subcategories);
    return view('admin.categories_index', ['categories' => $categories, 'subcategories' => $subcategories]);
  }

  // TODO: fazer request que valida depois : )
  public function store(Request $request)
  {

    $category = new Categories([
      'name' => $request->get('category')
    ]);

    $category->save();

    session()->flash('success', 'Categoria cadastrada com sucesso!');
    return response()->json(["category" => $request->get('category')]);
  }

  public function update(Request $request, $id)
  {
    $category = Categories::find($id);
    $category->name = $request->get('category');
    $category->save();

    session()->flash('success', 'Categoria alterada com sucesso!');
    return response()->json([
      'action' => 'Updated'
    ]);
  }

  public function delete($id)
  {
    $category = Categories::find($id);
    $rs = ['product'];

    foreach ($rs as $r) {
      if ($category->$r->count() > 0) {
        session()->flash('error', 'A categoria possui vínculo com algum produto, remova a categoria do item para conseguir excluí-la');
        return response()->json([
          'error' => 'Categoria com vínculo em algum produto'
        ]);
      }
    }

    Categories::destroy($id);

    session()->flash('success', 'Categoria excluída com sucesso!');
    return response()->json([
      'action' => 'Deleted'
    ]);
  }
}
