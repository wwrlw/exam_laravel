@extends('../layouts.app')
@section('content')

    <div class="row d-flex">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Use</h2>
            </div>
            <div class="pull-right d-flex flex-row-reverse">
                <a class="btn btn-outline-primary" href="{{ route('things.index') }}">Back</a>
            </div>
        </div>
    </div>

    <div><h1 style="text-align: center;" >ID: {{ $use->id }}</h1></div>
    <div class="container d-flex justify-content-center">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12" style="text-align: center;">
            <div class="form-group">
                <strong>Thing:</strong>
                {{ App\Models\Thing::where('id', $use->thing_id)->get('name')->first()->name }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12" style="text-align: center;">
            <div class="form-group">
                <strong>Place:</strong>
                {{ App\Models\Place::where('id', $use->place_id)->get('name')->first()->name }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12" style="text-align: center;">
            <div class="form-group">
                <strong>User:</strong>
                {{ App\Models\User::where('id', $use->user_id)->get('name')->first()->name }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12" style="text-align: center;">
            <div class="form-group">
                <strong>Amount:</strong>
                {{ $use->amount }}
            </div>
        </div>

    </div>
    </div>
    
@endsection