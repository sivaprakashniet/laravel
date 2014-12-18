@extends('layouts.default')
	@section('content')
	@if (Session::has('message'))
	    <div class="alert alert-info">{{ Session::get('message') }}</div>
	@endif
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
			<h1>Showing {{ $post->title }}</h1>

		    <div class="jumbotron text-center">
		        <h2>{{ $post->title }}</h2>
		        <p>
		            <strong>Description:</strong> {{ $post->description }}<br>
		            <strong>Created _at:</strong>{{ date('d-M-y',strtotime($post->created_at)) }}
		        </p>
		    </div>
	    </div>
	    <div class="col-md-3"></div>
	</div> 
	<br>   
@stop