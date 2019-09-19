<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    /**
     * Nombre de la tabla asociada
     */
    protected $table = 'producto';

    /**
     * Llave primaria de la tabla
     */
    protected $primaryKey = 'producto_id';

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

    protected $fillable = ['nombre', 'imagen', 'descripcion', 'cantidad', 'codigo_barras'];

    /**
     * Relación con la tabla usuario
     */
    public function usuario()
    {
        return $this->belongsTo('App\User');
    }

    /**
     * Relación con la tabla categoria
     */
    public function categoria()
    {
        return $this->belongsTo('App\Categoria');
    }

    /**
     * Relación con la tabla compra_productos
     */
    public function compraProductos()
    {
        return $this->hasMany('App\CompraProductos');
    }

    /**
     * Relación con la tabla venta_productos
     */
    public function ventaProductos()
    {
        return $this->hasMany('App\VentaProductos');
    }
}
