<!-- Id Alumno Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_alumno', 'Id Alumno:') !!}
    {!! Form::number('id_alumno', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Materia Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_materia', 'Id Materia:') !!}
    {!! Form::number('id_materia', null, ['class' => 'form-control']) !!}
</div>

<!-- Calificacion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('calificacion', 'Calificacion:') !!}
    {!! Form::number('calificacion', null, ['class' => 'form-control']) !!}
</div>

<!-- Comentarios Field -->
<div class="form-group col-sm-6">
    {!! Form::label('comentarios', 'Comentarios:') !!}
    {!! Form::text('comentarios', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('tblMatAlumnos.index') }}" class="btn btn-default">Cancel</a>
</div>
