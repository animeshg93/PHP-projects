@extends('layouts.app')

@section('content')
<div class="container">
<h1>Todos<a href="todos/create"><button class="btn btn-primary" style="float:right">Create New Todo</button></a></h1><br><br>
	<table class="table table-striped">
		<tr>
			<th>Task</th>
			<th>Description</th>
			<th>Urgency</th>
			<th>Date Created</th>
			<th>Edit</th>
			<th>Delete</th>
		</tr>
			@foreach ($todos as $todo)
		<tr>
			<td>{{$todo->title}}</td>	
		    <td>{{$todo->body}}</td>
			<td>{{$todo->urgency}}</td>
			<td>{{$todo->created_at->toDayDateTimeString()}} </td>
			<td>
				<span><a href="/todos/{{$todo->id}}/edit"><button class="btn btn-default">Edit</button></a></span>
			</td>
			<td>
			 	{!! Form::open(['method' =>'delete', 'route' => ['todos.destroy', $todo->id]]) !!}
			  		{!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
			  	{!! Form::close() !!}
			</td>
		</tr>
			@endforeach
	</table>
</div>
@stop