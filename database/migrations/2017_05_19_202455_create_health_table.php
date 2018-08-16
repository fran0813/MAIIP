<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHealthTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Salud', function (Blueprint $table) {
            $table->increments('id')->comment('Llave primaria');
            $table->dateTime('anioS')->comment('Año salud');
            $table->integer('municipio_id')->unsigned()->comment('Llave foránea a municipio');
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
        Schema::dropIfExists('Salud');
    }
}
