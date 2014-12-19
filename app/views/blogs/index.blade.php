@extends('layouts.default')
	@section('content')
	@if (Session::has('message'))
	    <div class="alert alert-info">{{ Session::get('message') }}</div>
	@endif
	<h3>Hello
	<?php 
		if(Auth::check()){
			$name = Auth::user()->name;
			echo ucfirst($name)." !";

		}
	?>
	</h3>
	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-10">
			<table class="table table-striped table-bordered">
			    <thead>
			        <tr>
			           <td>Title</td><td>Description</td><td>Created_at</td><td>updated_at</td><td>Action</td><td>Delete</td>
			        </tr>
			    </thead>
			    <tbody>
				 @foreach($blogs as $key => $value)
				<tr>
					<td> {{ $value->title }} </td>
					<td> {{ $value->description }} </td>
					<td> {{ date('d-M-y',strtotime($value->created_at)) }} </td>
					<td> {{ date('d-M-y',strtotime($value->updated_at)) }} </td>
					<td><a class="btn btn-sm btn-success" href="{{ URL::to('blogs/' . $value->id) }}">view</a><br>
		                <a class="btn btn-sm btn-info" href="{{ URL::to('blogs/' . $value->id . '/edit') }}">Edit</a>
		            </td>
		            <td>
		            	{{ Form::open(array('url' => 'blogs/' . $value->id, 'class' => 'pull-right')) }}
		                    {{ Form::hidden('_method', 'DELETE') }}
		                    {{ Form::submit('Delete', array('class' => 'btn btn-sm btn-warning')) }}
		                {{ Form::close() }}
		            </td>
				</tr>
				@endforeach
				</tbody>
			</table>
			{{ $blogs->links() }}
	  	</div>
	    <div class="col-md-1"></div>
	</div> 
	<br>   	
@stop
