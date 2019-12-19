<table class="table table-striped table-bordered datacol-basic-initialisation display"  id="">
        <thead>
            <tr class="azul">
                <th>Notes</th>
                <th>Date</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        @foreach($notas as $notas)
            <tr>
            <td>
                @if(empty($notas))
                        <textarea  onchange="upd_note({{ $notas->id }})" class="form-control" id="nota{{ $notas->id }}" name="nota"></textarea>
                @else
                        <textarea onchange="upd_note({{ $notas->id }})"  class="form-control" id="nota{{ $notas->id }}" name="nota">{{ $notas->nota }}</textarea>
                @endif
            </td>
            <td>{{ $notas->created_at }}</td>
                <td style="text-align: center">
                    <button type="button"  onclick="delete_note({{ $notas->id }})" class="btn btn_rojo" id="btn_save" style="">
                              <i class="fa fa-trash"></i> Delete
                    </button>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
