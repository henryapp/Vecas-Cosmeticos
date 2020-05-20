<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Permiso extends Model
{
    protected $table ="permisos";
    protected $fillable=['nombre_per','slug'];
    protected $guarded=['id'];
    public function roles()
    {
        return $this->belongsToMany(Rol::class, 'permisos_rol');
    }

}
