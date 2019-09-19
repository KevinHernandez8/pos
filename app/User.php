<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Relación con la tabla parametros
     */
    public function parametros()
    {
        return $this->hasOne('App\Parametros');
    }

    /**
     * Relación con la tabla entidad
     */
    public function entidades()
    {
        return $this->hasMany('App\Entidad');
    }

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

    /**
     * Relación con la tabla categoria
     */
    public function categorias()
    {
        return $this->hasMany('App\Categoria');
    }

    /**
     * Relación con la tabla producto
     */
    public function productos()
    {
        return $this->hasMany('App\Producto');
    }
}
