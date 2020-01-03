@extends('layouts.app')
@section('titulo')
        Students
@endsection
@section('content')
    <div class="col-md-12 ">
       <h1 class="pull-right">
             <a class="btn btn_morado pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('personalInfoAlumnos.create') !!}"> <i class="fa fa-plus"></i> Student</a>
        </h1>
    </div><br>
    <div class="col-md-12 ">
        <ul class="nav nav-tabs nav-underline no-hover-bg nav-justified">
          <li class="nav-item">
            <a class="nav-link active" id="active-tab32" data-toggle="tab" href="#active32"  aria-controls="active32"
            aria-expanded="true"><i class="ft-user"></i>Pre kindergarten</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="link-tab32" data-toggle="tab" href="#link32" aria-controls="link32"
            aria-expanded="false"><i class="ft-user"></i>Primary</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="link-tab33" data-toggle="tab" href="#link33" aria-controls="link33"
            aria-expanded="false"><i class="ft-user"></i>high school (Secundaria)</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="link-tab34" data-toggle="tab" href="#link34" aria-controls="link34"
            aria-expanded="false"><i class="ft-user"></i>high school (preparatoria)</a>
          </li>
        </ul>
        <div class="tab-content px-1 pt-1 " >
            <div role="tabpanel" class="tab-pane active in" id="active32" aria-labelledby="active-tab32" aria-expanded="true" >
                <h4 class="form-section">Pre kindergarten</h4><br>
                  <div class="row" style="background: #F0E6E4;padding-top: 14px">
                   @foreach($prescolar as $p)
                    <div class="col-xl-3">
                        <div class="card">
                          <div class="card-content">
                            <div class="card-body">
                              <div class="media">
                                <div class="media-body text-left w-100" onclick="tabla_alumnos(1,{{ $p->grade }},{{ $p->group }})" style="cursor: pointer;">
                                  <h4 class="primary">
                                    <i class="icon-user-follow primary "></i>
                                    {{ $p->grado }} - {{ $p->grupo }} ({{ $p->conteos }})</h4>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                  @endforeach
                </div>
        </div>
        <div class="tab-pane" id="link32" role="tabpanel" aria-labelledby="link-tab32" aria-expanded="false">
                <h4 class="form-section">Primary</h4><br>
                <div class="row" style="background-color: #F0E6E4;padding-top: 14px">
                    @foreach($primaria as $pr)
                      <div class="col-xl-3">
                          <div class="card">
                            <div class="card-content">
                              <div class="card-body">
                                <div class="media">
                                  <div class="media-body text-left w-100" onclick="tabla_alumnos(2,{{ $pr->grade }},{{ $pr->group }})" style="cursor: pointer;">
                                  <h4 class="primary">
                                    <i class="icon-user-follow primary"></i>
                                    {{ $pr->grado }} - {{ $pr->grupo }} ({{ $pr->conteos }})</h4>
                                </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                    @endforeach
            </div>
        </div>
        <div class="tab-pane" id="link33" role="tabpanel" aria-labelledby="link-tab33" aria-expanded="false">
                <h4 class="form-section">High school (Secundaria)</h4><br>
                <div class="row" style="background-color: #F0E6E4;padding-top: 14px">
                 @foreach($secundaria as $sec)
                    <div class="col-xl-3">
                      <div class="card">
                        <div class="card-content">
                          <div class="card-body">
                            <div class="media">
                              <div class="media-body text-left w-100" onclick="tabla_alumnos(3,{{ $sec->grade }},{{ $sec->group }})" style="cursor: pointer;">
                              <h4 class="primary">
                                <i class="icon-user-follow primary"></i>
                                {{ $sec->grado }} - {{ $sec->grupo }} ({{ $sec->conteos }})</h4>
                            </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    @endforeach
                  
            </div>
        </div>
        <div class="tab-pane" id="link34" role="tabpanel" aria-labelledby="link-tab34" aria-expanded="false">
                <h4 class="form-section">High school (preparatoria)</h4><br>
                <div class="row" style="background-color: #F0E6E4;padding-top: 14px">
                  @foreach($prepa as $pre)
                  <div class="col-xl-3">
                      <div class="card">
                        <div class="card-content">
                          <div class="card-body">
                            <div class="media">
                              <div class="media-body text-left w-100" onclick="tabla_alumnos(4,{{ $pre->grade }},{{ $pre->group }})" style="cursor: pointer;">
                              <h4 class="primary">
                                <i class="icon-user-follow primary"></i>
                                {{ $pre->grado }} - {{ $pre->grupo }} ({{ $pre->conteos }})</h4>
                            </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    @endforeach   
            </div>
        </div>
    </div><br><hr>
  
    <div class="row" style="display: none; overflow-x: auto;" id="tabla_alumnos" >
          
    </div>

    <div class="modal fade text-left" id="large_familias"  role="dialog" aria-labelledby="myModalLabel17" aria-hidden="true">
    <div class="modal-dialog modal-lg" id="tam_fam" role="document">
      <div class="modal-content" id="contenidos">
        <div class="modal-header morado">
          <h4 class="modal-title" id="myModalLabel17">Assistance</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
          <form method="post" enctype="multipart/form-data" id="formUpload">
              {!! csrf_field() !!}
          <div>
            <div class="modal-body" id="fields" style="overflow:scroll ;">

            </div>
         </div>
      </form>
      </div>
    </div>
  </div>
@endsection





