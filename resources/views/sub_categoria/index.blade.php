@extends("theme.$themes.layout")
@section('titulo')
    Sub-Categoria
@endsection

@section("scripts")
<script src="{{asset("assets/pages/scripts/admin/index.js")}}" type="text/javascript"></script>
@endsection

@section('contenido')
    <div class="row">
        <div class="col-lg-12">
            @include('includes.mensaje')
            @include('includes.form-error')
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">Sub-Categoria</h3>
                    <div class="card-tools">
                        <a href="{{route('crear_subcate')}}" class="btn btn-block bg-gradient-success btn-sm">
                            <i class="fas fa-plus"></i> Nuevo Registro
                        </a>
                    </div>
                </div>
                <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-striped table-bordered table-hover" id="tabla-data">
                    <thead>
                        <tr>
                        <th>Sub-Categoria</th>
                        <th>Categoria </th>            
                        <th class="width70"></th>
                    </thead>
                    <tbody>
                        @foreach ($datas as $data)
                        <tr>
                            <td>{{$data->nombre_subCate}}</td>
                            <td>{{$data->categoria->nombre_cat}}</td>
                            <td>
                                <a href="{{route('editar_subcate',['id'=>$data->id])}}" class="btn-accion-tabla tooltipsC" title="Editar este registro">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form action="{{route('eliminar_subcate',['id'=>$data->id])}}"  class="d-inline form-eliminar" method="POST">
                                    @csrf @method('DELETE')
                                    <button type="submit" class="btn-accion-tabla eliminar tooltipsC" title="Eliminar este registro">
                                        <i class="fas fa-trash-alt text-danger"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
              </div>
            </div>
        </div>
    </div> 
@endsection