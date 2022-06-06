@extends('layout.master')
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left"style='margin:25px'>
                <h2>Edit user</h2>
            </div>
            <div class="pull-right"style='margin:25px'>
                <a class="btn"style='background:#CC0066;color:white' href="{{ route('registers.index') }}"> Back</a>
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

    <form action="{{ route('registers.update',$register->id) }}" method="POST">
        @csrf

        @method('PUT')
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>name:</strong>
                    <input type="text" name="name" value="{{ $register->name }}" class="form-control" placeholder="Title">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>email:</strong>
                    <input class="form-control" name="email" placeholder="email" value="{{ $register->email }}">
                </div>
            </div>
            

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn "style='background:#CC0066;color:white'>Submit</button>
            </div>
        </div>
    </form>
@endsection