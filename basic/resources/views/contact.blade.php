@extends('layouts.app')
@section('content')
<h1>Contacts</h1>


{!! Form::open(['url' => 'contact/submit']) !!}
<div class="form-group">
    {{Form::label('name','Name')}}
    {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Enter a name'])}}
</div>
<div class="form-group">
    {{Form::label('email','E-mail Address')}}
    {{Form::text('email', '', ['class' => 'form-control', 'placeholder' => 'example@gmail.com'])}}
</div>
<div class="form-group">
    {{Form::label('message','Message')}}
    {{Form::textarea('message', '',['class' => 'form-control', 'placeholder' => 'Enter a message'])}}
</div>
<div>
    {{Form::submit('Submit', ['class' => 'btn-block btn-primary mb-2'])}}
</div>
{!! Form::close() !!}
@endsection

@section('sidebar')
    @parent
    Contact
@endsection