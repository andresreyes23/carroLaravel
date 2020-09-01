<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductcarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productcar', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('quantity');

            $table->foreignId('product_id')->references('id')->on('products');
            $table->foreignId('cart_id')->references('id')->on('carts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productcar');
    }
}
