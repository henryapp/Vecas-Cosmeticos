<div class="row">
    <div class="col-sm-6">
        <div class="form-group">
            <label>Marca</label>
                  <select class="form-control select2bs4" name="marca_id" id="marca_id" style="width: 100%;">
                    @foreach ($marcas as $marca)
                  <option value="{{$marca->id}}">{{$marca->nombre_mar}}</option>
                    @endforeach
                  </select>
          </div>
    </div>
</div>
<div class="row">
    <div class="col-12 col-sm-6">
        <div class="form-group">
            <label>Ingrese Categoria</label>
            <select class="form-control select2bs4" name="categoria_id" id="categoria_id" style="width: 100%;">
                <option selected="" value="">[Seleccione la categoría]</option>
              @foreach ($categorias as $categoria)
            <option value="{{$categoria->id}}">{{$categoria->nombre_cat}}</option>
              @endforeach
            </select>
        </div>
    </div>
    <div class="col-12 col-sm-6">
        <div class="form-group">
            <label>Selecione Sub Categorias</label>
            <div class="select2-purple">
                <select class="select2" name="sub_categoria_id" id="sub_categoria_id" multiple="multiple" data-placeholder="Select a State" data-dropdown-css-class="select2-purple" style="width: 100%;">
                   
                </select>
            </div>
        </div>
    </div>
</div>
<div class="form-group row">
    <div class="col-lg-8">
        <label for="nombre"  class="col-lg-3 col-form-label  requerido">Nombre Producto</label>
        <input type="text" name="nombre_producto" id="nombre_producto" class="form-control"  required/>
    </div>
</div>
<div class="row">
    <div class="col-sm-8">
      <div class="form-group">
        <label>Descripcion</label>
        <textarea class="form-control"  name="descripcion" id="descripcion" rows="3" placeholder="Enter ..."></textarea>
      </div>
    </div>
</div>
<div class="row">
    <div class="col-6">
        <label>Catidad de productos</label>
        <input type="text" class="form-control"  name="existencia" id="existencia" placeholder="Cantidad">
    </div>
    <div class="col-sm-6">
        <!-- select -->
        <div class="form-group">
            <label>Selecione el estado</label>
            <select class="form-control" name="estado_id" id="estado_id">
            @foreach ($estados as $estado)
            <option value="{{$estado->id}}">{{$estado->nombre_estado}}</option>
                @endforeach
            </select>
        </div>
        </div>
</div>
<label>Costos</label>
<div class="row">
    <div class="input-group col-6">
        <div class="input-group-prepend">
            <span class="input-group-text">$</span>
        </div>
        <input type="text"  name="precio_costo" id="precio_costo" class="form-control" placeholder="Costo  Producto">
    </div>
    <div class="input-group col-6">
        <div class="input-group-prepend">
            <span class="input-group-text">$</span>
        </div>
        <input type="text" name="precio_venta" id="precio_venta" class="form-control" placeholder="Precio Venta">
    </div>
</div>
