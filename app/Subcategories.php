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

  public function category()
  {
    return $this->belongsTo(Categories::class);
  }

  public function product()
  {
    return $this->hasMany(Products::class, 'subcategory_id');
  }
}
