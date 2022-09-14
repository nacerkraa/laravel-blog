@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="create">
            <h2>Adding a New Post</h2>

            <form action="{{route('post.update')}}" method="post">
                
            @csrf
            <input type="hidden" name="id" value="{{$post->id}}">

            <label>Post title:</label>
            <input type="text" name="title" value="{{$post->title}}">

            <label>Post content:</label>
            <textarea name="content" id="" cols="30" rows="10">{{$post->content}}</textarea>

            <button type="submit">Save</button>
            </form>
            </div>
    </div>
@endsection