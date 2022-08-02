@extends('layouts.app')
@section('content')
    <h2>List Of Posts</h2>

    @foreach ($posts as $post)
    <ul>
        <li><a href="#">{{$post -> title}}</a></li>
    </ul>
        
    @endforeach    
@endsection

