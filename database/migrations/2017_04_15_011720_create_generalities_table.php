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
            $table->increments('id');
            $table->double('ruralG', 5, 2);
            $table->double('urbanoG', 5, 2);
            $table->double('totalG', 5, 2);
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
        Schema::dropIfExists('Generalidades');
    }
}
