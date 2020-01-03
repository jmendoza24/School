<ul class="nav nav-tabs nav-underline no-hover-bg nav-justified">
  <li class="nav-item">
    <a class="nav-link active" id="active-tab32" data-toggle="tab" href="#active32" aria-controls="active32"
    aria-expanded="true"><i class="ft-user"></i> PERSONAL INFORMATION </a>
  </li>
    @if($editar ==1)
     <input type="hidden" name="id_alumno" id="id_alumno" value="{{ $id }}">

  <li class="nav-item">
    <a class="nav-link" id="linkOpt-tab2" data-toggle="tab" href="#linkOpt2" aria-controls="linkOpt2"><i class="fa fa-file-text-o"></i> Documents</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="linkOpt-tab2" data-toggle="tab" href="#linkOpt3" aria-controls="linkOpt3"><i class="fa fa-check"></i> Subjects</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="linkOpt-tab4" data-toggle="tab" href="#linkOpt4" aria-controls="linkOpt4"><i class="fa fa-info-circle"></i> Notes</a>
  </li>
  @endif
</ul>
<div class="tab-content px-1 pt-1">
  <div role="tabpanel" class="tab-pane active in" id="active32" aria-labelledby="active-tab32" aria-expanded="true">
   <br>
<div class="row">  
            @if($ext==0)
            <div class="col-md-6" style="text-align: center;"> 
              <img class="media-object rounded-circle" src="@if(!empty($personalInfoAlumno->photo_alumno)) {{ asset($personalInfoAlumno->photo_alumno) }} @else {{ url('app-assets/images/default-user-icon-5.jpg') }} @endif" style="width: 110px;height: 110px;"/><br>
            </div>
            @endif
            <div class="col-md-6">
                <div class="col-md-12">

              <div class="form-group row">
                <label class="col-md-3 label-control" for="userinput2">Photo:</label>
                <div class="col-md-9">
                <input type="file" name="foto" accept="application/pdf,image/*" id="foto" class="form-control" onchange="validarFile()">
                </div>
              </div>
            </div> 
            </div> 

        <br><br><br><br><br><br><br>
        <div class="col-md-6">
          <div class="col-md-12">
              <div class="form-group row">
                <label class="col-md-3 label-control" for="userinput2">Name: <span class="red">*</span></label>
                <div class="col-md-9">
                {!! Form::text('name', null, ['class' => 'form-control','required'=>'required']) !!}
                <div class="invalid-feedback">This field is required.</div>

                </div>
              </div>
          </div>
        </div>

        <div class="col-md-6">
          <div class="col-md-12">
              <div class="form-group row">
                <label class="col-md-3 label-control" for="userinput2">Student ID: <span class="red">*</span></label>
                <div class="col-md-9">
                     {!! Form::text('num_control', null, ['class' => 'form-control','required'=>'required']) !!}
                <div class="invalid-feedback">This field is required.</div>

                </div>
              </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="col-md-12">
              <div class="form-group row">
                <label class="col-md-3 label-control" for="userinput2">Curp: <span class="red">*</span></label>
                <div class="col-md-9">
                     {!! Form::text('curp', null, ['class' => 'form-control','required'=>'required','id'=>'curp','onchange'=>'valida_curp()']) !!}
                <div class="invalid-feedback">This field is required.</div>

                </div>
              </div>
          </div>
        </div>

        <div class="col-md-6">
          <div class="col-md-12">
              <div class="form-group row">
                <label class="col-md-3 label-control" for="userinput2">School Cycle: <span class="red">*</span></label>
                <div class="col-md-9">
                <select class="form-control" name="school_cycle" id="school_cycle" required="required">
                    <option value="" selected="">select option</option> 
                     @if(!empty($ciclos))
                         @foreach($ciclos as $tipo)
                        <option value="{{ $tipo->id }}" 
                          
                            {{ ($personalInfoAlumno->school_cycle == $tipo->id) ? 'selected' : '' }}
                           >
                          {{ $tipo->valor}}</option>
                        @endforeach
                    @endif  
                </select>
                </div>
              </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="col-md-12">
              <div class="form-group row">
                <label class="col-md-3 label-control" for="userinput2">School Level: <span class="red">*</span></label>
                <div class="col-md-9">
                <select class="form-control" name="level" id="level" required="required" onchange="grados_niveles()">
                    <option value="" selected="">select option</option>
                    <option value="1" {{($personalInfoAlumno->level ==1) ? 'selected':''}} >Pre kindergarten</option>
                    <option value="2" {{($personalInfoAlumno->level ==2) ? 'selected':''}} >Primary</option>
                    <option value="3" {{($personalInfoAlumno->level ==3) ? 'selected':''}} >High school (Secundaria)</option>
                    <option value="4" {{($personalInfoAlumno->level ==4) ? 'selected':''}} >High school (preparatoria)</option>

                </select>
                </div>
              </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="col-md-12">
              <div class="form-group row">
                <label class="col-md-3 label-control" for="userinput2">Group: <span class="red">*</span></label>
                <div class="col-md-9">
                <select class="form-control" name="group" id="group" required="required">
                    <option value="" selected="">select option</option> 
                    @if(!empty($grupos))
                         @foreach($grupos as $tipo)
                        <option value="{{ $tipo->id }}" 
                          
                            {{ ($personalInfoAlumno->group == $tipo->id) ? 'selected' : '' }}
                           >
                          {{ $tipo->valor}}</option>
                        @endforeach
                    @endif                   
                </select>
                </div>
              </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="col-md-12">
              <div class="form-group row">
                <label class="col-md-3 label-control" for="userinput2">Grade: <span class="red">*</span></label>
                <div class="col-md-9">
                <select class="form-control" name="grade" id="grade" required="required">
                    <option value="" selected="">select option</option> 
                    <option value="1" {{ ($personalInfoAlumno->grade == 1) ? 'selected' : '' }} style="{{ ($personalInfoAlumno->grade == 1) ? '' : 'display: none' }}" class="prescolar">Prekinder</option>
                    <option value="2" {{ ($personalInfoAlumno->grade == 2) ? 'selected' : '' }} style="{{ ($personalInfoAlumno->grade == 2) ? '' : 'display: none' }}" class="prescolar">Kinder</option>
                    <option value="3" {{ ($personalInfoAlumno->grade == 3) ? 'selected' : '' }} style="{{ ($personalInfoAlumno->grade == 3) ? '' : 'display: none' }}" class="primaria">1</option>
                    <option value="4" {{ ($personalInfoAlumno->grade == 4) ? 'selected' : '' }} style="{{ ($personalInfoAlumno->grade == 4) ? '' : 'display: none' }}" class="primaria">2</option>
                    <option value="5" {{ ($personalInfoAlumno->grade == 5) ? 'selected' : '' }} style="{{ ($personalInfoAlumno->grade == 5) ? '' : 'display: none' }}" class="primaria">3</option>
                    <option value="6" {{ ($personalInfoAlumno->grade == 6) ? 'selected' : '' }} style="{{ ($personalInfoAlumno->grade == 6) ? '' : 'display: none' }}" class="primaria">4</option>
                    <option value="7" {{ ($personalInfoAlumno->grade == 7) ? 'selected' : '' }} style="{{ ($personalInfoAlumno->grade == 7) ? '' : 'display: none' }}" class="primaria">5</option>
                    <option value="8" {{ ($personalInfoAlumno->grade == 8) ? 'selected' : '' }} style="{{ ($personalInfoAlumno->grade == 8) ? '' : 'display: none' }}" class="primaria">6</option>
                    <option value="9" {{ ($personalInfoAlumno->grade == 9) ? 'selected' : '' }} style="{{ ($personalInfoAlumno->grade == 9) ? '' : 'display: none' }}" class="secundaria">7</option>
                    <option value="10" {{ ($personalInfoAlumno->grade == 10) ? 'selected' : '' }} style="{{ ($personalInfoAlumno->grade == 10) ? '' : 'display: none' }}" class="secundaria">8</option>
                    <option value="11" {{ ($personalInfoAlumno->grade == 11) ? 'selected' : '' }} style="{{ ($personalInfoAlumno->grade == 11) ? '' : 'display: none' }}" class="secundaria">9</option>
                    <option value="12" {{ ($personalInfoAlumno->grade == 12) ? 'selected' : '' }} style="{{ ($personalInfoAlumno->grade == 12) ? '' : 'display: none' }}" class="prepa">10</option>                            
                    <option value="13" {{ ($personalInfoAlumno->grade == 13) ? 'selected' : '' }} style="{{ ($personalInfoAlumno->grade == 13) ? '' : 'display: none' }}"class="prepa">11</option>  
                    <option value="14" {{ ($personalInfoAlumno->grade == 14) ? 'selected' : '' }} style="{{ ($personalInfoAlumno->grade == 14) ? '' : 'display: none' }}"class="prepa">12</option>  
                </select>
                </div>
              </div>
          </div>
        </div>
        
        <div class="col-md-6">
          <div class="col-md-12">
              <div class="form-group row">
                <label class="col-md-3 label-control" for="userinput2">Date Birth:</label>
                <div class="col-md-9">
                <input type="date" name="date_birth" id="date_birth" class="form-control" value="{{ substr($personalInfoAlumno->date_birth,0,10)}}">
                </div>
              </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="col-md-12">
              <div class="form-group row">
                <label class="col-md-3 label-control" for="userinput2">Gender:</label>
                <div class="col-md-9">
                <select class="form-control" name="gender" id="gender" >
                    <option value="0" selected="">select option</option>
                    <option value="1" {{($personalInfoAlumno->gender ==1) ? 'selected':''}}>M</option> 
                    <option value="2" {{($personalInfoAlumno->gender ==2) ? 'selected':''}}>F</option>  
                </select>
                </div>
              </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="col-md-12">
              <div class="form-group row">
                <label class="col-md-3 label-control" for="userinput2">Native Language:</label>
                <div class="col-md-9">
                     {!! Form::text('native_language', null, ['class' => 'form-control']) !!}
                </div>
              </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="col-md-12">
              <div class="form-group row">
                <label class="col-md-3 label-control" for="userinput2">Ethnicity:</label>
                <div class="col-md-9">
                  <select class="form-control" name="ethnicity" id="ethnicity" >
                      <option value="0" selected="">select option</option>
                      <option value="1" {{($personalInfoAlumno->ethnicity ==1) ? 'selected':''}}>Students of Hispanic/Latino Origin</option>
                      <option value="2" {{($personalInfoAlumno->ethnicity ==2) ? 'selected':''}}>Not Hispanic/Latino</option> 
                </select>
                </div>
              </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="col-md-12">
              <div class="form-group row">
                <label class="col-md-3 label-control" for="userinput2">Race:</label>
                <div class="col-md-9">
                   <select class="form-control" name="race" id="race" >
                     <option value="0" selected="">select option</option>
                     <option value="1" {{($personalInfoAlumno->race ==1) ? 'selected':''}}>American Indian or Alaska Native</option>
                     <option value="2" {{($personalInfoAlumno->race ==2) ? 'selected':''}}>Asian</option>
                     <option value="3" {{($personalInfoAlumno->race ==3) ? 'selected':''}}>Black or African American</option>
                     <option value="4" {{($personalInfoAlumno->race ==4) ? 'selected':''}}>Native Hawaiian or other Pacific Islander</option>
                     <option value="5" {{($personalInfoAlumno->race ==5) ? 'selected':''}}>White</option> 
                 </select>

                </div>
              </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="col-md-12">
              <div class="form-group row">
                <label class="col-md-3 label-control" for="userinput2">Special Ed:</label>
                <div class="col-md-9">
                   <select class="form-control" name="special_ed" id="special_ed" >
                     <option value="0" {{($personalInfoAlumno->special_ed ==0) ? 'selected':''}}>select option</option>
                     <option value="1" {{($personalInfoAlumno->special_ed ==1) ? 'selected':''}}>Yes</option> 
                     <option value="2" {{($personalInfoAlumno->special_ed ==2) ? 'selected':''}}>No</option> 
                 </select>
                </div>
              </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="col-md-12">
              <div class="form-group row">
                <label class="col-md-3 label-control" for="userinput2">Gifted/Talent:</label>
                <div class="col-md-9">
                   <select class="form-control" name="gifted_talented" id="gifted_talented" >
                    <option value="0" {{($personalInfoAlumno->gifted_talented ==0) ? 'selected':''}}>select option</option>
                    <option value="1" {{($personalInfoAlumno->gifted_talented ==1) ? 'selected':''}}>Yes</option> 
                    <option value="2" {{($personalInfoAlumno->gifted_talented ==2) ? 'selected':''}}>No</option>  
                 </select>
                </div>
              </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="col-md-12">
              <div class="form-group row">
                <label class="col-md-3 label-control" for="userinput2">Email:</label>
                <div class="col-md-9">
                    {!! Form::text('email', null, ['class' => 'form-control email-inputmask']) !!}

                </div>
              </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="col-md-12">
              <div class="form-group row">
                <label class="col-md-3 label-control" for="userinput2">Phone Number:</label>
                <div class="col-md-9">
                    {!! Form::text('tel', null, ['class' => 'form-control phone-inputmask']) !!}

                </div>
              </div>
          </div>
        </div>
    </div>
   
    <h4 class="form-section"><i class="fa fa-map-marker"></i> PLACE BIRTH </h4>
    <div class="row">
      <div class="col-md-6">
          <div class="col-md-12">
              <div class="form-group row">
                <label class="col-md-3 label-control" for="userinput2">Address:</label>
                <div class="col-md-9">
                {!! Form::text('address', null, ['class' => 'form-control']) !!}
                </div>
              </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="col-md-12">
              <div class="form-group row">
                <label class="col-md-3 label-control" for="userinput2">City:</label>
                <div class="col-md-9">
                {!! Form::text('city', null, ['class' => 'form-control']) !!}
                </div>
              </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="col-md-12">
              <div class="form-group row">
                <label class="col-md-3 label-control" for="userinput2">State:</label>
                <div class="col-md-9">
                {!! Form::text('state', null, ['class' => 'form-control']) !!}
                </div>
              </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="col-md-12">
              <div class="form-group row">
                <label class="col-md-3 label-control" for="userinput2">Zipcode:</label>
                <div class="col-md-9">
                {!! Form::text('zipcode', null, ['class' => 'form-control']) !!}
                </div>
              </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="col-md-12">
              <div class="form-group row">
                <label class="col-md-3 label-control" for="userinput2">Country:</label>
                <div class="col-md-9">
                {!! Form::text('country', null, ['class' => 'form-control']) !!}
                </div>
              </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="col-md-12">
              <div class="form-group row">
                <label class="col-md-3 label-control" for="userinput2">ID, Passport or Driver's Licence:</label>
                <div class="col-md-9">
                {!! Form::text('personal_info', null, ['class' => 'form-control']) !!}
                </div>
              </div>
          </div>
        </div>
    </div>
    <h4 class="form-section"><i class="fa fa-users"></i> Contact</h4>
    <div class="row">
        <div class="col-md-6">
          <div class="col-md-12">
              <div class="form-group row">
                <label class="col-md-3 label-control" for="userinput2">Name Parent:</label>
                <div class="col-md-9">
                {!! Form::text('name_parent', null, ['class' => 'form-control']) !!}
                </div>
              </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="col-md-12">
              <div class="form-group row">
                <label class="col-md-3 label-control" for="userinput2">Parent's Cell:</label>
                <div class="col-md-9">
                {!! Form::text('parents_cell', null, ['class' => 'form-control phone-inputmask']) !!}
                </div>
              </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="col-md-12">
              <div class="form-group row">
                <label class="col-md-3 label-control" for="userinput2">Parent's Email:</label>
                <div class="col-md-9">
                {!! Form::text('parents_email', null, ['class' => 'form-control email-inputmask']) !!}
                </div>
              </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="col-md-12">
              <div class="form-group row">
                <label class="col-md-3 label-control" for="userinput2">Comments:</label>
                <div class="col-md-9">
                {!! Form::textarea('comments', null, ['class' => 'form-control']) !!}
                </div>
              </div>
          </div>
        </div>
    </div>

    <h4 class="form-section"><i class="fa fa-book"></i> PREVIOUS SCHOOL INFORMATION</h4>
    <div class="row">
        <div class="col-md-6">
          <div class="col-md-12">
              <div class="form-group row">
                <label class="col-md-3 label-control" for="userinput2">Last School:</label>
                <div class="col-md-9">
                {!! Form::text('last_school', null, ['class' => 'form-control']) !!}
                </div>
              </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="col-md-12">
              <div class="form-group row">
                <label class="col-md-3 label-control" for="userinput2">School Address:</label>
                <div class="col-md-9">
                {!! Form::text('school_address', null, ['class' => 'form-control']) !!}
                </div>
              </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="col-md-12">
              <div class="form-group row">
                <label class="col-md-3 label-control" for="userinput2">School Phone:</label>
                <div class="col-md-9">
                {!! Form::text('phone_school', null, ['class' => 'form-control']) !!}
                </div>
              </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="col-md-12">
              <div class="form-group row">
                <label class="col-md-3 label-control" for="userinput2">Last Completed Level:</label>
                <div class="col-md-9">
                {!! Form::text('last_complete_level', null, ['class' => 'form-control']) !!}
                </div>
              </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="col-md-12">
              <div class="form-group row">
                <label class="col-md-3 label-control" for="userinput2">Last Date Attended:</label>
                <div class="col-md-9">
                <input type="date" name="last_date_attended" id="last_date_attended" class="form-control">
                
                    @section('scripts')
                        <script type="text/javascript">
                            $('#last_date_attended').datetimepicker({
                                format: 'YYYY-MM-DD HH:mm:ss',
                                useCurrent: false
                            })
                        </script>
                    @endsection
                </div>
              </div>
          </div>
        </div>
    </div>

    @if($ext==1)
    <h4 class="form-section"><i class="fa fa-file-text-o"></i> DOCUMENTATION</h4>
    <div class="row">
      <table class="table table-striped table-bordered datacol-basic-initialisation display"  id="">
        <thead>
            <tr class="azul">
                <th>#</th>
                <th>Documents</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        @php $x=0; @endphp

        @foreach($cat_doc as $cat_doc)
          @php $x++; @endphp
              <tr>
                <td>{!! $x !!}</td>
                <td>
                  @if(empty(!$cat_doc->documento))
                    {!! $cat_doc->valor !!}
                  @else
                     {!! $cat_doc->valor !!}
                  @endif
                </td>
                <td style="text-align: center;">
                      <input onchange="validarFile(this)" type="file" accept="application/pdf,image/*" name="documento{{ $cat_doc->id }}" id="documento{{ $cat_doc->id }}" class="form-control">
                </td>
              </tr>

        @endforeach
        </tbody>
    </table>

    </div>
    @endif

    
    <div class="form-actions right">
      <a href="{{ route('personalInfoAlumnos.index') }}">
    <button type="button" class="btn btn-red mr-1">
      <i class="ft-x"></i> Cancel
    </button>
    </a>
    <button type="submit" class="btn btn-success" id="btn_save" style="{{ ($ext==1)?'display: none;':'' }}">
      <i class="fa fa-check-square-o"></i> Save
    </button>
    </div>
