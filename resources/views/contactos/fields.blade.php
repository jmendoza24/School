<!-- Id Alumno Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_alumno', 'Id Alumno:') !!}
    {!! Form::number('id_alumno', null, ['class' => 'form-control']) !!}
</div>

<!-- Nombre Contacto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre_contacto', 'Nombre Contacto:') !!}
    {!! Form::text('nombre_contacto', null, ['class' => 'form-control']) !!}
</div>

<!-- Telefono Field -->
<div class="form-group col-sm-6">
    {!! Form::label('telefono', 'Telefono:') !!}
    {!! Form::text('telefono', null, ['class' => 'form-control']) !!}
</div>

<!-- Correo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('correo', 'Correo:') !!}
    {!! Form::text('correo', null, ['class' => 'form-control']) !!}
</div>

<!-- Direccion Contacto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('direccion_contacto', 'Direccion Contacto:') !!}
    {!! Form::text('direccion_contacto', null, ['class' => 'form-control']) !!}
</div>

<!-- Cp Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cp', 'Cp:') !!}
    {!! Form::number('cp', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Estado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_estado', 'Id Estado:') !!}
    {!! Form::number('id_estado', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Municipio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_municipio', 'Id Municipio:') !!}
    {!! Form::number('id_municipio', null, ['class' => 'form-control']) !!}
</div>

<!-- Comentarios Field -->
<div class="form-group col-sm-6">
    {!! Form::label('comentarios', 'Comentarios:') !!}
    {!! Form::text('comentarios', null, ['class' => 'form-control']) !!}
</div>

<!-- Telefono Adicional Field -->
<div class="form-group col-sm-6">
    {!! Form::label('telefono_adicional', 'Telefono Adicional:') !!}
    {!! Form::text('telefono_adicional', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('contactos.index') !!}" class="btn btn-default">Cancel</a>
</div>
