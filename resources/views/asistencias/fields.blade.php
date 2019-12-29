<!-- Id Alumno Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_alumno', 'Id Alumno:') !!}
    {!! Form::number('id_alumno', null, ['class' => 'form-control']) !!}
</div>

<!-- Asistencia Field -->
<div class="form-group col-sm-6">
    {!! Form::label('asistencia', 'Asistencia:') !!}
    {!! Form::number('asistencia', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('asistencias.index') }}" class="btn btn-default">Cancel</a>
</div>
