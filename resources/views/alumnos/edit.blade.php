
@extends('layouts.app')
@section('titulo')Editar Alumno @endsection

@section('content')
@php($editar = 1)
 {!! Form::model($alumnos, ['route' => ['alumnos.update', $alumnos->id], 'method' => 'patch','enctype'=>'multipart/form-data']) !!}
      @include('alumnos.fields')
 {!! Form::close() !!}
@endsection