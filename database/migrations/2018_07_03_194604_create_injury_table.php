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
            $table->increments('id');
            $table->double('fatTot', 14, 4);
            $table->double('fatHom', 14, 4);
            $table->double('fatMuj', 14, 4);
            $table->double('noFatTot', 14, 4);
            $table->double('noFatHom', 14, 4);
            $table->double('noFatMuj', 14, 4);
            $table->integer('seguridadviolencia_id')->unsigned();
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
