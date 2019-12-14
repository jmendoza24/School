<!-- Id Alumno Field -->
<div class="form-group">
    {!! Form::label('id_alumno', 'Id Alumno:') !!}
    <p>{{ $tblMatAlumnos->id_alumno }}</p>
</div>

<!-- Id Materia Field -->
<div class="form-group">
    {!! Form::label('id_materia', 'Id Materia:') !!}
    <p>{{ $tblMatAlumnos->id_materia }}</p>
</div>

<!-- Calificacion Field -->
<div class="form-group">
    {!! Form::label('calificacion', 'Calificacion:') !!}
    <p>{{ $tblMatAlumnos->calificacion }}</p>
</div>

<!-- Comentarios Field -->
<div class="form-group">
    {!! Form::label('comentarios', 'Comentarios:') !!}
    <p>{{ $tblMatAlumnos->comentarios }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $tblMatAlumnos->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $tblMatAlumnos->updated_at }}</p>
</div>

