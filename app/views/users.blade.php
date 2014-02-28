@extends('layout')

@section('content')
	@foreach($users as $user)
		<p><a href='profile/{{ $user->id }}'>{{ $user->name }}</a></p>
	@endforeach
@stop
