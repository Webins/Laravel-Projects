
@extends('layouts.app')

@section('content')

<?php 
use App\Album;
$temp_album = Album::find($album_id);
?>

@include('inc.breadcrumb', ['data' => ['Home', 'Albums', $temp_album->name, 'Upload' ], 'href' => ['/', '/', '/album/'.$album_id, '/photos/create/' .$album_id]])
@include('inc.messages')
    <div class="mt-3 container bg-dark text-white">
        
        {!! Form::open(['action' => 'PhotosController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        
        {{ Form::bsText('title', '', ['placeholder' => 'Photo Title']) }}
        {{ Form::bsTextArea('description', '', ['placeholder' => 'Photo Description'])}}
        {{ Form::bsText('email', '', ['placeholder' => 'Contact Email']) }}
        {{ Form::bsFile('photo')}}
        {{ Form::hidden('album_id', $album_id) }}
        {{ Form::bsSubmit('Submit', ['class' => 'btn btn-block secondary-bg text-white'])}}
        
        {!! Form::close() !!}
        
        <br>
        
    </div>

    @endsection
    