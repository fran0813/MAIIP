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
        Schema::create('violencia', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('may');
            $table->integer('otrFam');
            $table->integer('inf');
            $table->integer('seguridadviolencia_id')->unsigned();
            $table->foreign('seguridadviolencia_id')->references('id')->on('seguridadViolencia');
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
        Schema::dropIfExists('violencia');
    }
}
