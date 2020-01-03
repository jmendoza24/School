<div class="col-xl-12 col-md-12">        
    <div class="media-body p-2">
      <span>select the range of dates</span>
      <div class="row">
        <div class="media-right media-middle">
            <label>Start date:</label>
          <input type="date" id="f_inicio" class="form-control" value="{{ date('Y-m-d')}}" >
        </div>
        <div class="media-right media-middle" style="padding-left: 5px;">
            <label>Final date:</label>
          <input type="date" id="f_fin" class="form-control" value="{{ date('Y-m-d')}}">
        </div>
      
      </div>
    </div>
        
        </div>
<table class="table display nowrap table-striped table-bordered scroll-horizontal"  id="">
    <thead>
        <tr class="azul">
            <th>Photo</th>
            <th>ID</th>                
            <th>Name</th>
            <th>Last list date</th>
            <th style="width: 20px"></th>
        </tr>
    </thead>
    <tbody>     
        @foreach($personalInfoAlumnos as $pe)
        <tr>
            <td style="text-align: center;width: 10%">
                <img class="media-object rounded-circle"   src="@if(!empty($pe->photo_alumno)) {{ asset($pe->photo_alumno) }} @else {{ url('app-assets/images/default-user-icon-5.jpg') }} @endif"  style="width: 64px;height: 64px;"/></td>
            <td>{{ $pe->num_control }}</td>
            <td><a data-toggle="modal" data-target="#as_al"  style="color: #0275d8" href="#" onclick="view_list({{ $pe->id }},'{{ $pe->name  }}')">{{ $pe->name  }}</a> </td>
            <td>{{  (!empty($pe->created_at)) ? substr($pe->created_at,0,10) :substr($pe->created_at,0,10) }}   </td>
            <td style="width: 2%">
             
               <button type="button" onclick="toma_asistencia({{ $pe->id }},{{ $pe->grade }},{{ $pe->group }},{{ $pe->level }})" class="btn btn_verde pull-right" id="btn_save" style="">
                  <i class="fa fa-check-square-o"></i> &nbsp;&nbsp;Save&nbsp;&nbsp;
                </button> 

              
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
 