
<table class="table table-striped table-bordered datacol-basic-initialisation display"  id="">
    <thead>
        <tr class="gris">
            <th>#Control</th>                
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Grado</th>
            <th>Grupo</th>
            <th>Ciclo</th>
            <th>Nivel</th>
            <th>Estatus</th>
            <th colspan=""></th>
        </tr>
    </thead>
    <tbody>
    @foreach($alumnos as $alumnos)
        <tr>
            <td>{!! $alumnos->num_control !!}</td>
            <td>{!! $alumnos->nombre_alumno !!}</td>
            <td>{!! $alumnos->apellidos_alumno !!}</td>
            <td>{!! $alumnos->id_grado !!}</td>
            <td>{!! $alumnos->id_grupo !!}</td>
            <td>{!! $alumnos->id_ciclo !!}</td>
            <td>{!! $alumnos->nivel_estudio !!}</td>
            <td>Activo</td>
            <td>
                {!! Form::open(['route' => ['alumnos.destroy', $alumnos->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    {{-- <a href="{!! route('alumnos.show', [$alumnos->id]) !!}" class='btn btn-float btn-outline-secondary btn-round'><i class="fa fa-thumbs-o-up"></i></a> --}}
                    <a href="{!! route('alumnos.edit', [$alumnos->id]) !!}" class='btn btn-float btn-outline-success btn-round'><i class="fa fa-edit"></i></a>
                    {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-float btn-outline-danger btn-round', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
