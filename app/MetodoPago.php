<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MetodoPago extends Model
{
    /**
     * Nombre de la tabla asociada
     */
    protected $table = 'metodo_pago';

    /**
     * Llave primaria de la tabla
     */
    protected $primaryKey = 'metodo_pago_id';

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

    protected $fillable = ['nombre'];

    /**
     * Relación con la tabla compra
     */
    public function compras()
    {
        return $this->hasMany('App\Compra');
    }

    /**
     * Relación con la tabla venta
     */
    public function ventas()
    {
        return $this->hasMany('App\Venta');
    }
}
