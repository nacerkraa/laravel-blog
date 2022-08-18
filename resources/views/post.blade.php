@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="post-details">
            <h1>Post Details</h1>
            @if (!empty($post))
                <h2>{{$post -> title}}</h2>
                <p>{{$post -> content}}</p>
            @else
                <p>Sorry There Is No Post!</p>
            @endif

            @foreach ($post -> comments as $comment)

                <p>comment : {{$comment -> content}}</p>
            @endforeach
        </div>
    </div>
@endsection