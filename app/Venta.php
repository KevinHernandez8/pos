<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
        /**
     * Nombre de la tabla asociada
     */
    protected $table = 'venta';

    /**
     * Llave primaria de la tabla
     */
    protected $primaryKey = 'venta_id';

    /**
     * Indica que el modelo no tiene timestamps
     */
    public $timestamps = false;

    /**
     * Valores por defecto
     */
    protected $attributes = [
        'activo' => 'S',
    ];

    protected $fillable = ['consecutivo', 'fecha', 'estado', 'abono', 'saldo', 'total'];

    /**
     * Relación con la tabla usuario
     */
    public function usuario()
    {
        return $this->belongsTo('App\User');
    }

    /**
     * Relación con la tabla entidad
     */
    public function entidad()
    {
        return $this->belongsTo('App\Entidad');
    }

    /**
     * Relación con la tabla metodo_pago
     */
    public function metodoPago()
    {
        return $this->belongsTo('App\MetodoPago');
    }

    /**
     * Relación con la tabla venta_productos
     */
    public function ventaProductos()
    {
        return $this->hasMany('App\VentaProductos');
    }
}
