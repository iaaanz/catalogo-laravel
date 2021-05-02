<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
  protected $fillable = [
    'category_name'
  ];

  // public $timestamps = false;

  public function product()
  {
    return $this->belongsTo(Products::class, 'id_product', 'id');
  }
}
