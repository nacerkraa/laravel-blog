@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="create">
            <h2>Adding new Post</h2>
            <form action="{{route('post.store')}}" method="post">
            @csrf
            <label>Post title:</label>
            <input type="text" name="title" id="">
            <label>Post content:</label>
            <textarea name="content" id="" cols="30" rows="10"></textarea>
            <button type="submit">Create</button>
            </form>
            </div>
    </div>
@endsection