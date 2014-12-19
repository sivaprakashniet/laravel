@extends('layouts.default')
@section('content')
  	@if(Session::has('message'))
    	<p class="alert">{{ Session::get('message') }}</p>
	@endif
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
			{{ Form::open(array('url' => 'auth/signup')) }}
				<h1>Sign Up</h1>
				<!-- if there are login errors, show them here -->
				@if (Session::get('loginError'))
				<div class="alert alert-danger">{{ Session::get('loginError') }}</div>
				@endif
				<div class="form-group">
					{{ Form::label('name', 'Enter Name') }}
					{{ Form::text('name', Input::old('name'), array('class'=>'form-control','placeholder' => 'Full Name')) }}
				</div>
				<div class="form-group">
					{{ Form::label('name', 'Enter username') }}
					{{ Form::text('username', Input::old('username'), array('class'=>'form-control','placeholder' => 'username')) }}
				</div>
				<div class="form-group">
					{{ Form::label('name', 'Enter email') }}
					{{ Form::email('email', Input::old('email'), array('class'=>'form-control','placeholder' => 'email')) }}
				</div>
				<div class="form-group">
					{{ Form::label('password', 'Password') }}
					{{ Form::password('password',array('class'=>'form-control','placeholder' => 'Enter password')) }}
				</div>
				<p>{{ Form::submit('Submit!',array('class'=>'btn btn-sm btn-primary')) }} &nbsp; If alerady registered user <a href="{{ URL::to('auth/login') }}">login here</a></p>
			{{ Form::close() }}
		</div>
	    <div class="col-md-3"></div>
	</div> 
	<br>   
@stop
