<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
          $table->increments('id');
          $table->string('name');
          $table->integer('price')->comment('Sales price of the product');
          $table->string('description');
          $table->integer('quantity_Available')->comment('Quantity on hand');
          $table->integer('cost')->comment('Cost of the product at the time of purchase');
          $table->string('vendor');
          $table->string('image')->comment('URL of the product image');
          $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
