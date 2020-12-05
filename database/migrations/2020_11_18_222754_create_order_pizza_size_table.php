<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderPizzaSizeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_pizza_size', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pizza_size_id');
            $table->unsignedBigInteger('order_id');
            $table->timestamps();
            $table->integer('quantity')->default(1);

            $table->foreign('pizza_size_id')->references('id')->on('pizza_size')
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
        Schema::dropIfExists('order_pizza_size');
    }
}
