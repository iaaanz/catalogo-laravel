<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
  protected $fillable = [
    'name',
    'category_id'
  ];

  public $timestamps = false;

  public function subcategory()
  {
    return $this->hasMany(Subcategories::class, 'category_id');
  }
}
