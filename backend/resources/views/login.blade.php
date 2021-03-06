@extends('layout')
@if (session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
@endif
@if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif
@section('content')
    <div class="row">
        <h1 align="center">Login</h1>
        <a href="{{ route('registration') }}">Register</a>
        {{ Form::open(['url' => 'login']) }}

        <div class="form-group">
            {{ Form::label('email', 'Email') }}
            {{ Form::email('email', Request::old('email'), ['class' => 'form-control', 'required' => 'required']) }}
        </div>

        <div class="form-group">
            {{ Form::label('password', 'Password') }}
            {{ Form::password('password', ['class' => 'form-control', 'required' => 'required']) }}
        </div>

        {{ Form::submit('Login', ['class' => 'btn btn-primary']) }}

        {{ Form::close() }}
    </div>
@endsection
