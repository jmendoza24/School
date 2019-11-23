@extends('layouts.app')
@section('titulo') Catálogos @endsection
@section('content')
<div class="col-md-12">
        <div class="form-row">
            <div class="col-md-3">
              <label for="validationDefault02">Catálogo:</label>
              <select class="form-control" id="identificador" name="identificador" required="">
                    <option value="" >Seleccione una opción...</option>
                    <option value="1" >Ciclo</option>
                    <option value="2" >Materias</option>
                    <option value="3" >Grados</option>
                    <option value="4" >Grupos</option>
              </select>
            </div>
            <div class="col-md-3">
              <label for="validationDefaultUsername">Valor</label>
              <div class="input-group">
                <input type="text" class="form-control" name="valor" id="valor" required="">
              </div>
            </div>
            <div class="col-md-3">
              <label for="validationDefaultUsername">&nbsp;</label>
              <div class="input-group">
                <button  class="btn btn-primary pull-right" onclick="guarda_catalogo()"><i class="fa fa-save"></i>&nbsp;Guardar</button>
              </div>
            </div>
        </div>
</div>
<br>
<div class="col-md-12" id="cat_formas">
    @include('catalogos.table')
</div>
@endsection

