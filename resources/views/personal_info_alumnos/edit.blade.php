@extends('layouts.app')
@section('titulo')Edit Student @endsection

@section('content')
@php($editar = 1)
@php($ext = 0)
 {!! Form::model($personalInfoAlumno, ['route' => ['personalInfoAlumnos.update', $personalInfoAlumno->id], 'method' => 'patch','enctype'=>'multipart/form-data']) !!}
      @include('personal_info_alumnos.fields')
 {!! Form::close() !!}
@endsection 