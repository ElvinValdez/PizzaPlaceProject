<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDrinkPriceOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drink_price_order', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('drink_price_id');
            $table->unsignedBigInteger('order_id');
            $table->timestamps();
            $table->integer('quantity')->default(1);

            $table->foreign('drink_price_id')->references('id')->on('drink_prices')
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
        Schema::dropIfExists('drink_price_order');
    }
}
