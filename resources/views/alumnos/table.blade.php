
<table class="table table-striped table-bordered datacol-basic-initialisation display"  id="">
    <thead>
        <tr class="azul">
            <th></th>
            <th>#Control</th>                
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Grado</th>
            <th>Grupo</th>
            <th colspan=""></th>
        </tr>
    </thead>
    <tbody>
    @foreach($alumnos as $alumnos)
        <tr>
            <td><img class="media-object rounded-circle" src="@if(!empty($alumnos)) {{ asset($alumnos->foto) }} @else {{ url('app-assets/imagesdefault-user-icon-5.jpg') }} @endif" style="width: 64px;height: 64px;"/></td>
            <td>{!! $alumnos->num_control !!}</td>
            <td>{!! $alumnos->nombre_alumno !!}</td>
            <td>{!! $alumnos->apellidos_alumno !!}</td>
            <td>{!! $alumnos->grado !!}</td>
            <td>{!! $alumnos->grupo !!}</td>
            <td>
                {!! Form::open(['route' => ['alumnos.destroy', $alumnos->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    {{-- <a href="{!! route('alumnos.show', [$alumnos->id]) !!}" class='btn btn-float btn-outline-secondary btn-round'><i class="fa fa-thumbs-o-up"></i></a> --}}
                    <a href="{!! route('alumnos.edit', [$alumnos->id]) !!}" class='btn btn-float btn-outline-success btn-round'><i class="fa fa-edit"></i></a>
                    {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-float btn-outline-danger btn-round', 'onclick' => "return confirm('Estas seguro deseas eliminar?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
