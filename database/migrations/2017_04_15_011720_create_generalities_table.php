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
            $table->decimal('rural', 7, 3);
            $table->decimal('urbano', 7, 3);
            $table->decimal('total', 7, 3);
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
        Schema::dropIfExists('Generalidades');
    }
}
