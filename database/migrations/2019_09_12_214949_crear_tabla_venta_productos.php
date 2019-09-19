<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaVentaProductos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('venta_productos', function (Blueprint $table) {
            $table->integerIncrements('venta_productos_id')->comment('Identificador');
            $table->unsignedInteger('venta_id');
            $table->foreign('venta_id')->references('venta_id')->on('venta');
            $table->integer('cantidad')->comment('Cantidad del producto a vender');
            $table->unsignedInteger('producto_id');
            $table->foreign('producto_id')->references('producto_id')->on('producto');
            $table->bigInteger('valor_unitario_producto')->nullable()->default(0)->comment('Valor unitario del producto');
            $table->bigInteger('valor_total_producto')->nullable()->default(0)->comment('Valor total del producto (valor unitario * cantidad)');
            $table->char('activo', 1)->default('S')->comment('Define si está activo o no. S = Si, N = No');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('venta_productos');
    }
}
