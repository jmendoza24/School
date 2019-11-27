<div class="table-responsive">
    <table class="table" id="documentacions-table">
        <thead>
            <tr>
                <th>Id Alumno</th>
        <th>Acta Nacimiento</th>
        <th>Curp</th>
        <th>Comentarios</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($documentacions as $documentacion)
            <tr>
                <td>{!! $documentacion->id_alumno !!}</td>
            <td>{!! $documentacion->acta_nacimiento !!}</td>
            <td>{!! $documentacion->curp !!}</td>
            <td>{!! $documentacion->comentarios !!}</td>
                <td>
                    {!! Form::open(['route' => ['documentacions.destroy', $documentacion->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('documentacions.show', [$documentacion->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('documentacions.edit', [$documentacion->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
