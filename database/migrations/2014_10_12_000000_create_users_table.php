<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id')->comment('Llave primaria');
            $table->string('name')->comment('Nombre de usuario');
            $table->string('email')->unique()->comment('Correo electrónico');
            $table->string('password')->comment('Contraseña');
            $table->enum('active', array('True', 'False',))->default('False')->comment('Estado');;
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
