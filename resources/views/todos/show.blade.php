@extends('layouts.app')


@section('content')

    <a class="btn btn-primary" href="/"> Go Back</a>
    
    <br><br>

    <h1> {{ $todo-> text }} </h1>
    <div class="badge badge-danger">{{ $todo->due }}</div>

    <hr>

    <p>{{ $todo->body }}</p>

    <br><br>

    <a class="btn btn-primary" href="/todo/{{ $todo->id }}/edit">Edit</a>

    <form method="POST" action="{{ action('TodosController@destroy', $todo->id) }}">

        @csrf
        @method('DELETE')
        <button class="btn btn-danger">Delete</button>

    </form>

    
@endsection