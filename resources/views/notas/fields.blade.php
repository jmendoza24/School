<!-- Id Alumno Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_alumno', 'Id Alumno:') !!}
    {!! Form::number('id_alumno', null, ['class' => 'form-control']) !!}
</div>

<!-- Nota Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nota', 'Nota:') !!}
    {!! Form::text('nota', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('notas.index') }}" class="btn btn-default">Cancel</a>
</div>
