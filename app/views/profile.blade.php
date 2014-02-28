@extends('layout')

@section('content')
	Name: {{ $user->name }} <br />
	Email: {{ $user->email }} <br />
	Github: {{ $user->github_username }} <br />
@stop
