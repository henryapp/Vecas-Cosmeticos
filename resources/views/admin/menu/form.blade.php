<div class="form-group row">
    <label for="nombre"  class="col-lg-3 col-form-label  requerido">Nombre</label>
    <div class="col-lg-8">
    <input type="text" name="nombre" id="nombre" class="form-control" value="{{old('nombre')}}" required/>
    </div>
</div>
<div class="form-group row">
    <label for="url" class="col-lg-3 col-form-label requerido">Url</label>
    <div class="col-lg-8">
      <input type="text" name="url" id="url" class="form-control" value="{{old('url')}}" required/>
    </div>
</div>
<div class="form-group row">
    <label for="icono"  class="col-lg-3 col-form-label">Icono</label>
    <div class="col-lg-8">
      <input type="text" name="icono" id="icono" class="form-control" value="{{old('icono')}}" />
    </div>
      <div class="col-lg-1">
        <span id="mostrar-icono" class="fas {{old("icono")}}"></span>
        
      </div>      
</div>
<div class="form-group row">
    <label for="tipo_menu"  class="col-lg-3 col-form-label requerido">Tipo Menu</label>
    <div class="col-lg-8">
      <input type="text" name="tipo_menu" id="tipo_menu" class="form-control" value="{{old('tipo_menu')}}" required/>
    </div>
</div>