@extends('layouts.default')
@section('content')
<ul>
    @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
</ul>
<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
    <h2 class="form-signup-heading">Please Register</h2>
    {{ HTML::ul($errors->all()) }}
    {{ Form::open(array('url'=>'users/create')) }}
        <div class="form-group">
            {{ Form::text('firstname', null, array('class'=>'form-control', 'placeholder'=>'First Name')) }}
        </div>
        <div class="form-group">
            {{ Form::text('lastname', null, array('class'=>'form-control', 'placeholder'=>'Last Name')) }}
        </div>
         <div class="form-group">
            {{ Form::text('email', null, array('class'=>'form-control', 'placeholder'=>'Email Address')) }}
        </div>
        <div class="form-group">
            {{ Form::password('password', array('class'=>'form-control', 'placeholder'=>'Password')) }}
        </div>
        <div class="form-group">
            {{ Form::password('password_confirmation', array('class'=>'form-control', 'placeholder'=>'Confirm Password')) }}
        </div>
        {{ Form::submit('Register', array('class'=>'btn btn-sm btn-primary'))}}
    {{ Form::close() }}
    </div>
    <div class="col-md-4"></div>
</div>
<br>
@stop