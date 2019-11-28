
<ul class="nav nav-tabs nav-underline no-hover-bg nav-justified">
  <li class="nav-item">
    <a class="nav-link active" id="active-tab32" data-toggle="tab" href="#active32" aria-controls="active32"
    aria-expanded="true"><i class="ft-user"></i> Información Alumno</a>
  </li>
    @if($editar ==1)
     <input type="hidden" name="id_alumno" id="id_alumno" value="{{ $id }}">

  <li class="nav-item">
    <a class="nav-link" id="link-tab32" data-toggle="tab" href="#link32" aria-controls="link32"
    aria-expanded="false"><i class="ft-mail"></i> Contacto</a>
  </li>

  <li class="nav-item">
    <a class="nav-link" id="linkOpt-tab2" data-toggle="tab" href="#linkOpt2" aria-controls="linkOpt2"><i class="fa fa-file-text-o"></i> Documentación</a>
  </li>
  @endif
</ul>
<div class="tab-content px-1 pt-1">
<div role="tabpanel" class="tab-pane active in" id="active32" aria-labelledby="active-tab32" aria-expanded="true">
    <h4 class="form-section"><i class="fa fa-pencil"></i> Información Genereal</h4>
   <div class="row">
    <input type="hidden" name="activo" id="activo" value="1">
      <div class="col-md-6">
          <div class="form-group row">
            <label class="col-md-3 label-control" for="userinput2">#Control</label>
            <div class="col-md-9">
            {!! Form::text('num_control', null, ['class' => 'form-control','required'=>'required']) !!}
            <div class="invalid-feedback">Este campo es requerido.</div>

            </div>
          </div>
      </div>
      <div class="col-md-6">
        <div class="form-group row">
          <label class="col-md-3 label-control" for="userinput1">Nivel Estudio</label>
          <div class="col-md-9">
            <select class="form-control" name="nivel_estudio" id="nivel_estudio">
                    <option value="0" selected="">Elige una opción</option>
                    @if(!empty($Alumnos))
                        <option value="1" {{  ($Alumnos->nivel_estudio==1) ? 'selected' : '' }}>Preescolar</option>
                        <option value="2" {{  ($Alumnos->nivel_estudio==2) ? 'selected' : '' }}>Primaria</option>
                    @else
                        <option value="1">Preescolar</option>
                        <option value="2">Primaria</option>
                    @endif
                    
            </select>

          </div>
        </div>
      </div>  
    </div>
    <div class="row">
      <div class="col-md-6">
          <div class="form-group row">
            <label class="col-md-3 label-control" for="userinput2">Grado</label>
            <div class="col-md-9">
                 <select class="form-control" name="id_grado" id="id_grado">
                    <option value="0" selected="">Elige una opción</option>
                           @if(!empty($Alumnos))
                              @foreach($grados as $tipo)
                                 <option 
                                      value="{{ $tipo->id }}" 
                                      {{ old('id_grado', $Alumnos->id_grado) == $tipo->id ? 'selected' : '' }}
                                 >{{ $tipo->valor }}</option>
                              @endforeach   
                              @else
                               @foreach($grados as $tipo)

                                 <option 
                                      value="{{ $tipo->id }}" 
                                      {{ old('id_grado')}}
                                 >{{ $tipo->valor }}</option>
                              @endforeach   
                              @endif

                    </select>

                </select>
            <div class="invalid-feedback">Este campo es requerido.</div>
            </div>
          </div>
      </div>
      <div class="col-md-6">
        <div class="form-group row">
          <label class="col-md-3 label-control" for="userinput1">Grupo</label>
          <div class="col-md-9">
            <select class="form-control" name="id_grupo" id="id_grupo">
                    <option value="0" selected="">Elige una opción</option>
                      @if(!empty($Alumnos))
                      @foreach($grupos as $tipo)
                         <option 
                              value="{{ $tipo->id }}" 
                              {{ old('id_grupo', $Alumnos->id_grupo) == $tipo->id ? 'selected' : '' }}
                         >{{ $tipo->valor }}</option>
                      @endforeach   
                      @else
                       @foreach($grupos as $tipo)

                         <option 
                              value="{{ $tipo->id }}" 
                              {{ old('id_grupo')}}
                         >{{ $tipo->valor }}</option>
                      @endforeach   
                      @endif
 
            </select>
            <div class="invalid-feedback">Este campo es requerido.</div>
          </div>
        </div>
      </div>  
    </div>

    <div class="row">
      <div class="col-md-6">
        <div class="form-group row">
          <label class="col-md-3 label-control" for="userinput1">Ciclo</label>
          <div class="col-md-9">
            <select class="form-control" name="id_ciclo" id="id_ciclo">
                <option value="0" selected="">Elige una opción</option>
                    @if(!empty($Alumnos))
                      @foreach($ciclos as $tipo)
                         <option 
                              value="{{ $tipo->id }}" 
                              {{ old('id_ciclo', $Alumnos->id_ciclo) == $tipo->id ? 'selected' : '' }}
                         >{{ $tipo->valor }}</option>
                      @endforeach   
                      @else
                       @foreach($ciclos as $tipo)

                         <option 
                              value="{{ $tipo->id }}" 
                              {{ old('id_ciclo')}}
                         >{{ $tipo->valor }}</option>
                      @endforeach   
                      @endif

            </select>
            <div class="invalid-feedback">Este campo es requerido.</div>
          </div>
        </div>
      </div>
      <div class="col-md-6">
          
      </div>  
    </div>
    <div class="row">
      
      <div class="col-md-6">
          <div class="form-group row">
            <label class="col-md-3 label-control" for="userinput2">Nombre Alumno</label>
            <div class="col-md-9">
            {!! Form::text('nombre_alumno', null, ['class' => 'form-control','required'=>'required']) !!}
            <div class="invalid-feedback">Este campo es requerido.</div>
            </div>
          </div>
      </div> 
      <div class="col-md-6">
        <div class="form-group row">
          <label class="col-md-3 label-control" for="userinput1">Apellidos Alumno</label>
          <div class="col-md-9">
            {!! Form::text('apellidos_alumno', null, ['class' => 'form-control','required'=>'required']) !!}
            <div class="invalid-feedback">Este campo es requerido.</div>
          </div>
        </div>
      </div> 
    </div>
   <div class="row">
      
      <div class="col-md-6">
          <div class="form-group row">
            <label class="col-md-3 label-control" for="userinput2">Fecha Nacimiento</label>
            <div class="col-md-9">
             <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" class="form-control" value="{{ (!empty($Alumnos)) ? substr($Alumnos->fecha_nacimiento,0,10) :date('Y-m-d') }}">

            </div>
          </div>
      </div> 
      <div class="col-md-6">
    
      </div> 
    </div>

    @section('scripts')
        <script type="text/javascript">
            $('#fecha_nacimiento').datetimepicker({
                format: 'YYYY-MM-DD HH:mm:ss',
                useCurrent: false
            })
        </script>
    @endsection
   
    <h4 class="form-section"><i class="fa fa-map-marker"></i> Ubicación</h4>
    <div class="row">
      <div class="col-md-6">
        <div class="form-group row">
          <label class="col-md-3 label-control" for="userinput1">Estado</label>
          <div class="col-md-9">
            <select class="form-control" name="id_estado" id="id_estado" onchange="busca_mun()">
                <option value="0" selected="">Elige una opción</option>
                    @if(!empty($Alumnos->id_estado))
                      @foreach($estados as $tipo)
                         <option 
                              value="{{ $tipo->id }}" 
                              {{ old('id_estado', $Alumnos->id_estado) == $tipo->id ? 'selected' : '' }}
                         >{{ $tipo->estado }}</option>
                      @endforeach   
                      @else
                       @foreach($estados as $tipo)

                         <option 
                              value="{{ $tipo->id }}" 
                              {{ old('id_estado')}}
                         >{{ $tipo->estado }}</option>
                      @endforeach   
                      @endif
             </select>
          </div>
        </div>
      </div>
      <div class="col-md-6">
          <div class="form-group row">
            <label class="col-md-3 label-control" for="userinput2">Municipio</label>
            <div class="col-md-9">
                 <select class="form-control" id="id_municipio" name="id_municipio">
                    <option value="0" >Elige una opción</option> 
                     @if(!empty($Alumnos->id_municipio))
                      @foreach($municipios as $idmun)
                        <option value="{{ $idmun->id }}" 
                             {{ old('id_municipio', $Alumnos->id_municipio) == $idmun->id ? 'selected' : '' }}
                         >{{ $idmun->municipio }}</option>
                      @endforeach
                   @endif
                 </select>
            </div>
          </div>
      </div> 
    </div>
    <div class="row">
      <div class="col-md-6">
        <div class="form-group row">
          <label class="col-md-3 label-control" for="userinput1">CP</label>
          <div class="col-md-9">
            {!! Form::number('cp', null, ['max'=>'100000','min'=>'0','class' => 'form-control']) !!}
          </div>
        </div>
      </div>
      <div class="col-md-6">
          <div class="form-group row">
            <label class="col-md-3 label-control" for="userinput2">Dirección</label>
            <div class="col-md-9">
            {!! Form::textarea('direccion', null, ['class' => 'form-control','required'=>'required']) !!}
             <div class="invalid-feedback">Este campo es requerido.</div>

            </div>
          </div>
      </div>  
    </div> 
    <h4 class="form-section"><i class="fa fa-user-md"></i> Información Adicional</h4>
    
    <div class="row">
      <div class="col-md-6">
          <div class="form-group row">
            <label class="col-md-3 label-control" for="userinput2">Tipo Sangre</label>
            <div class="col-md-9">
                <select class="form-control" name="id_tipo_sangre" id="id_tipo_sangre">
                      <option value="0" selected="">Elige una opción</option>
                    @if(!empty($Alumnos))
                        <option value="1" {{  ($Alumnos->id_tipo_sangre==1) ? 'selected' : '' }}>O-</option>
                        <option value="2" {{  ($Alumnos->id_tipo_sangre==2) ? 'selected' : '' }}>O+</option>
                        <option value="3" {{  ($Alumnos->id_tipo_sangre==2) ? 'selected' : '' }}>A-</option>
                        <option value="4" {{  ($Alumnos->id_tipo_sangre==2) ? 'selected' : '' }}>A+</option>
                        <option value="5" {{  ($Alumnos->id_tipo_sangre==2) ? 'selected' : '' }}>B-</option>
                        <option value="6" {{  ($Alumnos->id_tipo_sangre==2) ? 'selected' : '' }}>B+</option>
                        <option value="7" {{  ($Alumnos->id_tipo_sangre==2) ? 'selected' : '' }}>AB</option>
                        <option value="8" {{  ($Alumnos->id_tipo_sangre==2) ? 'selected' : '' }}>AB+</option>

                    @else
                        <option value="1">O-</option>
                        <option value="2">O+</option>
                        <option value="3">A-</option>
                        <option value="4">A+</option>
                        <option value="5">B-</option>
                        <option value="6">B+</option>
                        <option value="7">AB-</option>
                        <option value="8">AB+</option>
                    @endif
                   
                </select>
            </div>
          </div>
          
      </div> 
       <div class="col-md-6">
            <div class="form-group row">
              <label class="col-md-3 label-control" for="userinput1">Comentarios</label>
              <div class="col-md-9">
                {!! Form::textarea('comentarios', null, ['class' => 'form-control']) !!}
              </div>
            </div>
          </div> 
    </div>
    <br><br><br><br><br><br>
