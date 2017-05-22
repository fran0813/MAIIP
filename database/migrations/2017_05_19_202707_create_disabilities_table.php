<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDisabilitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Discapacidades', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('difBaMov');
            $table->integer('difEntApr');
            $table->integer('difMovCam');
            $table->integer('difSalirCalle');
            $table->integer('totalDis');
            $table->integer('salud_id')->unsigned();
            $table->foreign('salud_id')->references('id')->on('Salud');
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
        Schema::dropIfExists('Discapacidades');
    }
}
