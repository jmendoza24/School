@extends('layouts.app')
@section('titulo')Nueva materia @endsection

@section('content')
{!! Form::open(['route' => 'materias.store','class'=>'needs-validation','novalidate']) !!}
    @include('materias.fields')
{!! Form::close() !!}
@endsection
