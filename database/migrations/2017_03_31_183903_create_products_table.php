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
            $table->string('product_name')->unique();
            $table->float('price');
            $table->text('image');
            $table->text('description');
            $table->integer('quantity');
            $table->integer('product-type_id')->unsigned();
            $table->foreign('product-type_id')->references('id')->on('product-types');
            $table->integer('like');
            $table->integer('dislike');
            $table->integer('total_buy');
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
