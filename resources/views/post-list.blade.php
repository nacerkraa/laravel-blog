@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="post-list">
            <h1>List Of Posts</h1>
                @if ($posts-> count() > 0)
                    @foreach ($posts as $post)
                    <div class="post-preview">
                        <a href="/post/{{$post->id}}">
                            <h2>{{$post -> title}}</h2>
                            <p>{{$post -> title}}</p>
                        </a>
                    </div>
                    @endforeach 
                @else
                    <span>There is no post</span>
                @endif
        </div>
    </div>
@endsection