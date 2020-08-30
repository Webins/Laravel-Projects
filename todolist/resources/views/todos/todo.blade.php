@extends('layouts.app')
@section('content')
@include('inc.breadcumb', ['data' => ['Home', 'Show Todo', 'Selected Todo'], 'href' => ['/', '/',  Request::url() ]])
<div class="container">
    @include('inc.messages')
    <div class="container-fluid col-lg-10 mb-2">
        
        <div class="card mt-3 mb-4">
            <div class="card-header bg-primary text-white">
                <h1 class="">Todo</h1>
            </div>
            <div class="mt-2 card-title text-center">
                <h1>
                    <div class="badge badge-info text-white">
                        {{$todo->text}}
                    </div>
                </h1>
        </div>
        <hr>
        <div class="card-body text-center">
            <h1>{{$todo->body}}</h1>
        </div>
        
        <div class="m-0 text-center alert alert-info">
            Date: {{$todo->due}}
        </div>
    </div>  
    <div class="d-flex justify-content-lg-center">
        <a href="/todo/{{$todo->id}}/edit" class="mr-3 text-decoration-none btn btn-info text-white"> Edit Todo </a>
        {!!Form::open(['action' => ['TodosController@destroy', $todo->id], 'method' => 'POST']) !!}
    {{Form::hidden('_method', 'DELETE')}}
    {{ Form::bsSubmit('Delete', ['class' => 'text-decoration-none btn btn-secondary text-white'])}}
    {!! Form::close() !!}

    </div>
</div>
</div>
@endsection