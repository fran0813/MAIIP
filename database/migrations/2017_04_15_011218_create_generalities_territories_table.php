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
            $table->dateTime('anioGT');
            $table->double('temperatura', 4, 2);
            $table->integer('alturaNivMar');
            $table->String('catMun', 10);
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
        Schema::dropIfExists('GeneralidadesTerritorios');
    }
}
