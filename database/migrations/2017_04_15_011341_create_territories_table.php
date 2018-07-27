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
            $table->increments('id')->comment('Llave primaria');
            $table->integer('constRural')->comment('Área construida rural');
            $table->integer('constUrbano')->comment('Área construida urbano');
            $table->integer('constTotal')->comment('Área construida total');
            $table->double('terrRural', 14, 4)->comment('Terreno rural');
            $table->double('terrUrbano', 14, 4)->comment('Terreno urbano');
            $table->double('terrTotal', 14, 4)->comment('Terreno total');
            $table->integer('generalidadterritorio_id')->unsigned()->comment('Llave foránea a generalidadesterritorios');
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
