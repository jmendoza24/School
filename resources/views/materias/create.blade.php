@extends('layouts.app')
@section('titulo')New Subject @endsection
@php $editar=0 @endphp

@section('content')
{!! Form::open(['route' => 'materias.store','class'=>'needs-validation','novalidate']) !!}
    @include('materias.fields')
{!! Form::close() !!}
@endsection
