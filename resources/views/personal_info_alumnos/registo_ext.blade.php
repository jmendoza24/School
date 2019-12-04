@extends('layouts.master')
@section('titulo')New Student 
@endsection

@section('content')
@php($ext = 1)      
@php($editar = 0)
{!! Form::open(['route' => 'personalInfoAlumnos.store','class'=>'needs-validation','novalidate','enctype'=>'multipart/form-data']) !!}
    @include('personal_info_alumnos.fields')
{!! Form::close() !!}
@endsection
