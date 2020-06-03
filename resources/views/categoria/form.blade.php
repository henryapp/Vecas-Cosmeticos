<div class="form-group row">
    <label for="nombre_cat"  class="col-lg-3 col-form-label  requerido">Nombre de la Categoria</label>
    <div class="col-lg-8">
    <input type="text" name="nombre_cat" id="nombre_cat" class="form-control" value="{{old('nombre_cat',$data->nombre_cat ??  '')}}" required/>
    </div>
</div>