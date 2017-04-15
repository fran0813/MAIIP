<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGeneralitiesTerritoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('GeneralidadesTerritorios', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('anio');
            $table->double('temperatura', 2, 1);
            $table->integer('alturaNivMar');
            $table->String('catMun', 10);
            $table->integer('municipios_id')->unsigned();
            $table->foreign('municipios_id')->references('id')->on('Municipios');
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
        Schema::dropIfExists('GeneralidadesTerritorios');
    }
}
