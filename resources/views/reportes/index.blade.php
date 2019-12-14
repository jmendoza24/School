@extends('layouts.app')
@section('titulo') Reports @endsection
@section('content')

@php 

use App\Models\catalogos;

$grupos=catalogos::where('catalogo',4)->get();
  

@endphp
<div class="col-md-12" style="padding-top:15px; background: #F0E6E4;">
	<div class="row">
        <div class="col-xl-6 col-md-12">
          <div class="card overflow-hidden">
            <div class="card-content">
              <div class="media align-items-stretch">
                <div class="media-body p-2">
                  <h4>Students</h4>
                  <span>select option</span><br><br>
                  <div class="row">
                      <div class="col-xl-6">
                      	 <div class="media-right media-middle">
                        <select class="form-control" name="nivel" id="level" required="required" onchange="grados_niveles()">      
    	                  	<option value="">Level</option>
    	                  	<option value="1">Pre kindergarten</option>
                          <option value="2">Primary</option>
                          <option value="3">High school (Secundaria)</option>
                          <option value="4">High school (preparatoria)</option>
    	                  </select> 
    	                   </div>
                      </div>
                      <div class="col-xl-6">
                      	 <div class="media-right media-middle">
                             <select class="form-control" name="grado" id="grade" required="required">
                              <option value="" selected="">Grade</option> 
                              <option value="1"   class="prescolar">Prekinder</option>
                              <option value="2"  class="prescolar">Kinder</option>
                              <option value="3"   class="primaria">1</option>
                              <option value="4"   class="primaria">2</option>
                              <option value="5"   class="primaria">3</option>
                              <option value="6"   class="primaria">4</option>
                              <option value="7"   class="primaria">5</option>
                              <option value="8"   class="primaria">6</option>
                              <option value="9"   class="secundaria">7</option>
                              <option value="10"  class="secundaria">8</option>
                              <option value="11"  class="secundaria">9</option>
                              <option value="12"  class="prepa">10</option>                            
                              <option value="13"  class="prepa">11</option>  
                              <option value="14"  class="prepa">12</option>  
                             </select>
      	                 </div>                 
                      </div>
                      <div class="col-xl-6">
      	                <div class="media-right media-middle">
                          <select class="form-control" name="group" id="group" required="required">
                          <option value="" selected="">Group</option> 
                          @if(!empty($grupos))
                               @foreach($grupos as $tipo)
                              <option value="{{ $tipo->id }}" 
                        
                                 >
                                {{ $tipo->valor}}</option>
                              @endforeach
                          @endif                   
      	                  </select>
      	                </div>
                      </div>
                      <div class="col-xl-6">
                         <div class="media-right media-middle">
                                <select class="form-control" name="ethnicity" id="ethnicity" >
                                    <option value="0" selected="">Ethnicity</option>
                                    <option value="1" >Students of Hispanic/Latino Origin</option>
                                    <option value="2" >Not Hispanic/Latino</option> 
                                </select>   
                          </div>
                      </div>
                      <div class="col-xl-6">
                        <div class="media-right media-middle">
                            <select class="form-control" name="race" id="race" >
                               <option value="0" selected="">select option</option>
                               <option value="1" >American Indian or Alaska Native</option>
                               <option value="2" >Asian</option>
                               <option value="3" >Black or African American</option>
                               <option value="4" >Native Hawaiian or other Pacific Islander</option>
                               <option value="5" >White</option> 
                           </select>   
                        </div>
                      </div>


                  </div>
                </div>
                <div class=" azul p-2 media-middle">
                  <i class="ft-user font-large-2 white" style="cursor: pointer;"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-6 col-md-12">
          <div class="card">
            <div class="card-content">
              <div class="media align-items-stretch">
                <div class="media-body p-2">
                  <h4>Assistance</h4>
                  <span>select the range of dates</span>
                  <div class="row">
                  	<div class="media-right media-middle">
                  		<label>Start date:</label>
	                  <input type="date" name="" class="form-control" >
	                </div>
	                <div class="media-right media-middle" style="padding-left: 5px;">
	                	<label>Final date:</label>
	                  <input type="date" name="" class="form-control">
	                </div>
                  </div>
                </div>
                <div class="naranja p-2 media-middle">
                </a>  <i class="icon-speech font-large-2  white" style="cursor: pointer;"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
</div>

@endsection

