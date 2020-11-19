<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDrinkPricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drink_prices', function (Blueprint $table) {
            $table->id();
            $table->timestamp('date')->nullable();
            $table->float('price');
            $table->unsignedInteger('drink_id');
            $table->timestamps();

            $table->foreign('drink_id')->references('id')->on('drinks')
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
        Schema::dropIfExists('drink_prices');
    }
}
