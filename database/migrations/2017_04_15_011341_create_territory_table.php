<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTerritoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Territorio', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('constRural');
            $table->integer('constUrbano');
            $table->integer('constTotal');
            $table->decimal('terrRural', 10, 5);
            $table->decimal('terrUrbano', 10, 5);
            $table->decimal('terrTotal', 10, 5);
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
        Schema::dropIfExists('Territorio');
    }
}
