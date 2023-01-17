@extends('../layouts.app')
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Use</h2>
            </div>
            <div class="pull-right d-flex flex-row-reverse">
                <a class="btn btn-outline-primary" href="{{ route('uses.index') }}"> Back</a>
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

    <form action="{{ route('uses.update',$use->id) }}" method="POST">
        @csrf

        @method('PUT')
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                <strong>Thing_id:</strong>
                    <select class='form-select' name="thing_id" id="">
                        @foreach ($things as $thing)
                            <option <?php if( $thing->id == $use->thing_id){ echo "selected"; } ?>  value="{{ $thing->id }}">{{ $thing->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                <strong>Place_id:</strong>
                    <select class='form-select' name="place_id" id="">
                        @foreach ($places as $place)
                            <option <?php if( $place->id == $use->place_id){ echo "selected"; } ?>  value="{{ $place->id }}"> {{ $place->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                <strong>User_id:</strong>
                    <select class='form-select' name="user_id" id="">
                        @foreach ($users as $user)
                            <option <?php if( $user->id == $use->user_id){ echo "selected"; } ?>  value="{{ $user->id }}"> {{ $user->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Amount:</strong>
                    <input type="text" name="amount" value="{{ $use->amount }}" class="form-control" placeholder="amount">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-2">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection