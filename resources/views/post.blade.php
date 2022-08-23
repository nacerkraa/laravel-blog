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

            <hr>
            @forelse ($post -> tags as $tag)
                <span>{{$tag -> name}} </span>
            @empty
                <span>There Is No Tags!</span>
            @endforelse

            <hr>
            @forelse ($post -> comments as $comment)
                <span>{{$comment -> content}} </span>
            @empty
                <span>There Is No Comments!</span>
            @endforelse

            
        </div>
    </div>
@endsection