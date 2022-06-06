@extends('layout.master')
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left " style='margin:30px'>
                <h2>Users </h2>
            </div>
            <div class="pull-right "style='margin:30px'>
                <a class="btn "style='background:#CC0066;color:white' href="{{ route('registers.create') }}"> Create New Product</a>
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
            <th>name</th>
            <th>email</th>
        </tr>
        @foreach ($user as $users)
        <tr>
            <td>{{ $users->name }}</td>
            <td>{{ $users->email }}</td>
            <td>
                <div style='display:flex'>
               <span>  <a class="btn "style='background:#CC0066;color:white;margin:3px' href="{{ route('registers.show',$users->id) }}">Show</a></span>
                  <span>  <a class="btn" style='background:green;color:white;margin:3px'href="{{ route('registers.edit',$users->id) }}">Edit</a></span>
     <form action="{{ route('registers.destroy',$users->id) }}" method="POST">
   
                    @csrf
                    @method('DELETE')
                              <span> <button type="submit" class="btn"style='background:rgb(183, 0, 0);color:white;margin:3px'>Delete</button></span>
                </form>
</div>
            </td>
        </tr>
        @endforeach
    </table>

@endsection