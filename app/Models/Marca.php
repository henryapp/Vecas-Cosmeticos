<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    protected $table='marca';
    protected $fillable=['nombre_mar'];
    protected $guarded=['id'];
}

