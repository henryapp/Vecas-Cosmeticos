<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubCategoria extends Model
{
    protected $table='sub_categoria';
    protected $fillable=['nombre_subCate','categoria_id'];
    protected $guarded=['id'];

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }
}
