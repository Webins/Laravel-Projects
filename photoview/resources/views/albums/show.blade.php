@extends('layouts.app')

@section('content')
@include('inc.breadcrumb', ['data' => ['Home', 'Albums', $album->name], 'href' => ['/', '/', '/album/'.$album->id]])
@include('inc.messages')
<div class="container mt-3">
   
    <h1>{{$album->name}}</h1>
    <a href="/albums" class="btn btn-primary">Go Back to albums</a>
<a href="/photos/create/{{$album->id}}" class="btn btn-success">Upload a photo to The Album</a>
    <hr> 

    @if(count($album->photos) == 0)
        <div class="alert secondary-bg text-white">
            <h1>This album does not have a photo yet. Upload One!</h1>
        </div>
    @else
    <div class="row">
        @foreach($album->photos as $photo)
        
            <div class="col-md-4">
            <a href="/photos/{{$photo->id}}">
                <img class="img-thumbnail" src="/storage/photos/{{$photo->album_id}}/{{$photo->photo}}" alt="{{$photo->title}}">
            </a>
            <br>
            <center><h4>{{$photo->title}}</h4></center>
            </div>
        
        @endforeach
        </div>

@endif
</div>
@endsection