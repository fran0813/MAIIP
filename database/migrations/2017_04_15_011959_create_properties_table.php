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
            $table->increments('id')->comment('Llave primaria');
            $table->integer('ruralP')->comment('Rural, Predio');
            $table->integer('urbanoP')->comment('Urbano, Predio');
            $table->integer('totalP')->comment('total, Predio');
            $table->integer('generalidadterritorio_id')->unsigned()->comment('Llave foránea a generalidadesterritorios');
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
