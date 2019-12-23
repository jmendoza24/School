        <table class="table table-striped table-bordered file-export">

        <thead>
            <tr class="azul">
                <th>Subject</th>
                <th>Score</th>
                <th>Comments</th>
                <th></th>
            </tr>
        </thead> 
        <tbody>
        @foreach($alumnosmarerias as $alumnosmarerias)
           <tr>
                        <td>
                            @if(empty($alumnosmarerias->materia))
                                    <input type="text" name="mst" id="id_materia{!! $alumnosmarerias->id_mat !!}"  onchange="save_subjects({!! $alumnosmarerias->id_mat !!},{!! $alumnosmarerias->id_alumno !!})"class="form-control">
                            @else
                                    <input type="text" name="mst"  value="{{$alumnosmarerias->materia }}" id="id_materia{!! $alumnosmarerias->id_mat !!}"  onchange="save_subjects({!! $alumnosmarerias->id_mat !!},{!! $alumnosmarerias->id_alumno !!})"class="form-control">

                            @endif
                        </td>
                        <td>
                            @if(empty($alumnosmarerias->calificacion))
                               <input   type="texte" min="0" step="any" class="form-control decimal-inputmask"  onchange="save_subjects({!! $alumnosmarerias->id_mat !!},{!! $alumnosmarerias->id_alumno !!})" name="calificacion" id="calificacion{!! $alumnosmarerias->id_mat !!}"></td>

                            @else
                               <input  value="{{ number_format($alumnosmarerias->calificacion,2)}}" type="texte" min="0" step="any" class="form-control decimal-inputmask"  onchange="save_subjects({!! $alumnosmarerias->id_mat !!},{!! $alumnosmarerias->id_alumno !!})" name="calificacion" id="calificacion{!! $alumnosmarerias->id_mat !!}"></td>

                            @endif
                        </td>

                        <td>
                             @if(empty($alumnosmarerias->comentarios))
                                  <textarea class="form-control" id="comentarios{!! $alumnosmarerias->id_mat !!}" onchange="save_subjects({!! $alumnosmarerias->id_mat !!},{!! $alumnosmarerias->id_alumno !!})" name="comentarios"></textarea>
                             @else
                                  <textarea class="form-control" id="comentarios{!! $alumnosmarerias->id_mat !!}" onchange="save_subjects({!! $alumnosmarerias->id_mat !!},{!! $alumnosmarerias->id_alumno !!})" name="comentarios">{{ $alumnosmarerias->comentarios }}</textarea>

                             @endif
                        </td>
                                <td style="text-align: center">
                                    <button type="button"  onclick="delete_subjet({{ $alumnosmarerias->id_mat }})" class="btn btn_rojo" id="btn_save" style="">
                                              <i class="fa fa-trash"></i> Delete
                                    </button>
                                </td>
                    </tr>
        @endforeach
        </tbody>
    </table>
