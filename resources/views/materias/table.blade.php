
<table class="table table-striped table-bordered scroll-vertical display">
    <thead>
        <tr class="azul">
        <th>Level</th>
        <th>Grade</th>
        <th>Subjects</th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    @foreach($materias as $materias)
        <tr>
        <td>@if($materias->nivel==1) {{  'Pre kindergarten' }} @elseif($materias->nivel==2) {{  'Primary' }} @elseif($materias->nivel==3) {{  'High school (Secundaria)' }} @elseif($materias->nivel==4) {{  'High school (preparatoria)' }}@endif</td>
        <td>{!! $materias->grado !!}</td>
        <td>{!! $materias->materia !!}</td>
            <td style="text-align: center">
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
