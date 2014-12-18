@extends('layouts.default')
@section('content')
  	@if(Session::has('message'))
    	<p class="alert">{{ Session::get('message') }}</p>
	@endif
<table>
	<tr><td>{{ HTML::link('users/register', 'Register') }}</td></tr>
    <tr><td>{{ HTML::link('users/login', 'Login') }}</td></tr>
</table>
@stop
