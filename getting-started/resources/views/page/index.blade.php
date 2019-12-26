@extends('layouts.app')

@section('content')
    <div>
    <h1>{{$title}}</h1>
    <p>
        <a class="btn btn-primary btn-lg" href="http://localhost/Laravel/getting-started/public/login" role="button">Login</a> <a class="btn btn-success btn-lg" href="http://localhost/Laravel/getting-started/public/register" role="button">Register</a>
    </p>

    </div>
@endsection