</div>


  @if($editar ==1)
  <div class="tab-pane" id="linkOpt2" role="tabpanel" aria-labelledby="linkOpt-tab2" aria-expanded="false" aria-controls="linkOpt2">
    <br><br>
    <div class="row" id="documentos">
      @include('alumnos_documentos.table')
      </div>
      </div>

  <div class="tab-pane" id="linkOpt3" role="tabpanel" aria-labelledby="linkOpt-tab3" aria-expanded="false" aria-controls="linkOpt3">
    <br><br>
    <div class="row">
      <div class="col-md-12 ">
        <body onload="view_kardex()"></body>
         <h1 class="pull-right">
          <a class="btn btn_morado pull-right" style="margin-top: -10px;margin-bottom: 5px" href="#" onclick="add_subjet()"> <i class="fa fa-plus"></i> Subject</a>

          <select class="form-control" onchange="view_kardex()" id="vciclo">
             <option value="" selected="" >All subjets</option> 
                     @if(!empty($ciclos))
                         @foreach($ciclos as $tipo)
                        <option value="{{ $tipo->id }}" 
                          
                            {{ ($personalInfoAlumno->school_cycle == $tipo->id) ? 'selected' : '' }}
                           >
                          {{ $tipo->valor}}</option>
                        @endforeach
                    @endif
              </select>
          </h1>
      </div> <br><br>
      </div>
    <div class="row" id="subjects">
      @include('tbl_mat_alumnos.table')
      </div>
  </div>

  <div class="tab-pane" id="linkOpt4" role="tabpanel" aria-labelledby="linkOpt-tab4" aria-expanded="false" aria-controls="linkOpt4">
    
    <br><br>
    <div class="row">
      <div class="col-md-12 ">
         <h1 class="pull-right">
               <a class="btn btn_morado pull-right" style="margin-top: -10px;margin-bottom: 5px" href="#" onclick="add_note()"> <i class="fa fa-plus"></i> Note</a>
          </h1>
      </div> <br><br>
      </div>
        <div class="row" id="notas">
          @include('notas.table')
      </div>
  </div>
  @endif

</div>







