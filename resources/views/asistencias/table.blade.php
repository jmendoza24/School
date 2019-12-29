<div class="table-responsive">
    <table class="table" id="asistencias-table">
        <thead>
            <tr>
                <th>Id Alumno</th>
        <th>Asistencia</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($asistencias as $asistencias)
            <tr>
                <td>{{ $asistencias->id_alumno }}</td>
            <td>{{ $asistencias->asistencia }}</td>
                <td>
                    {!! Form::open(['route' => ['asistencias.destroy', $asistencias->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('asistencias.show', [$asistencias->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('asistencias.edit', [$asistencias->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
