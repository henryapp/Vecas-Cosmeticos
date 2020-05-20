<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table='producto';
    protected $fillable=['nombre_producto','existencia','descripcion','precio_costo','precio_venta'];
    protected $guarded=['id'];
}
