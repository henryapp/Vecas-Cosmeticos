<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidacionSubcategoria;
use App\Models\Categoria;
use App\Models\SubCategoria;
use Illuminate\Http\Request;

class SubCategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        can('listar-sub-categoria');
        $categorias=Categoria::orderBY('id')->pluck('nombre_cat','id')->toArray();
        $datas=SubCategoria::orderBy('id')->get();
        return view('sub_categoria.index',compact('datas','categorias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function crear()
    {
        can('crear-sub-categoria');
        $categorias=Categoria::orderBY('id')->get();
        return view('sub_categoria.crear',compact('categorias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function guardar(ValidacionSubcategoria $request)
    {
        SubCategoria::create($request->all());
        return redirect('sub_categoria/crear')->with('mensaje','Sub-Categoria creada con exito');
    }

   

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editar($id)
    {
        can('editar-sub-categoria');
        $categorias=Categoria::orderBY('id')->get();
        $data=SubCategoria::find($id);
        return view('sub_categoria.editar',compact('data','categorias'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function actualizar(ValidacionSubcategoria $request, $id)
    {
        SubCategoria::findOrFail($id)->update($request->all());
        return redirect('sub_categoria')->with('mensaje','Sub-Categoria actualizada con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function eliminar(Request $request, $id)
    {
        can('eliminar-sub-categoria');
        if ($request->ajax()) {
            if (SubCategoria::destroy($id)) {
                return response()->json(['mensaje' => 'ok']);
            } else {
                return response()->json(['mensaje' => 'ng']);
            }
        } else {
            abort(404);
        }
       
    }
}
