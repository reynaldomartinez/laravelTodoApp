@extends('layouts.app')

@section('content')
    <div class="container">
        <a href="{{URL::previous()}}" class="btn btn-danger btn-lg mb-3">Back</a>
        <div class="card">
            <div class="card-header">
                <p>Posted: {{ $singlePost->created_at->diffForHumans() }}</p>
            </div>
            <div class="card-body">
                <blockquote class="blockquote mb-0 text-capitalize text-center">
                    <h1>{{ $singlePost->post }}</h1>
                </blockquote>
            </div>
        </div>

        <form action="/post/{{$singlePost->id}}" method="post" class="d-flex justify-content-center mt-5">
            {{method_field('DELETE')}}
            @csrf
            <button class="btn btn-danger btn-lg">DELETE</button>
        </form>

        <a href="/post/{{$singlePost->id}}/edit" class="d-flex justify-content-center mt-3"><button class="btn btn-primary btn-lg">Edit</button></a>

    </div>
@endsection