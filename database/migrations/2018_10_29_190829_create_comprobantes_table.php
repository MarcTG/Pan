<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComprobantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comprobantes', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('idProveedor');
            $table->unsignedInteger('idEmpleado');
            $table->unsignedDecimal('total', 8, 2);
            $table->date('fecha');
            $table->foreign('idProveedor')->references('id')->on('proveedors');
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
        Schema::dropIfExists('comprobantes');
    }
}
