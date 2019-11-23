@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Catalogos
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($catalogos, ['route' => ['catalogos.update', $catalogos->id], 'method' => 'patch']) !!}

                        @include('catalogos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection