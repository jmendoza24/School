<table class="table table-striped table-bordered datacol-basic-initialisation display"  id="">
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
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach($personalInfoAlumnos as $personalInfoAlumno)
        <tr>
            <td><img class="media-object rounded-circle" src="@if(!empty($personalInfoAlumnos)) {{ asset($personalInfoAlumno->photo_alumno) }} @else {{ url('app-assets/imagesdefault-user-icon-5.jpg') }} @endif" style="width: 64px;height: 64px;"/></td>
            <td>{!! $personalInfoAlumno->num_control !!}</td>
            <td>{!! $personalInfoAlumno->name !!}</td>
            <td>{!! $personalInfoAlumno->level !!}</td>
            <td>{!! $personalInfoAlumno->grade !!}</td>
            <td>{!! $personalInfoAlumno->grupo !!}</td>
            <td>{!! $personalInfoAlumno->email !!}</td>
            <td>{!! $personalInfoAlumno->tel !!}</td>
            <td>
                {!! Form::open(['route' => ['personalInfoAlumnos.destroy', $personalInfoAlumno->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    {{-- <a href="{!! route('alumnos.show', [$alumnos->id]) !!}" class='btn btn-float btn-outline-secondary btn-round'><i class="fa fa-thumbs-o-up"></i></a> --}}
                    <a href="{!! route('personalInfoAlumnos.edit', [$personalInfoAlumno->id]) !!}" class='btn btn-float btn-outline-success btn-round'><i class="fa fa-edit"></i></a>
                    {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-float btn-outline-danger btn-round', 'onclick' => "return confirm('Are you sure you want to delete?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
 