<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMateriaRecetasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materia_recetas', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('idMateria');
            $table->unsignedInteger('idReceta');
            $table->unsignedInteger('cantidad');
            $table->boolean('estado')->default(1);
            $table->foreign('idReceta')->references('id')->on('recetas');
            $table->foreign('idMateria')->references('id')->on('materia_primas');
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
        Schema::dropIfExists('materia_recetas');
    }
}
