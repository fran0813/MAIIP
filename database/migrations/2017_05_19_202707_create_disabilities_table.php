<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDisabilitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Discapacidades', function (Blueprint $table) {
            $table->increments('id')->comment('Llave primaria');
            $table->integer('difBaMov')->comment('Dificultad para bañarse o moverse');
            $table->integer('difEntApr')->comment('Dificultad para entender o aprender');
            $table->integer('difMovCam')->comment('Dificultad para moverse o para caminar por si');
            $table->integer('difSalirCalle')->comment('Dificultad para salir a la calle sin ayuda o compañía');
            $table->integer('totalDis')->comment('Total de población con Discapacidad');
            $table->integer('salud_id')->unsigned()->comment('Llave foránea a salud');
            $table->foreign('salud_id')->references('id')->on('Salud');
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
        Schema::dropIfExists('Discapacidades');
    }
}
