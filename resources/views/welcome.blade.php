@extends('layout.master')
@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left"style='margin-top:50px'>
         <h2>Register</h2> 
        </div>
        <div class="pull-right"style='margin:50px'>
            <a class="btn "style='background:#CC0066;color:white' href="{{ route('registers.index') }}"> Back</a>
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

<form action="{{ route('registers.store') }}" method="POST">
    @csrf

     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="name" class="form-control" placeholder="name">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
              <strong>Email:</strong>
                <input class="form-control" type='email'  name="email" placeholder="email"></input>
            </div>
        </div>
         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
              <strong>Password:</strong>
                <input type='password' class="form-control"  name="password" placeholder="password"></input>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
              <strong>confirm password:</strong>
                <input type='password' class="form-control"  name="confirm_password" placeholder="confirm password"></input>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn "style='background:#CC0066;color:white'>Submit</button>
        </div>
    </div>
</form>
@endsection
