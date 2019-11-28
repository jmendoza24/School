@extends('layouts.app')
@section('titulo')New Student 
@endsection

@section('content')
@php($editar = 0)      
{!! Form::open(['route' => 'personalInfoAlumnos.store','class'=>'needs-validation','novalidate','enctype'=>'multipart/form-data']) !!}
    @include('personal_info_alumnos.fields')
{!! Form::close() !!}
@endsection
