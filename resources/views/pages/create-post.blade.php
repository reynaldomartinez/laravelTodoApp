@extends('layouts.app')

@section('content')
    <div class="container">
        <a href="{{URL::previous()}}" class="btn btn-danger btn-lg">Back</a>

        <form action="/post" method="post" class="mt-5">
            @csrf
            <div class="form-group">
                <label for="">Post</label>
                <input type="text" class="form-control" name="post">
            </div>

            <button class="btn btn-primary btn-lg">Submit</button>
        </form>
    </div>




@endsection