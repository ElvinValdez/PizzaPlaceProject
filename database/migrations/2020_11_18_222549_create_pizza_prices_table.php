<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePizzaPricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pizza_prices', function (Blueprint $table) {
            $table->id();
            $table->timestamp('date')->nullable();
            $table->float('price');
            $table->timestamps();
            $table->unsignedBigInteger('pizza_id');

            $table->foreign('pizza_id')->references('id')->on('pizzas')
                  ->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pizza_prices');
    }
}
