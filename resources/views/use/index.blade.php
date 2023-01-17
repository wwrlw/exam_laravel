@extends('../layouts.app')
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Show uses</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success m-2" href="{{ route('uses.create') }}"> Create New Use</a>
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
            <th>Thing</th>
            <th>Place</th>
            <th>User</th>
            <th>Amount</th>
            <th>Actions</th>
        </tr>
        @foreach ($uses as $use)
        <tr>
            <td>{{  App\Models\Thing::where('id', $use->thing_id)->get('name')->first()->name }}</td>
            <td>{{ App\Models\Place::where('id', $use->place_id)->get('name')->first()->name }}</td>
            <td>{{ App\Models\User::where('id', $use->user_id)->get('name')->first()->name }}</td>
            <td>{{ $use->amount }}</td>

            <td>
                 <div class="d-flex justify-content-around">
                    <a class="btn btn-info" href="{{ route('uses.show',$use->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('uses.edit',$use->id) }}">Edit</a>
                    <form action="{{ route('uses.destroy',$use->id) }}" method="POST">
   
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