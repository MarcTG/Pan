<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStockProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stock_productos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fecha');
            $table->unsignedInteger('cantidad')->default(0);
            $table->unsignedInteger('vendido')->default(0);
            $table->unsignedInteger('idProducto');
            $table->foreign('idProducto')->references('id')->on('productos');
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
        Schema::dropIfExists('stock_productos');
    }
}
