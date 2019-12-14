<!-- Nivel Field -->
@if($editar=1)
<body onload="grados_niveles()"></body>
@endif
<div class="form-group col-sm-6">
    {!! Form::label('nivel', 'Level:') !!}
    <select class="form-control" name="nivel" id="level" required="required" onchange="grados_niveles()">      
        <option value="" selected="">select option</option>
        <option value="1" {{($materias->nivel ==1) ? 'selected':''}} >Pre kindergarten</option>
        <option value="2" {{($materias->nivel ==2) ? 'selected':''}} >Primary</option>
        <option value="3" {{($materias->nivel ==3) ? 'selected':''}} >High school (Secundaria)</option>
        <option value="4" {{($materias->nivel ==4) ? 'selected':''}} >High school (preparatoria)</option>
    </select>

</div>

<!-- Grado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('grado', 'Grade:') !!}
    <select class="form-control" name="grado" id="grade" required="required">
        <option value="" selected="">select option</option> 
                    <option value="1" {{ ($materias->grado == 1) ? 'selected' : '' }} style="{{ ($materias->grado == 1) ? '' : 'display: none' }}" class="prescolar">Prekinder</option>
                    <option value="2" {{ ($materias->grado == 2) ? 'selected' : '' }} style="{{ ($materias->grado == 2) ? '' : 'display: none' }}" class="prescolar">Kinder</option>
                    <option value="3" {{ ($materias->grado == 3) ? 'selected' : '' }} style="{{ ($materias->grado == 3) ? '' : 'display: none' }}" class="primaria">1</option>
                    <option value="4" {{ ($materias->grado == 4) ? 'selected' : '' }} style="{{ ($materias->grado == 4) ? '' : 'display: none' }}" class="primaria">2</option>
                    <option value="5" {{ ($materias->grado == 5) ? 'selected' : '' }} style="{{ ($materias->grado == 5) ? '' : 'display: none' }}" class="primaria">3</option>
                    <option value="6" {{ ($materias->grado == 6) ? 'selected' : '' }} style="{{ ($materias->grado == 6) ? '' : 'display: none' }}" class="primaria">4</option>
                    <option value="7" {{ ($materias->grado == 7) ? 'selected' : '' }} style="{{ ($materias->grado == 7) ? '' : 'display: none' }}" class="primaria">5</option>
                    <option value="8" {{ ($materias->grado == 8) ? 'selected' : '' }} style="{{ ($materias->grado == 8) ? '' : 'display: none' }}" class="primaria">6</option>
                    <option value="9" {{ ($materias->grado == 9) ? 'selected' : '' }} style="{{ ($materias->grado == 9) ? '' : 'display: none' }}" class="secundaria">7</option>
                    <option value="10" {{ ($materias->grado == 10) ? 'selected' : '' }} style="{{ ($materias->grado == 10) ? '' : 'display: none' }}" class="secundaria">8</option>
                    <option value="11" {{ ($materias->grado == 11) ? 'selected' : '' }} style="{{ ($materias->grado == 11) ? '' : 'display: none' }}" class="secundaria">9</option>
                    <option value="12" {{ ($materias->grado == 12) ? 'selected' : '' }} style="{{ ($materias->grado == 12) ? '' : 'display: none' }}" class="prepa">10</option>                            
                    <option value="13" {{ ($materias->grado == 13) ? 'selected' : '' }} style="{{ ($materias->grado == 13) ? '' : 'display: none' }}"class="prepa">11</option>  
                    <option value="14" {{ ($materias->grado == 14) ? 'selected' : '' }} style="{{ ($materias->grado == 14) ? '' : 'display: none' }}"class="prepa">12</option>  
    </select>
</div>

<!-- Materia Field -->
<div class="form-group col-sm-6">
    {!! Form::label('materia', 'Subject:') !!}
    {!! Form::text('materia', null, ['class' => 'form-control','required']) !!}
</div>


<div class="form-actions right">
      <a href="{!! route('materias.index') !!}">
    <button type="button" class="btn btn-red mr-1">
      <i class="ft-x"></i> Cancel
    </button>
    </a>
    <button type="submit" class="btn btn-success" id="btn_save">
      <i class="fa fa-check-square-o"></i> Save
    </button>
    </div>

