@extends('layouts.app')

@section('content')
	<h3>{{$photo->title}}</h3>
	<a href="/albums/{{$photo->album_id}}" class="button secondary">Back to Gallery</a>
	<p>{{$photo->description}}</p>
	
	<img src="/storage/photos/{{$photo->album_id}}/{{$photo->photo}}" width="500px" alt="{{$photo->title}}">
	<br><br>
	{!!Form::open(['action' => ['PhotosController@destroy', $photo->id], 'method' => 'POST'])!!}
		{{Form::hidden('_method', 'DELETE')}}
		{{Form::submit('Delete Photo', ['class' => 'button alert'])}}
	{!!Form::close()!!}
	<hr>
	<small>Size: {{$photo->size}}</small>
@endsection