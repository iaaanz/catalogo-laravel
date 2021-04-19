<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
  protected $fillable = [
    'name',
    'description',
    'price_per_unit',
    'basic_unit',
    'limited',
    'in_stock',
    'active_for_sale',
    'updated_at',
    'created_at'
  ];

  public function image()
  {
    return $this->hasMany(Product_image::class, 'id', 'id_product');
  }
}
