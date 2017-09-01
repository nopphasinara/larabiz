@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard
                    <span class="pulll-right">
                        <a href="/listings/create" style="font-size: 20px" class="pull-right btn btn-success btn-xs">Add Listing</a>
                    </span>
                </div>

                <div class="panel-body">
                    <h3>Your Listings</h3>
                    @if(count($listings))
                        <table class="table table-striped">
                            <tr>
                                <th>Company</th>
                                <th></th>
                                <th></th>
                            </tr>
                            @foreach($listings as $listing)
                                <tr>
                                    <td>{{$listing->name}}</td>
                                    <td><a class="pull-right btn btn-success buton_dashboard" href="/listings/{{$listing->id}}/edit">Edit</a></td>
                                    <td>
                                        {!! Form::open(['action' => ['ListingsController@destroy', $listing->id],'method' => 'POST',
                                        'class' => 'pulll-left', 'onsubmit' => 'return confirm("Are you sure?")'])!!}
                                            {{Form::hidden('_method', 'DELETE')}}
                                            {{ Form::bsSubmit('Delete', ['class' => 'btn btn-danger buton_dashboard'])}}
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
