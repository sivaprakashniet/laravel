@extends('layouts.default')
	@section('content')
	@if (Session::has('message'))
	    <div class="alert alert-info">{{ Session::get('message') }}</div>
	@endif
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
			<h1>Create a Post</h1>
			{{ HTML::ul($errors->all()) }}
			{{ Form::model($post, array('route' => array('blogs.update', $post->id), 'method' => 'PUT')) }}
			 <div class="form-group">
		        {{ Form::label('title', 'Title') }}
		        {{ Form::text('title', Input::old('title'), array('class' => 'form-control')) }}
		    </div>
		    <div class="form-group">
		        {{ Form::label('description', 'Description') }}
		        {{ Form::textarea('description', Input::old('description'), array('class' => 'form-control redactor')) }}
		    </div>
		    {{ Form::submit('Edit the Post!', array('class' => 'btn btn-primary')) }}
	     	{{ Form:: close() }}
	    </div>
	    <div class="col-md-3"></div>
	</div> 
	<br>   
@stop
