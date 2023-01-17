@extends('../layouts.app')
@section('content')

    <div class="row d-flex">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Thing</h2>
            </div>
            <div class="pull-right d-flex flex-row-reverse">
                <a class="btn btn-outline-primary" href="{{ route('things.index') }}">Back</a>
            </div>
        </div>
    </div>

    <div><h1 style="text-align: center;" >ID: {{ $thing->id }}</h1></div>
    <div class="container d-flex justify-content-center">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12" style="text-align: center;">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $thing->name }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12" style="text-align: center;">
            <div class="form-group">
                <strong>Description:</strong>
                {{ $thing->description }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12" style="text-align: center;">
            <div class="form-group">
                <strong>Wrnt:</strong>
                {{ $thing->wrnt }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12" style="text-align: center;">
            <div class="form-group">
                <strong>Master:</strong>
                {{ $thing->master }}
            </div>
        </div>

    </div>
    </div>
    
@endsection