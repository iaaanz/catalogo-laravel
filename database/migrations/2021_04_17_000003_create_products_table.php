<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('subcategory_id');
            $table->string('name');
            $table->text('description');
            $table->decimal('price_per_unit', 8, 2);
            $table->string('basic_unit');
            $table->char('limited', 3);
            $table->decimal('in_stock', 8, 2)->nullable();
            $table->string('active_for_sale', 10);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();

            $table->foreign('subcategory_id')
                ->references('id')
                ->on('subcategories');
        });
    }

    public function down()
    {
        Schema::dropIfExists('products');
    }
}
