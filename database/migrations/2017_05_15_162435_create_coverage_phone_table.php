<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoveragePhoneTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('CoberturaTelefono', function (Blueprint $table) {
            $table->increments('id')->comment('Llave primaria');
            $table->double('cabCT', 14, 4)->comment('Cabecera cobertura teléfono');
            $table->double('centPobCT', 14, 4)->comment('Centro poblados cobertura teléfono');
            $table->double('rurDispCT', 14, 4)->comment('Rural disperso cobertura teléfono');
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
        Schema::dropIfExists('CoberturaTelefono');
    }
}
