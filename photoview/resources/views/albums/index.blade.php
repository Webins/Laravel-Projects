@extends('layouts.app')

@section('content')
@include('inc.breadcrumb', ['data' => ['Home'], 'href' => ['/']])
@include('inc.messages')
    <div class="container mt-3">    
        @if(count($albums) == 0)
        <div class="alert alert-info">
            <h1>There are not albums created yet</h1>
        </div>
        <h3>Go and create one </h3>
        <a href="/create" class="btn btn-primary">Create album</a>
        @else                                                                                                                                                                                                                                                      
    <div class="row">
       
        
@foreach($albums as $album)

    <div class="col-md-4">
    <a href="/album/{{$album->id}}">
        <img class="img-thumbnail" src="storage/album_covers/{{$album->cover_image}}" alt="{{$album->name}}">
    </a>
    <br>
    <center><h4>{{$album->name}}</h4></center>
    </div>

@endforeach
</div>
</div>
@endif


@endsection