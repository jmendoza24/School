@extends('layouts.app')
@section('titulo')
        Alumnos
@endsection
@section('content')
    <div class="col-md-12 ">
       <h1 class="pull-right">
             <a class="btn btn_morado pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('alumnos.create') !!}"> <i class="fa fa-plus"></i> Alumno</a>
        </h1>
    </div><br>
    <div class="col-md-12 ">
		<ul class="nav nav-tabs nav-underline no-hover-bg nav-justified">
		  <li class="nav-item">
		    <a class="nav-link active" id="active-tab32" data-toggle="tab" href="#active32"  aria-controls="active32"
		    aria-expanded="true"><i class="ft-user"></i>Preescolar</a>
		  </li>
		  <li class="nav-item">
		    <a class="nav-link" id="link-tab32" data-toggle="tab" href="#link32" aria-controls="link32"
		    aria-expanded="false"><i class="ft-user"></i>Primaria</a>
		  </li>
		</ul>
		<div class="tab-content px-1 pt-1 " >
			<div role="tabpanel" class="tab-pane active in" id="active32" aria-labelledby="active-tab32" aria-expanded="true" >
			    <h4 class="form-section">Preescolar</h4><br>
			      <div class="row" style="background: #F0E6E4;padding-top: 14px">
			      	@foreach($prescolar as $p)
				      	<div class="col-xl-2">
				            <div class="card">
				              <div class="card-content">
				                <div class="card-body">
				                  <div class="media">
				                    <div class="media-body text-left w-100">
				                      <h2 class="primary">{{ $p->conteos }}</h2>
				                      <span>{{ $p->grado }} - {{ $p->grupo }}</span>

				                    </div>
				                    <div class="media-right media-middle" onclick="tabla_alumnos(1,{{ $p->id_grado }},{{ $p->id_grupo }})" style="cursor: pointer;">
				                      <i class="icon-user-follow primary font-large-2 float-right"></i>
				                    </div>
				                  </div>
				                </div>
				              </div>
				            </div>
				          </div>
			      	@endforeach
			            
			</div>
		</div>
			<div class="tab-pane" id="link32" role="tabpanel" aria-labelledby="link-tab32" aria-expanded="false">
				<h4 class="form-section">Primaria</h4><br>
				<div class="row" style="background-color: #F0E6E4;padding-top: 14px">
			      	@foreach($primaria as $pr)
				      	<div class="col-xl-2">
				            <div class="card">
				              <div class="card-content">
				                <div class="card-body">
				                  <div class="media">
				                    <div class="media-body text-left w-100">
				                      <h2 class="warning">{{ $pr->conteos }}</h2>
				                      <span>{{ $pr->grado }} - {{ $pr->grupo }}</span>

				                    </div>
				                    <div class="media-right media-middle" onclick="tabla_alumnos(2,{{ $pr->id_grado }},{{ $pr->id_grupo }})" style="cursor: pointer;">
				                      <i class="icon-user-follow warning font-large-2 float-right"></i>
				                    </div>
				                  </div>
				                </div>
				              </div>
				            </div>
				          </div>
			      	@endforeach
			            
			</div>
  			</div>
    </div><br><hr>
    <div style="overflow: auto; display: none;" id="tabla_alumnos" >
    	@include('alumnos.table')
    </div>
@endsection





