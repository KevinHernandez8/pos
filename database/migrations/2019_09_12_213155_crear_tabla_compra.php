<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaCompra extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compra', function (Blueprint $table) {
            $table->integerIncrements('compra_id')->comment('Identificador de la compra');
            $table->integer('consecutivo')->comment('Consecutivo de la compra según el usuario');
            $table->timestamp('fehca')->comment('Fecha de la transacción');
            $table->unsignedInteger('entidad_id');
            $table->foreign('entidad_id')->references('entidad_id')->on('entidad')->onDelete('cascade');
            $table->integer('numero_factura')->nullable()->comment('Número de la factura del proveedor');
            $table->unsignedInteger('metodo_pago_id');
            $table->foreign('metodo_pago_id')->references('metodo_pago_id')->on('metodo_pago')->onDelete('cascade');
            $table->char('estado', 1)->comment('Define el estado de la compra. C = Cancelado, P = Pendiente.');
            $table->bigInteger('total')->comment('Total de la compra');
            $table->char('activo', 1)->default('S')->comment('Define si está activo o no. S = Si, N = No');            
            $table->unsignedInteger('usuario_id');
            $table->foreign('usuario_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('compra');
    }
}
