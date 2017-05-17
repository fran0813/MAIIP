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
            $table->increments('id');
            $table->double('cabCG', 4, 2);
            $table->double('centPobCG', 4, 2);
            $table->double('rurDispCG', 4, 2);
            $table->integer('viviendaserviciopublico_id')->unsigned();
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
