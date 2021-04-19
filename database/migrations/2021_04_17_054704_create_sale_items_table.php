<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSaleItemsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('sale_items', function (Blueprint $table) {
      $table->unsignedBigInteger('id');
      $table->decimal('quantity_sold', 8, 2);
      $table->decimal('price_per_unit', 8, 2);
      $table->decimal('price', 8, 2);
      $table->decimal('tax_amount', 8, 2);
      $table->unsignedBigInteger('sale_id');
      $table->unsignedBigInteger('product_id');

      $table->foreign('sale_id')
        ->references('id')
        ->on('sales');

      $table->foreign('product_id')
        ->references('id')
        ->on('products');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('sale_items');
  }
}
