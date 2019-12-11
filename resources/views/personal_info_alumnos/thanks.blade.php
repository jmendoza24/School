@extends('layouts.master')
@section('titulo')Guardado
@endsection

@section('content')
<div class="col-md-12">
	<div class="alert alert-success" role="alert">
	  <h4>Registo completado!</h1>
	  <h5>Gracias por su registro, en breve nos pondremos en contacto.</h5>
	</div>
</div>
<img class="brand-logo" alt="stack admin logo"  style="width: 100%;" src="{{ url('app-assets/images/logo/mati-.jpg') }}">
@endsection
