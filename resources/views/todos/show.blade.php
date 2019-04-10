@extends('layouts.app')


@section('content')

    <a class="btn btn-primary" href="/"> Go Back</a>
    
    <br><br>

    <h1> {{ $todo-> text }} </h1>
    <div class="badge badge-danger">{{ $todo->due }}</div>

    <hr>

    <p>{{ $todo->body }}</p>
    
@endsection