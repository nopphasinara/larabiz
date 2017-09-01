@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Listing<a href="/dashboard" class="pull-right btn btn-default btn-xs">Go Back</a></div>

                <div class="panel-body">
                    {!! Form::open(['action' => ['ListingsController@update', $listing->id],'method' => 'POST'])!!}
                        {{ Form::bsText('name',$listing->name, ['placeholder' => 'Company Name'])}}
                        {{ Form::bsText('website',$listing->website, ['placeholder' => 'Company Website'])}}
                        {{ Form::bsText('email',$listing->email, ['placeholder' => 'Company Email'])}}
                        {{ Form::bsText('phone',$listing->phone, ['placeholder' => 'Company Phone'])}}
                        {{ Form::bsText('address',$listing->address, ['placeholder' => 'Business Address'])}}
                        {{ Form::bsTextarea('bio',$listing->bio, ['placeholder' => 'Company Name'])}}
                        {{Form::hidden('_method', 'PUT')}}
                        {{ Form::bsSubmit('Submit')}}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
