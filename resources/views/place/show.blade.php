@extends('../layouts.app')
@section('content')

    <div class="row d-flex">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Place</h2>
            </div>
            <div class="pull-right d-flex flex-row-reverse">
                <a class="btn btn-outline-primary" href="{{ route('places.index') }}">Back</a>
            </div>
        </div>
    </div>

    <div><h1 style="text-align: center;" >ID: {{ $place->id }}</h1></div>
    <div class="container d-flex justify-content-center">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12" style="text-align: center;">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $place->name }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12" style="text-align: center;">
            <div class="form-group">
                <strong>Description:</strong>
                {{ $place->description }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12" style="text-align: center;">
            <div class="form-group">
                <strong>Repair :</strong>
                @if($place->repair == 0)
                <span>Ремонт</span>
                @else
                    <span>Мойка</span>
                @endif
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12" style="text-align: center;">
            <div class="form-group">
                <strong>Work :</strong>
                @if($place->work == 0)
                <span>Находится в работе</span>
                @else
                <span>Не находится в работе</span>
                @endif
            </div>
        </div>

    </div>
    </div>
    
@endsection