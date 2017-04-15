<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTownTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Municipio', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('codigo')->unique();
            $table->String('nombre', 45);
            $table->integer('idDepartamento')->unsigned();
            $table->foreign('idDepartamento')->references('id')->on('Departamento');
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
        Schema::dropIfExists('Municipio');
    }
}
