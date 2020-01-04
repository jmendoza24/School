
@if(sizeof($personalInfoAlumnos)>0)
<table class="table display nowrap table-striped table-bordered file-export"  id="table_export">
    <thead>
        <tr class="azul">
            <th>Photo</th>
            <th>ID</th>                
            <th>Name</th>
            <th>Level</th>
            <th>Grade</th>
            <th>Group</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Ethnicity</th>
            <th>Race</th>
       

        </tr>
    </thead>
    <tbody>
        @foreach($personalInfoAlumnos as $personalInfoAlumno)
        <tr>
            <td><img class="media-object rounded-circle" src="@if(!empty($personalInfoAlumno->photo_alumno)) {{ asset($personalInfoAlumno->photo_alumno) }} @else {{ url('app-assets/images/default-user-icon-5.jpg') }} @endif" style="width: 64px;height: 64px;"/></td>
            <td>{!! $personalInfoAlumno->num_control !!}</td>
            <td>{!! $personalInfoAlumno->name !!}</td>
            <td>{!! $personalInfoAlumno->nivel_escolar !!}</td>
            <td>{!! $personalInfoAlumno->grado !!}</td>
            <td>{!! $personalInfoAlumno->grupo !!}</td>
            <td>{!! $personalInfoAlumno->email !!}</td>
            <td>{!! $personalInfoAlumno->tels !!}</td>
            <td>{!! $personalInfoAlumno->ethnicity !!}</td>
            <td>{!! $personalInfoAlumno->race !!}</td>


        </tr>
    @endforeach
    </tbody>
</table>

@elseif(sizeof($asistencia)>0)
<table class="table display nowrap table-striped table-bordered file-export"  id="table_export">
    <thead>
        <tr class="azul">
            <th>ID</th>                
            <th>Name</th>
            <th>Level</th>
            <th>Grade</th>
            <th>Group</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Ethnicity</th>
            <th>Race</th>
            <th>Fecha</th>
        </tr>
    </thead>
    <tbody>
        @foreach($asistencia as $ass)
        <tr>
            <td>{!! $ass->num_control !!}</td>
            <td>{!! $ass->name !!}</td>
            <td>{!! $ass->nivel_escolar !!}</td>
            <td>{!! $ass->grado !!}</td>
            <td>{!! $ass->grupo !!}</td>
            <td>{!! $ass->email !!}</td>
            <td>{!! $ass->tels !!}</td>
            <td>{!! $ass->ethnicity !!}</td>
            <td>{!! $ass->race !!}</td>
            <td>{!! $ass->created_at !!}</td></td>
        </tr>
    @endforeach
    </tbody>
</table>
@endif
 