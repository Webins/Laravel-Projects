@extends('layouts.app')

<?php 
use App\Album;
$album = Album::find($photo->album_id);
?>
@section('content')
@include('inc.breadcrumb', ['data' => ['Home', 'Albums', $album->name, $photo->title ], 'href' => ['/', '/', '/album/'.$album->id, '/photos/'.$photo->id]])
@include('inc.messages')
<div class="container mt-3">
   <h1>{{$photo->title}}</h1>
   <p> {{$photo->description}} </p>
   <a href="/album/{{$photo->album_id}}">Back to gallery</a>
   <hr>

<img class="img-thumbnail" src="/storage/photos/{{$photo->album_id}}/{{$photo->photo}}" alt="{{$photo->title}}">
<br><br>
{!! Form::open(['action' => ['PhotosController@destroy', $photo->id], 'method' => 'POST']) !!}
{{ Form::hidden('_method', 'DELETE')}}
{{ Form::bsSubmit('Delete image', ['class' => 'btn btn-danger']) }}
{!! Form::close() !!}

<hr>
<h1 class="badge secondary-bg text-white">Size:</h1>
<small>  
    {{$photo->size}}</small>
</div>
@endsection