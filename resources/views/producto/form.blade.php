<div class="row">
    <div class="col-sm-6">
        <div class="form-group">
            <label>Marca</label>
                  <select class="form-control select2bs4" style="width: 100%;">
                    @foreach ($marcas as $marca)
                  <option value="{{$marca->id}}">{{$marca->nombre_mar}}</option>
                    @endforeach
                  </select>
          </div>
    </div>
</div>
<div class="row">
<!-- /.row -->
    <div class="col-12 col-sm-6">
        <div class="form-group">
            <label>Selecionar Categoria</label>
            <select class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;">
                <option selected="selected">Alabama</option>
                <option>Alaska</option>
                <option>California</option>
                <option>Delaware</option>
                <option>Tennessee</option>
                <option>Texas</option>
                <option>Washington</option>
            </select>
        </div>
    </div>
    <div class="col-12 col-sm-6">
        <div class="form-group">
            <label>Selecione Sub Categorias</label>
            <div class="select2-purple">
                <select class="select2" multiple="multiple" data-placeholder="Select a State" data-dropdown-css-class="select2-purple" style="width: 100%;">
                    <option>Alabama</option>
                    <option>Alaska</option>
                    <option>California</option>
                    <option>Delaware</option>
                    <option>Tennessee</option>
                    <option>Texas</option>
                    <option>Washington</option>
                </select>
            </div>
        </div>
    </div>
</div>
<div class="form-group row">
    <div class="col-lg-8">
        <label for="nombre"  class="col-lg-3 col-form-label  requerido">Nombre Producto</label>
        <input type="text" name="nombre_per" id="nombre_per" class="form-control"  required/>
    </div>
</div>
<div class="row">
    <div class="col-sm-8">
      <!-- textarea -->
      <div class="form-group">
        <label>Descripcion</label>
        <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
      </div>
    </div>
</div>
<div class="card-body">
    <div class="row">
        <div class="col-6">
            <label>Catidad de productos</label>
            <input type="text" class="form-control" placeholder="Cantidad">
        </div>
    </div>
</div>
<div class="card-body">
    <label>Descripcion</label>
    <div class="row">
        <div class="input-group col-6">
            <div class="input-group-prepend">
                <span class="input-group-text">$</span>
            </div>
            <input type="text" class="form-control" placeholder="Costo  Producto">
        </div>
        <div class="input-group col-6">
            <div class="input-group-prepend">
                <span class="input-group-text">$</span>
            </div>
            <input type="text" class="form-control" placeholder="Precio Venta">
        </div>
    </div>
</div>
