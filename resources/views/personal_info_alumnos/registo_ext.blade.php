@extends('layouts.master')
@section('titulo')New Student 
@endsection

@section('content')
@php($ext = 1)      
@php($editar = 0)
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
{!! Form::open(['route' => 'personalInfoAlumnos.store','class'=>'needs-validation','novalidate','enctype'=>'multipart/form-data']) !!}
	<input type="hidden" name="ext" id="ext" value="1">
    @include('personal_info_alumnos.fields')
{!! Form::close() !!}
@endsection
