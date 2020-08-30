@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create listing <span class="float-right"><a href="/dashboard" class="btn btn-success btn-xs">Dashboard</a></span></div>

                <div class="card-body">
                    {!! Form::open(['action' => 'ListingController@store', 'method' => 'POST']) !!}
    
    
                        {{ Form::bsText('name', '', ['placeholder' => 'Company Name']) }}
                        {{ Form::bsText('website', '', ['placeholder' => 'Company Webiste'] )}}
                        {{ Form::bsText('email', '', ['placeholder' => 'Contact Email']) }}
                        {{ Form::bsText('phone', '', ['placeholder' => 'Contact Phone']) }}
                        {{ Form::bsText('address', '', ['placeholder' => 'Bussiness Address']) }}
                        {{ Form::bsTextArea('bio', '', ['placeholder' => 'About This Bussiness']) }}
                        {{ Form::bsSubmit('Submit', ['class' => 'btn btn-block btn-primary'])}}
    
    
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
