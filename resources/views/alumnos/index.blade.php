@extends('layouts.app')
@section('titulo')
        Alumnos
@endsection
@section('content')
    <div class="col-md-12">
       <h1 class="pull-right">
             <a class="btn azul pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('alumnos.create') !!}"> <i class="fa fa-plus"></i> Alumno</a>
        </h1>
    </div>
    <div class="col-md-12" style="overflow: scroll;">
         @include('alumnos.table')        
    </div>
@endsection





