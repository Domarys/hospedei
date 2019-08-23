<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOffersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_hotel');
            $table->foreign('id_hotel')->references('id')->on('hotels');
            $table->integer('id_manager');
            $table->foreign('id_manager')->references('id')->on('hotel_managers');
            $table->string('value');
            $table->string('begin');
            $table->string('finish');
            //images
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
        Schema::dropIfExists('offers');
    }
}
