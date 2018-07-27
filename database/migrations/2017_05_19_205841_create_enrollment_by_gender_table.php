<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnrollmentByGenderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('MatriculaPorGenero', function (Blueprint $table) {
            $table->increments('id')->comment('Llave primaria');
            $table->integer('femenino')->comment('Femenino');
            $table->integer('masculino')->comment('Masculino');
            $table->integer('educacion_id')->unsigned()->comment('Llave foránea a educacion');
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
        Schema::dropIfExists('MatriculaPorGenero');
    }
}
