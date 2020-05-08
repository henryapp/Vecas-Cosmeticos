<div class="form-group row">
    <label for="nombre_rol"  class="col-lg-3 col-form-label  requerido">Nombre del Rol</label>
    <div class="col-lg-8">
    <input type="text" name="nombre_rol" id="nombre_rol" class="form-control" value="{{old('nombre_rol',$data->nombre_rol ??  '')}}" required/>
    </div>
</div>