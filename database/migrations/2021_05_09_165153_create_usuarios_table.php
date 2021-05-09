<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->increments('id_usu');
            $table->string('nombre');
            $table->string('app');
            $table->string('apm');
            $table->string('correo');
            $table->string('password');
            $table->integer('id_tipousu')->unsigned();
            $table->foreign('id_tipousu')->references('id_tipousu')->on('tipousuarios');
            $table->rememberToken();
            $table->timestamps();
            $table->Softdeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
}
