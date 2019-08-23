<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHotelAdmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotel_adms', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_hotel');
            $table->foreign('id_hotel')->references('id')->on('hotel');
            $table->string('name');
            $table->string('CPF');
            $table->string('RG');
            $table->string('birthday');
            $table->string('email');
            $table->string('telephone');
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
        Schema::dropIfExists('hotel_adms');
    }
}
