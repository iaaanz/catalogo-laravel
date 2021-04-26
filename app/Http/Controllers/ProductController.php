<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreItemRegistration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Products;
use App\Product_image;

class ProductController extends Controller
{

  public function home()
  {
    return view('product.create');
  }
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $products = Products::orderBy('id')->paginate(10);

    return view('admin.product_index', compact('products'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    return view('admin.product_create');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(StoreItemRegistration $request)
  {
    $request->validated();
    $images = $request->file('product_image');

    $product = new Products([
      'name' => $request->get('name'),
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
    $product->save();

    if ($request->hasFile('product_image')) {
      foreach ($images as $item) {
        $imageName = Str::random(15) . '.' . $item->extension();
        $item->move(public_path('images'), $imageName);
        $product_image = new Product_image([
          'image' => $imageName
        ]);
        $product_image->product()->associate($product);
        $product_image->save();
      }
    }

    return redirect('/v1/admin/produtos')->with('success', 'Produto cadastrado com sucesso!');
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
    $product = Products::find($id);

    return view('admin.product_edit', compact('product'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(StoreItemRegistration $request, $id)
  {
    $request->validated();
    $images = $request->file('product_image');

    $product = Products::find($id);
    $product->name = $request->get('name');
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
      foreach ($images as $item) {
        $imageName = Str::random(15) . '.' . $item->extension();
        $item->move(public_path('images'), $imageName);
        $product_image = new Product_image([
          'image' => $imageName
        ]);
        Product_image::where('id_product', '=', $product->id)->delete();
        $product_image->product()->associate($product);
        $product_image->save();
      }
    }

    return redirect('/v1/admin/produtos')->with('success', 'Produto alterado com sucesso!');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    Products::destroy($id);

    // Utilizado antes de usar Vue e Axios
    // return redirect('/v1/admin/produtos')->with('success', 'Produto excluído com sucesso!');

    session()->flash('success', 'Produto excluído com sucesso!');
    return response()->json([
      'action' => 'Deleted'
    ]);
  }
}
