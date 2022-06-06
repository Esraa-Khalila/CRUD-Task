@extends('layout.master')
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left" style='margin:50px'>
                <h2> Show Post</h2>
            </div>
            <div class="pull-right" style='margin:50px'>
                <a class="btn "style='background:#CC0066;color:white' href="{{ route('registers.index') }}"> Back</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $register->name }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Description:</strong>
                {{ $register->email }}
            </div>
        </div>

    </div>
@endsection