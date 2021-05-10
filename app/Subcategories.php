<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcategories extends Model
{
  protected $fillable = [
    'category_id',
    'product_id',
    'name'
  ];

  public $timestamps = false;

  // TODO: estudar pra ver como vai funcionar a associação aqui
}
