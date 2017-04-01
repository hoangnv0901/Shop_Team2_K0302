<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePromotionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('promotions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('product-id')->unsigned();
            $table->foreign('product-id')->references('id')->on('products');
            $table->integer('product-type_id')->unsigned();
            $table->foreign('product-type_id')->references('id') ->on('product-types');
            $table->string('promotion_name');
            $table->integer('percent');
            $table->dateTime('date_start');
            $table->dateTime('date_end');
            $table->text('promotion_image');
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
        Schema::dropIfExists('promotions');
    }
}
