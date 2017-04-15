<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGeneralitiesTerritoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('GeneralidadesTerritorio', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('anio');
            $table->decimal('temperatura', 2, 1);
            $table->integer('alturaNivMar');
            $table->String('catMun', 10);
            $table->integer('idMunicipio')->unsigned();
            $table->foreign('idMunicipio')->references('id')->on('Municipio');
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
        Schema::dropIfExists('GeneralidadesTerritorio');
    }
}
