@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="post-detail">
            <h2>Post Details</h2>
            @if (!empty($post))
                <p>This the id: {{$post -> id}}</p>
                <p>This the title: {{$post -> title}}</p>
                <p>This the content: {{$post -> content}}</p>
            @else
                <p>Sorry There Is No Post!</p>
            @endif

            @foreach ($post -> comments as $comment)
                <p>comment : {{$comment -> content}}</p>
            @endforeach
        </div>
    </div>
@endsection