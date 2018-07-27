<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSocialEconomicTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('EconomicoSocial', function (Blueprint $table) {
            $table->increments('id')->comment('Llave primaria');
            $table->dateTime('anioES')->unique()->comment('Año económico social');
            $table->double('numHecSemBos', 14, 4)->comment('Número de hectáreas sembradas con bosques por municipio área en bosques total');
            $table->double('areAgrCosTot', 14, 4)->comment('Área agrícola cosechada total');
            $table->double('proAgrTot', 14, 4)->comment('Producción agrícola total');
            $table->double('proCar', 14, 4)->comment('Producción de carbón');
            $table->integer('invBovTotMac')->comment('Inventario bovinos total machos');
            $table->integer('invBovTotHem')->comment('Inventario bovinos total hembras');
            $table->integer('invBovTot')->comment('Inventario bovinos total');
            $table->double('incIpmTot', 14, 4)->comment('Incidencia IPM total');
            $table->double('incIpmRur', 14, 4)->comment('Incidencia IPM urbano');
            $table->double('incIpmUrb', 14, 4)->comment('Incidencia IPM rural');
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
        Schema::dropIfExists('EconomicoSocial');
    }
}
