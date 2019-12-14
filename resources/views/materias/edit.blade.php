@extends('layouts.app')
@section('titulo')Edit Subject @endsection
@php $editar=1 @endphp
@section('content')
{!! Form::model($materias, ['route' => ['materias.update', $materias->id], 'method' => 'patch','class'=>'needs-validation','novalidate']) !!}
{!! Form::open(['route' => 'materias.store','class'=>'needs-validation','novalidate']) !!}
    @include('materias.fields')
{!! Form::close() !!}
@endsection
