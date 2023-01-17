@extends('../layouts.app')
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Show things</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success m-2" href="{{ route('things.create') }}"> Create New Thing</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>Name</th>
            <th>Description</th>
            <th>Wrnt</th>
            <th>Master</th>
            <th>Actions</th>
        </tr>
        @foreach ($things as $thing)
        <tr>
            <td>{{ $thing->name }}</td>
            <td>{{ $thing->description }}</td>
            <td>{{ $thing->wrnt }}</td>
            <td>{{ $thing->master }}</td>

            <td>
                 <div class="d-flex justify-content-around">
                    <a class="btn btn-info" href="{{ route('things.show',$thing->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('things.edit',$thing->id) }}">Edit</a>
                    <form action="{{ route('things.destroy',$thing->id) }}" method="POST">
   
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                 </div>
                
            </td>
        </tr>
        @endforeach
    </table>

@endsection