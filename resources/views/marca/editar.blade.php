@extends("theme.$themes.layout")
@section('titulo')
    Marca
@endsection

@section("scripts")
<script src="{{asset("assets/pages/scripts/admin/index.js")}}" type="text/javascript"></script>
@endsection

@section('contenido')
    <div class="row">
        <div class="col-lg-12">
            @include('includes.form-error')
            @include('includes.mensaje')
            <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Editar Marca </h3>
                  <div class="card-tools">
                    <a href="{{route('marca')}}" class="btn btn-block bg-gradient-danger btn-sm">
                        <i class="fas fa-arrow-left"></i> Regresar
                    </a>
                </div>
                </div>
                <!-- /.card-header -->
                <form action="{{route('actualizar_marca',['id'=>$data->id])}}" id="form-general" class="form-horizontal" method="POST" autocomplete="off">
                    @csrf @method("put")
                    <div class="card-body ">
                    @include('marca.form')
                    </div>
                    <div class="card-footer">
                        <div class="col-lg-3">
                        </div>
                        <div class="col-lg-6">
                            @include('includes.boton-form-editar')
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div> 
@endsection