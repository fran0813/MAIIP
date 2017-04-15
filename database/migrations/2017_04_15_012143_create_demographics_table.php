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
            $table->increments('id');
            $table->dateTime('anio');
            $table->integer('pobEdadTrabajar');
            $table->integer('pobPotInactiva');
            $table->integer('numPerMen');
            $table->integer('numPermay');
            $table->integer('numPerInd');
            $table->integer('numPerDep');
            $table->integer('pobHom');
            $table->integer('pobMuj');
            $table->integer('pobZonCab');
            $table->integer('pobZonRes');
            $table->integer('indRuralidad');
            $table->integer('pobTotal');
            $table->integer('crecPob');
            $table->integer('municipio_id')->unsigned();
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
