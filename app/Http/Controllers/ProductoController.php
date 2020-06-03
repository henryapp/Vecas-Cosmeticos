<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidacionProducto;
use App\Models\Admin\Estado;
use App\Models\Categoria;
use App\Models\Marca;
use App\Models\Producto;
use App\Models\ProductoSubCategoria;
use App\Models\SubCategoria;
use Illuminate\Http\Request;


class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        can('listar-producto');
        $datas=Producto::orderBy('id')->get();
        return view('producto.index',compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function crear()
    {
        can('crear-producto');
        $estados=Estado::orderBy('id')->get();
        $marcas=Marca::orderBy('id')->get();
        $categorias=Categoria::orderBy('id')->get();
        $subcategorias=Categoria::orderBy('id')->get();
        return view('producto.crear',compact('estados','marcas','subcategorias','categorias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function guardar(ValidacionProducto $request)
    {
        dd($request);
        $producto = Producto::create($request->all());
        $sub_categorias = explode(',', $request->sub_categoria_id);

        for ($i=0;$i<count($sub_categorias);$i++) {
            ProductoSubCategoria::create(
                array(
                    'sub_categoria_id' => $sub_categorias[$i],
                    'producto_id' => $producto->id
                    )
            );
        }
        return redirect('admin/estado')->with('mensaje','producto creada con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function ver($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editar($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function actualizar(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function eliminar($id)
    {
        //
    }

    public function sub_categorias($id){
        $categorias = SubCategoria::where("categoria_id", $id)->get();
        return json_encode($categorias);
    }
}
