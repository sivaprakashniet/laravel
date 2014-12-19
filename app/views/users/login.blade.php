@extends('layouts.default')
@section('content')
  	@if(Session::has('message'))
    	<p class="alert">{{ Session::get('message') }}</p>
	@endif
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
			{{ Form::open(array('url' => 'auth/login')) }}
				<h1>Login</h1>

				<!-- if there are login errors, show them here -->
				@if (Session::get('loginError'))
				<div class="alert alert-danger">{{ Session::get('loginError') }}</div>
				@endif
				<div class="form-group">
					{{ Form::label('email', 'Email Address') }}
					{{ Form::text('email', Input::old('email'), array('class'=>'form-control','placeholder' => 'awesome@awesome.com')) }}
				</div>
				<div class="form-group">
					{{ Form::label('password', 'Password') }}
					{{ Form::password('password',array('class'=>'form-control','placeholder' => 'Enter password')) }}
				</div>

				<p>{{ Form::submit('Submit!',array('class'=>'btn btn-sm btn-primary')) }}&nbsp; If new user &nbsp;<a href="{{ URL::to('auth/signup') }}">Register here</a></p>
			{{ Form::close() }}
		</div>
	    <div class="col-md-3"></div>
	</div> 
	<br>   
@stop
