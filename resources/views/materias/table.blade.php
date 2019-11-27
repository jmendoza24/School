
<table class="table table-striped table-bordered datacol-basic-initialisation display"  id="materias-table">
    <thead>
        <tr>
        <th>Nivel</th>
        <th>Grado</th>
        <th>Materia</th>
        <th colspan=""></th>
    </tr>
    </thead>
    <tbody>
    @foreach($materias as $materias)
        <tr>
        <td>@if($materias->nivel==1) {{  'Prescolar' }} @elseif($materias->nivel==2) {{  'Primaria' }} @endif</td>
        <td>{!! $materias->grado !!}</td>
        <td>{!! $materias->materia !!}</td>
            <td>
                {!! Form::open(['route' => ['materias.destroy', $materias->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('materias.edit', [$materias->id]) !!}" class='btn btn-float btn-outline-success btn-round'><i class="fa fa-edit"></i></a>
                    {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-float btn-outline-danger btn-round', 'onclick' => "return confirm('Estas seguro deseas eliminar este registro?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
