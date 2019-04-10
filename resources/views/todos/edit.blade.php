@extends('layouts.app') 
@section('content')


<a class="btn btn-primary" href="/todo/{{$todo->id}}"> Go Back</a>

<br><br>

<h3>Edit Todo</h3>

<br>

<form method="POST" action="{{ action('TodosController@update', $todo->id) }}">

    @csrf
    @method('PUT')

    <div class="form-group">
        <label for="text">Text</label>
    <input type="text" class="form-control" name="text" id="text" value="{{ $todo->text }}">
    </div>

    <div class="form-group">
        <label for="body">Body</label>
    <textarea class="form-control" name="body" id="body" rows="5">{{ $todo->body }}</textarea>
    </div>
    
    <div class="form-group">
            <label for="due">Due</label>
            <input type="text" class="form-control" name="due" id="due" value="{{ $todo->due }}">
    </div>

    <br>

    <button type="submit" class="btn btn-primary">Submit</button>

    <br>
    <br>

</form>
@endsection