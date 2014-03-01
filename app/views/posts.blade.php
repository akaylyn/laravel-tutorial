@extends('layout')

@section('content')
	@foreach($posts as $post)
		<p>By <a href='profile/{{ $post->author_id }}'>{{ $post->author_name }}</a> on {{ $post->created_at }}</p>
        {{ $post->title }}
	@endforeach
@stop
