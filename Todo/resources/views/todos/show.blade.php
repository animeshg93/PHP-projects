@extends('app')

@section('content')
	<h2>{{$todo->title}}</h2>

	<h3>Task: {{$todo-> body}}</h3>
@stop