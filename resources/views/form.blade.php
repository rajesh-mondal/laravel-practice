@extends('layout')

@section('body')
<main role="main" class="inner cover">
    <h1 class="cover-heading">Add Person</h1>
    <form method="post" action="{{ route('form.save') }}">
        <div class="form-group">
            @csrf 
            <label for="name">Name:</label>
            <input type="text" class="form-control" name="name">
        </div>
        <div class="form-group">
            <label for="name">Email:</label>
            <input type="email" class="form-control" name="email">
        </div>
        <button type="submit" class="btn btn-primary">Add person</button>
    </form>
</main>
@endsection 