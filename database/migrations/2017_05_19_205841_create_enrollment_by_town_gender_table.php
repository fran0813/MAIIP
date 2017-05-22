<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnrollmentByTownGenderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('MatriculaPorMunicipioGenero', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('femenino');
            $table->integer('masculino');
            $table->integer('educacion_id')->unsigned();
            $table->foreign('educacion_id')->references('id')->on('Educacion');
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
        Schema::dropIfExists('MatriculaPorMunicipioGenero');
    }
}
