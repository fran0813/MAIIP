<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateViolenceSecurityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('SeguridadViolencia', function (Blueprint $table) {
            $table->increments('id')->comment('Llave primaria');
            $table->dateTime('anioSV')->comment('Año Seguridad y violencia');
            $table->double('tasDesEscTot', 14, 4)->comment('Tasa de deserción escolar total');
            $table->double('tasHom', 14, 4)->comment('Tasa de homicidios');
            $table->double('tasIncDen', 14, 4)->comment('Tasa de incidencia dengue');
            $table->double('tasLesPer', 14, 4)->comment('Tasa de lesiones personales');
            $table->double('tasMueAcc', 14, 4)->comment('Tasa de muertes por accidentes de tránsito');
            $table->double('tasSui', 14, 4)->comment('Tasa de suicidios');
            $table->double('vioInt', 14, 4)->comment('Violencia interpersonal');
            $table->double('casTot', 14, 4)->comment('Casos totales');
            $table->double('casTasHom', 14, 4)->comment('Casos y tasa homicidios');
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
        Schema::dropIfExists('SeguridadViolencia');
    }
}
