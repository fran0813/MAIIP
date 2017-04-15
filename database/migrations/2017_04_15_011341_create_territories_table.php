<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTerritoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Territorios', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('constRural');
            $table->integer('constUrbano');
            $table->integer('constTotal');
            $table->double('terrRural', 10, 5);
            $table->double('terrUrbano', 10, 5);
            $table->double('terrTotal', 10, 5);
            $table->integer('generalidadterritorio_id')->unsigned();
            $table->foreign('generalidadterritorio_id')->references('id')->on('GeneralidadesTerritorios');
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
        Schema::dropIfExists('Territorios');
    }
}
