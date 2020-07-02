<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDriversTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drivers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('photo');
            $table->integer('phone');
            $table->text('cartype');
            $table->text('carno');
            $table->text('cardetail');
            $table->text('hometown');
            $table->text('travelablecity');
            $table->integer('noofseats');
            $table->string('email')->unique();
            $table->string('password');
            $table->unsignedBigInteger('city_id');
            $table->integer('status');
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
        Schema::dropIfExists('drivers');
    }
}
