
<table class="table display nowrap table-striped table-bordered scroll-horizontal"  id="">
    <thead>
        <tr class="azul">
            <th>Photo</th>
            <th>ID</th>                
            <th>Name</th>
            <th>Date</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach($personalInfoAlumnos as $pe)
        <tr>
            <td style="text-align: center;width: 10%">
                <img class="media-object rounded-circle"   src="@if(!empty($personalInfoAlumnos)) {{ asset($pe['photo_alumno']) }} @else {{ asset('app-assets/imagesdefault-user-icon-5.jpg') }} @endif"  style="width: 64px;height: 64px;"/></td>
            <td>{{ $pe['num_control'] }}</td>
            <td>{{ $pe['name'] }}</td>
            <td></td>
            <td style="text-align: center;width: 10%">
               <button type="button" onclick="toma_asistencia({{ $pe['id'] }})" class="btn btn_verde pull-right" id="btn_save" style="">
                  <i class="fa fa-check-square-o"></i> &nbsp;&nbsp;Save&nbsp;&nbsp;
                </button> 
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
 