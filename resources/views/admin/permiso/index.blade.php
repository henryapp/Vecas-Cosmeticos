@extends("theme.$themes.layout")
@section('titulo')
    Permisos
@endsection
@section('contenido')
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-info">
                <div class="card-header">
                  <h3 class="card-title">Permisos</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                            <th>ID</th>
                            <th>nombre</th>
                            <th>Slug</th>
                            <th></th>
                        </thead>
                        <tbody>
                            @foreach ($permisos as $permiso)
                            <tr>
                                <td>{{$permiso->id}}</td>
                                <td>{{$permiso->nombre_per}}</td>
                                <td>{{$permiso->slug}}</td>
                                <td></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div> 
@endsection