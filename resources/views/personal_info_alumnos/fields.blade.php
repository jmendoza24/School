
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
  @endif
</ul>
<div class="tab-content px-1 pt-1">
<div role="tabpanel" class="tab-pane active in" id="active32" aria-labelledby="active-tab32" aria-expanded="true">
   <br>
   <div class="row">
        <input type="hidden" name="activo" id="activo" value="1">
        
        <div class="col-md-6">
            <div class="col-md-12" style="text-align: center;">
              <table style="margin: auto;">
                <tr>
                  <td>
                    <img class="media-object rounded-circle" src="@if(!empty($alumnos)) {{ asset($personalInfoAlumno->photo_alumno) }} @else {{ url('app-assets/images/default-user-icon-5.jpg') }} @endif" style="width: 110px;height: 110px;"/>
                  </td>
                  <td>
                    <a href="" class="btn btn_verde"><i class="fa fa-card"></i>Credential</a>
                  </td>
                </tr>
              </table>
              <br><br>
            </div>
            <div class="col-md-12">
              <div class="form-group row">
                <label class="col-md-3 label-control" for="userinput2">Photo:</label>
                <div class="col-md-9">
                <input type="file" name="foto" id="foto" class="form-control">
                </div>
              </div>
            </div> 

        </div>
        <div class="col-md-6">
          
        </div>
        <div class="col-md-6">
          <div class="col-md-12">
              <div class="form-group row">
                <label class="col-md-3 label-control" for="userinput2">Name:</label>
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
                <label class="col-md-3 label-control" for="userinput2">Student ID:</label>
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
                <label class="col-md-3 label-control" for="userinput2">Grade:</label>
                <div class="col-md-9">
                <select class="form-control" name="grade" id="grade" required="required">
                    <option value="" selected="">select option</option> 
                     @if(!empty($personalInfoAlumnos))
                              @foreach($grados as $tipo)
                                 <option 
                                      value="{{ $tipo->id }}" 
                                      {{ old('grade', $personalInfoAlumnos->grade) == $tipo->id ? 'selected' : '' }}
                                 >{{ $tipo->valor }}</option>
                              @endforeach   
                              @else
                               @foreach($grados as $tipo)

                                 <option 
                                      value="{{ $tipo->id }}" 
                                      {{ old('grade')}}
                                 >{{ $tipo->valor }}</option>
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
                <label class="col-md-3 label-control" for="userinput2">Group:</label>
                <div class="col-md-9">
                <select class="form-control" name="group" id="group" required="required">
                    <option value="" selected="">select option</option> 
                     @if(!empty($personalInfoAlumnos))
                      @foreach($grupos as $tipo)
                         <option 
                              value="{{ $tipo->id }}" 
                              {{ old('group', $personalInfoAlumnos->group) == $tipo->id ? 'selected' : '' }}
                         >{{ $tipo->valor }}</option>
                      @endforeach   
                      @else
                       @foreach($grupos as $tipo)

                         <option 
                              value="{{ $tipo->id }}" 
                              {{ old('group')}}
                         >{{ $tipo->valor }}</option>
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
                <label class="col-md-3 label-control" for="userinput2">School Level:</label>
                <div class="col-md-9">
                <select class="form-control" name="level" id="level" required="required">
                    <option value="" selected="">select option</option>
                    <option value="1" >Pre kindergarten</option>
                    <option value="2" >Primary</option>
                    <option value="3" >High school (Secundaria)</option>
                    <option value="4" >High school (preparatoria)</option>

                </select>
                </div>
              </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="col-md-12">
              <div class="form-group row">
                <label class="col-md-3 label-control" for="userinput2">School Cycle:</label>
                <div class="col-md-9">
                <select class="form-control" name="school_cycle" id="school_cycle" required="required">
                    <option value="" selected="">select option</option> 
                     @if(!empty($personalInfoAlumnos))
                      @foreach($ciclos as $tipo)
                         <option 
                              value="{{ $tipo->id }}" 
                              {{ old('school_cycle', $personalInfoAlumnos->school_cycle) == $tipo->id ? 'selected' : '' }}
                         >{{ $tipo->valor }}</option>
                      @endforeach   
                      @else
                       @foreach($ciclos as $tipo)

                         <option 
                              value="{{ $tipo->id }}" 
                              {{ old('school_cycle')}}
                         >{{ $tipo->valor }}</option>
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
                <label class="col-md-3 label-control" for="userinput2">Date Birth:</label>
                <div class="col-md-9">
                <input type="date" name="date_birth" id="date_birth" class="form-control">
                
                    @section('scripts')
                        <script type="text/javascript">
                            $('#date_birth').datetimepicker({
                                format: 'YYYY-MM-DD HH:mm:ss',
                                useCurrent: false
                            })
                        </script>
                    @endsection
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
                    <option value="1" >M</option> 
                    <option value="2" >F</option>  
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
                      <option value="1">Students of Hispanic/Latino Origin</option>
                      <option value="2">Not Hispanic/Latino</option> 
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
                     <option value="1">American Indian or Alaska Native</option>
                     <option value="2">Asian</option>
                     <option value="3">Black or African American</option>
                     <option value="4">Native Hawaiian or other Pacific Islander</option>
                     <option value="5">White</option> 
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
                     <option value="0" selected="">select option</option>
                     <option value="1" >Yes</option> 
                     <option value="2" >No</option> 
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
                    <option value="0" >select option</option>
                    <option value="1" >Yes</option> 
                    <option value="2" >No</option>  
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
    
    <br><br><br><br><br><br>
</div>

  <div class="tab-pane" id="link32" role="tabpanel" aria-labelledby="link-tab32" aria-expanded="false">
    <h4 class="form-section"><i class="ft-user"></i>Información de contacto</h4>     
    
    </div>
    
    
  @if($editar ==1)
  <div class="tab-pane" id="linkOpt2" role="tabpanel" aria-labelledby="linkOpt-tab2" aria-expanded="false">
 <br>
    <div class="row">
          <div class="col-lg-6 col-md-12">
            <fieldset class="form-group">
              <label for="basicInputFile">Acta de nacimiento</label>
              <input type="file" class="form-control-file" id="basicInputFile">
            </fieldset>
          </div>
          <div class="col-lg-6 col-md-12">
            <fieldset class="form-group">
              <label for="basicInputFile">CURP</label>
              <input type="file" class="form-control-file" id="basicInputFile">
            </fieldset>
          </div>
        </div>
  </div>
  @endif
</div>
<div class="form-actions right">
  <a href="{{ route('personalInfoAlumnos.index') }}">
<button type="button" class="btn btn-red mr-1">
  <i class="ft-x"></i> Cancel
</button>
</a>
<button type="submit" class="btn btn_verde">
  <i class="fa fa-check-square-o"></i> Save
</button>
</div>







