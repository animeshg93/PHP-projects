@extends('layouts.app')



@section('content')
<div class="container">
	<h2>Edit {{$todo->title}}<a href="/todos"><button style="float:right" class="btn btn-primary">Back to Todos</button></a></h2>

	{!! Form::model($todo, ['method' => 'PATCH', 'action' => ['TodosController@update', $todo->id]]) !!}
	  	@include('todos.form', ['submit' => 'Update task'])
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