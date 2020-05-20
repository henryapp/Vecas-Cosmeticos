@extends("theme.$themes.layout")
@section('titulo')
Sistema Permioso
@endsection

@section("scripts")
<script src="{{asset("assets/pages/scripts/admin/index.js")}}" type="text/javascript"></script>
@endsection

@section('contenido')
    <div class="row">
        <div class="col-lg-12">
            @include('includes.mensaje')
            <div class="card card-info">
                <div class="card-header">
                  <h3 class="card-title">Permisos</h3>
                  <div class="card-tools">
                    <a href="{{route('crear_permiso')}}" class="btn btn-block bg-gradient-success btn-sm">
                        <i class="fas fa-plus"></i> Crear permisos
                    </a>
                </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-striped table-bordered table-hover" id="tabla-data">
                        <thead>
                            <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Slug</th>
                            <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($permisos as $permiso)
                            <tr>
                                <td>{{$permiso->id}}</td>
                                <td>{{$permiso->nombre_per}}</td>
                                <td>{{$permiso->slug}}</td>
                                <td class="ajustar">
                                    <a href="{{route('editar_permiso',['id'=>$permiso->id])}}" class="btn-accion-tabla tooltipsC" title="Editar este registro">
                                        <i class="fas fa-edit"></i>
                                     </a>
                                    <form action="{{route("eliminar_permiso",['id'=>$permiso->id])}}"  class="d-inline form-eliminar" method="POST">
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