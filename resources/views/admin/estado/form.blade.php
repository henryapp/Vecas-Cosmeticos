<div class="form-group row">
    <label for="nombre_rol"  class="col-lg-3 col-form-label  requerido">Nombre del Estado</label>
    <div class="col-lg-8">
    <input type="text" name="nombre_estado" id="nombre_estado" class="form-control" value="{{old('nombre_estado',$data->nombre_estado ??  '')}}" required/>
    </div>
</div>