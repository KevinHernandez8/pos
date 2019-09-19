<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    /**
     * Nombre de la tabla asociada
     */
    protected $table = 'categoria';

    /**
     * Llave primaria de la tabla
     */
    protected $primaryKey = 'categoria_id';

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
     * Relación con la tabla usuario
     */
    public function usuario()
    {
        return $this->belongsTo('App\User');
    }

    /**
     * Relación con la tabla producto
     */
    public function productos()
    {
        return $this->hasMany('App\Producto');
    }
}
