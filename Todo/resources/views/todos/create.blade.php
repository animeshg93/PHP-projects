@extends('layouts.app')



@section('content')
<div class="container">
	<h2>Create a New Todo<a href="/todos"><button style="float:right" class="btn btn-primary">Back to Todos</button></a></h2>

	{!! Form::open(['url'=>'todos']) !!}
	  	@include('todos.form', ['submit' => 'Add task'])
	{!! Form::close() !!}

	@if ($errors->any)
		@foreach ($errors->all() as $error)
		  <ul class="alert alert-danger">
			<li>{{$error}}</li>
		  </ul>
		@endforeach
	@endif
</div>
@stop