<div class="row">
  <div class="col-sm-6">
      <div class="form-group">
          <label>Eligie la categorra que pertenecera</label>
                <select class="form-control select2bs4" name="categoria_id" id="categoria_id" style="width: 100%;">
                  @foreach ($categorias as $categoria)
                  @if (Request::route()->getName() == "editar_subcate")
                    @if($data->categoria->id == $categoria->id)
                      <option value="{{ $categoria->id }}" selected>{{ $categoria->nombre_cat }}</option>
                    @else
                      <option value="{{ $categoria->id }}">{{ $categoria->nombre_cat }}</option>
                    @endif
                    @else
                      <option value="{{ $categoria->id }}">{{ $categoria->nombre_cat }}</option>
                    @endif
                  @endforeach
                </select>
        </div>
  </div>
</div>

<div class="form-group row">
  <div class="col-lg-8">
      <label for="nombre_subCate"  class="col-lg-6 col-form-label  requerido">Ingresa Sub_Categoria</label>
      @if (Request::route()->getName() == "editar_subcate")
        <input type="text" name="nombre_subCate" id="nombre_subCate" class="form-control" value="{{ $data->nombre_subCate }}"  required/>
      @else 
      <input type="text" name="nombre_subCate" id="nombre_subCate" class="form-control" value=""  required/>
      @endif
  </div>
</div>