</div>

  <div class="tab-pane" id="link32" role="tabpanel" aria-labelledby="link-tab32" aria-expanded="false">
    <h4 class="form-section"><i class="ft-user"></i>Información de contacto</h4>     
    <div class="row">

      <div class="col-md-6">
        <div class="form-group row">
          <label class="col-md-3 label-control" for="userinput2">Nombre Contacto</label>
          <div class="col-md-9">
          {!! Form::text('nombre_contacto', null, ['class' => 'form-control']) !!}

          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group row">
          <label class="col-md-3 label-control" for="userinput1">Teléfono</label>
          <div class="col-md-9">
            {!! Form::text('telefono', null, ['class' => 'form-control phone-inputmask']) !!}

          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <div class="form-group row">
          <label class="col-md-3 label-control" for="userinput2">Correo</label>
          <div class="col-md-9">
          {!! Form::text('correo', null, ['class' => 'form-control email-inputmask']) !!}
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group row">
          <label class="col-md-3 label-control" for="userinput1">Teléfono Adicional</label>
          <div class="col-md-9">
            {!! Form::text('telefono_adicional', null, ['class' => 'form-control phone-inputmask']) !!}
          </div>
        </div>
      </div>  
    </div>
    <div class="row">
      <div class="col-md-6">
        <div class="form-group row">
          <label class="col-md-3 label-control" for="userinput2">Dirección Contacto</label>
          <div class="col-md-9">
          {!! Form::text('direccion_contacto', null, ['class' => 'form-control']) !!}

          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group row">
          <label class="col-md-3 label-control" for="userinput1">CP</label>
          <div class="col-md-9">
            {!! Form::number('cpc', null, ['max'=>'100000','min'=>'0','class' => 'form-control']) !!}
          </div>
        </div>
      </div>
    </div>
    <div class="row">
        <div class="col-md-6">
        <div class="form-group row">
          <label class="col-md-3 label-control" for="userinput2">Estado</label>
          <div class="col-md-9">
             <select class="form-control" name="id_estadoc" id="id_estadoc" onchange="busca_mun2()">
                <option value="0" selected="">Elige una opción</option>
                    @if(!empty($estados->id_estado))
                      @foreach($estados as $tipo)
                         <option 
                              value="{{ $tipo->id }}" 
                              {{ old('id_estado', $estados->id_estado) == $tipo->id ? 'selected' : '' }}
                         >{{ $tipo->estado }}</option>
                      @endforeach   
                      @else
                       @foreach($estados as $tipo)

                         <option 
                              value="{{ $tipo->id }}" 
                              {{ old('id_estado')}}
                         >{{ $tipo->estado }}</option>
                      @endforeach   
                      @endif
             </select>
          </div>
        </div>
      </div>
      <div class="col-md-6">
          <div class="form-group row">
            <label class="col-md-3 label-control" for="userinput2">Municipio</label>
            <div class="col-md-9">
                 <select class="form-control" id="id_municipioc" name="id_municipioc">
                    <option value="0" >Elige una opción</option> 
                     @if(!empty($municipios))
                      @foreach($municipios as $idmun)
                        <option value="{{ $idmun->id }}" 
                             {{ old('id_municipio', $empleados->id_municipio) == $idmun->id ? 'selected' : '' }}
                         >{{ $idmun->municipio }}</option>
                      @endforeach
                   @endif
                 </select>
            </div>
          </div>
      </div>
    </div> 
    
    <div class="row">
      <div class="col-md-6">
        <div class="form-group row">
          <label class="col-md-3 label-control" for="userinput2">Comentarios</label>
          <div class="col-md-9">
          {!! Form::textarea('comentariosc', null, ['class' => 'form-control']) !!}
          </div>
        </div>
      </div>
      
  </div>
    </div>
    
    
  @if($editar ==1)
  <div class="tab-pane" id="linkOpt2" role="tabpanel" aria-labelledby="linkOpt-tab2" aria-expanded="false">
    <h4 class="form-section"><i class="ft-user"></i>Documentación del alumno</h4>     

    <div class="row">
          <div class="col-lg-6 col-md-12">
            <fieldset class="form-group">
              <label for="basicInputFile">Acta de nacimiento</label>
              <input type="file" class="form-control-file" id="basicInputFile">
            </fieldset>
          </div>
          <div class="col-lg-6 col-md-12">
            <fieldset class="form-group">
              <label for="basicInputFile">CURP</label>
              <input type="file" class="form-control-file" id="basicInputFile">
            </fieldset>
          </div>
        </div>
  </div>
  @endif
</div>
<div class="form-actions right">
  <a href="{{ route('alumnos.index') }}">
<button type="button" class="btn btn-red mr-1">
  <i class="ft-x"></i> Cancelar
</button>
</a>
<button type="submit" class="btn btn_verde">
  <i class="fa fa-check-square-o"></i> Guardar
</button>
</div>
@if($editar ==1)
<div class="modal fade text-left" id="large" tabindex="-1" role="dialog" aria-labelledby="myModalLabel17" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="myModalLabel17">+ Direcci&oacute;n de envío</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form id="form_logistica">
          <div id="campos_logistica">
            <div class="modal-body">
              @include('contactos.fields')
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-warning " data-dismiss="modal">Cancelar</button>
              <button type="button" class="btn btn_verde" onclick="guarda_direccion()">Guardar</button>
            </div>
          </div>
      </form>
      </div>
    </div>
  </div>
  @endif


