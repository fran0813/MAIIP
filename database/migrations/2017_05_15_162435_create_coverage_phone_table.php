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
            $table->increments('id');
            $table->double('cabCT', 14, 4);
            $table->double('centPobCT', 14, 4);
            $table->double('rurDispCT', 14, 4);
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
        Schema::dropIfExists('CoberturaTelefono');
    }
}
