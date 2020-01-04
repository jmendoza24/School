<table class="table display nowrap table-striped table-bordered scroll-horizontal"   id="asistencia_al">
    <thead>
        <tr class="azul">
                         
            <th>Name</th>
            <th>Last list date</th>
        </tr>
    </thead>
    <tbody>     
        @foreach($asistencias as $pe)
        <tr>

            <td><a   style="color: #0275d8" href="#" ></a> {{ $name }}</td>
            <td>{{  (!empty($pe->created_at)) ? substr($pe->created_at,0,10) :substr($pe->created_at,0,10) }}   </td>
            
        </tr>
    @endforeach
    </tbody>
</table>
 