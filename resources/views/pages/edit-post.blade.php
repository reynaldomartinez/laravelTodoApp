@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit:</h1>

        <form action="/post/{{$posts->id}}" method="post">
            {{ method_field('PUT') }}
            @csrf
            <div class="form-group">
                <label for="">Post:</label>
                <input type="text" class="form-control" name="post" value="{{$posts->post}}">
            </div>

            <button class="btn btn-lg btn-success">Update Post</button>
        </form>
    </div>
@endsection