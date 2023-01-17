@extends('../layouts.app')
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Show places</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success m-2" href="{{ route('places.create') }}"> Create New Place</a>
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
            <th>Repair</th>
            <th>Work</th>
            <th>Actions</th>
        </tr>
        @foreach ($places as $place)
        <tr>
            <td>{{ $place->name }}</td>
            <td>{{ $place->description }}</td>
            @if($place->repair == 0)
                <td>Ремонт</td>
            @else
                <td>Мойка</td>
            @endif
            @if($place->work == 0)
                <td>Находится в работе</td>
            @else
                <td>Не находится в работе</td>
            @endif

            <td>
                 <div class="d-flex justify-content-around">
                    <a class="btn btn-info" href="{{ route('places.show',$place->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('places.edit',$place->id) }}">Edit</a>
                    <form action="{{ route('places.destroy',$place->id) }}" method="POST">
   
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