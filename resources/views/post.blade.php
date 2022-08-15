@extends('layouts.app')
@section('content')
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
@endsection

