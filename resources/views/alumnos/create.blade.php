@extends('layouts.app')
@section('titulo')Nuevo Alumno 
@endsection

@section('content')
@php($editar = 0)      
{!! Form::open(['route' => 'alumnos.store','class'=>'needs-validation','novalidate']) !!}
    @include('alumnos.fields')
{!! Form::close() !!}
@endsection
