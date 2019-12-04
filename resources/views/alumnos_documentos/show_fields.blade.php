<!-- Id Alumno Field -->
<div class="form-group">
    {!! Form::label('id_alumno', 'Id Alumno:') !!}
    <p>{!! $alumnosDocumentos->id_alumno !!}</p>
</div>

<!-- Id Documento Field -->
<div class="form-group">
    {!! Form::label('id_documento', 'Id Documento:') !!}
    <p>{!! $alumnosDocumentos->id_documento !!}</p>
</div>

<!-- Documento Field -->
<div class="form-group">
    {!! Form::label('documento', 'Documento:') !!}
    <p>{!! $alumnosDocumentos->documento !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $alumnosDocumentos->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $alumnosDocumentos->updated_at !!}</p>
</div>

