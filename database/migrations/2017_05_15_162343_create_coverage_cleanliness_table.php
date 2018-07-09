<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoverageCleanlinessTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('CoberturaAseo', function (Blueprint $table) {
            $table->increments('id');
            $table->double('cabCAs', 14, 4);
            $table->double('centPobCAs', 14, 4);
            $table->double('rurDispCAs', 14, 4);
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
        Schema::dropIfExists('CoberturaAseo');
    }
}
