<!-- Id Alumno Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_alumno', 'Id Alumno:') !!}
    {!! Form::number('id_alumno', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Documento Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_documento', 'Id Documento:') !!}
    {!! Form::number('id_documento', null, ['class' => 'form-control']) !!}
</div>

<!-- Documento Field -->
<div class="form-group col-sm-6">
    {!! Form::label('documento', 'Documento:') !!}
    {!! Form::file('documento') !!}
</div>
<div class="clearfix"></div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('alumnosDocumentos.index') !!}" class="btn btn-default">Cancel</a>
</div>
