<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderPizzaPriceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_pizza_price', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('pizza_price_id');
            $table->unsignedInteger('order_id');
            $table->timestamps();
            $table->integer('quantity')->default(1);

            $table->foreign('pizza_price_id')->references('id')->on('pizza_prices')
                  ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('order_id')->references('id')->on('orders')
                  ->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_pizza_price');
    }
}
