@extends('layouts.default')
@section('content')
  	@if(Session::has('message'))
    	<div class="alert alert-danger">{{ Session::get('message') }}</div>
	@endif
	<div class="row">
		<h1>WELL COME TO AUTHENTICATION</h1>
	</div> 
	<br>   
@stop
