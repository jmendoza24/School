@extends('layouts.master')
@section('titulo')Saved
@endsection

@section('content')
<div class="col-md-12">
	<div class="alert alert-success" role="alert">
	  <h4>Registration completed!</h1>
	  <h5>Thank you for your registration, we will contact you shortly.</h5>
	</div>
</div>
<img class="brand-logo" alt="stack admin logo"  style="width: 100%;" src="{{ url('app-assets/images/logo/mati-.jpg') }}">
@endsection
