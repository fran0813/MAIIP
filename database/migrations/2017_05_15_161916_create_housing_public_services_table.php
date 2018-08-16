<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHousingPublicServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ViviendasServiciosPublicos', function (Blueprint $table) {
            $table->increments('id')->comment('Llave primaria');
            $table->dateTime('anioVSP')->comment('año Vivienda y servicios públicos');
            $table->integer('cabViv')->comment('Cabecera viviendas');
            $table->integer('cabHog')->comment('Cabecera hogares');
            $table->double('cabHogViv', 14, 4)->comment('Cabecera hogares por vivienda');
            $table->double('cabPerHog', 14, 4)->comment('Cabecera personas por hogar');
            $table->double('cabPerViv', 14, 4)->comment('Cabecera personas por vivienda');
            $table->integer('rurViv')->comment('Rural viviendas');
            $table->integer('rurHog')->comment('Rural hogares');
            $table->double('rurHogViv', 14, 4)->comment('Rural hogares por vivienda');
            $table->double('rurPerHog', 14, 4)->comment('Rural personas por hogar');
            $table->double('rurPerViv', 14, 4)->comment('Rural personas por vivienda');
            $table->integer('totalViv')->comment('Total viviendas');
            $table->integer('totalHog')->comment('Total hogares');
            $table->double('totalHogViv', 14, 4)->comment('Total hogares por vivienda');
            $table->double('totalPerHog', 14, 4)->comment('Total personas por hogar');
            $table->double('totalPerViv', 14, 4)->comment('Total personas por vivienda');
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
        Schema::dropIfExists('ViviendasServiciosPublicos');
    }
}
