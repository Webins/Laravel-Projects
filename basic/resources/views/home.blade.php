@extends('layouts.app')
{{-- This setence is going to look in the view folder a folder named
layouts and the file named app to extends from it --}}
@section('content')
{{-- We add this to say to layouts.app which is the content where it has the yield --}}
    <h1>Home</h1>
    <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos explicabo cum deleniti adipisci quidem illum, sapiente perferendis minima doloribus consequatur accusantium. Ipsam autem molestias neque ad asperiores aperiam nulla quaerat.
    </p>
@endsection
@section('sidebar')
    @parent
    Home
@endsection

