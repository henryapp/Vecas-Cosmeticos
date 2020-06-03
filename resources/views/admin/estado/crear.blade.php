@extends("theme.$themes.layout")
@section('titulo')
    Sistema Estado
@endsection

@section("scripts")
<script src="{{asset("assets/pages/scripts/admin/crear.js")}}" type="text/javascript"></script>
@endsection

@section('contenido')
    <div class="row">
        <div class="col-lg-12">
            @include('includes.form-error')
            @include('includes.mensaje')
            <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Crear Estado</h3>
                    <div class="card-tools">
                        <a href="{{route('estado')}}" class="btn btn-block bg-gradient-danger btn-sm">
                            <i class="fas fa-arrow-left"></i> Regresar
                        </a>
                    </div>
                </div>
                <!-- /.card-header -->
                <form action="{{route("guardar_estado")}}" id="form-general" class="form-horizontal" method="POST" autocomplete="off">
                    @csrf
                    <div class="card-body ">
                    @include('admin.estado.form')
                    </div>
                    <div class="card-footer">
                        <div class="col-lg-3">
                        </div>
                        <div class="col-lg-6">
                            @include('includes.boton-form-crear')
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div> 
@endsection