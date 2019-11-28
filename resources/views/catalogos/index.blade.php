@extends('layouts.app')
@section('titulo') Catalogs @endsection
@section('content')
<div class="col-md-12">
        <div class="form-row">
            <div class="col-md-3">
              <label for="validationDefault02">Catalog:</label>
              <select class="form-control" id="identificador" name="identificador" required="">
                    <option value="" >select option</option>
                    <option value="1" >School Cycle</option>
                    <option value="2" >Documents</option>
                    <option value="3" >Grade</option>
                    <option value="4" >Groups</option>
              </select>
            </div>
            <div class="col-md-3">
              <label for="validationDefaultUsername">Value</label>
              <div class="input-group">
                <input type="text" class="form-control" name="valor" id="valor" required="">
              </div>
            </div>
            <div class="col-md-3">
              <label for="validationDefaultUsername">&nbsp;</label>
              <div class="input-group">
                <button  class="btn btn_verde pull-right" onclick="guarda_catalogo()"><i class="fa fa-save"></i>&nbsp;Save</button>
              </div>
            </div>
        </div>
</div>
<br>
<div class="col-md-12" id="cat_formas">
    @include('catalogos.table')
</div>
@endsection

