@extends("theme.$themes.layout")
@section('titulo')
  Creando Sub-Categoria
@endsection
@section("styles")
 <!-- Select2 -->
 <link rel="stylesheet" href="{{asset("assets/$themes/plugins/select2/css/select2.min.css")}}">
 <link rel="stylesheet" href="{{asset("assets/$themes/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css")}}">
 <!-- Theme style -->
 <link rel="stylesheet" href="{{asset("assets/$themes/dist/css/adminlte.min.css")}}">
@endsection
@section("scripts")
<script src="{{asset("assets/pages/scripts/admin/crear.js")}}" type="text/javascript"></script>
<!-- Select2 -->
<script src="{{asset("assets/$themes/plugins/select2/js/select2.full.min.js")}}"></script>
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })
  })
</script>
@endsection
@section('contenido')
  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      @include('includes.form-error')
      @include('includes.mensaje')
      <!-- SELECT2 EXAMPLE -->
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Crear Sub-Categoria</h3>
                <div class="card-tools">
                    <a href="{{route('sub_categoria')}}" class="btn btn-block bg-gradient-danger btn-sm">
                        <i class="fas fa-arrow-left"></i> Regresar
                    </a>
                </div>
            </div>
            <!-- /.card-header -->
            <form action="{{route("guardar_subcate")}}" id="form-general" class="form-horizontal" method="POST" autocomplete="off" role="form">
            @csrf
                <div class="card-body">
                    @include('sub_categoria.form')
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
</section>
@endsection