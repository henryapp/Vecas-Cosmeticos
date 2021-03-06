<?php

namespace App\Models\Seguridad;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Admin\Rol;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Session;
use Illuminate\Notifications\Notifiable;

class Usuario extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;
    protected $remenber_token=false;
    protected $table='usuario';
    protected $fillable = [
        'usuario', 'password', 'nombre', 'email',
    ];
    protected $guarded=['id'];

    public function roles(){
        return $this->belongsToMany(Rol::class,'usuario_rol');
    }
    public function setSession($roles)
    {
        if(count($roles)==1){
            Session::put(
                [
                    'rol_id'=> $roles[0]['id'],
                    'rol_nombre'=>$roles[0]['nombre_rol'],
                    'usuario'=>$this->usuario,
                    'usuario_id'=>$this->id,
                    'nombre_usuario'=>$this->nombre,
                    'email'=>$this->email
                    
                ]
            );
        }
    }
}
