@extends('layouts.app') 
@section('content')

<h3>Create Todo</h3>

<br>

<form method="POST" action="{{ action('TodosController@store') }}">

    @csrf

    <div class="form-group">
        <label for="text">Text</label>
        <input type="text" class="form-control" name="text" id="text">
    </div>

    <div class="form-group">
        <label for="body">Body</label>
        <textarea class="form-control" name="body" id="body" rows="5"></textarea>
    </div>
    
    <div class="form-group">
            <label for="due">Due</label>
            <input type="text" class="form-control" name="due" id="due">
    </div>

    <br>

    <button type="submit" class="btn btn-primary">Submit</button>

    <br>
    <br>

</form>
@endsection