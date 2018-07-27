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
        Schema::create('municipios', function (Blueprint $table) {
            $table->increments('id')->comment('Llave primaria');
            $table->integer('codigoM')->unique()->comment('Código del municipio');
            $table->string('nombre', 100)->comment('Nombre del municipio');
            $table->string('catMun', 50)->comment('Categoría municipal');
            $table->integer('departamento_id')->unsigned()->comment('Llave foránea a departamento');
            $table->foreign('departamento_id')->references('id')->on('departamentos');
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
