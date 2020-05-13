@extends("theme.$themes.layout")
@section('titulo')
    Administracion
@endsection

@section('contenido')
<div class="row">
    <div class="col-lg-12">
        @include('includes.mensaje')
        <div class="card card-info">
            <div class="card-header">
            <h3 class="card-title">Bienvenido {{session()->get('nombre_usuario')}}</h3>
            @csrf
            </div>
                <!-- /.card-header -->
            <div class="card-body ">
                
            </div>
        </div>
    </div> 
</div>
@endsection