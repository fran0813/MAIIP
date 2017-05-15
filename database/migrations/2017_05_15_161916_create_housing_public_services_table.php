<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHousingPublicServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ViviendasServiciosPublicos', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('anioVSP')->unique();
            $table->integer('cabViv');
            $table->integer('cabHog');
            $table->double('cabHogViv', 4, 2);
            $table->double('cabPerHog', 4, 2);
            $table->double('cabPerViv', 4, 2);
            $table->integer('rurViv');
            $table->integer('rurHog');
            $table->double('rurHogViv', 4, 2);
            $table->double('rurPerHog', 4, 2);
            $table->double('rurPerViv', 4, 2);
            $table->integer('totalViv');
            $table->integer('totalHog');
            $table->double('totalHogViv', 4, 2);
            $table->double('totalPerHog', 4, 2);
            $table->double('totalPerViv', 4, 2);
            $table->integer('municipio_id')->unsigned();
            $table->foreign('municipio_id')->references('id')->on('Municipios');
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
        Schema::dropIfExists('ViviendasServiciosPublicos');
    }
}