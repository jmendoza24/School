<!-- Nivel Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nivel', 'Nivel:') !!}
    <select class="form-control" name="nivel" required="">
    	<option value="">Seleccione</option>
    	<option value="1" {{ $materias->nivel==1 ? 'selected':''}}>Prescolar</option>
    	<option value="2" {{ $materias->nivel==2 ? 'selected':''}}>Primaria</option>
    </select>
    <div class="invalid-feedback">Este campo es requerido.</div>
</div>

<!-- Grado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('grado', 'Grado:') !!}
    <select class="form-control" name="grado" required="">
    	<option value="">Seleccione</option>
    	@foreach($grados as $grado)
			<option value="{{ $grado->id }}" {{ $materias->grado==$grado->id ? 'selected':''}}>{{ $grado->valor }}</option>
    	@endforeach
    </select>
    <div class="invalid-feedback">Este campo es requerido.</div>
</div>

<!-- Materia Field -->
<div class="form-group col-sm-6">
    {!! Form::label('materia', 'Materia:') !!}
    {!! Form::text('materia', null, ['class' => 'form-control','required']) !!}
    <div class="invalid-feedback">Este campo es requerido.</div>
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-outline-primary']) !!}
    <a href="{!! route('materias.index') !!}" class="btn btn-outline-warning">Cancelar</a>
</div>
