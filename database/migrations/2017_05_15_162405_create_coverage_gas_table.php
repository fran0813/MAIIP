<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoverageGasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('CoberturaGas', function (Blueprint $table) {
            $table->increments('id')->comment('Llave primaria');
            $table->double('cabCG', 14, 4)->comment('Cabecera cobertura gas');
            $table->double('centPobCG', 14, 4)->comment('Centro poblados cobertura gas');
            $table->double('rurDispCG', 14, 4)->comment('Rural disperso cobertura gas');
            $table->integer('viviendaserviciopublico_id')->unsigned()->comment('Llave foránea a viviendasserviciospublicos');
            $table->foreign('viviendaserviciopublico_id')->references('id')->on('ViviendasServiciosPublicos');
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
        Schema::dropIfExists('CoberturaGas');
    }
}
