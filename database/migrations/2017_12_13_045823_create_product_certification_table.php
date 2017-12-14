<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductCertificationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_certification', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();

            $table->integer('product_id')->unsigned();
            $table->integer('certification_id')->unsigned();

            # Make foreign keys
            $table->foreign('product_id')->references('id')->on('products');
            $table->foreign('certification_id')->references('id')->on('certifications');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_certification');
    }
}
