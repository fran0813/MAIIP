<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInjuryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Lesion', function (Blueprint $table) {
            $table->increments('id')->comment('Llave primaria');
            $table->double('fatTot', 14, 4)->comment('Lesiones fatales total');
            $table->double('fatHom', 14, 4)->comment('Lesiones fatales hombre');
            $table->double('fatMuj', 14, 4)->comment('Lesiones fatales mujer');
            $table->double('noFatTot', 14, 4)->comment('Lesiones no fatales total');
            $table->double('noFatHom', 14, 4)->comment('Lesiones no fatales hombre');
            $table->double('noFatMuj', 14, 4)->comment('Lesiones no fatales mujer');
            $table->integer('seguridadviolencia_id')->unsigned()->comment('Llave foránea a seguridadviolencia');
            $table->foreign('seguridadviolencia_id')->references('id')->on('SeguridadViolencia');
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
        Schema::dropIfExists('Lesion');
    }
}
