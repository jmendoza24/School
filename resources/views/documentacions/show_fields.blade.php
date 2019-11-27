<!-- Id Alumno Field -->
<div class="form-group">
    {!! Form::label('id_alumno', 'Id Alumno:') !!}
    <p>{!! $documentacion->id_alumno !!}</p>
</div>

<!-- Acta Nacimiento Field -->
<div class="form-group">
    {!! Form::label('acta_nacimiento', 'Acta Nacimiento:') !!}
    <p>{!! $documentacion->acta_nacimiento !!}</p>
</div>

<!-- Curp Field -->
<div class="form-group">
    {!! Form::label('curp', 'Curp:') !!}
    <p>{!! $documentacion->curp !!}</p>
</div>

<!-- Comentarios Field -->
<div class="form-group">
    {!! Form::label('comentarios', 'Comentarios:') !!}
    <p>{!! $documentacion->comentarios !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $documentacion->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $documentacion->updated_at !!}</p>
</div>

