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
            $table->increments('id');
            $table->double('cabCA', 14, 4);
            $table->double('centPobCA', 14, 4);
            $table->double('rurDispCA', 14, 4);
            $table->integer('viviendaserviciopublico_id')->unsigned();
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
