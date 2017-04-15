<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Predio', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('rural');
            $table->integer('urbano');
            $table->integer('total');
            $table->integer('idGeneralidadesTerritorio')->unsigned();
            $table->foreign('idGeneralidadesTerritorio')->references('id')->on('GeneralidadesTerritorio');
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
        Schema::dropIfExists('Predio');
    }
}
