@extends("theme.$themes.layout")
@section('titulo')
  Creando Productos
@endsection
@section("styles")
 <!-- Select2 -->
 <link rel="stylesheet" href="{{asset("assets/$themes/plugins/select2/css/select2.min.css")}}">
 <link rel="stylesheet" href="{{asset("assets/$themes/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css")}}">
 <!-- Theme style -->
 <link rel="stylesheet" href="{{asset("assets/$themes/dist/css/adminlte.min.css")}}">
@endsection
@section("scripts")
<!-- Select2 -->
<script src="{{asset("assets/$themes/plugins/select2/js/select2.full.min.js")}}"></script>
<!-- Page script -->
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })
    
        $('#categoria_id').on('change',function(e){
            var sub_categoria=$("#sub_categoria_id");
            var categoria=$("#categoria_id").find('option:selected');
            var ruta="{{ url('/categoria/sub_categorias') }}/"+categoria.val();
            $.get(ruta,function(res){
                res = JSON.parse(res);
                sub_categoria.empty();
                $(res).each(function(key,value){
                    sub_categoria.append("<option value="+value.id+">"+value.nombre_subCate+"</option>");
                });
                
            });            
        });
    
  })

</script>
@endsection
@section('contenido')
  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- SELECT2 EXAMPLE -->
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Crear Producto</h3>
                <div class="card-tools">
                    <a href="{{route('producto')}}" class="btn btn-block bg-gradient-danger btn-sm">
                        <i class="fas fa-arrow-left"></i> Regresar
                    </a>
                </div>
            </div>
            <!-- /.card-header -->
            <form action="{{route("guardar_producto")}}" id="form-general" class="form-horizontal" method="POST" autocomplete="off" role="form">
            @csrf
                <div class="card-body">
                    @include('producto.form')
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