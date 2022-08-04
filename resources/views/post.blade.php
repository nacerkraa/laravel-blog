@extends('layouts.app')
@section('content')
@foreach ($post as $post)
    <p>This the id: {{$post -> id}}</p>
    <p>This the title: {{$post -> title}}</p>
    <p>This the content: {{$post -> content}}</p>
@endforeach
@endsection

