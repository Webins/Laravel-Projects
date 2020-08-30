
@extends('layouts.app')
@section('content')
@include('inc.breadcumb', ['data' => ['Home', 'Show Todo', 'Selected Todo', 'Edit Todo'], 'href' => ['/', '/', '/todo/'. $todo->id, Request::url()]])
@include('inc.messages')
<div class="container mb-2">

    {!! Form::open(['action' => ['TodosController@update', $todo->id], 'method' => 'POST']) !!}
    
    
    {{ Form::bsText('text', $todo->text)}}
    {{ Form::bsTextArea('body', $todo->body) }}
    {{ Form::bsText('due', $todo->due) }}
    {{ Form::hidden('_method', 'PUT')}}
    {{ Form::bsSubmit('Submit', ['class' => 'btn btn-block btn-primary'])}}
    
    
    {!! Form::close() !!}
</div>
@endsection