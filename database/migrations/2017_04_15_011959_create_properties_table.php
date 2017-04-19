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
            $table->integer('ruralP');
            $table->integer('urbanoP');
            $table->integer('totalP');
            $table->integer('generalidadterritorio_id')->unsigned();
            $table->foreign('generalidadterritorio_id')->references('id')->on('GeneralidadesTerritorios');
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
