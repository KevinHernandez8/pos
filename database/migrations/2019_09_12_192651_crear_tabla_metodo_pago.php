<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaMetodoPago extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('metodo_pago', function (Blueprint $table) {
            $table->integerIncrements('metodo_pago_id')->comment('Identificador del método de pago');
            $table->string('nombre', 50)->comment('Nombre del método de pago');
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
        Schema::dropIfExists('metodo_pago');
    }
}
