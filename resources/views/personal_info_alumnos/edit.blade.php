@extends('layouts.app')
@section('titulo')Edit Student @endsection

@section('content')
@php($editar = 1)
 {!! Form::model($personalInfoAlumno, ['route' => ['personalInfoAlumnos.update', $personalInfoAlumno->id], 'method' => 'patch','enctype'=>'multipart/form-data']) !!}
      @include('personal_info_alumnos.fields')
 {!! Form::close() !!}
@endsection 