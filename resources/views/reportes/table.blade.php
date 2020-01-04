
@if(sizeof($personalInfoAlumnos)>1)
<table class="table display nowrap table-striped table-bordered file-export"  id="table_export">
    <thead>
        <tr class="azul">   
            <th>Photo</th>
            <th>ID</th>                
            <th>Name</th>
            <th>Level</th>
            <th>Grade</th>
            <th>Group</th>
            <th>School cycle</th>

            <th>Email</th>
            <th>Phone</th>
            <th>Ethnicity</th>
            <th>Race</th>

            <th>Date birth</th>
            <th>Curp</th>
            <th>Gender</th>
            <th>Address</th>
            <th>State</th>
            <th>Zipcode</th>
            <th>country</th>
            <th>City</th>
            <th>Native language</th>
            <th>Name parent</th>
            <th>Parents email</th>
            <th>Parents cell</th>
            <th>Special ed</th>
            <th>Gifted talented</th>
            <th>Last school</th>
            <th>Phone school</th>
            <th>School address</th>
            <th>Last complete level</th>
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

            <td></td>


            <td>{!! $personalInfoAlumno->email !!}</td>
            <td>{!! $personalInfoAlumno->tels !!}</td>
            <td>{!! $personalInfoAlumno->ethnicity !!}</td>
            <td>{!! $personalInfoAlumno->race !!}</td>

            <td>{!! $personalInfoAlumno->race !!}</td>
            <td>{!! $personalInfoAlumno->race !!}</td>
            <td>{!! $personalInfoAlumno->race !!}</td>
            <td>{!! $personalInfoAlumno->race !!}</td>
            <td>{!! $personalInfoAlumno->race !!}</td>
            <td>{!! $personalInfoAlumno->race !!}</td>
            <td>{!! $personalInfoAlumno->race !!}</td>
            <td>{!! $personalInfoAlumno->race !!}</td>
            <td>{!! $personalInfoAlumno->race !!}</td>
            <td>{!! $personalInfoAlumno->race !!}</td>
            <td>{!! $personalInfoAlumno->race !!}</td>
            <td>{!! $personalInfoAlumno->race !!}</td>
            <td>{!! $personalInfoAlumno->race !!}</td>
            <td>{!! $personalInfoAlumno->race !!}</td>
            <td>{!! $personalInfoAlumno->race !!}</td>
            <td>{!! $personalInfoAlumno->race !!}</td>
            <td>{!! $personalInfoAlumno->race !!}</td>
            <td>{!! $personalInfoAlumno->race !!}</td>


        </tr>
    @endforeach
    </tbody>
</table>
@elseif(sizeof($asistencia)>1)
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
 