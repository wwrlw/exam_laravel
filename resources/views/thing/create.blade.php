@extends('../layouts.app')
@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Thing</h2>
        </div>
        <div class="pull-right d-flex flex-row-reverse">
            <a class="btn btn-outline-primary right" href="{{ route('things.index') }}">Back</a>
        </div>
    </div>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('things.store') }}" method="POST">
    @csrf

     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="name" class="form-control" placeholder="Name">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
              <strong>Description:</strong>
                <textarea class="form-control" style="height:150px" name="description" placeholder="Description"></textarea>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
              <strong>Wrnt:</strong>
              <input type="text" name="wrnt" class="form-control" placeholder="wrnt">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
              <strong>Master:</strong>
              <input type="text" name="master" class="form-control" placeholder="Master">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-2">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
@endsection