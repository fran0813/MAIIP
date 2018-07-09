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
            $table->double('cabCG', 14, 4);
            $table->double('centPobCG', 14, 4);
            $table->double('rurDispCG', 14, 4);
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
