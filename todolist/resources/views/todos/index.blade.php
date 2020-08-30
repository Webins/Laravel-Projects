

@extends('layouts.app')
@section('content')
@include('inc.breadcumb', ['data' => ['Home', 'Show Todos'], 'href' => ['/', '/']])
<div class="cotaniner col-lg-6 offset-3">
    @include('inc.messages')
    <div class="container col-lg-12 badge badge-primary">
        <h1>List of todos</h1>
    </div>
    @if(count($todos) > 0 )
    @foreach ($todos as $todo)
    <div class="card mt-3 mb-4">
        <div class="mt-2 card-title text-center">
            <h1>
                <div class="badge badge-info">
                    <a class="text-decoration-none text-white" href="todo/{{$todo->id}}">{{$todo->text}}</a>
                </div>
            </h1>
        </div>
        
        <div class="m-0 text-center alert alert-info">
                    Date: {{$todo->due}}
                </div>
                
            </div>  
            @endforeach
        </div>
        
        
        
        @else
    <div class="alert alert-info">
        <h1>There are not todos yet</h1>
    </div>
    @endif
    
    @endsection
</div>