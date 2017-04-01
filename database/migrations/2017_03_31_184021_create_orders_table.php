<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->text('order_detail');
            $table->integer('total_cost');
            $table->dateTime('date_buy');
            $table->dateTime('date_transfer');
            $table->tinyInteger('status');
            $table->text('name_customer');
            $table->text('phonenumber');
            $table->text('address');
            $table->tinyInteger('is_card');
            $table->text('card');
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
        Schema::dropIfExists('orders');
    }
}
