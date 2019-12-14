@extends('layouts.app')
@section('titulo')
    Materias 
@endsection
@section('content')
<div class="col-md-12">
    <h1 class="pull-right">
       <a class="btn btn_morado pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('materias.create') !!}"><i class="fa fa-plus"></i> Materia</a>
    </h1>
</div>
<div style="overflow-x: scroll;" class="col-md-12">
    @include('materias.table')
</div>
@endsection
