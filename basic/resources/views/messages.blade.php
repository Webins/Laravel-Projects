@extends('layouts.app')
@section('content')
    <h1>Messages</h1>
    @if(count($messages) > 0)
        @foreach($messages as $msg)
            <ul class="list-group mb-3">
                <li class="list-group-item">Name: {{$msg->name}} </li>
                <li class="list-group-item">Email: {{$msg->email}} </li>
                <li class="list-group-item">Message: {{$msg->message}} </li>
            </ul>
        @endforeach
       
    @else
            <div class="alert alert-warning">
                <h1>There are not messages</h1>
            </div>
    @endif
@endsection

@section('sidebar')
    @parent
    Messages
@endsection


