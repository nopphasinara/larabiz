@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Create Listing<a href="/dashboard" class="pull-right btn btn-danger btn-xs">Go Back</a></div>

                <div class="panel-body">
                    {!! Form::open(['action' => 'ListingsController@store','method' => 'POST'])!!}
                        {{ Form::bsText('name','', ['placeholder' => 'Company Name'])}}
                        {{ Form::bsText('website','', ['placeholder' => 'Company Website'])}}
                        {{ Form::bsText('email','', ['placeholder' => 'Company Email'])}}
                        {{ Form::bsText('phone','', ['placeholder' => 'Company Phone'])}}
                        {{ Form::bsText('address','', ['placeholder' => 'Business Address'])}}
                        {{ Form::bsTextarea('bio','', ['placeholder' => 'Company Name'])}}
                        {{ Form::bsSubmit('Submit')}}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
