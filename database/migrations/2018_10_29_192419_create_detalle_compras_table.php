<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetalleComprasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_compras', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('idComprobante');
            $table->unsignedInteger('idMateria');
            $table->unsignedDecimal('precio',8,2);
            $table->unsignedInteger('cantidad');
            $table->boolean('estado')->default(1);
            $table->foreign('idComprobante')->references('id')->on('comprobantes');
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
        Schema::dropIfExists('detalle_compras');
    }
}
