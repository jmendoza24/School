<table class="table table-striped table-bordered datacol-basic-initialisation display"  id="">
        <thead>
            <tr class="azul">
                <th>Subject</th>
                <th>Score</th>
                <th>Comments</th>
            </tr>
        </thead>
        <tbody>
        @php $x=0; @endphp
        @foreach($alumnosmarerias as $alumnosmarerias)
                    <tr>
                        <td>{!! $alumnosmarerias->materia !!}</td>
                        <td>
                            @if(empty($alumnosmarerias->calificacion))
                               <input   type="texte" min="0" step="any" class="form-control decimal-inputmask"  onchange="save_subjects({!! $alumnosmarerias->id_mat !!},{!! $alumnosmarerias->id_alumno !!})" name="calificacion" id="calificacion{!! $alumnosmarerias->id_mat !!}"></td>

                            @else
                               <input  value="{{ $alumnosmarerias->calificacion }}" type="texte" min="0" step="any" class="form-control decimal-inputmask"  onchange="save_subjects({!! $alumnosmarerias->id_mat !!},{!! $alumnosmarerias->id_alumno !!})" name="calificacion" id="calificacion{!! $alumnosmarerias->id_mat !!}"></td>

                            @endif
                        <td>
                             @if(empty($alumnosmarerias->comentarios))
                                  <textarea class="form-control" id="comentarios{!! $alumnosmarerias->id_mat !!}" onchange="save_subjects({!! $alumnosmarerias->id_mat !!},{!! $alumnosmarerias->id_alumno !!})" name="comentarios"></textarea>
                             @else
                                  <textarea class="form-control" id="comentarios{!! $alumnosmarerias->id_mat !!}" onchange="save_subjects({!! $alumnosmarerias->id_mat !!},{!! $alumnosmarerias->id_alumno !!})" name="comentarios">{{ $alumnosmarerias->comentarios }}</textarea>

                             @endif
                        </td>
                    </tr>
        @endforeach
        </tbody>
    </table>


<script type="text/javascript">
    function save_subjects(id_materia,id_alumno){

  var comentarios=$('#comentarios'+id_materia).val();
  var calificacion=$('#calificacion'+id_materia).val();

  var parametros ={ 
        "id_materia":id_materia,
        "id_alumno":id_alumno,
        "comentarios":comentarios,
        "calificacion":calificacion,
                               
   };
   
    $.ajax({
              url:"/api/v1/save_subjects",
              type: "get",
              data:parametros,
              success: function(respuesta){ 
               

              },  
              error: function(XMLHttpRequest, textStatus, errorThrown) { 
               alert("Status: " + textStatus); alert("Error: " + errorThrown); 
              }   

          });

}
</script>