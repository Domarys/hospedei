<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanyAdmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_adms', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_company');
            $table->foreign('id_company')->references('id')->on('company');
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
        Schema::dropIfExists('company_adms');
    }
}
