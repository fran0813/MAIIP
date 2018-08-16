<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDemographicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Demografias', function (Blueprint $table) {
            $table->increments('id')->comment('Llave primaria');
            $table->dateTime('anioD')->comment('Año demografías');
            $table->integer('pobEdadTrabajar')->comment('Población en edad de trabajar');
            $table->integer('pobPotActiva')->comment('Población potencialmente activa');
            $table->integer('pobPotInactiva')->comment('Población potencialmente inactiva');
            $table->integer('numPerMen')->comment('Número de personas menores a 15 años');
            $table->integer('numPerMay')->comment('Número de personas mayores a 64 años');
            $table->integer('numPerInd')->comment('Número de personas independientes');
            $table->integer('numPerDep')->comment('Número de personas dependientes');
            $table->integer('pobHom')->comment('Población por género - Hombres');
            $table->integer('pobMuj')->comment('Población por género - Mujeres');
            $table->integer('pobZonCab')->comment('Población por zona - Cabecera');
            $table->integer('pobZonRes')->comment('Población por zona - Resto');
            $table->double('indRuralidad', 14, 4)->comment('Índice de ruralidad');
            $table->integer('pobTotal')->comment('Población total');
            $table->double('crecPob', 14, 4)->comment('Crecimiento poblacional');
            $table->integer('municipio_id')->unsigned()->comment('Llave foránea a municipio');
            $table->foreign('municipio_id')->references('id')->on('Municipios');
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
        Schema::dropIfExists('Demografias');
    }
}
