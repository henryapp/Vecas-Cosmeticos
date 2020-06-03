<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table='producto';
    protected $fillable=['nombre_producto','existencia','descripcion','precio_costo','precio_venta'];
    protected $guarded=['id'];

    public function marca()
    {
        return $this->belongsTo(Marca::class);
    }
    public function subcategoria()
    {
        return $this->belongsToMany(SubCategoria::class, 'nombre_subCate');
    }
    public function estado()
    {
        return $this->belongsTo(Estado::class);
    }
}
    
