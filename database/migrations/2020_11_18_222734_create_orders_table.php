<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->unsignedBigInteger('customer_user_id');
            $table->unsignedBigInteger('seller_user_id');
            $table->unsignedBigInteger('driver_user_id')->nullable();
            $table->unsignedBigInteger('chef_user_id')->nullable();
            $table->unsignedBigInteger('order_status_id');
            $table->text('address')->nullable();
            $table->timestamp('time')->nullable()->useCurrent();
            $table->timestamps();

            $table->foreign('customer_user_id')->references('id')->on('users')
                  ->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('seller_user_id')->references('id')->on('users')
                  ->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('driver_user_id')->references('id')->on('users')
                  ->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('chef_user_id')->references('id')->on('users')
                  ->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('order_status_id')->references('id')->on('order_statuses')
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
        Schema::dropIfExists('orders');
    }
}
