@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Tbl Mat Alumnos
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'tblMatAlumnos.store']) !!}

                        @include('tbl_mat_alumnos.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
