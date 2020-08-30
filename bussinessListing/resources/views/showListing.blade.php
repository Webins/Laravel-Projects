@extends('layouts.app')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <div class="card-header">{{$listing->name}}<span class="float-right"><a href="/" class="btn btn-primary btn-xs">Go back</a></span></div>

                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item">
                            Address: {{$listing->address}}
                        </li>
                        <li class="list-group-item">
                            Website:
                        <a target="_blank" href="{{$listing->website}}">{{$listing->website}} </a>
                        </li>
                        <li class="list-group-item">
                            Email: {{$listing->email}}
                        </li>
                        <li class="list-group-item">
                            Phone: {{$listing->phone}}
                        </li>
                    </ul>
                   <hr>
                   <div class="card-footer">
                       {{$listing->bio}}
                   </div>
                </div>
            </div>
        </div>
    </div>
@endsection
