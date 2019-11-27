@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Documentacion
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($documentacion, ['route' => ['documentacions.update', $documentacion->id], 'method' => 'patch']) !!}

                        @include('documentacions.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection