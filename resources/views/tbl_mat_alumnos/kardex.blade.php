<table class="table table-striped table-bordered datacol-basic-initialisation display"  id="">
        <thead>
            <tr class="azul">
                <th>Subject</th>
                <th>Score</th>
                <th>Comments</th>
                <th>School cycle</th>
            </tr>
        </thead>
        <tbody>
        @foreach($alumnosmarerias as $alumnosmarerias)
           <tr>
                        <td>
                           {{$alumnosmarerias->materia }}
                        </td>
                        <td>
                            {{ $alumnosmarerias->calificacion }}
                        </td>

                        <td>
                        	{{{{ $alumnosmarerias->comentarios }}  }}
                             
                        </td>
                        <td>
                        	{{{{ $alumnosmarerias->school_cycle }}  }}
                             
                        </td>
                                
                    </tr>
        @endforeach
        </tbody>
    </table>
