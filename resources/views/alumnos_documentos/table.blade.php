
<table class="table table-striped table-bordered scroll-vertical display">
        <thead>
            <tr>
                <th>Documento</th>
                <th ></th>
            </tr>
        </thead>
        <tbody>
        @foreach($alumnosDocumentos as $alumnosDocumentos)
            <tr>
            <td>{!! $alumnosDocumentos->documento !!}</td>
                <td>
                    {!! Form::open(['route' => ['alumnosDocumentos.destroy', $alumnosDocumentos->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
