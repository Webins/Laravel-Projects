@extends('layouts.app')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard <span class="float-right"><a href="/listing/create" class="btn btn-success btn-xs">Add listing</a></span></div>

                <div class="card-body">
                    @if(count($listings) > 0)
                        <table class="table table-striped">
                            <tr>
                                <th>Company</th>
                                <th>Email</th>
                                <th></th>
                            </tr>
                            @foreach($listings as $listing)
                                <tr>
                                    <td> 
                                        <h6 class="text-bold">{{ $listing->name }} </h6>
                                     </td>
                                    <td>
                                        <h6 class="text-bold">{{ $listing->email }} </h6>
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-end">
                                            <a class="mr-2 text-white btn btn-info" href="/listing/{{$listing->id}}/edit">Edit</a>
                                            {!! Form::open(['action' => ['ListingController@destroy', $listing->id], 'method' => 'POST', '', 'onsubmit' => 'return confirm("Are you sure?")']) !!}
                                            {{ Form::hidden('_method', 'DELETE')}}
                                            {{ Form::bsSubmit('Delete', ['class' => 'btn btn-danger'])}}
                                            {!! Form::close() !!}
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </table>    
                    @else
                        <div>
                            <h4 class="text-danger">There are not listing yet</h4>
                            <a href="/listing/create" class="lead text-black" > Click here to add one</a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
