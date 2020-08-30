@extends('layouts.app')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit listing <span class="float-right"><a href="/dashboard" class="btn btn-success btn-xs">Dashboard</a></span></div>

                <div class="card-body">
                    
                    {!! Form::open(['action' => ['ListingController@update', $listing->id], 'method' => 'POST']) !!}
                        {{ Form::bsText('name', $listing->name, ['placeholder' => 'Company Name']) }}
                        {{ Form::bsText('website', $listing->website, ['placeholder' => 'Company Webiste']) }}
                        {{ Form::bsText('email', $listing->email, ['placeholder' => 'Contact Email']) }}
                        {{ Form::bsText('phone', $listing->phone, ['placeholder' => 'Contact Phone']) }}
                        {{ Form::bsText('address', $listing->address, ['placeholder' => 'Bussiness Address']) }}
                        {{ Form::bsTextArea('bio', $listing->bio, ['placeholder' => 'About This Bussiness']) }}
                        {{ Form::bsSubmit('Submit', ['class' => 'btn btn-block btn-primary'])}}
                        {{ Form::hidden('_method', 'PUT')}}
                    
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
