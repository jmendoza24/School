<!-- Id Alumno Field -->
<div class="form-group">
    {!! Form::label('id_alumno', 'Id Alumno:') !!}
    <p>{{ $asistencias->id_alumno }}</p>
</div>

<!-- Asistencia Field -->
<div class="form-group">
    {!! Form::label('asistencia', 'Asistencia:') !!}
    <p>{{ $asistencias->asistencia }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $asistencias->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $asistencias->updated_at }}</p>
</div>

