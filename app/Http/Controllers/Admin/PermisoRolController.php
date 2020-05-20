<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Permiso;
use App\Models\Admin\Rol;
use Illuminate\Http\Request;

class PermisoRolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rols=Rol::orderBY('id')->pluck('nombre_rol','id')->toArray();
        $permisos=Permiso::get();
        $permisosRols= Permiso::with('roles')->get()->pluck('roles','id')->toArray();
        return view('admin.Permiso-rol.index',compact('rols','permisos','permisosRols'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function guardar(Request $request)
    {
        if($request->ajax()){
            $permisos= new Permiso();
            if($request->input('estado')==1){
                $permisos->find($request->input('permiso_id'))->roles()->attach($request->input('rol_id'));
                return response()->json(['respuesta' => 'El rol se asigno correctamente']);
            }else{
                $permisos->find($request->input('permiso_id'))->roles()->detach($request->input('rol_id'));
                return response()->json(['respuesta' => 'El rol se elimino correctamente']);
            }
        }else{
            abort(404);
        }
    }

}
