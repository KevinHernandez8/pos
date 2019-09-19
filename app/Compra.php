<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    /**
     * Nombre de la tabla asociada
     */
    protected $table = 'compra';

    /**
     * Llave primaria de la tabla
     */
    protected $primaryKey = 'compra_id';

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

    protected $fillable = ['consecutivo', 'fecha', 'numero_factura', 'estado', 'total'];

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
     * Relación con la tabla compra_productos
     */
    public function compraProductos()
    {
        return $this->hasMany('App\CompraProductos');
    }
}
