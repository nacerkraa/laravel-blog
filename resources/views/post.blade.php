@extends('layouts.app')
@section('content')
    <h2>List Of Posts</h2>
    @if ($posts-> count() > 0)
        @foreach ($posts as $post)
            <ul>
                <li><a href="#">{{$post -> title}}</a></li>
            </ul>
        @endforeach        
    @else
        <span>There is no post</span>
    @endif
    
@endsection

