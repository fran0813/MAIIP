<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoverageCleanlinessTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('CoberturaAseo', function (Blueprint $table) {
            $table->increments('id')->comment('Llave primaria');
            $table->double('cabCAs', 14, 4)->comment('Cabecera cobertura aseo');
            $table->double('centPobCAs', 14, 4)->comment('Centro poblados cobertura aseo');
            $table->double('rurDispCAs', 14, 4)->comment('Rural disperso cobertura aseo');
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
        Schema::dropIfExists('CoberturaAseo');
    }
}
