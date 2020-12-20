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
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            
            $table->unsignedBigInteger('driver_id');
            $table->foreign('driver_id')->references('id')->on('drivers')->onDelete('cascade');
            $table->unsignedBigInteger('pickup_city');
            $table->foreign('pickup_city')->references('id')->on('cities')->onDelete('cascade');
            $table->unsignedBigInteger('dropoff_city');
            $table->foreign('dropoff_city')->references('id')->on('cities')->onDelete('cascade');
           
            $table->date('pickup_date');
            $table->date('dropoff_date');
            $table->integer('pickup_time');
            $table->string('pickup_time_am');
            $table->integer('total_price');

            $table->string('status');
            $table->timestamps();
            $table->softDeletes();


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
