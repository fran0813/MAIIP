<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Predios', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('rural');
            $table->integer('urbano');
            $table->integer('total');
            $table->integer('idGeneralidadesTerritorios')->unsigned();
            $table->foreign('idGeneralidadesTerritorios')->references('id')->on('GeneralidadesTerritorios');
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
        Schema::dropIfExists('Predios');
    }
}
