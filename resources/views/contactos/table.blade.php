<div class="table-responsive">
    <table class="table" id="contactos-table">
        <thead>
            <tr>
                <th>Id Alumno</th>
        <th>Nombre Contacto</th>
        <th>Telefono</th>
        <th>Correo</th>
        <th>Direccion Contacto</th>
        <th>Cp</th>
        <th>Id Estado</th>
        <th>Id Municipio</th>
        <th>Comentarios</th>
        <th>Telefono Adicional</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($contactos as $contactos)
            <tr>
                <td>{!! $contactos->id_alumno !!}</td>
            <td>{!! $contactos->nombre_contacto !!}</td>
            <td>{!! $contactos->telefono !!}</td>
            <td>{!! $contactos->correo !!}</td>
            <td>{!! $contactos->direccion_contacto !!}</td>
            <td>{!! $contactos->cp !!}</td>
            <td>{!! $contactos->id_estado !!}</td>
            <td>{!! $contactos->id_municipio !!}</td>
            <td>{!! $contactos->comentarios !!}</td>
            <td>{!! $contactos->telefono_adicional !!}</td>
                <td>
                    {!! Form::open(['route' => ['contactos.destroy', $contactos->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('contactos.show', [$contactos->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('contactos.edit', [$contactos->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
