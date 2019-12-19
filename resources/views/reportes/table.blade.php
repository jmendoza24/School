<table class="table display nowrap table-striped table-bordered scroll-horizontal"  id="">
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
        </tr>
    </thead>
    <tbody>
        @foreach($personalInfoAlumnos as $personalInfoAlumno)
        <tr>
            <td><img class="media-object rounded-circle" src="@if(!empty($personalInfoAlumnos)) {{ asset($personalInfoAlumno->photo_alumno) }} @else {{ url('app-assets/imagesdefault-user-icon-5.jpg') }} @endif" style="width: 64px;height: 64px;"/></td>
            <td>{!! $personalInfoAlumno->num_control !!}</td>
            <td>{!! $personalInfoAlumno->name !!}</td>
            <td>{!! $personalInfoAlumno->nivel_escolar !!}</td>
            <td>{!! $personalInfoAlumno->grado !!}</td>
            <td>{!! $personalInfoAlumno->grupo !!}</td>
            <td>{!! $personalInfoAlumno->email !!}</td>
            <td>{!! $personalInfoAlumno->tel !!}</td>
        </tr>
    @endforeach
    </tbody>
</table>
 