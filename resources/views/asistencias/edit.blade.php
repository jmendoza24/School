@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Asistencias
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($asistencias, ['route' => ['asistencias.update', $asistencias->id], 'method' => 'patch']) !!}

                        @include('asistencias.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection