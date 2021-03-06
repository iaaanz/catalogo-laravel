<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductImagesTable extends Migration
{

  public function up()
  {
    Schema::create('product_images', function (Blueprint $table) {
      $table->bigIncrements('id_image');
      $table->unsignedBigInteger('id_product');
      $table->string('image');

      $table
        ->foreign('id_product')
        ->references('id')
        ->on('products')
        ->onDelete('cascade');
    });
  }

  public function down()
  {
    Schema::dropIfExists('product_images');
  }
}
