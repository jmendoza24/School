 @extends('layouts.app')
@section('titulo') Reportes @endsection
@section('content')
<div class="col-md-12" style="padding-top:15px; background: #F0E6E4;">
	<div class="row">
        <div class="col-xl-6 col-md-12">
          <div class="card overflow-hidden">
            <div class="card-content">
              <div class="media align-items-stretch">
                <div class="media-body p-2">
                  <h4>Alumnos</h4>
                  <span>Selecciona las opciones</span>
                  <div class="row">
                  	<div class="media-right media-middle">
	                  <select class="form-control">
	                  	<option value="">Nivel</option>
	                  	<option value="1">Preescolar</option>
	                  	<option value="2">Primaria</option>
	                  </select>
	                </div>
                  	<div class="media-right media-middle" style="padding-left: 5px;">
	                  <select class="form-control">
	                  	<option value="">Grado</option>
	                  </select>
	                </div>
	                <div class="media-right media-middle" style="padding-left: 5px;">
	                  <select class="form-control">
	                  	<option value="">Grupo</option>
	                  </select>
	                </div>
                  </div>
                </div>
                <div class=" azul p-2 media-middle">
                  <i class="ft-user font-large-2 white" style="cursor: pointer;"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-6 col-md-12">
          <div class="card">
            <div class="card-content">
              <div class="media align-items-stretch">
                <div class="media-body p-2">
                  <h4>Asistencia</h4>
                  <span>Seleccione el rango de fechas</span>
                  <div class="row">
                  	<div class="media-right media-middle">
                  		<label>Fecha inicio:</label>
	                  <input type="date" name="" class="form-control" >
	                </div>
	                <div class="media-right media-middle" style="padding-left: 5px;">
	                	<label>Fecha final:</label>
	                  <input type="date" name="" class="form-control">
	                </div>
                  </div>
                </div>
                <div class="naranja p-2 media-middle">
                </a>  <i class="icon-speech font-large-2  white" style="cursor: pointer;"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
</div>

@endsection

