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
            $table->double('fatTot', 5, 2);
            $table->double('fatHom', 5, 2);
            $table->double('fatMuj', 5, 2);
            $table->double('noFatTot', 5, 2);
            $table->double('noFatHom', 5, 2);
            $table->double('noFatMuj', 5, 2);
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
