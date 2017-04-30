<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTownsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Municipios', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('codigoM')->unique();
            $table->string('nombre', 45);
            $table->string('catMun', 10);
            $table->integer('departamento_id')->unsigned();
            $table->foreign('departamento_id')->references('id')->on('Departamentos');
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
        Schema::dropIfExists('Municipios');
    }
}
