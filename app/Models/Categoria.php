<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table='categoria';
    protected $fillable=['nombre_cat'];
    protected $guarded=['id'];

    public function subcategoria()
    {
        return $this->hasMany(SubCategoria::class);
    }
}
