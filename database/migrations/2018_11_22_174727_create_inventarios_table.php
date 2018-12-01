<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInventariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventarios', function (Blueprint $table) {
            
            $table->increments('id');
            $table->unsignedInteger('porciones');
            $table->unsignedInteger('perdida')->nullable();
            $table->boolean('estado')->default(true);
            $table->boolean('state')->default(false);
            $table->unsignedInteger('idEmpleado');
            $table->unsignedInteger('idReceta');

            $table->foreign('idReceta')->references('id')->on('recetas');
            $table->foreign('idEmpleado')->references('id')->on('users');
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
        Schema::dropIfExists('inventarios');
    }
}
