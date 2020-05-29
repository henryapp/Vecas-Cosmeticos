<div class="form-group row">
    <label for="nombre_mar"  class="col-lg-3 col-form-label  requerido">Nombre de la Marca</label>
    <div class="col-lg-8">
    <input type="text" name="nombre_mar" id="nombre_mar" class="form-control" value="{{old('nombre_mar',$data->nombre_mar ??  '')}}" required/>
    </div>
</div>