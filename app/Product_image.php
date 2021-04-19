<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product_image extends Model
{
  protected $fillable = [
    'id_product',
    'image'
  ];
  public $timestamps = false;

  public function product()
  {
    return $this->belongsTo(Products::class, 'id_product', 'id');
  }
}
