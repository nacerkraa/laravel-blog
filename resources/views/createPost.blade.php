@extends('layouts.app')

@section('content')
    <h2>This is create post page</h2>
    <form action="{{route('post.store')}}" method="post"> 
        <input type="text" name="title" id="">
        <textarea name="content" id="" cols="30" rows="10"></textarea>
        <button type="submit">Create</button>
    </form>
@endsection