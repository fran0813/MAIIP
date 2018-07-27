<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoverageSewerageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('CoberturaAlcantarillado', function (Blueprint $table) {
            $table->increments('id')->comment('Llave primaria');
            $table->double('cabCA', 14, 4)->comment('Cabecera cobertura alcantarillado');
            $table->double('centPobCA', 14, 4)->comment('Centro poblados cobertura alcantarillado');
            $table->double('rurDispCA', 14, 4)->comment('Rural disperso cobertura alcantarillado');
            $table->integer('viviendaserviciopublico_id')->unsigned()->comment('Llave foránea a viviendasserviciospublicos');
            $table->foreign('viviendaserviciopublico_id')->references('id')->on('ViviendasServiciosPublicos');
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
        Schema::dropIfExists('CoberturaAlcantarillado');
    }
}
