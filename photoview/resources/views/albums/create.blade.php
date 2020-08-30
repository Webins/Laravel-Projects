
@extends('layouts.app')

@section('content')
@include('inc.breadcrumb', ['data' => ['Home', 'Create Album'], 'href' => ['/', '/create']])
@include('inc.messages')

    <div class="mt-3 container bg-dark text-white">
        
        {!! Form::open(['action' => 'AlbumsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        
        {{ Form::bsText('name', '', ['placeholder' => 'Album Name']) }}
        {{ Form::bsTextArea('description', '', ['placeholder' => 'Album Description'])}}
        {{ Form::bsText('email', '', ['placeholder' => 'Contact Email']) }}
        {{ Form::bsFile('cover_image'), ''}}
        {{ Form::bsSubmit('Submit', ['class' => 'btn btn-block secondary-bg text-white'])}}
        
        {!! Form::close() !!}
        
        <br>
        
    </div>

    @endsection
    