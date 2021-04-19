<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalesTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('sales', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->timestamp('time_created');
      $table->timestamp('time_paid')->nullable();
      $table->decimal('sale_amount', 8, 2);
      $table->decimal('sale_amount_paid', 8, 2)->nullable();
      $table->decimal('tax_amount', 4, 2);
      $table->unsignedBigInteger('sale_status_id');
      $table->unsignedBigInteger('user_id');
      // $table->primary('id');

      $table->foreign('sale_status_id')
        ->references('id')
        ->on('sale_status');

      // $table->foreign('user_id')
      //   ->references('id')
      //   ->on('users');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('sales');
  }
}
