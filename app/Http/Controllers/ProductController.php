<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreItemRegistration;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\ProductImage;
use App\Products;
use App\Subcategories;

class ProductController extends Controller
{

  public function index()
  {
    $products = DB::table('products')
      ->join('subcategories', 'products.subcategory_id', '=', 'subcategories.id')
      ->select('products.*', 'subcategories.name as subcatName')
      ->paginate(10);

    return view('admin.product_index', compact('products'));
  }

  public function create()
  {
    $subcategories = Subcategories::all();
    return view('admin.product_create', compact('subcategories'));
  }

  public function store(StoreItemRegistration $request)
  {
    $request->validated();
    $images = $request->file('product_image');

    $product = new Products([
      'name' => $request->get('name'),
      /* 
       *  Usando função associate() para associar a categoria com a subcategoria
      '*  Antes: 'subcategory_id' => $request->get('subcategory')
       *  Agora: $product->subcategory()->associate($request->get('subcategory'));
       */
      'description' => $request->get('description'),
      'price_per_unit' => $request->get('price_per_unit'),
      'basic_unit' => $request->get('basic_unit'),
      'limited' => $request->get('limited'),
      'in_stock' => $request->get('in_stock'),
      'active_for_sale' => $request->get('active_for_sale'),
    ]);
    if ($product->active_for_sale == NULL) {
      $product->active_for_sale = 'Inativo';
    } else {
      $product->active_for_sale = 'Ativo';
    }

    $product->subcategory()->associate($request->get('subcategory'));
    $product->save();

    if ($request->hasFile('product_image')) {
      foreach ($images as $item) {
        $imageName = Str::random(15) . '.' . $item->extension();
        $item->move(public_path('images'), $imageName);
        $product_image = new ProductImage([
          'image' => $imageName
        ]);
        $product_image->product()->associate($product);
        $product_image->save();
      }
    }

    return redirect('/v1/admin/produtos')->with('success', 'Produto cadastrado com sucesso!');
  }

  public function edit($id)
  {
    $product = Products::find($id);
    $subcategories = Subcategories::all();
    return view('admin.product_edit', compact('product', 'subcategories'));
  }

  public function update(StoreItemRegistration $request, $id)
  {
    $request->validated();
    $images = $request->file('product_image');

    $product = Products::find($id);
    $product->name = $request->get('name');
    $product->subcategory_id = $request->get('subcategory');
    $product->description = $request->get('description');
    $product->price_per_unit = $request->get('price_per_unit');
    $product->basic_unit = $request->get('basic_unit');
    $product->limited = $request->get('limited');
    $product->in_stock = $request->get('in_stock');
    $product->active_for_sale = $request->get('active_for_sale');

    if ($product->active_for_sale == NULL) {
      $product->active_for_sale = 'Inativo';
    } else {
      $product->active_for_sale = 'Ativo';
    }

    $product->save();

    if ($request->hasFile('product_image')) {

      $del_images = ProductImage::where('id_product', $product->id)->get();

      foreach ($del_images as $image) {
        $image_path = public_path('images\\') . $image->image;
        if (File::exists($image_path)) {
          File::delete($image_path);
        }
      }

      ProductImage::where('id_product', '=', $product->id)->delete();

      foreach ($images as $item) {
        $imageName = Str::random(15) . '.' . $item->extension();
        $item->move(public_path('images'), $imageName);
        $product_image = new ProductImage([
          'image' => $imageName
        ]);
        $product_image->product()->associate($product);
        $product_image->save();
      }
    }

    return redirect('/v1/admin/produtos')->with('success', 'Produto alterado com sucesso!');
  }

  public function destroy($id)
  {
    Products::destroy($id);

    session()->flash('success', 'Produto excluído com sucesso!');
    return response()->json([
      'action' => 'Deleted'
    ]);
  }
}
