<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaVenta extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('venta', function (Blueprint $table) {
            $table->integerIncrements('venta_id')->comment('Identificador de la venta');
            $table->integer('consecutivo')->comment('Consecutivo de la venta según el usuario');
            $table->timestamp('fehca')->comment('Fecha de la transacción');
            $table->unsignedInteger('entidad_id');
            $table->foreign('entidad_id')->references('entidad_id')->on('entidad')->onDelete('cascade');
            $table->unsignedInteger('metodo_pago_id');
            $table->foreign('metodo_pago_id')->references('metodo_pago_id')->on('metodo_pago')->onDelete('cascade');
            $table->char('estado', 1)->comment('Define el estado de la venta. C = Cancelado, P = Pendiente.');
            $table->bigInteger('abono')->nullable()->default(0)->comment('Indica el abono en caso de que la venta no sea cancelada');
            $table->bigInteger('saldo')->nullable()->default(0)->comment('Saldo de la venta en caso de que no sea cancelada');
            $table->bigInteger('total')->comment('Total de la venta');
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
        Schema::dropIfExists('venta');
    }
}
