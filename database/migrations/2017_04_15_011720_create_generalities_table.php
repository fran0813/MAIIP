<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGeneralitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Generalidades', function (Blueprint $table) {
            $table->increments('id')->comment('Llave primaria');
            $table->double('ruralG', 14, 4)->comment('Rural, generalidades');
            $table->double('urbanoG', 14, 4)->comment('Urbano, generalidades');
            $table->double('totalG', 14, 4)->comment('Total, generalidades');
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
        Schema::dropIfExists('Generalidades');
    }
}
