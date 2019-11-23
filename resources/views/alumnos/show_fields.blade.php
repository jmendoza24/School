<!-- Nombre Field -->
<div class="form-group">
    {!! Form::label('nombre', 'Nombre:') !!}
    <p>{!! $alumnos->nombre !!}</p>
</div>

<!-- Direccion Field -->
<div class="form-group">
    {!! Form::label('direccion', 'Direccion:') !!}
    <p>{!! $alumnos->direccion !!}</p>
</div>

<!-- Grado Field -->
<div class="form-group">
    {!! Form::label('grado', 'Grado:') !!}
    <p>{!! $alumnos->grado !!}</p>
</div>

<!-- Grupo Field -->
<div class="form-group">
    {!! Form::label('grupo', 'Grupo:') !!}
    <p>{!! $alumnos->grupo !!}</p>
</div>

<!-- Salon Field -->
<div class="form-group">
    {!! Form::label('salon', 'Salon:') !!}
    <p>{!! $alumnos->salon !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $alumnos->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $alumnos->updated_at !!}</p>
</div>

