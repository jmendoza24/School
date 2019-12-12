</form>

<table class="table table-striped table-bordered datacol-basic-initialisation display"  id="">
        <thead>
            <tr>
                <th>#</th>
                <th>Documents</th>
                <th style="text-align: center;">Status</th>
                <th>Date</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        @php $x=0; @endphp

        @foreach($documentos as $alumnosDocumentos)
                        @php $x++; @endphp

                    <tr>
                    <td>{!! $x !!}</td>
                    <td>
                            @if(empty(!$alumnosDocumentos->documento))
                                <a target="_blank" href="{{ asset($alumnosDocumentos->documento) }}">{!! $alumnosDocumentos->valor !!}</a> 
                            @else
                               {!! $alumnosDocumentos->valor !!}
                            @endif
                    </td>
                    <td style="text-align: center;">
                        @if(empty($alumnosDocumentos->documento))
                            <i class="fa fa-times red"></i>

                        @else
                            <i class="fa fa-check v"></i>

                        @endif
                    </td>
                    <td> {!! $alumnosDocumentos->created_at !!}</td>
                    <td> 
                        @if(empty(!$alumnosDocumentos->documento))

                            Loaded Document

                        @else
                           <form method="post" action="#" enctype="multipart/form-data" id="formUpload{{ $alumnosDocumentos->id_cat }}">
                                {!! csrf_field() !!}

                                <input onchange="validarFile(this)" type="file" accept="application/pdf,image/*" name="documento{{ $alumnosDocumentos->id_cat }}" id="documento{{ $alumnosDocumentos->id_cat }}" class="form-control">
                                <input type="hidden" name="id_alumno" id="id_alumno" class="form-control" value="{{ $id_al }}">
                                <input type="hidden" name="id" id="id" class="form-control" value="{{ $alumnosDocumentos->id_cat }}">

                            </form>
                        @endif
                    </td>
                    <td>
                        @if(empty(!$alumnosDocumentos->documento))
                            <button type="button"  onclick="delete_document({{ $alumnosDocumentos->idad }},{{ $id_al }})" class="btn btn_rojo pull-right" id="btn_save" style="">
                              <i class="fa fa-trash"></i> Delete
                            </button>

                        @else
                            <button type="button"  onclick="carga_documentos({{ $alumnosDocumentos->id_cat }})" class="btn btn_verde pull-right" id="btn_save" style="">
                              <i class="fa fa-check-square-o"></i> &nbsp;&nbsp;Save&nbsp;&nbsp;
                            </button>

                        @endif

                    </td>
                    </tr>

        @endforeach
        </tbody>
    </table>
