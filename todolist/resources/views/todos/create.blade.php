@extends('layouts.app')



@section('content')
@include('inc.breadcumb', ['data' => ['Home', 'Create Todo'], 'href' => ['/', '/todo/create']])
@include('inc.messages')
<div class="container mb-2">

    {!! Form::open(['action' => 'TodosController@store', 'method' => 'POST']) !!}
    
    
    {{ Form::bsText('text') }}
    {{ Form::bsTextArea('body') }}
    {{ Form::bsText('due') }}
    {{ Form::bsSubmit('Submit', ['class' => 'btn btn-block btn-primary'])}}
    
    
    {!! Form::close() !!}
</div>
@endsection