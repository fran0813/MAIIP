<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateViolenceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Violencia', function (Blueprint $table) {
            $table->increments('id')->comment('Llave primaria');
            $table->integer('may')->comment('Violencia a personas mayores');
            $table->integer('otrFam')->comment('Violencia entre otros familiares');
            $table->integer('inf')->comment('Violencia infantil');
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
        Schema::dropIfExists('Violencia');
    }
}
