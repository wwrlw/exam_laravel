@extends('../layouts.app')
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Place</h2>
            </div>
            <div class="pull-right d-flex flex-row-reverse">
                <a class="btn btn-outline-primary" href="{{ route('places.index') }}"> Back</a>
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

    <form action="{{ route('places.update',$place->id) }}" method="POST">
        @csrf

        @method('PUT')
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="name" value="{{ $place->name }}" class="form-control" placeholder="Title">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Description:</strong>
                    <textarea class="form-control" style="height:150px" name="description" placeholder="Description">{{ $place->description }}</textarea>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Repair:</strong>
                    <select name="repair" id="" class="form-select mb-2" aria-label="Default select example" default=>
                        <option  <?php if($place->repair == 0) echo("selected"); ?> value="0">Ремонт</option>
                        <option <?php if($place->repair == 1) echo("selected"); ?> value="1">Мойка</option>
                    </select>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Work:</strong>
                    <select name="work" id="" class="form-select mb-2" aria-label="Default select example">
                        <option <?php if($place->work == 0) echo("selected"); ?> value="0">Находится в работе</option>
                        <option <?php if($place->work == 1) echo("selected"); ?> value="1">Не находится в работе</option>
                    </select>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-2">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection