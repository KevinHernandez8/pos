<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompraProductos extends Model
{
    /**
     * Nombre de la tabla asociada
     */
    protected $table = 'compra_productos';

    /**
     * Llave primaria de la tabla
     */
    protected $primaryKey = 'compra_productos_id';

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

    protected $fillable = ['cantidad', 'valor_unitario_producto', 'valor_total_producto'];

    /**
     * Relación con la tabla compra
     */
    public function compra()
    {
        return $this->belongsTo('App\Compra');
    }

    /**
     * Relación con la tabla producto
     */
    public function producto()
    {
        return $this->belongsTo('App\Producto');
    }
}
