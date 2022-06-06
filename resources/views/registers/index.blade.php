@extends('layout.master')
@section('content')
<div class="input-group"style='margin-top:50px'>
  <div class="form-outline">
      <form method='post' action="{{route('esraa')}}" >
          @csrf
    <input type="search" name='register_id' id="form1" class="form-control" />
    <label class="form-label" for="form1">Search</label>
  </div>
  <button type="submit" class="btn " style='background:#CC0066;color:white'>search
  </button>
</form>
</div>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left " style='margin-top:70px'>
                <h2>Users </h2>
            </div>
            <div class="pull-right "style='margin:70px'>
                <a class="btn "style='background:#CC0066;color:white' href="{{ route('registers.create') }}"> Create New user</a>
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
            <td>{{ $users->id }}</td>
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