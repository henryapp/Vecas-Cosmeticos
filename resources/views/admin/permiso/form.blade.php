<div class="form-group row">
    <label for="nombre"  class="col-lg-3 col-form-label  requerido">Nombre Permiso</label>
    <div class="col-lg-8">
    <input type="text" name="nombre_per" id="nombre_per" class="form-control" value="{{old('nombre_per',$data->nombre_per ?? '')}}" required/>
    </div>
</div>
<div class="form-group row">
    <label for="url" class="col-lg-3 col-form-label requerido">Slug</label>
    <div class="col-lg-8">
      <input type="text" name="slug" id="slug" class="form-control" value="{{old('slug',$data->slug ?? '')}}" required/>
    </div>
</div>