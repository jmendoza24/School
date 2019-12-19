<!-- Id Alumno Field -->
<div class="form-group">
    {!! Form::label('id_alumno', 'Id Alumno:') !!}
    <p>{{ $notas->id_alumno }}</p>
</div>

<!-- Nota Field -->
<div class="form-group">
    {!! Form::label('nota', 'Nota:') !!}
    <p>{{ $notas->nota }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $notas->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $notas->updated_at }}</p>
</div>

