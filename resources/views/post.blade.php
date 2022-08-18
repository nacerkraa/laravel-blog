@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="post-details">
            <h2>Post Details</h2>
            @if (!empty($post))
                <h1>{{$post -> title}}</h1>
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